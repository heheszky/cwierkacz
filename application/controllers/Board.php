<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Board extends BaseController {
	public function index()
	{
		if(!isset($this->data['user']))
		{
			$this->load->view('templates/header');
			$this->load->view('board/home_notlogged');
			$this->load->view('templates/footer');
			return;
		}
		$this->load->view('templates/header', $this->data);
		$this->load->view('board/home_logged');
		$this->load->view('templates/footer');
	}
}