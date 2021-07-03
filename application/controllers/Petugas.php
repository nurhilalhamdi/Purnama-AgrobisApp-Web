<?php


use GuzzleHttp\Exception\GuzzleException;

class Petugas extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('webmodel/Petugas_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['petugas'] = $this->Petugas_Model->getAllPetugas();
        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->input->post('keyword')) {
            $data['petugas'] = $this->Petugas_Model->cariDataPetugas();
        }



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $d);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->Petugas_Model->hapusDataPetugas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Petugas');
    }

    // public function hapus($id)
    // {
    //     try {
    //         $response = $this->client->delete('mahasiswa', [
    //             'form_params' => [
    //                 'id_user' => $id
    //             ]
    //         ]);
    //     } catch (GuzzleException $th) {
    //         echo $th->getMessage();
    //         return null;
    //     }
    //     if ($response->getStatusCode() == 200) {
    //         $this->session->set_flashdata('flash', 'dihapus');
    //         redirect('mahasiswa');
    //     }
    // }


    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['petugas'] = $this->Petugas_Model->getPetugasById($id);
        $data['status'] = ['Aktif', 'Tidak Aktif'];

        $d['login'] = $this->db->get_where('tabel_admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_telephone', 'Telepon', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $d);
            $this->load->view('petugas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Petugas_Model->ubahDataPetugas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Petugas');
        }
    }
}
