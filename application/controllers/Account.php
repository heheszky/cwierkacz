<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Home extends BaseController {
	public function index()
	{
		$this->load->view('welcome_message');
	}
}