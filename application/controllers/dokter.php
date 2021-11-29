<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata("login"))) {
            redirect("auth");
        }

        $this->load->model("model_dokter");
    }

    public function index()
    {
        $data["title"] = "Manajemen Data Dokter";

        $data["dokter"] = $this->model_dokter->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('dokter/view_data', $data);
        $this->load->view('view_footer');
    }

    public function tambah()
    {
        $data["title"] = "Tambah Data Dokter";

        $this->load->view('view_header', $data);
        $this->load->view('dokter/view_tambah_data');
        $this->load->view('view_footer');
    }

    public function insert()
    {
        $nama = $this->input->post("nama_dokter");


        $data = array(
            "nama_dokter" => $nama,

        );

        $this->model_dokter->insert_data($data);

        redirect("dokter");
    }

    public function edit($id)
    {
        $data["title"] = "Edit Data Dokter";

        $where = array("id_dokter" => $id);
        $data["dokter"] = $this->model_dokter->edit_data($where)->row_array();

        $this->load->view('view_header', $data);
        $this->load->view('dokter/view_edit_data', $data);
        $this->load->view('view_footer');
    }

    public function update()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama_dokter");


        $data = array(
            "nama_dokter" => $nama,

        );

        $where = array("id_dokter" => $id);
        $this->model_dokter->update_data($data, $where);

        redirect("dokter");
    }

    function hapus($id)
    {
        $where = array("id_dokter" => $id);
        $this->model_dokter->hapus_data($where);
        redirect("dokter");
    }
}
