<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/dashboard
	 *    - or -
	 *        http://example.com/index.php/dashboard/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/dashboard/<method_name>
	 *
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

		if (!$this->session->userdata('oturum_var')) {
			redirect('login');
		}
		
		$data['sayfa_baslik'] = 'Anasayfa';

		$data['topbar'] = $this->load->view('topbar', NULL, TRUE);

		$data['content'] = $this->load->view('dashboard', NULL, TRUE);

		$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);

		$data['data'] = $data;


		$this->load->view('main', $data);
	}
}
