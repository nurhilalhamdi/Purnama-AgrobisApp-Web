<?php


defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class UserLogin extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model', 'login');
    }


    // private function showResponse($response, $nama, $id_user)
    // {
    //     if ($data == null) {
    //         return array(
    //             'response' => $response,
    //         );
    //     } else {
    //         return array(
    //             'response' => $response,
    //             'nama' => $nama,
    //             'id_user' => $id_user
    //         );
    //     }
    // return array(
    // 	'status' => $status,
    // 	'message' => $message,
    // 	'data' => $data
    // 	);
    // }

    public function index_get()
    {
        # code...


        $id = $this->get('id_user');

        if ($id === null) {
            # code...
            $getUserLogin = $this->login->getUserIdLogin();
        } else {
            $getUserLogin = $this->login->getUserIdLogin($id);
        }

        if ($getUserLogin) {
            # code...

            // $this->response([
            //     'status' => TRUE,
            //     'data' => $getUserLogin
            // ], REST_Controller::HTTP_OK);


            $status = 'Ok';
            $this->response(array("status" => $status, "result" => $getUserLogin), 200);

            // foreach ($getUserLogin as $row) {
            //     $id = $row['id_user'];
            //     $status = 'Ok';
            //     echo json_encode(array("result" => $status,  "id_user" => $id));
            // }
        } else {
            # code..
            // $this->response([
            //     'status' => 'fail'
            // ], REST_Controller::HTTP_NO_CONTENT);



            $status = 'fail';
            $this->response(array('status' => $status, "result" => $getUserLogin), 204);
            // $this->response(array("result" => "Fail"));

        }
    }

    public function index_post()
    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        $status = $this->get('status');
        $result = $this->login->userLogin($username, $password, $email);

        foreach ($result as $row) {
            $nama = $row['nama'];
            $id = $row['id_user'];
            $sts = $row['status'];

            if (!$result > 0) {
                $status = 'fail';
                $this->response(array('response' => $status), 502);
            } else if ($sts == 'Tidak Aktif') {
                $status = 'deactived';
                $this->response(array('response' => $status), 404);
            } else {
                $status = 'Ok';
                $this->response(array('response' => $status, 'nama' => $nama, 'id_user' => $id), 200);
            }
        }

        // $username = $this->input->post('username');
        // $password = md5($this->input->post('password'));
        // $email = $this->input->post('email');
        // $status = $this->get('status');
        // $result = $this->login->userLogin($username, $password, $email);

        // foreach ($result as $row) {
        //     $nama = $row['nama'];
        //     $id = $row['id_user'];
        //     $sts = $row['status'];

        //     if (!$result > 0) {
        //         $status = 'fail';
        //         echo json_encode(array('response' => $status));
        //     } else if ($sts == 'Tidak Aktif') {
        //         $status = 'deactifed';
        //         echo json_encode(array('response' => $status));
        //     } else {
        //         $status = 'Ok';
        //         echo json_encode(array("response" => $status, "nama" => $nama, "id_user" => $id));
        //     }
        // }
    }

    public function index_delete()
    {
        $id = $this->delete('id_user');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'Pilih Id yang ingin dihapus'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->login->deletePetugas($id) > 0) {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Id Berhasil Dihapus'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'Id Tidak Di Temukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }


    public function index_put()
    {
        $id = $this->put('id_user');
        $data = [
            'nama' => $this->put('nama'),
            'username' => $this->put('username'),
            'alamat' => $this->put('alamat'),
            'email' => $this->put('email'),
            'no_telephone' => $this->put('no_telephone'),
            'status' => $this->put('status'),
            'password' => $this->put('password')
        ];
        if ($this->login->updatePetugas($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'Berhasil Di Update'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'Gagal Update'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
