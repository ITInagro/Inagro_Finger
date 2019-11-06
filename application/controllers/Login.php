<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_login');
	}

	function index()
	{
		$this->load->view('v_login');
	}
	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Mod_login->db_login("login", $where)->num_rows();

		if ($cek > 0) {
			$ceknya = array(
				'username' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($ceknya);
			redirect('absensi');
		} else {
			echo "Username dan password salah !";
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
