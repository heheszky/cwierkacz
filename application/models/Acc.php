<?php
class Acc extends CI_Model {
	function add()
	{
		$data = array(
			"email"			=> $this->input->post('email'),
			"password"		=> md5($this->input->post('password')),
			"first_name"	=> $this->input->post('fname'),
			"last_name"		=> $this->input->post('lname'),
			"birth_date"	=> $this->input->post('bdate')
			);
		$this->db->insert('accounts', $data);
		return $this->db->query("SELECT id, first_name, last_name, email FROM accounts WHERE id=".$this->db->insert_id())->row();
	}
	
	function login($email, $password)
	{
		$this->db->select('id, first_name, last_name, email, admin');
		$this->db->where(array(
			'email' => $email,
			'password' => $password
		));
		return $this->db->get('accounts')->row();
	}
}