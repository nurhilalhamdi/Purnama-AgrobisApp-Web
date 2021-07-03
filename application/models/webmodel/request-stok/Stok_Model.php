<?php

class Stok_Model extends CI_Model
{

    public function getNotifikasi()
    {


        $query = $this->db->query("SELECT * FROM tabel_notifikasi_request JOIN tabel_status ON tabel_notifikasi_request.id_status = tabel_status.id_status JOIN tabel_stok ON tabel_notifikasi_request.id_barang = tabel_stok.id_barang JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_stok.id_kategori JOIN tabel_satuan ON tabel_satuan.id_satuan = tabel_stok.id_satuan");
        return $query->result_array();

        // if ($id_kandang === null) {
        //     # code...
        //     return $this->db->get('tabel_kandang')->result_array();
        // } else {
        //     return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
        // }
    }


    public function getInventory()
    {


        $query = $this->db->query("SELECT * FROM tabel_inventory JOIN tabel_status ON tabel_inventory.id_status = tabel_status.id_status JOIN tabel_stok ON tabel_inventory.id_barang = tabel_stok.id_barang JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_stok.id_kategori JOIN tabel_satuan ON tabel_satuan.id_satuan = tabel_stok.id_satuan");
        return $query->result_array();

        // if ($id_kandang === null) {
        //     # code...
        //     return $this->db->get('tabel_kandang')->result_array();
        // } else {
        //     return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
        // }
    }


    public function getStatus()
    {


        $query = $this->db->query("SELECT * FROM tabel_status");
        return $query->result_array();

        // if ($id_kandang === null) {
        //     # code...
        //     return $this->db->get('tabel_kandang')->result_array();
        // } else {
        //     return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
        // }
    }

    public function insertPakan()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_pakan = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_pakan' => $stok_pakan,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_pakan', $data);
    }

    public function insertObat()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_pakan = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_obat' => $stok_pakan,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_obat', $data);
    }

    public function insertVitamin()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_vitamin = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_vitamin' => $stok_vitamin,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_vitamin', $data);
    }

    public function insertVaksin()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_vitamin = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_vaksin' => $stok_vitamin,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_vaksin', $data);
    }

    public function insertPeralatan()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_vitamin = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_peralatan' => $stok_vitamin,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_peralatan', $data);
    }

    public function insertItemLain()
    {
        # code...
        $id_barang = $this->input->post('id_barang_request', true);
        $stok_vitamin = $this->input->post('qty_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $data = array(
            'id_barang' => $id_barang,
            'stok_itemlain' => $stok_vitamin,
            'id_kandang' => $id_kandang,
        );
        $this->db->insert('tabel_itemlain', $data);
    }
}
