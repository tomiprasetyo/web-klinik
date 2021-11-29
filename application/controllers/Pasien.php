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

        $this->load->model("model_pasien");
    }

    public function index()
    {
        $data["title"] = "Manajemen Data pasien";

        $data["pasien"] = $this->model_pasien->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('pasien/view_data', $data);
        $this->load->view('view_footer');
    }

    public function tambah()
    {
        $data["title"] = "Tambah Data pasien";

        $this->load->view('view_header', $data);
        $this->load->view('pasien/view_tambah_data');
        $this->load->view('view_footer');
    }

    public function insert()
    {
        $nama = $this->input->post("nama_pasien");
        $jk = $this->input->post("jenis_kelamin");
        $umur = $this->input->post("umur");

        $data = array(
            "nama_pasien" => $nama,
            "jenis_kelamin" => $jk,
            "umur" => $umur
        );

        $this->model_pasien->insert_data($data);

        redirect("pasien");
    }

    public function edit($id)
    {
        $data["title"] = "Edit Data pasien";

        $where = array("id_pasien" => $id);
        $data["pasien"] = $this->model_pasien->edit_data($where)->row_array();

        $this->load->view('view_header', $data);
        $this->load->view('pasien/view_edit_data', $data);
        $this->load->view('view_footer');
    }

    public function update()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama_pasien");
        $jk = $this->input->post("jenis_kelamin");
        $umur = $this->input->post("umur");

        $data = array(
            "nama_pasien" => $nama,
            "jenis_kelamin" => $jk,
            "umur" => $umur
        );

        $where = array("id_pasien" => $id);
        $this->model_pasien->update_data($data, $where);

        redirect("pasien");
    }

    function hapus($id)
    {
        $where = array("id_pasien" => $id);
        $this->model_pasien->hapus_data($where);
        redirect("pasien");
    }
}
