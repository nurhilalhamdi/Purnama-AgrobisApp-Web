<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class Performa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PerformaKandang_Model', 'performa');
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
        $id = $this->get('id_kandang');
        $periode = $this->get('periode');
        $getperforma = $this->performa->getDataWhereId($id, $periode);
        if ($getperforma) {
            # code...

            $status = true;
            $message = "no message";
            $this->response($this->showResponse($status, $message, $getperforma), 200);
        } else {
            # code...
            $status = false;
            $message = $this->db->_error_message();
            $this->response($this->showResponse($status, $message, $getperforma), 404);
        }
    }
}
