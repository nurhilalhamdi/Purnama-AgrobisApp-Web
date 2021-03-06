<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templateweb/v_header', $data);
            $this->load->view('loginweb/v_login');
            $this->load->view('templateweb/v_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tabel_admin', ['email' => $email])->row_array();


        if ($user) {

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been actived</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered</div>');
            redirect('login');
        }
    }




    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tabel_admin.email]', [
            'is_unique' => 'this email has already registered!',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templateweb/v_header', $data);
            $this->load->view('loginweb/registration');
            $this->load->view('templateweb/v_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'nomor' => htmlspecialchars($this->input->post('nomor', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date_created' => time(),
                'is_active' => 1

            ];
            $this->db->insert('tabel_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login</div>');
            redirect('login');
        }
    }
    public function logout()
    {

        $this->session->sess_destroy();
        redirect('templates/sidebar');
    }
}
