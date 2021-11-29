<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata("login"))) {
            redirect("auth");
        }

        $this->load->model("model_users");
    }

    public function index()
    {
        $data["title"] = "Manajemen Data Users";

        $data["users"] = $this->model_users->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('users/view_data', $data);
        $this->load->view('view_footer');
    }
}