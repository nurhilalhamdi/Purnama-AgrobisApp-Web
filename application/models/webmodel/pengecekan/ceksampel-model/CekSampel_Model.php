<?php

class CekSampel_Model extends CI_model
{
    public function getKandang()
    {
        // $this->db->order_by('id_barang_masuk', 'DESC');
        // $query = $this->db->get('tabel_produk_masuk');
        // return $query->result_array();

        // $this->db->select('*');
        // $this->db->from('tabel_kandang');
        $query = $this->db->get('tabel_kandang');
        return $query->result_array();
    }

    public function getChickin($id_kandang)
    {

        $this->db->where('id_kandang', $id_kandang);
        $query = $this->db->get('tabel_chickin');
        $output = '<option value = ""> Pilih Periode </option>';
        foreach ($query->result() as $row) {
            # code...
            $output .= '<option value="' . $row->id_chickin . '">' . $row->periode . '</option>';
        }
        return $output;
    }

    public function getDataSampelWhereIdChickin($id_chickin)
    {
        # code...
        $query = $this->db->query("SELECT * FROM tabel_ceksampel JOIN tabel_chickin ON tabel_ceksampel.id_chickin = tabel_chickin.id_chickin WHERE tabel_ceksampel.id_chickin = $id_chickin;");
        return $query->result();
    }



    public function getDataSampelWhereId($idkdg)
    {

        // SELECT * FROM tabel_stok JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_barang = 1;
        // $this->db->select('*');
        // $this->db->from('tabel_stok');
        // $this->db->join('tabel_satuan', 'tabel_stok.id_satuan=tabel_satuan.id_satuan');
        // $query = $this->db->get_where('tabel_stok', ['id_barang' => $idbar]);
        $query = $this->db->query("SELECT * FROM tabel_ceksampel WHERE id_kandang = $idkdg;");
        return $query->result();
    }

    public function getDataKandangWhereId($idkdgg)
    {

        // SELECT * FROM tabel_stok JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_barang = 1;
        // $this->db->select('*');
        // $this->db->from('tabel_stok');
        // $this->db->join('tabel_satuan', 'tabel_stok.id_satuan=tabel_satuan.id_satuan');
        // $query = $this->db->get_where('tabel_stok', ['id_barang' => $idbar]);
        $query = $this->db->query("SELECT * FROM tabel_kandang WHERE id_kandang = $idkdgg");
        return $query->result();
    }


    public function getCeksampelById($id)
    {
        // AND tabel_chickin.periode = $periode
        // return $this->db->get_where('tabel_pengecekan_harian', ['id' => $id])->row_array();
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_stok ON tabel_stok.id_barang = tabel_pakan.id_barang JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id");
        // return $query->row_array();
        $this->db->select('*');
        $this->db->join('tabel_kandang', 'tabel_kandang.id_kandang = tabel_ceksampel.id_kandang');
        $this->db->join('tabel_chickin', 'tabel_chickin.id_chickin = tabel_ceksampel.id_chickin');
        $this->db->join('tabel_user', 'tabel_user.id_user = tabel_ceksampel.id_user');
        $query = $this->db->get_where('tabel_ceksampel', ['id' => $id]);
        return $query->row_array();

        //     $this->db->select('*');
        //     $this->db->from('tabel_barang_masuk');
        //     $this->db->join('tabel_stok', 'tabel_barang_masuk.id_barang=tabel_stok.id_barang');
        //     $this->db->join('tabel_kategori', 'tabel_stok.id_kategori=tabel_kategori.id_kategori');
        //     $this->db->join('tabel_satuan', 'tabel_stok.id_satuan=tabel_satuan.id_satuan');


        // }
    }
}
