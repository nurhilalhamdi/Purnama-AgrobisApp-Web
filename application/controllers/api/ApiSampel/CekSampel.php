<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class CekSampel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CekSampel_Model', 'inputsampel');
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
        return "tabel_ceksampel";
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


        $id = $this->get('id_user');

        if ($id === null) {
            # code...
            $getCeksampel = $this->inputsampel->getDataCeksampel();
        } else {
            $getCeksampel = $this->inputsampel->getDataCeksampel($id);
        }


        if ($getCeksampel) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getCeksampel), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getCeksampel), 404);
        }
    }


    public function dataSampel_get()
    {
        # code...
        $id = $this->get('id_kandang');
        $periode = $this->get('periode');
        $getCeksampel = $this->inputsampel->getDataWhereId($id, $periode);
        if ($getCeksampel) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getCeksampel), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getCeksampel), 404);
        }
    }

    public function index_post()
    {
        $message = "no message";
        $status = false;
        $config['upload_path'] = './Test/CekSampelFile/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 5120;
        $image = $_FILES['file']['name'];
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $message = $this->upload->display_errors();
            $this->response($this->showResponse($status, $message, null), 404);
        } else {

            $url = 'http://localhost/ayam/www.ayamqu.web.id/Test/CekSampelFile/' . $image;
            $filename = substr($url, strrpos($url, '/') + 1);
            file_put_contents('./Test/CekSampelFile/' . $filename, file_get_contents($url));

            $data = array(
                'tanggal_waktu_sampel' => $this->post('tanggal_waktu_sampel'),
                'nama' => $this->post('nama'),
                'kode_kandang' => $this->post('kode_kandang'),
                'kode_blok' => $this->post('kode_blok'),
                'jumlah_ayam' => $this->post('jumlah_ayam'),
                'umur_ayam' => $this->post('umur_ayam'),
                'kondisi_ayam' => $this->post('kondisi_ayam'),
                'bobot_rata_rata' => $this->post('bobot_rata_rata'),
                'jenis_ayam_sampel' => $this->post('jenis_ayam_sampel'),
                'bobot_ayam_sampel' => $this->post('bobot_ayam_sampel'),
                'jumlah_ayam_sampel' => $this->post('jumlah_ayam_sampel'),
                'latitude' => $this->post('latitude'),
                'longitude' => $this->post('longitude'),
                'file' => $url,
                'id_user' => $this->post('id_user'),
                'id_kandang' => $this->post('id_kandang'),
                'id_chickin' => $this->post('id_chickin'),
            );

            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        }
    }

    public function edit_post()
    {
        $message = "no message";
        $status = false;


        $id = $this->post('id');
        $umur_ayam = $this->post('umur_ayam');
        $kondisi_ayam = $this->post('kondisi_ayam');
        $bobot_rata_rata = $this->post('bobot_rata_rata');
        $jenis_ayam_sampel = $this->post('jenis_ayam_sampel');
        $bobot_ayam_sampel = $this->post('bobot_ayam_sampel');
        $jumlah_ayam_sampel = $this->post('jumlah_ayam_sampel');
        $id_kandang = $this->post('id_kandang');
        $id_chickin = $this->post('id_chickin');

        // $data = array(                                            
        //     'umur_ayam' => $umur_ayam,
        //     'kondisi_ayam' => $kondisi_ayam,
        //     'bobot_rata_rata' => $bobot_rata_rata,
        //     'jenis_ayam_sampel' => $jenis_ayam_sampel,
        //     'bobot_ayam_sampel' => $bobot_ayam_sampel,
        //     'jumlah_ayam_sampel' => $jumlah_ayam_sampel,                                            
        //     'id_kandang' => $id_kandang,
        //     'id_chickin' => $id_chickin,
        // );

        // $this->db->set($data);
        // $status = $this->db->insert($this->tableName());

        $updatenya = $this->db->query(
            "UPDATE tabel_ceksampel set 
            umur_ayam = '$umur_ayam',
            kondisi_ayam = '$kondisi_ayam',
            bobot_rata_rata = '$bobot_rata_rata',
            jenis_ayam_sampel = '$jenis_ayam_sampel',
            bobot_ayam_sampel = '$bobot_ayam_sampel',
            jumlah_ayam_sampel = '$jumlah_ayam_sampel'        
            where id='$id' and id_kandang = '$id_kandang'"
        );
        if ($updatenya) {
            $status = true;
            $this->response($this->showResponse($status, $message, null), 200);
        } else {
            $status = false;
            $this->response($this->showResponse($status, $message, null), 505);
        }
        $this->response($this->showResponse($status, $message, null), 200);
    }
}
