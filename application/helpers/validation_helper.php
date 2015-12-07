<?php

function get_register_validation_config()
{
	$validation_config = array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|is_unique[accounts.email]',
			'errors' => array(
				'required'		=> 'Email jest wymagany',
				'valid_email'	=> 'Wprowadź prawidłowy adres email',
				'is_unique'		=> 'Istnieje już konto o tym adresie email'
			),
		),
		array(
			'field' => 'password',
			'label' => 'Hasło',
			'rules' => 'trim|required|min_length[8]',
			'errors' => array(
				'required'		=> 'Hasło jest wymagane',
				'min_length'	=> 'Hasło nie może być krótsze niż {param} znaków'
			),
		),
		array(
			'field' => 'rpassword',
			'label' => 'Powtórz hasło',
			'rules' => 'trim|required|matches[password]',
			'errors' => array(
				'required'		=> 'Musisz powtórzyć hasło',
				'matches'		=> 'Podane hasła różnią się'
			),
		),
		array(
			'field' => 'fname',
			'label' => 'Imie',
			'rules' => 'trim|required',
			'errors' => array(
				'required'		=> 'Imie jest wymagane',
			),
		),
		array(
			'field' => 'lname',
			'label' => 'Nazwisko',
			'rules' => 'trim|required',
			'errors' => array(
				'required'		=> 'Nazwisko jest wymagane',
			),
		),
		array(
			'field' => 'bdate',
			'label' => 'Numer lokalu',
			'rules' => 'trim|required',
			'errors' => array(
				'required'		=> 'Data urodzenia jest wymagana',
			),
		)
	);
	return $validation_config;
}