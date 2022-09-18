<?php

class Uyeler_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index()
	{
		//$query = $this->db->query->select("*")->from("ayarlar")->where("tip", "site"); //in (?)", array('genel', 'site1', 'socials', 'ozel', 'text', 'entegre', 'din'));

	}

	public function uyeleri_getir()
	{
		$this->db->select('u.id')->from('uye AS u');
		$query = $this->db->get();

//		$query = $this->db->select("*")->get("uye");
		return $query->result();

	}

	public function uye_guncelle($id, $deger)
	{
		$this->db->set('deger', $deger)->where('id', $id)->update('uye');

		return true;
	}

	public function count_all()
	{
		$query = $this->db->get('uye');
		return $query->num_rows();
	}

	function fetch_details($limit, $start)
	{
		$output = '';

		$this->db->select('u.*, u.id as uyeID, tbl_il.id AS ilID, tbl_il.ad AS ilAdi, tbl_ilce.ilce_id AS ilceID, tbl_ilce.ilce_ad AS ilceAdi')
			->from('uye AS u')
			->join('tbl_il', 'u.sehir = tbl_il.id')
			->join('tbl_ilce', 'u.ilce = tbl_ilce.ilce_id')
			->order_by('id', 'DESC')
			->limit($limit, $start);
		$query = $this->db->get();

		$output .= '<table class="table table-bordered">
   <tr>
    <th>Adı Soyadı <br> <small>Kullanıcı adı</small></th>
    <th>e-posta</th>
    <th>İlçe / Şehir</th>
    <th>Üyelik tarihi</th>
    <th>Son Giriş Tarihi</th>
    <th>İşlemler</th>
    </tr>';


		foreach ($query->result() as $row) {
			$output .= '<tr id="tr-uye-' . $row->uyeID . '"><td>' . $row->ad . '<br><small>'.$row->kad.'</small></td><td>' . $row->email . '</td><td>' . $row->ilceAdi . ' / ' . $row->ilAdi . '</td>
<td>' . $row->tarih_2 . '</td>
<td>' . $row->son_giris . '</td>
 
<td><button id="btn-detail-' . $row->uyeID . '" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detaylar"><i class="fa fa-folder-open"></i></button>


<div class="btn-group" role="group">
   

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Üyelik
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    
      <a class="dropdown-item" href="#" id="uyelik-durumu-etkin-' . $row->uyeID . '"><i class="fa fa-play"></i> Etkinleştir</a>
      <a class="dropdown-item" href="#" id="uyelik-durumu-devre-disi-' . $row->uyeID . '"><i class="fa fa-pause"></i> Devre Dışı Bırak</a>
    </div>
  </div>
</div>



</td>
</tr>';
		}

		$output .= '</table>';

		return $output;
	}

}
