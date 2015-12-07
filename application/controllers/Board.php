<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Board extends BaseController {
	public function index($i = 1, $type = null)
	{
		if(!isset($this->data['user']))
		{
			$this->load->view('templates/header');
			$this->load->view('board/home_notlogged');
			$this->load->view('templates/footer');
			return;
		}
		$this->body_data = array();
		switch($type)
		{
			case "post":
				$this->body_data['posts'] = $this->posts->get_post($i);
				break;
			case "user":
				$this->body_data['posts'] = $this->posts->get_user_posts($i);
				break;
			case "tag":
				$this->body_data['posts'] = $this->posts->get_by_tag($i);
				$this->body_data['TAG'] = $i;
				break;
			default:
				$this->body_data['posts'] = $this->posts->get_page_posts($i, $this->data['user']['id']);
				$this->body_data['page'] = $i;
				break;
		}
		$this->load->view('templates/header', $this->data);
		$this->load->view('board/home_logged', $this->body_data);
		$this->load->view('templates/footer');
	}

	public function add_post()
	{
		if(!isset($this->data['user'])) return 0;
		$this->posts->add($this->data['user']['id']);
		redirect('/');
	}
}