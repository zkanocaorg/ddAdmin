<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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

		//$this->load->library('pagination_bootstrap');
	}


	public function index()
	{
		$data['sayfa_baslik']='Üyeler';

		$data['topbar'] = $this->load->view('topbar', NULL, TRUE);
		$data['content'] = $this->load->view('uyeler', NULL, TRUE);
		$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);



		$data['data'] = $data;
		$this->load->view('main',$data);
	}

	public function pagination()
	{
		$this->load->model('uyeler_model');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->uyeler_model->count_all();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li  class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active page-item"><a class="page-link"  href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 5;

		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];

		$output = array(
			'pagination_link' => $this->pagination->create_links(),
			'uyeler_table' => $this->uyeler_model->fetch_details($config['per_page'], $start)
		);
		echo json_encode($output);
	}
}
