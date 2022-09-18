<?php

class Raporlar_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index()
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
