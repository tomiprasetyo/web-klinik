<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata("login"))) {
            redirect("auth");
        }

        $this->load->model("model_obat");
    }

    public function index()
    {
        $data["title"] = "Manajemen Data Obat";

        $data["obat"] = $this->model_obat->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('obat/view_data', $data);
        $this->load->view('view_footer');
    }

    public function tambah()
    {
        $data["title"] = "Tambah Data Obat";

        $this->load->view('view_header', $data);
        $this->load->view('obat/view_tambah_data');
        $this->load->view('view_footer');
    }

    public function insert()
    {
        $nama = $this->input->post("nama_obat");


        $data = array(
            "nama_obat" => $nama,

        );

        $this->model_obat->insert_data($data);

        redirect("obat");
    }

    public function edit($id)
    {
        $data["title"] = "Edit Data Obat";

        $where = array("id_obat" => $id);
        $data["obat"] = $this->model_obat->edit_data($where)->row_array();

        $this->load->view('view_header', $data);
        $this->load->view('obat/view_edit_data', $data);
        $this->load->view('view_footer');
    }

    public function update()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama_obat");


        $data = array(
            "nama_obat" => $nama,

        );

        $where = array("id_obat" => $id);
        $this->model_obat->update_data($data, $where);

        redirect("obat");
    }

    function hapus($id)
    {
        $where = array("id_obat" => $id);
        $this->model_obat->hapus_data($where);
        redirect("obat");
    }
}
