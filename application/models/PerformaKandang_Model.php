<?php

class PerformaKandang_Model extends CI_Model
{


    public function getDataWhereId($id_kandang, $periode)
    {
        $query = $this->db->query("SELECT SUM(ayam_mati) as ayam_mati,SUM(ayam_sakit) as ayam_sakit,SUM(jumlah_pakan) as total_konsumsi_pakan,tabel_panen.total_berat_keseluruhan,tabel_panen.umur_panen,tabel_panen.berat_panen_ekor ,tabel_chickin.populasi_masuk,tabel_chickin.berat_doc,tabel_chickin.total_ayam_saat_ini,tabel_panen.gagal_panen,tabel_panen.jumlah_panen FROM tabel_panen JOIN tabel_chickin ON tabel_panen.id_chickin = tabel_chickin.id_chickin JOIN tabel_pengecekan_harian ON tabel_chickin.id_chickin = tabel_pengecekan_harian.id_chickin  JOIN tabel_kandang ON tabel_chickin.id_kandang = tabel_kandang.id_kandang WHERE tabel_kandang.id_kandang = '$id_kandang' AND tabel_chickin.periode = '$periode'");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result();
    }
}
