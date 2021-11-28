<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model("model_login");
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function login_aksi()
    {
        $user = $this->input->post("username", true);
        $pass = md5($this->input->post("password", true));

        // validasi rule
        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                "username" => $user,
                "password" => $pass,
            );

            $cek_login = $this->model_login->cek_login($where)->num_rows();

            if ($cek_login > 0) {
                $session_data = array(
                    "login" => "OK",
                    "username" => $user
                );

                $this->session->set_userdata($session_data);

                redirect(base_url());
            } else {
                redirect("auth");
            }
        } else {
            $this->load->view("view_login");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("auth");
    }
}