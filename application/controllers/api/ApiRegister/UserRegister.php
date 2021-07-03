<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class UserRegister extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model', 'login');
    }

    private function tableName()
    {
        return "tabel_user";
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

    public function index_post()
    {
        $message = "no message";
        $nama = strip_tags($this->post('nama'));
        $username = strip_tags($this->post('username'));
        $alamat = strip_tags($this->post('alamat'));
        $email = strip_tags($this->post('email'));
        $no_telephone = strip_tags($this->post('no_telephone'));
        $password = strip_tags($this->post('password'));
        $konfirmasipassword = strip_tags($this->post('konfirmasi_password'));

        $con['returnType'] = 'count';
        $con['conditions'] = array(
            'username' => $username,
        );
        $userCount = $this->login->getRows($con);

        if ($userCount > 0) {
            # code...
            $status = 'Exist';
            $this->response($this->showResponse($status, $message, null), 404);
        } else {
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'email' => $email,
                'no_telephone' => $no_telephone,
                'password' => md5($password),
                'status' => 'Aktif',
                'konfirmasi_password' => $konfirmasipassword,
            );
            $this->db->set($data);
            $status = $this->db->insert($this->tableName());
            $this->response($this->showResponse($status, $message, null), 200);
        }


        //     $insert = $this->login->UserRegister($data);
        //     if ($insert) {
        //         # code...
        //         $status = 'Ok';
        //     } else {
        //         $status = 'Error';
        //     }
        // }
        // echo json_encode(array('response' => $status));
    }

    public function editprofile_post()
    {
        $message = "no message";
        $nama = strip_tags($this->post('nama'));
        $username = strip_tags($this->post('username'));
        $alamat = strip_tags($this->post('alamat'));
        $email = strip_tags($this->post('email'));
        $no_telephone = strip_tags($this->post('no_telephone'));
        $password = strip_tags($this->post('password'));
        $id = $this->input->post('id_user');

        $data = array(
            // 'type_produk' => $this->put('type_produk'),
            // 'populasi_masuk' => $this->put('populasi_masuk'),
            // 'kondisi_chick_in' => $this->put('kondisi_chick_in'),
            // 'harga_satuan' => $this->put('harga_satuan'),
            // 'jenis_produk' => $this->put('jenis_produk'),
            // 'tanggal_chickin' => $this->put('tanggal_chickin')

            'nama' => $nama,
            'username' => $username,
            'alamat' => $alamat,
            'email' => $email,
            'no_telephone' => $no_telephone,
            'password' => $password,
        );

        $this->db->where('id_user', $id);
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


    public function index_get()
    {
        $id_user = $this->get('id_user');



        $getUser = $this->login->getUserIdLogin($id_user);


        if ($getUser) {
            # code...

            $status = true;
            $message = "no message";
        } else {
            $message = $this->db->_error_message();
        }

        $this->response($this->showResponse($status, $message, $getUser), 200);
    }
}
