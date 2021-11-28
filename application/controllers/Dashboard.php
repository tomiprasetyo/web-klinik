<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata("login"))) {
			redirect("auth");
		}
	}

	public function index()
	{
		$this->load->view('view_header');
		$this->load->view('view_dashboard');
		$this->load->view('view_footer');
	}
}