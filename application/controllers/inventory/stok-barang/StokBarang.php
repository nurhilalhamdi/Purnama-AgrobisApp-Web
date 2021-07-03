<?php


use GuzzleHttp\Exception\GuzzleException;

class StokBarang extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/inventory/stok_barang_model/StokBarang_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['stokbarang'] = $this->StokBarang_Model->getAllStokBarang();
        $data['kategori'] = $this->StokBarang_Model->getAllKategori();
        $data['satuan'] = $this->StokBarang_Model->getAllSatuan();
        $data['kode'] = $this->StokBarang_Model->kode();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($this->input->post('keyword')) {
            $data['petugas'] = $this->Petugas_Model->cariDataPetugas();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('inventory/stok-barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['stokbarang'] = $this->StokBarang_Model->getAllStokBarang();
        $data['kategori'] = $this->StokBarang_Model->getAllKategori();
        $data['satuan'] = $this->StokBarang_Model->getAllSatuan();
        # code...
        // $this->form_validation->set_rules('nama_barang_masuk', 'Nama Produk', 'required');
        // $this->form_validation->set_rules('id_kategori', 'Kategori',);
        // $this->form_validation->set_rules('id_satuan', 'Satuan');
        // $this->form_validation->set_rules('stok_barang_masuk', 'Stok Awal', 'required');
        // $this->form_validation->set_rules('harga_beli_barang_masuk', 'Harga Beli', 'required');
        // $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required');

        // $this->form_validation->set_message('required', '%s masih kosong, harap isi bidang ini');
        // $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        // if ($this->form_validation->run() == false) {
        //     $this->load->view('templates/header');
        //     $this->load->view('templates/sidebar');
        //     $this->load->view('inventory/barang-masuk/index', $data);
        //     $this->load->view('templates/footer');
        // } else {
        $this->StokBarang_Model->tambahStokBarang();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('inventory/stok-barang/StokBarang', 'refresh');
        // }
    }

    // public function ubah($id)
    // {

    //     $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
    //     $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
    //     $data['barangmasuk'] = $this->BarangMasuk_Model->getBarangMasukById($id);
    //     # code...
    //     $this->form_validation->set_rules('nama_barang_masuk', 'Nama Produk', 'required');
    //     $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
    //     $this->form_validation->set_rules('id_satuan', 'Satuan', 'required');
    //     $this->form_validation->set_rules('stok_barang_masuk', 'Stok Awal', 'required');
    //     $this->form_validation->set_rules('harga_beli_barang_masuk', 'Harga Beli', 'required');
    //     $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header');
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('inventory/barang-masuk/index', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->BarangMasuk_Model->ubahDataProdukMasuk();
    //         $this->session->set_flashdata('flash', 'Ditambahkan');
    //         redirect('inventory/barang-masuk/BarangMasuk');
    //     }
    // }

    function ubah()
    {
        $id = $this->input->post('id_barang_edit');


        $data = array(
            'nama' => $this->input->post('nama_edit', true),
            'deskripsi' => $this->input->post('deskripsi_edit', true),
            'id_kategori' => $this->input->post('id_kategori_edit', true),
            'id_satuan' => $this->input->post('id_satuan_edit', true),
            'harga' => $this->input->post('harga_edit', true),
            'modal' => $this->input->post('modal_edit', true),
            'stok' => $this->input->post('stok_edit', true),
        );
        $this->StokBarang_Model->ubahDataStok($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('inventory/stok-barang/StokBarang', 'refresh');
    }

    public function hapus($id)
    {
        # code...
        $this->StokBarang_Model->hapusDataStok($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('inventory/stok-barang/StokBarang', 'refresh');
    }
}
