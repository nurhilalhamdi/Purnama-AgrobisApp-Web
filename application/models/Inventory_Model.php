<?php

class Inventory_Model extends CI_Model
{



    //STOK
    public function getDataStok($id_kategori)
    {


        # code...
        // return $this->db->get('tabel_stok')->result_array();

        $query = $this->db->query("SELECT * FROM tabel_stok JOIN tabel_kategori ON tabel_stok.id_kategori = tabel_kategori.id_kategori JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE tabel_stok.id_kategori = $id_kategori");
        return $query->result_array();
        // return $this->db->get_where('tabel_stok', ['id_kategori' => $id_kategori])->result_array();
    }



    //PAKAN
    public function getDataPakanWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }

    //VITAMIN
    public function getDataVitaminWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_vitamin JOIN tabel_stok ON tabel_vitamin.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }

    //OBAT
    public function getDataObatWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_obat JOIN tabel_stok ON tabel_obat.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }

    //Vaksin
    public function getDataVaksinWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_vaksin JOIN tabel_stok ON tabel_vaksin.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }


    //Peralatan
    public function getDataPeralatanWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_peralatan JOIN tabel_stok ON tabel_peralatan.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }

    //Itemlain
    public function getDataItemLainWhereIdKandang($id_kandang)
    {
        // $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang");
        $query = $this->db->query("SELECT * FROM tabel_itemlain JOIN tabel_stok ON tabel_itemlain.id_barang = tabel_stok.id_barang JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id_kandang");
        return $query->result_array();
    }
}
