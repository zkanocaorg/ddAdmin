<?php

class Login_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function can_login($username, $password)
	{
		$this->db->where('ayar', $username);
		$this->db->where('deger', $password);
		$query = $this->db->get('ayarlar');


		if ($query->num_rows() > 0) {

			return true;
		} else {
			return false;
		}
	}
}
