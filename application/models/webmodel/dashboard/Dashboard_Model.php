<?php

class Dashboard_Model extends CI_model
{









    public function getTotal_Populasi_Masuk()
    {
        $query = $this->db->query("SELECT sum(populasi_masuk) as total_populasi from tabel_chickin");
        return $query->result_array();
    }

    public function getTotal_Populasi_Hidup()
    {
        $query = $this->db->query("SELECT sum(total_ayam_saat_ini) as total_hidup from tabel_kandang");
        return $query->result_array();
    }

    public function getTotal_Populasi_Mati()
    {
        $query = $this->db->query("SELECT sum(ayam_mati) as total_mati from tabel_pengecekan_harian");
        return $query->result_array();
    }

    public function getTotal_Populasi_Sakit()
    {
        $query = $this->db->query("SELECT sum(ayam_sakit) as total_sakit from tabel_pengecekan_harian");
        return $query->result_array();
    }

    public function getTotal_Populasi_Panen()
    {
        $query = $this->db->query("SELECT sum(jumlah_panen) as total_panen from tabel_panen");
        return $query->result_array();
    }


    //--------------------------------------------------------------------

    public function getGrafik_Masuk()
    {
        $query = $this->db->query("SELECT * from tabel_chickin join tabel_kandang on tabel_chickin.id_kandang = tabel_kandang.id_kandang");
        return $query->result();
    }

    public function getGrafik_Hidup()
    {
        $query = $this->db->query("SELECT * from tabel_kandang");
        return $query->result();
    }

    public function getGrafik_Mati()
    {
        $query = $this->db->query("SELECT tabel_kandang.kode_Kandang,SUM(ayam_mati) AS total FROM tabel_pengecekan_harian JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang GROUP BY tabel_kandang.id_kandang");
        return $query->result();
    }


    public function getGrafik_Sakit()
    {
        $query = $this->db->query("SELECT tabel_kandang.kode_Kandang,SUM(ayam_sakit) AS total FROM tabel_pengecekan_harian JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang GROUP BY tabel_kandang.id_kandang");
        return $query->result();
    }

    public function getGrafik_Panen()
    {
        $query = $this->db->query("SELECT tabel_kandang.kode_Kandang,SUM(jumlah_panen) AS total FROM tabel_panen JOIN tabel_kandang ON tabel_panen.id_kandang = tabel_kandang.id_kandang GROUP BY tabel_kandang.id_kandang");
        return $query->result();
    }
}
