<?php

class Petugas_Model extends CI_model
{
    public function getAllPetugas()
    {
        return $this->db->get('tabel_user')->result_array();
    }



    public function hapusDataPetugas($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tabel_user', ['id_user' => $id]);
    }

    public function getPetugasById($id)
    {
        return $this->db->get_where('tabel_user', ['id_user' => $id])->row_array();
    }

    public function ubahDataPetugas()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_telephone" => $this->input->post('no_telephone', true),
            "status" => $this->input->post('status', true),
            "password" => $this->input->post('password', true),
            "id_user" => $this->input->post('id_user', true)
        ];


        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tabel_user', $data);
    }

    public function cariDataPetugas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
