<?php
class Acc extends CI_Model {
	function add()
	{
		$data = array(
			"email"			=> $this->input->post('email'),
			"password"		=> md5($this->input->post('password')),
			"first_name"	=> $this->input->post('fname'),
			"last_name"		=> $this->input->post('lname'),
			"birth_date"	=> $this->input->post('bdate'),
			"create_date"	=> date("Y-m-d")
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

	function get_count()
	{
		return $this->db->count_all_results();
	}

	function search($term, $userid)
	{
		return $this->db->query("
			SELECT accounts.id, first_name, last_name, email, (SELECT COUNT(*) FROM follows WHERE followed=accounts.id AND follower=".$userid.") as following
			FROM accounts
			WHERE (CONCAT(first_name, \" \", last_name) LIKE \"%".$term."%\"
				OR CONCAT(first_name, \" \", last_name, \" \", email) LIKE \"%".$term."%\"
				OR CONCAT(last_name, \" \", first_name) LIKE \"%".$term."%\"
				OR email LIKE \"%".$term."%\")
				AND id <> ".$userid.";
		")->result();
	}
}