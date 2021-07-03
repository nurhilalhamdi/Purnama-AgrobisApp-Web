<?php



class LoginModel extends CI_Model
{

    public function cek_login($nama, $password)
    {
        return $this->db->table('tabel_admin')
            ->where(array('nama' => $nama, 'password' => $password))
            ->get()->getRowArray();
    }
}
