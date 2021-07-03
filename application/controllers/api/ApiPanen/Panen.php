<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Panen extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Panen_Model', 'panenmodel');
    }

    private function tableName()
    {
        return "tabel_panen";
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
        $periode = $this->get('periode');
        $id_chickin = $this->get('id_chickin');




        $getPanen = $this->panenmodel->getDataPanenWhereId($id_kandang, $periode, $id_chickin);


        // if ($getPanen) {
        //     # code...

        //     $status = true;
        //     $message = "no message";
        // } else {
        //     $message = $this->db->_error_message();
        // }

        // $this->response($this->showResponse($status, $message, $getPanen), 200);

        if ($getPanen) {
            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getPanen), 200);
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


    // public function dataKandang_get()
    // {
    //     $id_kandang = $this->get('id_kandang');

    //     if ($id_kandang === null) {
    //         # code...
    //         $getKandang = $this->kandangmodel->getDataKandangWhereIdKandang();
    //     } else {
    //         $getKandang = $this->kandangmodel->getDataKandangWhereIdKandang($id_kandang);
    //     }

    //     if ($getKandang) {
    //         # code...

    //     	$status = true;
    // 		$message = "no message";
    // 	} else {
    // 		$message = $this->db->_error_message();
    // 	}

    // 	$this->response($this->showResponse($status, $message, $getKandang), 200);

    // }

    public function index_post()
    {
        $message = "no message";
        $data = array(
            'umur_panen' => $this->post('umur_panen'),
            'periode' => $this->post('periode'),
            'tanggal_panen' => $this->post('tanggal_panen'),
            'berat_panen_ekor' => $this->post('berat_panen_ekor'),
            'jumlah_panen' => $this->post('jumlah_panen'),
            'total_berat_keseluruhan' => $this->post('total_berat_keseluruhan'),
            'gagal_panen' => $this->post('gagal_panen'),
            'id_user' => $this->post('id_user'),
            'id_kandang' => $this->post('id_kandang'),
            'id_chickin' => $this->post('id_chickin'),
        );


        $this->db->set($data);
        $status = $this->db->insert($this->tableName());
        $this->response($this->showResponse($status, $message, null), 200);
    }
}
