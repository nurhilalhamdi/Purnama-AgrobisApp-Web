<?php

class CekHarian_Model extends CI_Model
{

    public function cekharianInput($data)
    {

        $this->db->insert('tabel_cekharian', $data);
        return $this->db->affected_rows();
    }


    public function pengecekharianInput($data)
    {

        $this->db->insert('tabel_pengecekan_harian', $data);
        return $this->db->affected_rows();
    }


    public function getDataCekharian($id = null)
    {


        if ($id === null) {
            # code...
            return $this->db->get('tabel_cekharian')->result_array();
        } else {
            return $this->db->get_where('tabel_cekharian', ['id' => $id])->result_array();
        }
    }

    public function getDataWhereId($id_kandang, $periode)
    {
        $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_stok ON tabel_stok.id_barang = tabel_pakan.id_barang JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result();
    }

    public function getObatWhereID($id_obat)
    {
        # code...
        $query = $this->db->query("SELECT * FROM tabel_obat JOIN tabel_stok ON tabel_obat.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_obat = $id_obat");
        return $query->result_array();
    }

    public function getVitaminWhereID($id_vitamin)
    {
        # code...
        $query = $this->db->query("SELECT * FROM tabel_vitamin JOIN tabel_stok ON tabel_vitamin.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_vitamin = $id_vitamin");
        return $query->result_array();
    }

    public function getVaksinWhereID($id_vaksin)
    {
        # code...
        $query = $this->db->query("SELECT * FROM tabel_vaksin JOIN tabel_stok ON tabel_vaksin.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_vaksin = $id_vaksin");
        return $query->result_array();
    }
}
