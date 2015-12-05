<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "BaseController.php";
class Account extends BaseController {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->helper(array('validation', 'form'));
		$this->load->library('form_validation');
		$validation_config = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required',
				'errors' => array(
					'required'		=> 'Musisz podać adres email',
				),
			),
			array(
				'field' => 'password',
				'label' => 'Hasło',
				'rules' => 'trim|required|callback_check_database',
				'errors' => array(
					'required'		=> 'Musisz podać hasło',
					'check_database' => 'Nieprawidłowe dane logowania'
				),
			)
		);
		$this->form_validation->set_rules($validation_config);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $this->data);
			$this->load->view('account/login');
			$this->load->view('templates/footer');
		} else {
			redirect('/');
		}
	}
	public function register()
	{
		$this->load->helper(array('validation', 'form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules(get_register_validation_config());
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $this->data);
			$this->load->view('account/register');
			$this->load->view('templates/footer');
		} else {
			$this->load->model('acc');
			$result = $this->acc->add();
			$sess_array = array(
				'id' => $result['id'],
				'admin' => 0,
				'imie' => $result['first_name'],
				'nazwisko' => $result['last_name'],
				'email' => $result['email']
			);
			$this->session->set_userdata('logged_in', $sess_array);
			redirect('/');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect("/");
	}
	function check_database($password)
	{
		$mail = $this->input->post('email');
		$result = $this->acc->login($mail, md5($password));
		if($result)
		{
			$sess_array = array(
				'id' => $result->id,
				'imie' => $result->first_name,
				'nazwisko' => $result->last_name,
				'email' => $result->email,
				'admin' => $result->admin
			);
			$this->session->set_userdata('logged_in', $sess_array);
			
			return TRUE;
		} else {
			$this->form_validation->set_message('check_database', 'Nieprawidłowe dane logowania');
			return false;
		}
	}
}