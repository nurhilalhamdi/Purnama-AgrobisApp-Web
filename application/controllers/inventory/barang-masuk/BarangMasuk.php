<?php


use GuzzleHttp\Exception\GuzzleException;

class BarangMasuk extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/inventory/barang_masuk_model/BarangMasuk_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['barangmasuk'] = $this->BarangMasuk_Model->getAllBarangMasuk();
        $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
        $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
        $data['stok'] = $this->BarangMasuk_Model->getAllStok();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($this->input->post('keyword')) {
            $data['petugas'] = $this->Petugas_Model->cariDataPetugas();
        }




        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('inventory/barang-masuk/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['barangmasuk'] = $this->BarangMasuk_Model->getAllBarangMasuk();
        $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
        $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
        $data['stok'] = $this->BarangMasuk_Model->getAllStok();
        $data['kode'] = $this->BarangMasuk_Model->kode();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $d);
        $this->load->view('inventory/barang-masuk/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['barangmasuk'] = $this->BarangMasuk_Model->getBarangMasukById($id);
        $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
        $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
        $data['stok'] = $this->BarangMasuk_Model->getAllStok();
        $data['kode'] = $this->BarangMasuk_Model->kode();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('inventory/barang-masuk/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['barangmasuk'] = $this->BarangMasuk_Model->getAllBarangMasuk();
        $data['kategori'] = $this->BarangMasuk_Model->getAllKategori();
        $data['satuan'] = $this->BarangMasuk_Model->getAllSatuan();
        $data['stok'] = $this->BarangMasuk_Model->getAllStok();
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
        $this->BarangMasuk_Model->tambahProdukMasuk();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
        // }
    }



    public function getWhereIdBar()
    {
        $idbar = $this->input->post('idbar');
        $data = $this->BarangMasuk_Model->getDataBarangwhereId($idbar);
        echo json_encode($data);
    }

    // public function getWhereIdBars()
    // {
    //     $idbar = $this->input->post('idbar');
    //     $data = $this->BarangMasuk_Model->getDataBarangwhereId($idbar);
    //     echo json_encode($data);
    // }

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
        $id = $this->input->post('id');
        $idbarang = $this->input->post('id_barang_edit', true);
        $keterangan = $this->input->post('keterangan_edit', true);
        $stokmasuk = $this->input->post('stok_sekarang_edit', true);
        $penerima = $this->input->post('nama_penerima_edit', true);
        $penerima = $this->input->post('nama_penerima_edit', true);
        $tanggal = $this->input->post('tanggal_masuk_edit', true);
        $nomor_masuk = $this->input->post('nomor_barang_edit', true);
        $harga = $this->input->post('harga_edit', true);



        $lihatstok = $this->db->query("SELECT * FROM tabel_stok where id_barang='$idbarang'");
        if ($lihatstok->num_rows() > 0) {
            $result = $lihatstok->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang =  $row->stok;
            }
        }

        $qtysekarang = $this->db->query("SELECT * FROM tabel_barang_masuk where id='$id'");
        if ($qtysekarang->num_rows() > 0) {
            $result = $qtysekarang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $qtynya =  $row->stok_masuk;
            }
        }

        if ($stokmasuk >= $qtynya) {
            # code...
            $selisih = $stokmasuk - $qtynya;
            $tambahinstok = $stoksekarang + $selisih;
            $kuranginstoknya = $this->db->query("UPDATE tabel_stok set stok ='$tambahinstok' where id_barang='$idbarang'");
            $updatenya = $this->db->query("UPDATE tabel_barang_masuk set id_barang = '$idbarang' , keterangan = '$keterangan', tanggal_masuk = '$tanggal', nomor_masuk = '$nomor_masuk', total_harga = '$harga',  stok_masuk ='$stokmasuk' , penerima = '$penerima' where id='$id'");

            if ($kuranginstoknya && $updatenya) {
                # code...
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
            }
        } else {
            $selisih = $qtynya - $stokmasuk;
            $kurangin = $stoksekarang - $selisih;
            $kuranginstoknya = $this->db->query("UPDATE tabel_stok set stok ='$kurangin' where id_barang='$idbarang'");
            $updatenya = $this->db->query("UPDATE tabel_barang_masuk set id_barang = '$idbarang' , keterangan = '$keterangan', tanggal_masuk = '$tanggal', nomor_masuk = '$nomor_masuk', total_harga = '$harga',  stok_masuk ='$stokmasuk' , penerima = '$penerima' where id='$id'");

            if ($kuranginstoknya && $updatenya) {
                # code...
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
            }
        }
    }

    public function hapus()
    {


        $id = $this->input->post('id');
        $idx = $this->input->post('idx', true);


        $lihatstok = $this->db->query("SELECT * FROM tabel_stok where id_barang='$idx'");
        if ($lihatstok->num_rows() > 0) {
            $result = $lihatstok->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang =  $row->stok;
            }
        }

        $qtysekarang = $this->db->query("SELECT * FROM tabel_barang_masuk where id='$id'");
        if ($qtysekarang->num_rows() > 0) {
            $result = $qtysekarang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $qtynya =  $row->stok_masuk;
            }
        }


        $adjust_stok = $stoksekarang - $qtynya;

        # code...
        $this->db->query("UPDATE tabel_stok set stok ='$adjust_stok' where id_barang='$idx'");
        $this->BarangMasuk_Model->hapusDataProdukMasuk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
    }
}
