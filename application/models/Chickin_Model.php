<?php

class Chickin_Model extends CI_Model
{

    public function tambahChickinInput($data)
    {

        $this->db->insert('tabel_chickin', $data);
        return $this->db->affected_rows();
    }


    public function getDataChickin($id_kandang = null)
    {


        if ($id_kandang === null) {
            # code...
            return $this->db->get('tabel_chickin')->result_array();
        } else {
            return $this->db->get_where('tabel_chickin', ['id_kandang' => $id_kandang])->result_array();
        }
    }






    // public function searchKandang($id_user = null, $kode_blok = null)
    // {
    //     if($kode_blok === null){
    //         return $this->db->get_where('tabel_kandang', ['id_user' => $id_user])->result_array();
    //     }else{
    //         return $this->db->get_where('tabel_kandang', ['kode_blok' => $kode_blok])->result_array();
    //     }
    // }
}
