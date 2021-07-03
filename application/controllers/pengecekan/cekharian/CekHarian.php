<?php


use GuzzleHttp\Exception\GuzzleException;

class CekHarian extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/pengecekan/cekharian-model/CekHarian_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['kandang'] = $this->CekHarian_Model->getKandang();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['chickin'] = $this->CekHarian_Model->getChickin();


        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $d);
        $this->load->view('pengecekan/cek-harian/index', $data);
        $this->load->view('templates/footer');
    }

    public function detil($id)
    {
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['cekharian'] = $this->CekHarian_Model->getCekharianById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('pengecekan/cek-harian/detil', $data);
        $this->load->view('templates/footer');
    }


    public function getPeriode()
    {
        $id_kandang = $this->input->post('id_kandang');
        $data = $this->CekHarian_Model->getChickin($id_kandang);
        # code...
        echo json_encode($data);
    }


    public function getCekHarianWhereChickin()
    {
        $id_chickin = $this->input->post('id_chickin');
        $data = $this->CekHarian_Model->getDataHarianWhereIdChickin($id_chickin);
        # code...
        echo json_encode($data);
    }


    public function getWhereIdKandang()
    {
        $idkdg = $this->input->post('idkdg');
        $data = $this->CekHarian_Model->getDataHarianWhereId($idkdg);
        echo json_encode($data);
    }

    public function getWhereKandang()
    {
        $idkdgg = $this->input->post('idkdgg');
        $data = $this->CekHarian_Model->getDataKandangWhereId($idkdgg);
        echo json_encode($data);
    }
}
