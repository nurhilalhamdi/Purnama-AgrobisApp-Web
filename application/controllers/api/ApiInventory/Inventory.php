<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Inventory extends REST_Controller
{

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_Model', 'inventorymodel');
        $this->CI = &get_instance();
    }

    private function tableName()
    {
        return "tabel_pakan";
    }

    private function tableInventory()
    {
        return "tabel_inventory";
    }

    private function table_request_notifikasi()
    {
        return "tabel_notifikasi_request";
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

    //stok get
    public function stok_get()
    {
        $id_kategori = $this->get('id_kategori');
        $getKandang = $this->inventorymodel->getDataStok($id_kategori);


        if ($getKandang) {
            # code...

            $status = true;
            $message = "no message";
        } else {
            $message = $this->db->_error_message();
        }

        $this->response($this->showResponse($status, $message, $getKandang), 200);
    }

    //pakan Get
    public function pakan_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataPakanWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }


    //vitamin Get
    public function vitamin_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataVitaminWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }


    //Obat Get
    public function obat_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataObatWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }

    //Vaksin Get
    public function vaksin_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataVaksinWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }

    //Peralatan Get
    public function peralatan_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataPeralatanWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }


    //Peralatan Get
    public function itemlain_get()
    {
        $id_kandang = $this->get('id_kandang');
        $getKandang = $this->inventorymodel->getDataItemLainWhereIdKandang($id_kandang);
        if ($getKandang) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getKandang), 200);
        } else {
            // $message = $this->db->_error_message();
            $status = false;
            $message = "no message";
            $this->response($this->showResponse($status, $message, null), 404);
        }
    }



    //      public function detil_get()
    //     {

    //             $getKandang = $this->kandangmodel->getDetil();

    //         if ($getKandang) {
    //             # code...

    //         	$status = true;
    // 			$message = "no message";
    // 		} else {
    // 			$message = $this->db->_error_message();
    // 		}

    // 		$this->response($this->showResponse($status, $message, $getKandang), 200);

    //     }




    // //kode get nomor
    // public function nomorMasuk_get()
    // {

    //     $getKandang = $this->inventorymodel->kode();


    //     if ($getKandang) {
    //         # code...

    //         $status = true;
    //         $message = "no message";
    //     } else {
    //         $message = $this->db->_error_message();
    //     }

    //     $this->response($this->showResponse($status, $message, $getKandang), 200);
    // }



}
