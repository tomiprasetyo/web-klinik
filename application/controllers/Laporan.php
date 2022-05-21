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
        $data['title'] = "Laporan Data Pasien";
        $data['pasien'] = $this->model_pasien->tampil_data()->result_array();
        $this->load->view('laporan/view_laporan_pasien', $data);
    }

    function data_kunjungan()
    {
        $data['title'] = "Laporan Data Kunjungan";
        $data['kunjungan'] = $this->model_kunjungan->tampil_data()->result_array();
        $this->load->view('laporan/view_laporan_kunjungan', $data);
    }

    //////////////////////////////////////////////////////////////////////////////////

    function cetak_data_dokter()
    {
        $data['title'] = "Laporan Data Dokter";
        $data['dokter'] = $this->model_dokter->tampil_data()->result_array();

        $this->load->view('cetak-laporan/view_cetak_laporan_dokter', $data);
    }

    function laporan_data_dokter_pdf()
    {
        $data['title'] = "Laporan Data Dokter";
        $data['dokter'] = $this->model_dokter->tampil_data()->result_array();

        $root = $_SERVER['DOCUMENT_ROOT'];
        include $root."/pustaka-booking/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();

         $this->load->view('cetak-laporan/view_cetak_laporan_dokter_pdf', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        
        $dompdf->set_paper($paper_size, $orientation); //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_dokter.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    function laporan_data_dokter_excel()
    {
        $data = array('title' => 'Laporan Excel Dokter', 'dokter' => $this->model_dokter->tampil_data()->result_array());

        $this->load->view('cetak-laporan/view_export_laporan_dokter_excel', $data);
    }

    //////////////////////////////////////////////////////////////////////////////////

    function cetak_data_pasien()
    {
        $data['title'] = "Laporan Data Pasien";
        $data['pasien'] = $this->model_pasien->tampil_data()->result_array();

         $this->load->view('cetak-laporan/view_cetak_laporan_pasien', $data);
    }

    function laporan_data_pasien_pdf()
    {
        $data['title'] = "Laporan Data Pasien";
        $data['pasien'] = $this->model_pasien->tampil_data()->result_array();

        $root = $_SERVER['DOCUMENT_ROOT'];
        include $root."/pustaka-booking/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();

         $this->load->view('cetak-laporan/view_cetak_laporan_pasien_pdf', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        
        $dompdf->set_paper($paper_size, $orientation); //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_pasien.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    function laporan_data_pasien_excel()
    {
        $data = array('title' => 'Laporan Excel Pasien', 'pasien' => $this->model_pasien->tampil_data()->result_array());

        $this->load->view('cetak-laporan/view_export_laporan_pasien_excel', $data);
    }

    //////////////////////////////////////////////////////////////////////////////////

    function cetak_data_kunjungan()
    {
        $data['title'] = "Laporan Data Kunjungan";
        $data['kunjungan'] = $this->model_kunjungan->tampil_data()->result_array();

        $this->load->view('cetak-laporan/view_cetak_laporan_kunjungan', $data);


    }

    function laporan_data_kunjungan_pdf()
    {
        $data['title'] = "Laporan Data Pasien";
        $data['kunjungan'] = $this->model_kunjungan->tampil_data()->result_array();

        $root = $_SERVER['DOCUMENT_ROOT'];
        include $root."/pustaka-booking/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();

         $this->load->view('cetak-laporan/view_cetak_laporan_kunjungan_pdf', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        
        $dompdf->set_paper($paper_size, $orientation); //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_kunjungan.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    function laporan_data_kunjungan_excel()
    {
        $data = array('title' => 'Laporan Excel Kunjungan', 'kunjungan' => $this->model_kunjungan->tampil_data()->result_array());

        $this->load->view('cetak-laporan/view_export_laporan_kunjungan_excel', $data);
    }
}
