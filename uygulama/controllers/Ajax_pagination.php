<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_pagination extends CI_Controller
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


//		$data['topbar'] = $this->load->view('topbar', NULL, TRUE);
//		$data['content'] = $this->load->view('ajax_pagination', NULL, TRUE);
//		$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);
//
//		$data['data'] = $data;
//
//
//		$this->load->view('main', $data);
	}


}
