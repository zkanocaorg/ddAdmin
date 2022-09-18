<?php

class Ayarlar_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index()
	{
		//$query = $this->db->query->select("*")->from("ayarlar")->where("tip", "site"); //in (?)", array('genel', 'site1', 'socials', 'ozel', 'text', 'entegre', 'din'));

	}

	public function ayarlari_getir($tip)
	{
		$query = $this->db->select("id, ayar, deger")->where("tip", $tip)->get("ayarlar");
		return $query->result();

	}

	public function ayar_guncelle($id, $deger)
	{
		$this->db->set('deger', $deger)->where('id', $id)->update('ayarlar');

		return true;

	}

}
