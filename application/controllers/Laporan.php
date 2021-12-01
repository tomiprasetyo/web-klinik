<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata("login"))) {
            redirect("auth");
        }

        $this->load->model("model_dokter");
        $this->load->model("model_pasien");
        $this->load->model("model_kunjungan");
    }

    public function index()
    {
        redirect('dashboard');
    }

    function data_dokter()
    {
        $data['title'] = "Laporan Data Dokter";
        $data['dokter'] = $this->model_dokter->tampil_data()->result_array();
        $this->load->view('laporan/view_laporan_dokter', $data);
    }

    function data_pasien()
    {
        # code...
    }

    function data_kunjungan()
    {
        # code...
    }
}
