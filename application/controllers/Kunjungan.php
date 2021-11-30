<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata("login"))) {
            redirect("auth");
        }

        $this->load->model("model_kunjungan");
        $this->load->model("model_pasien");
        $this->load->model("model_dokter");
        $this->load->model("model_obat");
    }

    public function index()
    {
        $data["title"] = "Data Kunjungan/Berobat";

        $data["kunjungan"] = $this->model_kunjungan->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('kunjungan/view_data', $data);
        $this->load->view('view_footer');
    }

    public function tambah()
    {
        $data["title"] = "Kunjungan Baru";

        $data["pasien"] = $this->model_pasien->tampil_data()->result_array();
        $data["dokter"] = $this->model_dokter->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('kunjungan/view_tambah_data', $data);
        $this->load->view('view_footer');
    }

    public function insert()
    {
        $tgl = $this->input->post("tgl_berobat");
        $pasien = $this->input->post("pasien");
        $dokter = $this->input->post("dokter");

        $data = array(
            "tgl_berobat" => $tgl,
            "id_pasien" => $pasien,
            "id_dokter" => $dokter
        );

        $this->model_kunjungan->insert_data($data);

        redirect("kunjungan");
    }

    public function edit($id)
    {
        $data["title"] = "Edit Data kunjungan/Berobat Pasien";

        $where = array("id_berobat" => $id);
        $data["kunjungan"] = $this->model_kunjungan->edit_data($where)->row_array();

        $data["pasien"] = $this->model_pasien->tampil_data()->result_array();
        $data["dokter"] = $this->model_dokter->tampil_data()->result_array();

        $this->load->view('view_header', $data);
        $this->load->view('kunjungan/view_edit_data', $data);
        $this->load->view('view_footer');
    }

    public function update()
    {
        $id = $this->input->post("id");
        $tgl = $this->input->post("tgl_berobat");
        $pasien = $this->input->post("pasien");
        $dokter = $this->input->post("dokter");

        $data = array(
            "tgl_berobat" => $tgl,
            "id_pasien" => $pasien,
            "id_dokter" => $dokter
        );

        $where = array("id_berobat" => $id);
        $this->model_kunjungan->update_data($data, $where);

        redirect("kunjungan");
    }

    function hapus($id)
    {
        $where = array("id_berobat" => $id);
        $this->model_kunjungan->hapus_data($where);
        redirect("kunjungan");
    }

    //fungsi rekam medis

    function rekam($id)
    {
        $data['title'] = "Rekam Medis";

        //menampilkan detail rekam medis
        $data['d'] = $this->model_kunjungan->tampil_rekam($id)->row_array();

        //menampilkan riwayat kunjungan
        $q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];

        $data['riwayat'] = $this->model_kunjungan->tampil_riwayat($id_pasien)->result_array();

        //menampilkan data obat di combo
        $data['obat'] = $this->model_obat->tampil_data()->result_array();

        //menampilkan resep obat
        $data['resep'] = $this->model_kunjungan->tampil_resep($id)->result_array();


        $this->load->view('view_header', $data);
        $this->load->view('kunjungan/view_rekam_medis', $data);
        $this->load->view('view_footer');
    }
}
