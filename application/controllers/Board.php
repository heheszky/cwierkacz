<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Board extends BaseController {
	public function index($page = 1)
	{
		if(!isset($this->data['user']))
		{
			$this->load->view('templates/header');
			$this->load->view('board/home_notlogged');
			$this->load->view('templates/footer');
			return;
		}
		$this->body_data = array();
		$this->body_data['posts'] = $this->posts->get_page_posts($page);
		$this->load->view('templates/header', $this->data);
		$this->load->view('board/home_logged', $this->body_data);
		$this->load->view('templates/footer');
	}

	public function post($id)
	{
		$this->body_data = array();
		$this->body_data['posts'] = $this->posts->get_post($id);
		$this->load->view('templates/header', $this->data);
		$this->load->view('board/home_logged', $this->body_data);
		$this->load->view('templates/footer');
	}
}