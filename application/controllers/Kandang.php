<?php


use GuzzleHttp\Exception\GuzzleException;

class Kandang extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/inventory/barang_masuk_model/BarangMasuk_Model');
        $this->load->model('webmodel/kandang/KandangModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['barangmasuk'] = $this->BarangMasuk_Model->getAllBarangMasuk();
        $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
        $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
        $data['stok'] = $this->BarangMasuk_Model->getAllStok();
        $data['kandangmodel'] = $this->KandangModel->getAllKandang();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($this->input->post('keyword')) {
            $data['petugas'] = $this->Petugas_Model->cariDataPetugas();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('kandang/index', $data);
        $this->load->view('templates/footer');
    }



    public function detil($id)
    {
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        // $data['cekharian'] = $this->CekHarian_Model->getCekharianById($id);
        $data['kandangdetil'] = $this->KandangModel->kandangbyid($id);
        $data['matisakit'] = $this->KandangModel->getAyamMatiSakit($id);
        $data['panengagal'] = $this->KandangModel->getPanenGagalPanen($id);
        $data['stokpakan'] = $this->KandangModel->getStokPakanKandang($id);
        $data['stokobat'] = $this->KandangModel->getStokObatKandang($id);
        $data['stokvitamin'] = $this->KandangModel->getStokVitaminKandang($id);
        $data['stokvaksin'] = $this->KandangModel->getStokVaksinKandang($id);
        $data['panen'] = $this->KandangModel->getPanen($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('kandang/detail', $data);
        $this->load->view('templates/footer');
    }
}
