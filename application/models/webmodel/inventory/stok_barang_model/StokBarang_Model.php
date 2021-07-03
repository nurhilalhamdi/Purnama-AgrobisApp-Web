<?php

class StokBarang_Model extends CI_model
{
    public function getAllStokBarang()
    {
        // $this->db->order_by('id_barang_masuk', 'DESC');
        // $query = $this->db->get('tabel_produk_masuk');
        // return $query->result_array();

        $this->db->select('*');
        $this->db->from('tabel_stok');
        $this->db->join('tabel_kategori', 'tabel_stok.id_kategori=tabel_kategori.id_kategori');
        $this->db->join('tabel_satuan', 'tabel_stok.id_satuan=tabel_satuan.id_satuan');
        $this->db->order_by('id_barang', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllKategori()
    {
        return $this->db->get('tabel_kategori')->result_array();
    }

    public function getAllSatuan()
    {
        return $this->db->get('tabel_satuan')->result_array();
    }

    public function getStokBarangById($id)
    {
        return $this->db->get_where('tabel_stok', ['id_barang' => $id])->row_array();
    }


    public function kode()
    {
        // $this->db->select('RIGHT(tabel_stok.kode,2) as kode_barang', FALSE);
        // $this->db->order_by('kode_barang', 'DESC');
        // $this->db->limit(1);
        // $query = $this->db->get('tabel_stok');  //cek dulu apakah ada sudah ada kode di tabel.    
        // if ($query->num_rows() <> 0) {
        //     //cek kode jika telah tersedia    
        //     $data = $query->row();
        //     $kode = intval($data->kode_barang) + 1;
        // } else {
        //     $kode = 1;  //cek jika kode belum terdapat pada table
        // }
        // $tgl = date('dmY');
        // $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        // $kodetampil = "BR" . "5" . $tgl . $batas;  //format kode
        // return $kodetampil;
        $this->db->select('RIGHT(tabel_stok.kode,5) as kode_barang', FALSE);
        $this->db->order_by('kode_barang', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tabel_stok');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode_barang) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "BR" . $batas;
        return $kodetampil;
    }

    public function tambahStokBarang()
    {






        $kode = $this->input->post('kode', true);
        $nama = $this->input->post('nama', true);
        $stok = $this->input->post('stok', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $kategori = $this->input->post('id_kategori', true);
        $satuan = $this->input->post('id_satuan', true);
        $harga = $this->input->post('harga', true);
        $modal = $this->input->post('modal', true);



        $data = array(
            'kode' => $kode,
            'nama' => $nama,
            'stok' => $stok,
            'deskripsi' => $deskripsi,
            'id_kategori' => $kategori,
            'id_satuan' => $satuan,
            'harga' => $harga,
            'modal' => $modal,
        );


        $this->db->insert('tabel_stok', $data);
    }


    public function ubahDataStok($data, $id)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('tabel_stok', $data);
        return TRUE;
    }

    public function hapusDataStok($id)
    {
        $this->db->delete('tabel_stok', ['id_barang' => $id]);
    }
}
