<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Upload extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_Upload', 'uploads');
    }

    private function tableName()
    {
        return "upload_tabel";
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
        // return array(
        // 	'status' => $status,
        // 	'message' => $message,
        // 	'data' => $data
        // 	);
    }

    public function index_get()
    {
$row = $this->db->get("tabel_kandang");
		$status = false;

		if($row->num_rows() > 0){
			$getData = $row->result();
			foreach ($getData as $value) {
				$newArray[] = array('id_kandang' => $value->id_kandang, 
									'alamat_kandang' => $value->alamat_kandang,
									'kode_Kandang' => $value->kode_Kandang,
									'kode_blok' => $value->kode_blok,
									'jenis_kandang' => $value->jenis_kandang);
			}
			$status = true;
			$message = "no message";
		} else {
			$message = $this->db->_error_message();
		}

		$this->response($this->showResponse($status, $message, $newArray), 200);
    }


    // public function index_post()
    // {
    //     $upload = $this->uploads->upload();

    //     if ($this->uploads->createMember($upload) > 0) {
    //         $status = 'Ok';
    //         echo json_encode(array('status' => $status));
    //     } else {
    //         $status = 'Gagal';
    //         echo json_encode(array('status' => $status));
    //     }
    // }

    public function index_post()
    {
        $message = "no message";
        $status = false;
        $config['upload_path'] = './Test/CekSampelFile/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5120;
        $image = $_FILES['image']['name'];
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $message = $this->upload->display_errors();
            $this->response($this->showResponse($status, $message, null), 404);
        } else {

            $name = $this->input->post('nama');
            $data = array(
                'nama' => $name,
                'image' => $image
            );

            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        }
    }
}
