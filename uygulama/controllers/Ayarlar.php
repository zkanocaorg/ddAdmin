<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ayarlar extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		// check if user is logged in
		if (!$this->session->userdata('oturum_var')) {
			redirect('login');
		}
	}


	public function index()
	{
		$data['sayfa_baslik'] = __CLASS__;


		$this->load->model('ayarlar_model');

		$data["ayarlar"]["site1"] = $this->ayarlar_model->ayarlari_getir("site1");
		$data["ayarlar"]["genel"] = $this->ayarlar_model->ayarlari_getir("genel");
		$data["ayarlar"]["socials"] = $this->ayarlar_model->ayarlari_getir("socials");
		$data["ayarlar"]["text"] = $this->ayarlar_model->ayarlari_getir("text");
		$data["ayarlar"]["din"] = $this->ayarlar_model->ayarlari_getir("din");


		$data['topbar'] = $this->load->view('topbar', NULL, TRUE);
		$data['content'] = $this->load->view('ayarlar', $data["ayarlar"], TRUE);
		$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);

		$data['data'] = $data;


		$this->load->view('main', $data);
	}

	public function ayar_guncelle()
	{

		$id = $this->input->post('id');
		$deger = $this->input->post('deger');

		$this->load->model("ayarlar_model");

		$query = $this->ayarlar_model->ayar_guncelle($id, $deger);

		if ($query) {

			$this->session->set_flashdata("guncelleme_durumu",
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					Güncelleme başarılı! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span></button>
				</div>', 30);
		} else {
			$this->session->set_flashdata("guncelleme_durumu",
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Güncelleme başarısız! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>', 30);
		}
		redirect("ayarlar");
	}
}
