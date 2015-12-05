<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Board extends BaseController {
	public function index()
	{
		if(!isset($this->data['user']))
		{
			$this->load->view('templates/header');
			$this->load->view('join_us');
			$this->load->view('templates/footer');
			return;
		}
		$this->load->view('welcome_message');
	}
}