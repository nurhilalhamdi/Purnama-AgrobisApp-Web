<?php

class Panen_Model extends CI_Model
{

    public function panenInput($data)
    {

        $this->db->insert('tabel_panen', $data);
        return $this->db->affected_rows();
    }


    public function getDataPanen($id = null)
    {


        if ($id === null) {
            # code...
            return $this->db->get('tabel_panen')->result_array();
        } else {
            return $this->db->get_where('tabel_panen', ['id' => $id])->result_array();
        }
    }


    public function getDataPanenWhereId($id_kandang, $periode, $id_chickin)
    {
        $query = $this->db->query("SELECT * FROM tabel_panen WHERE id_kandang = $id_kandang AND periode = $periode AND id_chickin = $id_chickin");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result();
    }
}
