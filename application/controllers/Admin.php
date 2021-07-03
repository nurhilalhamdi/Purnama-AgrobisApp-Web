<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('webmodel/Petugas_Model');
        $this->load->model('webmodel/request-stok/Stok_Model');
        $this->load->model('webmodel/inventory/barang_keluar_model/BarangKeluar_Model');
        $this->load->model('webmodel/dashboard/Dashboard_Model');
        $this->load->model('webmodel/kandang/KandangModel');
        $this->load->library('form_validation');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $data['judul'] = 'Daftar Petugas';
        // $data['petugas'] = 

        $petugas =  $this->Petugas_Model->getAllPetugas();
        $kandang = $this->KandangModel->getAllKandang();
        $inventory = $this->Stok_Model->getInventory();
        $request = $this->Stok_Model->getNotifikasi();
        $status = $this->Stok_Model->getStatus();

        $total_populasi = $this->Dashboard_Model->getTotal_Populasi_Masuk();
        $total_hidup = $this->Dashboard_Model->getTotal_Populasi_Hidup();
        $total_mati = $this->Dashboard_Model->getTotal_Populasi_Mati();
        $total_sakit = $this->Dashboard_Model->getTotal_Populasi_Sakit();
        $total_panen = $this->Dashboard_Model->getTotal_Populasi_Panen();


        $grafik_populasi_masuk = $this->Dashboard_Model->getGrafik_Masuk();
        $grafik_populasi_hidup = $this->Dashboard_Model->getGrafik_Hidup();
        $grafik_populasi_mati = $this->Dashboard_Model->getGrafik_Mati();
        $grafik_populasi_sakit = $this->Dashboard_Model->getGrafik_Sakit();
        $grafik_populasi_panen = $this->Dashboard_Model->getGrafik_Panen();


        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'petugas' => $petugas,
            'kandang' => $kandang,
            'inventory' => $inventory,
            'request' => $request,
            'status' => $status,
            'total_populasi' => $total_populasi,
            'total_hidup' => $total_hidup,
            'total_mati' => $total_mati,
            'total_sakit' => $total_sakit,
            'total_panen' => $total_panen,
            'grafik_populasi_masuk' => $grafik_populasi_masuk,
            'grafik_populasi_hidup' => $grafik_populasi_hidup,
            'grafik_populasi_mati' => $grafik_populasi_mati,
            'grafik_populasi_sakit' => $grafik_populasi_sakit,
            'grafik_populasi_panen' => $grafik_populasi_panen,
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }


    // public function request()
    // {
    //     # code...
    //     $request = $this->Stok_Model->getNotifikasi();
    //     $data = [
    //         'request' => $request,
    //     ];
    //     $this->load->view('templates/list_notif_v', $data);
    // }



    // public function insertPakan(Type $var = null)
    // {
    //     # code...
    //     $this->Stok_Model->insertPakan();
    //     $this->session->set_flashdata('flash', 'Ditambahkan');
    //     redirect('inventory/stok-barang/StokBarang', 'refresh');
    // }

    //insert ke tabel berdasarkan kategori notifikasi
    public function insert()
    {
        # code...
        $kategori = $this->input->post('kategori_request');
        $id = $this->input->post('id_request');
        $idstatus = $this->input->post('id_status');
        $idbarang = $this->input->post('id_barang_request');
        $stok_pakan_request = $this->input->post('qty_request', true);
        $catatan_status = $this->input->post('keterangan_status', true);
        $idkandangreq = $this->input->post('id_kandang_request', true);




        $cekstocksekarang = $this->db->query("SELECT * FROM tabel_stok where id_barang = '$idbarang'");

        if ($cekstocksekarang->num_rows() > 0) {
            $result = $cekstocksekarang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang =  $row->stok;
                $kurangstok = $stoksekarang - $stok_pakan_request;
            }
        }



        // Tabel Pakan
        $cekstocktabelpakan = $this->db->query("SELECT * FROM tabel_pakan where id_barang = '$idbarang'");
        $cekjikabarangPakanSudahAda = $this->db->query("SELECT * FROM tabel_pakan where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelpakan->num_rows() > 0) {
            $result = $cekstocktabelpakan->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangPakan =  $row->stok_pakan;
                $tambah_stok = $stoksekarangPakan + $stok_pakan_request;
            }
        }

        //Tabel Obat
        $cekstocktabelobat = $this->db->query("SELECT * FROM tabel_obat where id_barang = '$idbarang'");
        // $cekjikabarangObatSudahAda = $this->db->query("SELECT id_barang,stok_obat FROM tabel_obat where id_kandang = '$idkandangreq'");
        $cekjikabarangObatSudahAda = $this->db->query("SELECT * FROM tabel_obat where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelobat->num_rows() > 0) {
            $result = $cekstocktabelobat->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangobat =  $row->stok_obat;
                $tambah_stokobat = $stoksekarangobat + $stok_pakan_request;
            }
        }

        //Tabel Vitamin
        $cekstocktabelvitamin = $this->db->query("SELECT * FROM tabel_vitamin where id_barang = '$idbarang'");
        $cekjikabarangVitaminSudahAda = $this->db->query("SELECT * FROM tabel_vitamin where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelvitamin->num_rows() > 0) {
            $result = $cekstocktabelvitamin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangvitamin =  $row->stok_vitamin;
                $tambah_stokvitamin = $stoksekarangvitamin + $stok_pakan_request;
            }
        }



        //Tabel Vaksin
        $cekstocktabelvaksin = $this->db->query("SELECT * FROM tabel_vaksin where id_barang = '$idbarang'");
        $cekjikabarangVaksinSudahAda = $this->db->query("SELECT * FROM tabel_vaksin where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelvaksin->num_rows() > 0) {
            $result = $cekstocktabelvaksin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangvaksin =  $row->stok_vaksin;
                $tambah_stokvaksin = $stoksekarangvaksin + $stok_pakan_request;
            }
        }

        //Tabel Peralatan Kandang
        $cekstocktabelalatkandang = $this->db->query("SELECT * FROM tabel_peralatan where id_barang = '$idbarang'");
        $cekjikabarangalatSudahAda = $this->db->query("SELECT * FROM tabel_peralatan where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelalatkandang->num_rows() > 0) {
            $result = $cekstocktabelalatkandang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangalat =  $row->stok_peralatan;
                $tambah_stokalat = $stoksekarangalat + $stok_pakan_request;
            }
        }

        //Tabel Item Lain
        $cekstocktabelitemlain = $this->db->query("SELECT * FROM tabel_itemlain where id_barang = '$idbarang'");
        $cekjikabarangitemlainSudahAda = $this->db->query("SELECT * FROM tabel_itemlain where id_kandang = '$idkandangreq' AND id_barang = '$idbarang'");
        if ($cekstocktabelitemlain->num_rows() > 0) {
            $result = $cekstocktabelitemlain->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarangitemlain =  $row->stok_itemlain;
                $tambah_stokitemlain = $stoksekarangitemlain + $stok_pakan_request;
            }
        }


        if ($idstatus == 3) {
            # code...
            if ($kategori == "Pakan") {
                # code...
                if ($cekjikabarangPakanSudahAda->num_rows() > 0) {
                    # code...

                    $this->db->query("UPDATE tabel_pakan set stok_pakan ='$tambah_stok' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertPakan();
                    }
                }


                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            } elseif ($kategori == "Obat") {
                # code...
                if ($cekjikabarangObatSudahAda->num_rows() > 0) {
                    # code...
                    $this->db->query("UPDATE tabel_obat set stok_obat ='$tambah_stokobat' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertObat();
                    }
                }

                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            } elseif ($kategori == "Vitamin") {
                # code...
                if ($cekjikabarangVitaminSudahAda->num_rows() > 0) {
                    # code...
                    $this->db->query("UPDATE tabel_vitamin set stok_vitamin ='$tambah_stokvitamin' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertVitamin();
                    }
                }

                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            } elseif ($kategori == "Vaksin") {
                # code...
                if ($cekjikabarangVaksinSudahAda->num_rows() > 0) {
                    # code...
                    $this->db->query("UPDATE tabel_vaksin set stok_vaksin ='$tambah_stokvaksin' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertVaksin();
                    }
                }

                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            } elseif ($kategori == "Peralatan Kandang Baru") {
                # code...
                if ($cekjikabarangalatSudahAda->num_rows() > 0) {
                    # code...
                    $this->db->query("UPDATE tabel_peralatan set stok_peralatan ='$tambah_stokalat' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertPeralatan();
                    }
                }

                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            } elseif ($kategori == "Item Lain") {
                # code...
                if ($cekjikabarangitemlainSudahAda->num_rows() > 0) {
                    # code...
                    $this->db->query("UPDATE tabel_itemlain set stok_itemlain ='$tambah_stokitemlain' where id_barang='$idbarang' AND id_kandang = '$idkandangreq'");
                } else {
                    # code...
                    if ($stoksekarang < $stok_pakan_request) {
                        # code...
                        $this->session->set_flashdata('flashfail', 'Di Kirimkan, Stok Tidak Mencukupi !!');
                        redirect('Admin', 'refresh');
                    } else {

                        $this->Stok_Model->insertItemLain();
                    }
                }

                $this->BarangKeluar_Model->tambahBarangKeluar();
                // $this->db->delete('tabel_notifikasi_request', ['id' => $id]);
                // $this->db->query("UPDATE tabel_inventory set id_status ='$idstatus' where id='$id'");
                $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
                $this->db->query("UPDATE tabel_stok set stok ='$kurangstok' where id_barang='$idbarang'");
                $this->session->set_flashdata('flash', 'Diterima');
                redirect('Admin', 'refresh');
            }
        } elseif ($idstatus == 2) {
            # code...
            $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
            // $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' where id='$id'");
            $this->session->set_flashdata('flash', 'Ditangguhkan');
            redirect('Admin', 'refresh');
        } elseif ($idstatus == 4) {
            # code...
            $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
            // $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' where id='$id'");
            $this->session->set_flashdata('flash', 'Ditolak');
            redirect('Admin', 'refresh');
        } elseif ($idstatus == 1) {
            # code...
            $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' , keterangan = '$catatan_status' where id='$id'");
            // $this->db->query("UPDATE tabel_notifikasi_request set id_status ='$idstatus' where id='$id'");            
            redirect('Admin', 'refresh');
        }
    }
}
