<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Board extends BaseController {
	public function index($page = 1, $type = null)
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
				$this->body_data['posts'] = $this->posts->get_post($page);
				break;
			case "user":
				$this->body_data['posts'] = $this->posts->get_user_posts($page);
				break;
			default:
				$this->body_data['posts'] = $this->posts->get_page_posts($page, $this->data['user']['id']);
				break;
		}
		$this->body_data['page'] = $page;
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