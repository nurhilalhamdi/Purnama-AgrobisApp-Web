<?php


use GuzzleHttp\Exception\GuzzleException;

class CekSampel extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/pengecekan/ceksampel-model/CekSampel_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['kandang'] = $this->CekSampel_Model->getKandang();
        // $data['chickin'] = $this->CekHarian_Model->getChickin();

        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $d);
        $this->load->view('pengecekan/cek-sampel/index', $data);
        $this->load->view('templates/footer');
    }

    public function detil($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['ceksampel'] = $this->CekSampel_Model->getCekSampelById($id);
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('pengecekan/cek-sampel/detil', $data);
        $this->load->view('templates/footer');
    }


    public function getPeriode()
    {
        $id_kandang = $this->input->post('id_kandang');
        $data = $this->CekSampel_Model->getChickin($id_kandang);
        # code...
        echo json_encode($data);
    }


    public function getCekSampelWhereChickin()
    {
        $id_chickin = $this->input->post('id_chickin');
        $data = $this->CekSampel_Model->getDataSampelWhereIdChickin($id_chickin);
        # code...
        echo json_encode($data);
    }


    public function getWhereIdKandang()
    {
        $idkdg = $this->input->post('idkdg');
        $data = $this->CekSampel_Model->getDataSampelWhereId($idkdg);
        echo json_encode($data);
    }

    public function getWhereKandang()
    {
        $idkdgg = $this->input->post('idkdgg');
        $data = $this->CekSampel_Model->getDataKandangWhereId($idkdgg);
        echo json_encode($data);
    }
}
