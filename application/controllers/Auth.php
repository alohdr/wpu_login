<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/v_header');
		$this->load->view('auth/v_login');
		$this->load->view('auth/v_footer');
	}
	
	public function registration()
	{
		$this->load->view('auth/v_header');
		$this->load->view('auth/v_registration');
		$this->load->view('auth/v_footer');
	}
}
