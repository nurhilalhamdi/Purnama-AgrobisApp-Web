<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Kandang extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kandang_Model', 'kandangmodel');
    }
    
     private function tableName()
    {
        return "tabel_kandang";
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
        $id_user = $this->get('id_user');

        if ($id_user === null) {
            # code...
            $getKandang = $this->kandangmodel->getDataTambahKandang();
        } else {
            $getKandang = $this->kandangmodel->getDataTambahKandang($id_user);
        }

        if ($getKandang) {
            # code...

        	$status = true;
			$message = "no message";
		} else {
			$message = $this->db->_error_message();
		}

		$this->response($this->showResponse($status, $message, $getKandang), 200);
    
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
    
    
    public function dataKandang_get()
    {
        $id_kandang = $this->get('id_kandang');

        if ($id_kandang === null) {
            # code...
            $getKandang = $this->kandangmodel->getDataKandangWhereIdKandang();
        } else {
            $getKandang = $this->kandangmodel->getDataKandangWhereIdKandang($id_kandang);
        }

        if ($getKandang) {
            # code...

        	$status = true;
			$message = "no message";
		} else {
			$message = $this->db->_error_message();
		}

		$this->response($this->showResponse($status, $message, $getKandang), 200);
    
    }

    public function index_post()
    {
        $message = "no message";
        $data = array(
            'alamat_kandang' => $this->post('alamat_kandang'),
            'kode_kandang' => $this->post('kode_kandang'),
            'kode_blok' => $this->post('kode_blok'),
            'jenis_kandang' => $this->post('jenis_kandang'),
            'status_kandang' => 'Tidak Aktif',
            'nilai_progress' => 0,
            'id_user' => $this->post('id_user'),
        );
    
        
            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        
    }
    
      public function index_put(){
          $message = "no message";
             $id = $this->put('id_kandang');
        $data = array(
                    'nilai_progress' => $this->put('nilai_progress'),
                    'status_kandang' => $this->put('status_kandang'),
                    'syarat_kesiapan_1' => $this->put('syarat_kesiapan_1'),
                    'syarat_kesiapan_2' => $this->put('syarat_kesiapan_2'),
                    'syarat_kesiapan_3' => $this->put('syarat_kesiapan_3'),
                    'syarat_kesiapan_4' => $this->put('syarat_kesiapan_4'),
                    'syarat_kesiapan_5' => $this->put('syarat_kesiapan_5'),
                    'syarat_kesiapan_6' => $this->put('syarat_kesiapan_6'),
                    'syarat_kesiapan_7' => $this->put('syarat_kesiapan_7'),
                    'syarat_kesiapan_8' => $this->put('syarat_kesiapan_8'),
                    'syarat_kesiapan_9' => $this->put('syarat_kesiapan_9'),
                    'syarat_kesiapan_10' => $this->put('syarat_kesiapan_10'));
        $this->db->where('id_kandang', $id);
        $update = $this->db->update($this->tableName(), $data);
        if ($update) {
            $status = true;
            $this->response($this->showResponse($status, $message, null), 200);
        } else {
            $status = false;
            $this->response($this->showResponse($status, $message, null), 505);
        }
    }
}
