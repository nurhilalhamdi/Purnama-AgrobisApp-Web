<?php

class CekSampel_Model extends CI_Model
{

    public function ceksampelInput($data)
    {

        $this->db->insert('tabel_ceksampel', $data);
        return $this->db->affected_rows();
    }


    public function getDataCeksampel($id = null)
    {


        if ($id === null) {
            # code...
            return $this->db->get('tabel_ceksampel')->result_array();
        } else {
            return $this->db->get_where('tabel_ceksampel', ['id_user' => $id])->result_array();
        }
    }


    public function getDataWhereId($id_kandang, $periode)
    {
        $query = $this->db->query("SELECT * FROM tabel_ceksampel JOIN tabel_kandang ON tabel_ceksampel.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_ceksampel.id_chickin = tabel_chickin.id_chickin WHERE tabel_ceksampel.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result();
    }
}
