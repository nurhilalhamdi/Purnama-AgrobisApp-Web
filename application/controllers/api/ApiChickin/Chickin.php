<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Chickin extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chickin_Model', 'chickinmodel');
    }

    private function tableName()
    {
        return "tabel_chickin";
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
        $id_kandang = $this->get('id_kandang');

        if ($id_kandang === null) {
            # code...
            $getChickin = $this->chickinmodel->getDataChickin();
        } else {
            $getChickin = $this->chickinmodel->getDataChickin($id_kandang);
        }

        if ($getChickin) {
            # code...

            $status = true;
            $message = "no message";
        } else {
            $message = $this->db->_error_message();
        }

        $this->response($this->showResponse($status, $message, $getChickin), 200);
    }



    public function index_post()
    {


        $type_produk = $this->input->post('type_produk');
        $populasi_masuk = $this->input->post('populasi_masuk');
        $kondisi_chick_in = $this->input->post('kondisi_chick_in');
        $harga_satuan = $this->input->post('harga_satuan');
        $jenis_produk = $this->input->post('jenis_produk');
        $tanggal_chickin = $this->input->post('tanggal_chickin');
        $id_kandang = $this->input->post('id_kandang');
        $periode = $this->input->post('periode');
        $berat_doc = $this->input->post('berat_doc');

        $message = "no message";
        $data = array(
            'type_produk' => $type_produk,
            'populasi_masuk' => $populasi_masuk,
            'kondisi_chick_in' => $kondisi_chick_in,
            'harga_satuan' => $harga_satuan,
            'jenis_produk' => $jenis_produk,
            'tanggal_chickin' => $tanggal_chickin,
            'id_kandang' => $id_kandang,
            'periode' => $periode,
            'total_ayam_saat_ini' => $populasi_masuk,
            'berat_doc' => $berat_doc,

        );
        // $message = "no message";
        // $data = array(
        //     'type_produk' => $this->post('type_produk'),
        //     'populasi_masuk' => $this->post('populasi_masuk'),
        //     'kondisi_chick_in' => $this->post('kondisi_chick_in'),
        //     'harga_satuan' => $this->post('harga_satuan'),
        //     'jenis_produk' => $this->post('jenis_produk'),
        //     'tanggal_chickin' => $this->post('tanggal_chickin'),
        //     'id_kandang' => $this->post('id_kandang'),
        //     'periode' => $this->post('periode'),

        // );


        $this->db->set($data);
        $status = $this->db->insert($this->tableName());
        if ($status) {
            # code...
            // $this->db->query("UPDATE tabel_kandang set total_ayam_saat_ini ='$populasi_masuk' where tabel_kandang.id_kandang='$id_kandang'");
            $this->response($this->showResponse($status, $message, null), 200);
        }
    }


    public function updateChickin_post()
    {
        $message = "no message";
        $id = $this->input->post('id_chickin');

        $type_produk = $this->input->post('type_produk');
        $populasi_masuk = $this->input->post('populasi_masuk');
        $kondisi_chick_in = $this->input->post('kondisi_chick_in');
        $harga_satuan = $this->input->post('harga_satuan');
        $jenis_produk = $this->input->post('jenis_produk');
        $tanggal_chickin = $this->input->post('tanggal_chickin');
        $id_kandang = $this->input->post('id_kandang');
        $periode = $this->input->post('periode');
        $total_ayam_saat_ini = $this->input->post('total_ayam_saat_ini');
        $berat_doc = $this->input->post('berat_doc');

        $data = array(
            // 'type_produk' => $this->put('type_produk'),
            // 'populasi_masuk' => $this->put('populasi_masuk'),
            // 'kondisi_chick_in' => $this->put('kondisi_chick_in'),
            // 'harga_satuan' => $this->put('harga_satuan'),
            // 'jenis_produk' => $this->put('jenis_produk'),
            // 'tanggal_chickin' => $this->put('tanggal_chickin')

            'type_produk' => $type_produk,
            'populasi_masuk' => $populasi_masuk,
            'kondisi_chick_in' => $kondisi_chick_in,
            'harga_satuan' => $harga_satuan,
            'jenis_produk' => $jenis_produk,
            'tanggal_chickin' => $tanggal_chickin,
            'id_kandang' => $id_kandang,
            'periode' => $periode,
            'total_ayam_saat_ini' => $total_ayam_saat_ini,
            'berat_doc' => $berat_doc,
        );

        $this->db->where('id_chickin', $id);
        $update = $this->db->update($this->tableName(), $data);
        if ($update) {
            $status = true;
            // $this->db->query("UPDATE tabel_kandang set total_ayam_saat_ini ='$populasi_masuk' where id_kandang='$id_kandang'");
            $this->response($this->showResponse($status, $message, null), 200);
        } else {
            $status = false;
            $this->response($this->showResponse($status, $message, null), 505);
        }
    }
}
