<?php

class Request_Model extends CI_Model
{



    //Inventory Models
    public function getDataRequest($id_kandang = null)
    {


        $query = $this->db->query("SELECT * FROM tabel_notifikasi_request JOIN tabel_status ON tabel_notifikasi_request.id_status = tabel_status.id_status JOIN tabel_stok ON tabel_notifikasi_request.id_barang = tabel_stok.id_barang JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_stok.id_kategori JOIN tabel_satuan ON tabel_satuan.id_satuan = tabel_stok.id_satuan WHERE tabel_notifikasi_request.id_kandang = $id_kandang");
        return $query->result_array();

        // if ($id_kandang === null) {
        //     # code...
        //     return $this->db->get('tabel_kandang')->result_array();
        // } else {
        //     return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
        // }
    }

    public function deleteRequest($idinventory)
    {
        # code...
        $this->db->delete('tabel_notifikasi_request', ['id' => $idinventory]);
    }

    //Inventory Models
    // public function getDataInventory($id_kandang = null)
    // {


    //     $query = $this->db->query("SELECT * FROM tabel_inventory JOIN tabel_stok ON tabel_inventory.id_barang = tabel_stok.id_barang JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_stok.id_kategori WHERE tabel_inventory.id_kandang = $id_kandang");
    //     return $query->result_array();

    //     // if ($id_kandang === null) {
    //     //     # code...
    //     //     return $this->db->get('tabel_kandang')->result_array();
    //     // } else {
    //     //     return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
    //     // }
    // }


    //Pakan Models
    public function getDataStok($id_kategori)
    {


        # code...
        // return $this->db->get('tabel_stok')->result_array();

        $query = $this->db->query("SELECT * FROM tabel_stok JOIN tabel_kategori ON tabel_stok.id_kategori = tabel_kategori.id_kategori JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE tabel_stok.id_kategori = $id_kategori");
        return $query->result_array();
        // return $this->db->get_where('tabel_stok', ['id_kategori' => $id_kategori])->result_array();
    }


    public function kode()
    {

        $this->db->select('RIGHT(tabel_notifikasi_request.nomor_request,5) as nomor_request', FALSE);
        $this->db->order_by('nomor_request', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tabel_notifikasi_request');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->nomor_request) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "REQ" . $batas;

        return $kodetampil;
    }




    public function getDataPakanWhereIdKandang($id_kandang = null)
    {


        if ($id_kandang === null) {
            # code...
            return $this->db->get('tabel_kandang')->result_array();
        } else {
            $query = $this->db->query("SELECT * FROM tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang WHERE id_kandang = $id_kandang;");
            return $query->result_array();
        }
    }
}
