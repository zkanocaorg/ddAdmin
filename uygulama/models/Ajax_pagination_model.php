<?php

class Ajax_pagination_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index()
	{

	}

	public function count_all()
	{
		$query = $this->db->get('uye');
		return $query->num_rows();
	}

	function fetch_details($limit, $start)
	{
		$output = '';
		$this->db->select('*')->from('uye')->order_by('id', 'DESC')->limit($limit, $start);
		$query = $this->db->get();
		$output .= '<table class="table table-bordered">
   <tr>
    <th>Kullanıcı adı</th>
    <th>e-posta</th>
    <th>İlçe / Şehir</th>
   </tr>
  ';
		foreach($query->result() as $row)
		{
			$output .= '
   <tr id="tr-uye-'. $row->id.'">
    <td>'.$row->ad.'</td>
    <td>'.$row->email.'</td>
    <td>'.$row->ilce. ' / ' . $row->sehir . '</td>
   </tr>
   ';
		}
		$output .= '</table>';
		return $output;
	}
}
