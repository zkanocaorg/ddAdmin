<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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

	//http://ddadmin.test/login
	public function index()
	{


		if ($this->session->userdata('oturum_var')) {
			redirect(base_url());
		}

		$data['sayfa_baslik'] = 'Oturum Aç';

		$data['topbar'] = $this->load->view('topbar', NULL, TRUE);

		$data['content'] = $this->load->view('login', NULL, TRUE);

		$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);

		$data['data'] = $data;


		$this->load->view('main', $data);
	}

	//http://ddadmin.test/login/doLogin
	public function doLogin()
	{
		if ($this->session->userdata('oturum_var')) {
			redirect(base_url());
		}
		$this->load->database();


		$this->form_validation->set_rules('username', 'Kullanıcı Adı', 'required');
		$this->form_validation->set_rules('password', 'Parola', 'required');


		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			//modelden böyle bir kullanıcı olup olmadığını öğreniyoruz.

			$this->load->model('login_model');

			if ($this->login_model->can_login($username, $password)) {
				$session_data = array(
					'username' => $username,
					'password' => $password,
					'oturum_acma_zamani' => date('Y-m-d H:i:s'),
					'oturum_var' => TRUE
				);
				$this->session->set_userdata($session_data);
				redirect(base_url());
			} else {
				$session_data = array(
					'username' => $username,
					'password' => $password,
					'oturum_acma_zamani' => date('Y-m-d H:i:s'),
					'oturum_var' => FALSE
				);
				$this->session->set_userdata($session_data);

				$this->session->set_flashdata('login_error', 'Lütfen kullanıcı adınızı ve parolanızı kontrol ediniz.', 300);
				redirect('login');

			}


			//redirect('/'); // redirect to home
//			echo 'Giriş Başarılı!';
//			exit;
			$data['sayfa_baslik'] = 'Oturum Aç';
			$data['topbar'] = $this->load->view('topbar', NULL, TRUE);
			$data['sidebar'] = $this->load->view('sidebar', NULL, TRUE);
			$data['login'] = $this->load->view('login', NULL, TRUE);

			$data['data'] = $data;


			$this->load->view('main', $data);

		} else {

			$this->index();


		}


	}

	public function doLogout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
