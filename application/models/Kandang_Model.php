<?php

class Kandang_Model extends CI_Model
{

    public function tambahKandangInput($data)
    {

        $this->db->insert('tabel_kandang', $data);
        return $this->db->affected_rows();
    }


    public function getDataTambahKandang($id_user = null)
    {


        if ($id_user === null) {
            # code...
            return $this->db->get('tabel_kandang')->result_array();
        } else {
            return $this->db->get_where('tabel_kandang', ['id_user' => $id_user])->result_array();
        }
    }

    public function getAllKandang()
    {
        return $this->db->get('tabel_kandang')->result_array();
    }


    // public function getDetil()
    // {


    //     $this->db->select('*'); // <-- There is never any reason to write this line!
    //     $this->db->from('tabel_kandang');
    //     $this->db->join('tabel_chickin', 'tabel_kandang.id_kandang = tabel_kandang.id_kandang');
    //     $this->db->join('tabel_chickin', 'tabel_detil_kandang.id_chickin = tabel_chickin.id');
    //     $query = $this->db->get();
    //     return $query->result_array();

    // }



    public function getDataKandangWhereIdKandang($id_kandang = null)
    {


        if ($id_kandang === null) {
            # code...
            return $this->db->get('tabel_kandang')->result_array();
        } else {
            return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
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
