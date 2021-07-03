<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use PhpParser\Node\Stmt\Else_;
use Restserver\Libraries\REST_Controller;

class ReqBarang extends REST_Controller
{

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_Model', 'inventorymodel');
        $this->load->model('Request_Model', 'requestmodel');
        $this->CI = &get_instance();
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


    public function index_get()
    {



        $id_request = $this->get('id_kandang');

        # code...


        $getRequest = $this->requestmodel->getDataRequest($id_request);


        if ($getRequest) {
            # code...

            $status = true;
            $message = "no message";
        } else {
            $message = $this->db->_error_message();
        }

        $this->response($this->showResponse($status, $message, $getRequest), 200);

        # code...

    }


    //request insert
    public function index_post()
    {


        $id_request = $this->get('id_kandang');

        $nomor = $this->requestmodel->kode($id_request);
        $message = "no message";
        $data = array(
            'nomor_request' => $nomor,
            'id_barang' => $this->post('id_barang'),
            'jumlah_request' => $this->post('jumlah_request'),
            'id_kandang' => $this->post('id_kandang'),
            'catatan' => $this->post('catatan'),
            'tanggal_request' => $this->post('tanggal_request'),
            'id_status' => '1',
        );

        $this->db->set($data);
        $status = $this->db->insert($this->table_request_notifikasi());
        $this->response($this->showResponse($status, $message, null), 200);
    }


    public function delete_post()
    {
        # code...
        $idinventory = $this->post('id');


        $status = false;
        $code = 200;
        $message = "no message";
        if ($idinventory == null) {
            $message = "tidak ada parameter";
            $code = 400;
        } else {
            $this->requestmodel->deleteRequest($idinventory);
        }

        $this->response($this->showResponse($status, $message, null), $code);
    }



    //request insert
    // public function notifikasi_post()
    // {

    //     require APPPATH . 'views/vendor/autoload.php';

    //     $options = array(
    //         'cluster' => 'ap1',
    //         'useTLS' => true
    //     );
    //     $pusher = new Pusher\Pusher(
    //         'd1d276a7faf09690830e',
    //         'ec93e0c35b721cf63bd0',
    //         '1205421',
    //         $options
    //     );

    //     $data['message'] = 'hello world';
    //     $pusher->trigger('my-channel', 'my-event', $data);

    //     $nomor = $this->inventorymodel->kode();
    //     $message = "no message";
    //     $data = array(
    //         'nomor_request' => $nomor,
    //         'id_barang' => $this->post('id_barang'),
    //         'jumlah_request' => $this->post('jumlah_request'),
    //         'id_kandang' => $this->post('id_kandang'),
    //         'catatan' => $this->post('catatan'),
    //         'tanggal_request' => $this->post('tanggal_request'),
    //         'status' => 'Sedang Diproses',
    //     );

    //     $this->db->set($data);
    //     $status = $this->db->insert($this->table_request_notifikasi());
    //     $this->response($this->showResponse($status, $message, null), 200);
    // }



}
