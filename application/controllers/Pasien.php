<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
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
        $this->load->view('user/view_data', $data);
        $this->load->view('view_footer');
    }

    public function tambah()
    {
        $data["title"] = "Tambah Data Users";

        $this->load->view('view_header', $data);
        $this->load->view('user/view_tambah_data');
        $this->load->view('view_footer');
    }

    public function insert()
    {
        $username = $this->input->post("username");
        $nama_lengkap = $this->input->post("nama_lengkap");
        $password = md5($this->input->post("password"));

        $data = array(
            "username" => $username,
            "nama_lengkap" => $nama_lengkap,
            "password" => $password
        );

        $this->model_users->insert_data($data);

        redirect("users");
    }

    public function edit($id)
    {
        $data["title"] = "Edit Data Users";

        $where = array("id" => $id);
        $data["users"] = $this->model_users->edit_data($where)->row_array();

        $this->load->view('view_header', $data);
        $this->load->view('user/view_edit_data', $data);
        $this->load->view('view_footer');
    }

    public function update()
    {
        $id = $this->input->post("id");
        $username = $this->input->post("username");
        $nama_lengkap = $this->input->post("nama_lengkap");
        $password = md5($this->input->post("password"));

        $data = array(
            "username" => $username,
            "nama_lengkap" => $nama_lengkap,
            "password" => $password
        );

        $where = array("id" => $id);
        $this->model_users->update_data($data, $where);

        redirect("users");
    }

    function hapus($id)
    {
        $where = array("id" => $id);
        $this->model_users->hapus_data($where);
        redirect("users");
    }
}
