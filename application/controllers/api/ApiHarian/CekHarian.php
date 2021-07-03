<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class CekHarian extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CekHarian_Model', 'inputharian');
    }


    // public function index_get()
    // {
    //     # code...


    //     $id = $this->get('id');

    //     if ($id === null) {
    //         # code...
    //         $getCekharian = $this->inputharian->getDataCekharian();
    //     } else {
    //         $getCekharian = $this->inputharian->getDataCekharian($id);
    //     }



    //     if ($getCekharian) {
    //         # code...

    //         $this->response([
    //             'status' => TRUE,
    //             'data' => $getCekharian
    //         ], REST_Controller::HTTP_OK);
    //     } else {
    //         # code...

    //         $this->response([
    //             'status' => FALSE,
    //             'data' => 'Tidak Ada Data Cek Harian'
    //         ], REST_Controller::HTTP_NOT_FOUND);
    //     }
    // }


    private function tableName()
    {
        return "tabel_cekharian";
    }

    private function pengecekanHarian()
    {
        return "tabel_pengecekan_harian";
    }

    private function showResponse($status, $message, $data)
    {
        if ($data == null) {
            return array(
                'status' => $status,
                'message' => $message
            );
        } else {
            return array(
                'status' => $status,
                'message' => $message,
                'data' => $data
            );
        }
    }


    public function index_get()
    {
        # code...

        $id = $this->get('id');

        if ($id === null) {
            # code...
            $getCekharian = $this->inputharian->getDataCekharian();
        } else {
            $getCekharian = $this->inputharian->getDataCekharian($id);
        }

        if ($getCekharian) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getCekharian), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getCekharian), 404);
        }
    }

    public function dataHarian_get()
    {
        # code...
        $id = $this->get('id_kandang');
        $periode = $this->get('periode');
        $getCekharian = $this->inputharian->getDataWhereId($id, $periode);
        if ($getCekharian) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getCekharian), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getCekharian), 404);
        }
    }

    public function index_post()
    {
        $message = "no message";
        $status = false;
        $config['upload_path'] = './Test/CekHarianFile/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5120;
        $image = $_FILES['file']['name'];
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $message = $this->upload->display_errors();
            $this->response($this->showResponse($status, $message, null), 404);
        } else {

            $url = 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/' . $image;
            $filename = substr($url, strrpos($url, '/') + 1);
            file_put_contents('./Test/CekHarianFile/' . $filename, file_get_contents($url));

            $data = array(
                'tanggal_waktu_cek' => $this->post('tanggal_waktu_cek'),
                'nama_petugas' => $this->post('nama_petugas'),
                'alamat_kandang' => $this->post('alamat_kandang'),
                'kode_kandang' => $this->post('kode_kandang'),
                'kode_blok' => $this->post('kode_blok'),
                'jumlah_ayam' => $this->post('jumlah_ayam'),
                'umur_ayam' => $this->post('umur_ayam'),
                'tanggal_ayam_masuk' => $this->post('tanggal_ayam_masuk'),
                'kondisi_ayam' => $this->post('kondisi_ayam'),
                'jumlah_ayam_sakit' => $this->post('jumlah_ayam_sakit'),
                'gejala_sakit' => $this->post('gejala_sakit'),
                'jam_pakan' => $this->post('jam_pakan'),
                'jam_ganti_minum' => $this->post('jam_ganti_minum'),
                'jam_ganti_vitamin' => $this->post('jam_ganti_vitamin'),
                'jumlah_pakan' => $this->post('jumlah_pakan'),
                'latitude' => $this->post('latitude'),
                'longitude' => $this->post('longitude'),
                'file' => $url,
                'id_user' => $this->post('id_user'),
            );

            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        }
    }


    public function pengecekan_post()
    {
        $message = "no message";
        $status = false;
        $config['upload_path'] = './Test/CekHarianFile/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5120;
        $image = $_FILES['file']['name'];
        $this->load->library('upload', $config);

        $id_pakan = $this->input->post('id_pakan');
        $id_kandang = $this->input->post('id_kandang');
        $jumlah_pakan = $this->input->post('jumlah_pakan');
        $usia_ayam = $this->input->post('usia_ayam');
        $ayam_mati = $this->input->post('ayam_mati');
        $ayam_sakit = $this->input->post('ayam_sakit');
        $gejala_sakit = $this->input->post('gejala_sakit');
        $berat_ayam = $this->input->post('berat_ayam');
        $jumlah_pakan_ekor = $this->input->post('jumlah_pakan_ekor');
        $jam_pemberian_pakan = $this->input->post('jam_pemberian_pakan');
        $jam_pemberian_minum = $this->input->post('jam_pemberian_minum');
        $id_obat = $this->input->post('id_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');
        $id_vitamin = $this->input->post('id_vitamin');
        $jumlah_vitamin = $this->input->post('jumlah_vitamin');
        $jam_pemberian_vitamin = $this->input->post('jam_pemberian_vitamin');
        $id_vaksin = $this->input->post('id_vaksin');
        $jumlah_vaksin = $this->input->post('jumlah_vaksin');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $id_user = $this->input->post('id_user');
        $id_chickin = $this->input->post('id_chickin');
        $tanggal_pengecekan = $this->input->post('tanggal_pengecekan');
        $pakan_nama = $this->input->post('pakan_nama');
        $vitamin_nama = $this->input->post('vitamin_nama');
        $obat_nama = $this->input->post('obat_nama');
        $vaksin_nama = $this->input->post('vaksin_nama');



        // $cek_populasi = $this->db->query("SELECT * FROM tabel_kandang where id_kandang = '$id_kandang'");
        // if ($cek_populasi->num_rows() > 0) {
        //     $result = $cek_populasi->result(); 
        //     foreach ($result as $row) {
        //         $populasi =  $row->total_ayam_saat_ini;
        //         $kurangi_populasi = $populasi - $ayam_mati;
        //     }
        // }
        $cek_populasi = $this->db->query("SELECT * FROM tabel_chickin where id_kandang = '$id_kandang' AND id_chickin = '$id_chickin'");
        if ($cek_populasi->num_rows() > 0) {
            $result = $cek_populasi->result();
            foreach ($result as $row) {
                $populasi =  $row->total_ayam_saat_ini;
                $kurangi_populasi = $populasi - $ayam_mati;
            }
        }




        $cek_stokPakan = $this->db->query("SELECT * FROM tabel_pakan where id_pakan = '$id_pakan' AND id_kandang = '$id_kandang'");
        if ($cek_stokPakan->num_rows() > 0) {
            $result = $cek_stokPakan->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stokpakan =  $row->stok_pakan;
                $kurangi_stok_pakan = $stokpakan - $jumlah_pakan;
            }
        }

        $cek_stokObat = $this->db->query("SELECT * FROM tabel_obat where id_obat = '$id_obat' AND id_kandang = '$id_kandang'");
        if ($cek_stokObat->num_rows() > 0) {
            $result = $cek_stokObat->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stok_obat =  $row->stok_obat;
                $kurangi_stok_obat = $stok_obat - $jumlah_obat;
            }
        }

        $cek_stokVitamin = $this->db->query("SELECT * FROM tabel_vitamin where id_vitamin = '$id_vitamin' AND id_kandang = '$id_kandang'");
        if ($cek_stokVitamin->num_rows() > 0) {
            $result = $cek_stokVitamin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stok_vitamin =  $row->stok_vitamin;
                $kurangi_stok_vitamin = $stok_vitamin - $jumlah_vitamin;
            }
        }

        $cek_stokVaksin = $this->db->query("SELECT * FROM tabel_vaksin where id_vaksin = '$id_vaksin' AND id_kandang = '$id_kandang'");
        if ($cek_stokVaksin->num_rows() > 0) {
            $result = $cek_stokVaksin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stok_vaksin =  $row->stok_vaksin;
                $kurangi_stok_vaksin = $stok_vaksin - $jumlah_vaksin;
            }
        }

        if (!$this->upload->do_upload('file')) {
            $message = $this->upload->display_errors();
            $this->response($this->showResponse($status, $message, null), 404);
        } else {

            $url = 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/' . $image;
            $filename = substr($url, strrpos($url, '/') + 1);
            file_put_contents('./Test/CekHarianFile/' . $filename, file_get_contents($url));

            $data = array(
                'usia_ayam' => $usia_ayam,
                'ayam_mati' => $ayam_mati,
                'ayam_sakit' => $ayam_sakit,
                'gejala_sakit' => $gejala_sakit,
                'berat_ayam' => $berat_ayam,
                'id_pakan' => $id_pakan,
                'jumlah_pakan' => $jumlah_pakan,
                'jumlah_pakan_ekor' => $jumlah_pakan_ekor,
                'jam_pemberian_pakan' => $jam_pemberian_pakan,
                'jam_pemberian_minum' => $jam_pemberian_minum,
                'id_obat' => $id_obat,
                'jumlah_obat' => $jumlah_obat,
                'id_vitamin' => $id_vitamin,
                'jumlah_vitamin' => $jumlah_vitamin,
                'jam_pemberian_vitamin' => $jam_pemberian_vitamin,
                'id_vaksin' => $id_vaksin,
                'jumlah_vaksin' => $jumlah_vaksin,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'id_kandang' => $id_kandang,
                'id_user' => $id_user,
                'file' => $url,
                'id_chickin' => $id_chickin,
                'tanggal_pengecekan' => $tanggal_pengecekan,
                'pakan_nama' => $pakan_nama,
                'vitamin_nama' => $vitamin_nama,
                'obat_nama' => $obat_nama,
                'vaksin_nama' => $vaksin_nama,

            );

            // $this->db->set('stok_pakan', $kurangi_stok, FALSE);
            // $this->db->where('id_pakan', $id_pakan);
            // $this->db->update('tabel_stok');

            // $this->db->query("UPDATE tabel_kandang set total_ayam_saat_ini ='$kurangi_populasi' where id_kandang = '$id_kandang'");
            $this->db->query("UPDATE tabel_chickin set total_ayam_saat_ini ='$kurangi_populasi' where id_kandang = '$id_kandang' AND id_chickin = '$id_chickin'");
            $this->db->query("UPDATE tabel_pakan set stok_pakan ='$kurangi_stok_pakan' where id_pakan='$id_pakan' AND id_kandang = '$id_kandang'");
            $this->db->query("UPDATE tabel_obat set stok_obat ='$kurangi_stok_obat' where id_obat='$id_obat' AND id_kandang = '$id_kandang'");
            $this->db->query("UPDATE tabel_vitamin set stok_vitamin ='$kurangi_stok_vitamin' where id_vitamin='$id_vitamin' AND id_kandang = '$id_kandang'");
            $this->db->query("UPDATE tabel_vaksin set stok_vaksin ='$kurangi_stok_vaksin' where id_vaksin='$id_vaksin' AND id_kandang = '$id_kandang'");
            $status = $this->db->insert('tabel_pengecekan_harian', $data);
            $this->response($this->showResponse($status, $message, null), 200);
            // $this->db->set($data);
            // $status = $this->db->insert($this->pengecekanHarian());
            // $this->response($this->showResponse($status, $message, null), 200);
        }
    }


    public function edit_post()
    {


        $id_pakan = $this->input->post('id_pakan');
        $id_kandang = $this->input->post('id_kandang');
        $jumlah_pakan = $this->input->post('jumlah_pakan');
        $usia_ayam = $this->input->post('usia_ayam');
        $ayam_mati = $this->input->post('ayam_mati');
        $ayam_sakit = $this->input->post('ayam_sakit');
        $gejala_sakit = $this->input->post('gejala_sakit');
        $berat_ayam = $this->input->post('berat_ayam');
        $jumlah_pakan_ekor = $this->input->post('jumlah_pakan_ekor');
        $jam_pemberian_pakan = $this->input->post('jam_pemberian_pakan');
        $jam_pemberian_minum = $this->input->post('jam_pemberian_minum');
        $id_obat = $this->input->post('id_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');
        $id_vitamin = $this->input->post('id_vitamin');
        $jumlah_vitamin = $this->input->post('jumlah_vitamin');
        $jam_pemberian_vitamin = $this->input->post('jam_pemberian_vitamin');
        $id_vaksin = $this->input->post('id_vaksin');
        $jumlah_vaksin = $this->input->post('jumlah_vaksin');

        $pakan_nama = $this->input->post('pakan_nama');
        $vitamin_nama = $this->input->post('vitamin_nama');
        $obat_nama = $this->input->post('obat_nama');
        $vaksin_nama = $this->input->post('vaksin_nama');
        $id_chickin = $this->input->post('id_chickin');

        $message = "no message";
        $id = $this->input->post('id');







        $data = array(

            'usia_ayam' => $usia_ayam,
            'ayam_mati' => $ayam_mati,
            'ayam_sakit' => $ayam_sakit,
            'gejala_sakit' => $gejala_sakit,
            'berat_ayam' => $berat_ayam,
            'id_pakan' => $id_pakan,
            'jumlah_pakan' => $jumlah_pakan,
            'jumlah_pakan_ekor' => $jumlah_pakan_ekor,
            'jam_pemberian_pakan' => $jam_pemberian_pakan,
            'jam_pemberian_minum' => $jam_pemberian_minum,
            'id_obat' => $id_obat,
            'jumlah_obat' => $jumlah_obat,
            'id_vitamin' => $id_vitamin,
            'jumlah_vitamin' => $jumlah_vitamin,
            'jam_pemberian_vitamin' => $jam_pemberian_vitamin,
            'id_vaksin' => $id_vaksin,
            'jumlah_vaksin' => $jumlah_vaksin,
            'pakan_nama' => $pakan_nama,
            'vitamin_nama' => $vitamin_nama,
            'obat_nama' => $obat_nama,
            'vaksin_nama' => $vaksin_nama,
            'id_kandang' => $id_kandang,

            // 'usia_ayam' => $this->put('usia_ayam'),
            // 'ayam_mati' => $this->put('ayam_mati'),
            // 'ayam_sakit' => $this->put('ayam_sakit'),
            // 'gejala_sakit' => $this->put('gejala_sakit'),
            // 'berat_ayam' => $this->put('berat_ayam'),
            // 'id_pakan' => $this->put('id_pakan'),
            // 'jumlah_pakan' => $this->put('jumlah_pakan'),
            // 'jumlah_pakan_ekor' => $this->put('jumlah_pakan_ekor'),
            // 'jam_pemberian_pakan' => $this->put('jam_pemberian_pakan'),
            // 'jam_pemberian_minum' => $this->put('jam_pemberian_minum'),
            // 'id_obat' => $this->put('id_obat'),
            // 'jumlah_obat' => $this->put('jumlah_obat'),
            // 'id_vitamin' => $this->put('id_vitamin'),
            // 'jumlah_vitamin' => $this->put('jumlah_vitamin'),
            // 'jam_pemberian_vitamin' => $this->put('jam_pemberian_vitamin'),
            // 'id_vaksin' => $this->put('id_vaksin'),
            // 'jumlah_vaksin' => $this->put('jumlah_vaksin'),
            // 'pakan_nama' => $this->put('pakan_nama'),
            // 'vitamin_nama' => $this->put('vaksin_nama'),
            // 'obat_nama' => $this->put('obat_nama'),
            // 'vaksin_nama' => $this->put('vaksin_nama'),
            // 'id_kandang' => $this->put('id_kandang'),



            // 'id_user' => $this->post('id_user'),        
            // 'id_chickin' => $this->post('id_chickin'),
            // 'tanggal_pengecekan' => $this->post('tanggal_pengecekan'),
        );

        ///update
        // $cek_populasi = $this->db->query("SELECT * FROM tabel_kandang where id_kandang = '$id_kandang'");
        // if ($cek_populasi->num_rows() > 0) {
        //     $result = $cek_populasi->result(); //or $query->result_array() to get an array
        //     foreach ($result as $row) {
        //         $populasi =  $row->total_ayam_saat_ini;
        //         // $kurangi_populasi = $populasi - $ayam_mati;
        //     }
        // }

        $cek_populasi = $this->db->query("SELECT * FROM tabel_chickin where id_kandang = '$id_kandang' AND id_chickin = '$id_chickin'");
        if ($cek_populasi->num_rows() > 0) {
            $result = $cek_populasi->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $populasi =  $row->total_ayam_saat_ini;
                // $kurangi_populasi = $populasi - $ayam_mati;
            }
        }


        // tabel_pakan
        $lihatstokpakan = $this->db->query("SELECT * FROM tabel_pakan where id_pakan = '$id_pakan' AND id_kandang = '$id_kandang'");
        if ($lihatstokpakan->num_rows() > 0) {
            $result = $lihatstokpakan->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang =  $row->stok_pakan;
            }
        }

        // tabel_pobat
        $lihatstokobat = $this->db->query("SELECT * FROM tabel_obat where id_obat = '$id_obat' AND id_kandang = '$id_kandang'");
        if ($lihatstokobat->num_rows() > 0) {
            $result = $lihatstokobat->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang_obat =  $row->stok_obat;
            }
        }

        // tabel_vitamin
        $lihatstokvitamin = $this->db->query("SELECT * FROM tabel_vitamin where id_vitamin = '$id_obat' AND id_kandang = '$id_kandang'");
        if ($lihatstokvitamin->num_rows() > 0) {
            $result = $lihatstokvitamin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang_vitamin =  $row->stok_vitamin;
            }
        }

        // tabel_vaksin
        $lihatstokvaksin = $this->db->query("SELECT * FROM tabel_vaksin where id_vaksin = '$id_vaksin' AND id_kandang = '$id_kandang'");
        if ($lihatstokvaksin->num_rows() > 0) {
            $result = $lihatstokvaksin->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang_vaksin =  $row->stok_vaksin;
            }
        }

        $qtysekarang = $this->db->query("SELECT * FROM tabel_pengecekan_harian where id='$id' AND id_pakan = '$id_pakan' AND id_obat = '$id_obat' AND id_vitamin = '$id_vitamin' AND id_vaksin = '$id_vaksin'");
        if ($qtysekarang->num_rows() > 0) {
            $result = $qtysekarang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $qtynya =  $row->jumlah_pakan;

                $qtynya_obat = $row->jumlah_obat;

                $qtynya_vitamin = $row->jumlah_vitamin;

                $qtynya_vaksin = $row->jumlah_vaksin;
                $qtynya_ayam_mati = $row->ayam_mati;
            }
        }

        if ($jumlah_pakan >= $qtynya || $jumlah_obat >= $qtynya_obat || $jumlah_vitamin >= $qtynya_vitamin || $jumlah_vaksin >= $qtynya_vaksin || $ayam_mati >= $qtynya_ayam_mati) {
            # code...

            //pakan selisih
            $selisih = $jumlah_pakan - $qtynya;
            $kurangin1 = $stoksekarang + $selisih;
            $this->db->query("UPDATE tabel_pakan set stok_pakan ='$kurangin1' where id_pakan='$id_pakan'");

            //obat selisih
            $selisih_obat = $jumlah_obat - $qtynya_obat;
            $kuranginobat = $stoksekarang_obat + $selisih_obat;
            $this->db->query("UPDATE tabel_obat set stok_obat ='$kuranginobat' where id_obat='$id_obat'");

            //vitamin selisih
            $selisih_vitamin = $jumlah_vitamin - $qtynya_vitamin;
            $kuranginvitamin = $stoksekarang_vitamin + $selisih_vitamin;
            $this->db->query("UPDATE tabel_vitamin set stok_vitamin ='$kuranginvitamin' where id_vitamin='$id_vitamin'");

            //vitamin selisih
            $selisih_vaksin = $jumlah_vaksin - $qtynya_vaksin;
            $kuranginvaksin = $stoksekarang_vaksin + $selisih_vaksin;
            $this->db->query("UPDATE tabel_vaksin set stok_vaksin ='$kuranginvaksin' where id_vaksin='$id_vaksin'");

            //Ayam Selisih
            $selisih_ayam = $ayam_mati - $qtynya_ayam_mati;
            $kuranginayammati = $populasi + $selisih_ayam;
            $this->db->query("UPDATE tabel_chickin set total_ayam_saat_ini ='$kuranginayammati' where id_kandang = '$id_kandang' and id_chickin = '$id_chickin'");


            // $selisih_ayam = $ayam_mati - $qtynya_ayam_mati;
            // $kuranginayammati = $populasi + $selisih_ayam;
            // $this->db->query("UPDATE tabel_kandang set total_ayam_saat_ini ='$kuranginayammati' where id_kandang = '$id_kandang'");


            $updatenya = $this->db->query(
                "UPDATE tabel_pengecekan_harian set 
            usia_ayam = '$usia_ayam',
            ayam_mati = '$ayam_mati',
            ayam_sakit = '$ayam_sakit',
            gejala_sakit = '$gejala_sakit',
            berat_ayam = '$berat_ayam',
            id_pakan = '$id_pakan',
            jumlah_pakan = '$jumlah_pakan',
            jumlah_pakan_ekor = '$jumlah_pakan_ekor',
            jam_pemberian_pakan = '$jam_pemberian_pakan',
            jam_pemberian_minum = '$jam_pemberian_minum',
            id_obat = '$id_obat',
            jumlah_obat = '$jumlah_obat',
            id_vitamin = '$id_vitamin',
            jumlah_vitamin = '$jumlah_vitamin',
            jam_pemberian_vitamin = '$jam_pemberian_vitamin',
            id_vaksin = '$id_vaksin',
            jumlah_vaksin = '$jumlah_vaksin',
            pakan_nama = '$pakan_nama',
            vitamin_nama = '$vitamin_nama',
            obat_nama = '$obat_nama',
            vaksin_nama = '$vaksin_nama',
            id_kandang = '$id_kandang'
            id_chickin = '$id_chickin'
            where id='$id'"
            );


            // $this->db->where('id', $id);
            // $update = $this->db->update($this->pengecekanHarian(), $data);
            if ($updatenya) {
                $status = true;
                $this->response($this->showResponse($status, $message, null), 200);
            } else {
                $status = false;
                $this->response($this->showResponse($status, $message, null), 505);
            }
        } else {
            # code...

            //pakan selisih
            $selisih = $qtynya - $jumlah_pakan;
            $kurangin = $stoksekarang - $selisih;
            $this->db->query("UPDATE tabel_pakan set stok_pakan ='$kurangin' where id_pakan='$id_pakan'");


            //obat selisih
            $selisih_obat = $qtynya_obat - $jumlah_obat;
            $kuranginobat = $stoksekarang_obat - $selisih_obat;
            $this->db->query("UPDATE tabel_obat set stok_obat ='$kuranginobat' where id_obat='$id_obat'");


            //vitamin selisih
            $selisih_vitamin = $qtynya_vitamin - $jumlah_vitamin;
            $kuranginvitamin = $stoksekarang_vitamin - $selisih_vitamin;
            $this->db->query("UPDATE tabel_vitamin set stok_vitamin ='$kuranginvitamin' where id_vitamin='$id_vitamin'");


            //vaksin selisih
            $selisih_vaksin = $qtynya_vaksin - $jumlah_vaksin;
            $kuranginvaksin = $stoksekarang_vaksin + $selisih_vaksin;
            $this->db->query("UPDATE tabel_vaksin set stok_vaksin ='$kuranginvaksin' where id_vaksin='$id_vaksin'");

            //Ayam Selisih
            // $selisih_ayam = $qtynya_ayam_mati - $ayam_mati;
            // $kuranginayammati = $populasi - $selisih_ayam;
            // $this->db->query("UPDATE tabel_kandang set total_ayam_saat_ini ='$kuranginayammati' where id_kandang = '$id_kandang'");

            $selisih_ayam = $qtynya_ayam_mati - $ayam_mati;
            $kuranginayammati = $populasi - $selisih_ayam;
            $this->db->query("UPDATE tabel_chickin set total_ayam_saat_ini ='$kuranginayammati' where id_kandang = '$id_kandang' and id_chickin = '$id_chickin'");

            $updatenya = $this->db->query(
                "UPDATE tabel_pengecekan_harian set 
            usia_ayam = '$usia_ayam',
            ayam_mati = '$ayam_mati',
            ayam_sakit = '$ayam_sakit',
            gejala_sakit = '$gejala_sakit',
            berat_ayam = '$berat_ayam',
            id_pakan = '$id_pakan',
            jumlah_pakan = '$jumlah_pakan',
            jumlah_pakan_ekor = '$jumlah_pakan_ekor',
            jam_pemberian_pakan = '$jam_pemberian_pakan',
            jam_pemberian_minum = '$jam_pemberian_minum',
            id_obat = '$id_obat',
            jumlah_obat = '$jumlah_obat',
            id_vitamin = '$id_vitamin',
            jumlah_vitamin = '$jumlah_vitamin',
            jam_pemberian_vitamin = '$jam_pemberian_vitamin',
            id_vaksin = '$id_vaksin',
            jumlah_vaksin = '$jumlah_vaksin',
            pakan_nama = '$pakan_nama',
            vitamin_nama = '$vitamin_nama',
            obat_nama = '$obat_nama',
            vaksin_nama = '$vaksin_nama',
            id_kandang = '$id_kandang'
            id_chickin = '$id_chickin'
            where id='$id'"
            );
            if ($updatenya) {
                $status = true;
                $this->response($this->showResponse($status, $message, null), 200);
            } else {
                $status = false;
                $this->response($this->showResponse($status, $message, null), 505);
            }
        }
    }

    //Obat Get
    public function obat_get()
    {
        $id_obat = $this->get('id_obat');
        $getObat = $this->inputharian->getObatWhereID($id_obat);
        if ($getObat) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getObat), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }

    //Obat Get
    public function vitamin_get()
    {
        $id_vitamin = $this->get('id_vitamin');
        $getVitamin = $this->inputharian->getVitaminWhereID($id_vitamin);
        if ($getVitamin) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getVitamin), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }

    //Obat Get
    public function vaksin_get()
    {
        $id_vaksin = $this->get('id_vaksin');
        $getVaksin = $this->inputharian->getVaksinWhereID($id_vaksin);
        if ($getVaksin) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getVaksin), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }
}
