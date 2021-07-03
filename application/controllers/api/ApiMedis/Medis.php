<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Medis extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medis_Model', 'medis_model');
    }


    // public function index_get()
    // {
    //     # code...


    //     $id = $this->get('id_user');

    //     if ($id === null) {
    //         # code...
    //         $getCeksampel = $this->inputsampel->getDataCeksampel();
    //     } else {
    //         $getCeksampel = $this->inputsampel->getDataCeksampel($id);
    //     }



    //     if ($getCeksampel) {
    //         # code...

    //         // if (!empty($getCeksampel)) {
    //         # code...
    //         // $this->response(array("result" => $getCeksampel, 200));

    //         $status = 'Ok';
    //         echo json_encode(array("status" => $status, "result" => $getCeksampel, 200));
    //         // }else{
    //         //     $status = 'Data Sampel Tidak Ditemukan';
    //         //     $this->response(array("result" => $status, 200));
    //         // }

    //         // $this->response([
    //         //     'status' => TRUE,
    //         //     'data' => $getCeksampel
    //         // ], REST_Controller::HTTP_OK);
    //     } else {
    //         # code...

    //         // $this->response(array("result" => "Fail"));
    //         $status = 'Fail';
    //         echo json_encode(array('status' => $status));

    //         // $this->response([
    //         //     'status' => FALSE,
    //         //     'data' => 'Tidak Ada Data Cek Sampel'
    //         // ], REST_Controller::HTTP_NOT_FOUND);
    //     }
    // }

    // public function index_post()
    // {
    //     $this->load->library('upload');
    //     if ($_FILES['file']['size'] > 0) {
    //         # code...
    //         $config['upload_path'] = './Test/';
    //         $config['allowed_types'] = 'gif|jpg|png';
      
    //         $config['overwrite'] = TRUE;
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('file')) {

    //             $error = $this->upload->display_errors();
    //             $this->set_response([
    //                 'status' => false,
    //                 'message' => $error
    //             ], REST_Controller::HTTP_NOT_FOUND);
    //         } else {
    //             $photo = $this->upload->file_name;
    //             //  $photo = $this->upload->file_name;
    //             // $url = 'https://www.ayamqu.web.id/Test/CekSampelFile/' . $photo;
    //             // $filename = substr($url, strrpos($url, '/') + 1);
    //             // file_put_contents('~/Test/CekSampelFile/' . $filename, file_get_contents($url));

    //             $data = [
    //                 'tanggal_waktu_sampel' => $this->post('tanggal_waktu_sampel'),
    //                 'nama' => $this->post('nama'),
    //                 'kode_kandang' => $this->post('kode_kandang'),
    //                 'kode_blok' => $this->post('kode_blok'),
    //                 'jumlah_ayam' => $this->post('jumlah_ayam'),
    //                 'umur_ayam' => $this->post('umur_ayam'),
    //                 'kondisi_ayam' => $this->post('kondisi_ayam'),
    //                 'bobot_rata_rata' => $this->post('bobot_rata_rata'),
    //                 'jenis_ayam_sampel' => $this->post('jenis_ayam_sampel'),
    //                 'bobot_ayam_sampel' => $this->post('bobot_ayam_sampel'),
    //                 'jumlah_ayam_sampel' => $this->post('jumlah_ayam_sampel'),
    //                 'latitude' => $this->post('latitude'),
    //                 'longitude' => $this->post('longitude'),
    //                 'file' => $photo,
    //                 'id_user' => $this->post('id_user'),
    //                 'id_kandang' => $this->post('id_kandang')
    //             ];

    //             $insert = $this->inputsampel->ceksampelInput($data);

    //             if ($insert) {
    //                 # code...
    //                 $status = 'Berhasil';
    //             }else{
    //                 $status = 'Gagal';
    //             }
    //         }
    //     } else {
    //         $status = 'Select File';
    //     }
    //     echo json_encode(array('response' => $status));
    // }
    
     private function tableName()
    {
        return "tabel_medis";
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

     
        $id = $this->get('id_medis');

        if ($id === null) {
            # code...
            $getMedis = $this->medis_model->getDataMedis();
        } else {
            $getMedis = $this->medis_model->getDataMedis($id);
        }


        if ($getMedis) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getMedis), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getMedis), 404);
        }
    }

    public function index_post()
    {
        $message = "no message";
        $status = false;
        $config['upload_path'] = './Test/Medis/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5120;
        $image_icon = $_FILES['file_icon_medis']['name'];
        $image = $_FILES['image_medis']['name'];
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_icon_medis') || !$this->upload->do_upload('image_medis')) {
            $message = $this->upload->display_errors();
            $this->response($this->showResponse($status, $message, null), 404);
        } else {
            
            $url_icon = 'https://www.ayamqu.web.id/Test/Medis/' . $image_icon;
            $filename = substr($url_icon, strrpos($url_icon, '/') + 1);
            file_put_contents('./Test/Medis/' . $filename, file_get_contents($url_icon));
            
            $url_image = 'https://www.ayamqu.web.id/Test/Medis/' . $image;
            $filename = substr($url_image, strrpos($url_image, '/') + 1);
            file_put_contents('./Test/Medis/' . $filename, file_get_contents($url_image));

            $data = array(
                    'nama_medis' => $this->post('nama_medis'),
                    'deskripsi_medis' => $this->post('deskripsi_medis'),
                    'gejala_medis' => $this->post('gejala_medis'),
                    'file_icon_medis' => $url_icon,
                    'image_medis' => $url_image
            );

            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        }
    }
}
