<?php

class BarangKeluar_Model extends CI_model
{
    public function getAllBarangKeluar()
    {

        $this->db->select('*');
        $this->db->from('tabel_barang_keluar');
        $this->db->join('tabel_kandang', 'tabel_barang_keluar.id_kandang=tabel_kandang.id_kandang');
        $this->db->join('tabel_stok', 'tabel_barang_keluar.id_barang=tabel_stok.id_barang');
        $this->db->join('tabel_kategori', 'tabel_stok.id_kategori=tabel_kategori.id_kategori');
        $this->db->join('tabel_satuan', 'tabel_stok.id_satuan=tabel_satuan.id_satuan');
        $this->db->order_by('id', 'DESC');
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

    public function getAllStok()
    {
        return $this->db->get('tabel_stok')->result_array();
    }

    public function getDataBarangwhereId($idbar)
    {

        $query = $this->db->query("SELECT * FROM tabel_stok JOIN tabel_satuan ON tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_barang = $idbar;");
        return $query->result();
    }

    public function getBarangMasukById($id)
    {
        return $this->db->get_where('tabel_barang_masuk', ['id' => $id])->row_array();
    }


    public function kodeBarangKeluar()
    {

        $this->db->select('RIGHT(tabel_barang_keluar.nomor_keluar,5) as nomor_keluar', FALSE);
        $this->db->order_by('nomor_keluar', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tabel_barang_keluar');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->nomor_keluar) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "OUT" . $batas;
        return $kodetampil;
    }

    public function tambahBarangKeluar()
    {
        $nomor = $this->kodeBarangKeluar();

        $produk_keluar = $this->input->post('id_barang_request', true);
        $id_kandang = $this->input->post('id_kandang_request', true);
        $nomor_keluar = $nomor;
        $jumlah_keluar = $this->input->post('qty_request', true);


        // $produk_masuk = $this->input->post('id_barang_create', true);
        // $keterangan = $this->input->post('keterangan_create', true);
        // $stokmasuk = $this->input->post('stok_sekarang_create', true);
        // $penerima = $this->input->post('nama_penerima_create', true);
        // $nomorbarang = $this->input->post('nomor_barang_create', true);
        // $tanggal = $this->input->post('tanggal_masuk_create', true);
        // $total = $this->input->post('harga_create', true);
        // $harga_masuk = $this->input->post('harga_satuan_create', true);


        // $cekstocksekarang = $this->db->query("SELECT * FROM tabel_stok where id_barang = '$produk_masuk'");

        // if ($cekstocksekarang->num_rows() > 0) {
        //     $result = $cekstocksekarang->result(); //or $query->result_array() to get an array
        //     foreach ($result as $row) {
        //         $stoksekarang =  $row->stok;
        //         $hargasekarang = $row->harga;
        //         $tambahstok = $stoksekarang + $stokmasuk;
        //     }
        // }

        $data = array(
            'id_barang' => $produk_keluar,
            'nomor_keluar' => $nomor_keluar,
            'stok_keluar' => $jumlah_keluar,
            'id_kandang' => $id_kandang,
        );



        $this->db->insert('tabel_barang_keluar', $data);
    }


    public function ubahData()
    {


        $id = $this->input->post('id', true);
        $idbarang = $this->input->post('id_barang_edit', true);
        $keterangan = $this->input->post('keterangan_edit', true);
        $stokmasuk = $this->input->post('stok_sekarang_edit', true);
        $penerima = $this->input->post('nama_penerima_edit', true);
        $tanggal = $this->input->post('tanggal_masuk_edit', true);
        $nomor_masuk = $this->input->post('nomor_barang_edit', true);
        $harga = $this->input->post('harga_edit', true);

        $data = [
            "id_barang" => $idbarang,
            "nomor_masuk" => $nomor_masuk,
            "penerima" => $penerima,
            "keterangan" => $keterangan,
            "tanggal_masuk" => $tanggal,
            "stok_masuk" => $stokmasuk,
            "total_harga" => $harga,
            "id" => $id
        ];




        $lihatstok = $this->db->query("SELECT * FROM tabel_stok where id_barang='$idbarang'");
        if ($lihatstok->num_rows() > 0) {
            $result = $lihatstok->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $stoksekarang =  $row->stok;
            }
        }

        $qtysekarang = $this->db->query("SELECT * FROM tabel_barang_masuk where id='$id'");
        if ($qtysekarang->num_rows() > 0) {
            $result = $qtysekarang->result(); //or $query->result_array() to get an array
            foreach ($result as $row) {
                $qtynya =  $row->stok_masuk;
            }
        }

        if ($stokmasuk >= $qtynya) {
            # code...
            $selisih = $stokmasuk - $qtynya;
            $kurangin = $stoksekarang + $selisih;
            $kuranginstoknya = $this->db->query("UPDATE tabel_stok set stok ='$kurangin' where id_barang='$idbarang'");
            // $updatenya = $this->db->query("UPDATE tabel_barang_masuk set id_barang = '$idbarang' , keterangan = '$keterangan', stok_masuk ='$stokmasuk' , penerima = '$penerima' where id='$id'");
            $this->db->where('id', $this->input->post('id'));
            $updatenya = $this->db->update('tabel_barang_masuk', $data);

            if ($kuranginstoknya && $updatenya) {
                # code...
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
            }
        } else {
            $selisih = $qtynya - $stokmasuk;
            $kurangin = $stoksekarang - $selisih;
            $kuranginstoknya = $this->db->query("UPDATE tabel_stok set stok ='$kurangin' where id_barang='$idbarang'");
            // $updatenya = $this->db->query("UPDATE tabel_barang_masuk set id_barang = '$idbarang' , keterangan = '$keterangan', stok_masuk ='$stokmasuk' , penerima = '$penerima' where id='$id'");

            $this->db->where('id', $this->input->post('id'));
            $updatenya = $this->db->update('tabel_barang_masuk', $data);
            if ($kuranginstoknya && $updatenya) {
                # code...
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('inventory/barang-masuk/BarangMasuk', 'refresh');
            }
        }
    }


    public function ubahDataProdukMasuk($data, $id)
    {
        // $data = [
        //     "nama" => $this->input->post('nama', true),
        //     "username" => $this->input->post('username', true),
        //     "alamat" => $this->input->post('alamat', true),
        //     "email" => $this->input->post('email', true),
        //     "no_telephone" => $this->input->post('no_telephone', true),
        //     "status" => $this->input->post('status', true),
        //     "password" => $this->input->post('password', true),
        //     "id_user" => $this->input->post('id_user', true)
        // ];

        // $nama_produk_masuk = $this->input->post('nama_barang_masuk', true);
        // $deskripsi_produk_masuk = $this->input->post('deskripsi_barang_masuk', true);
        // $kategori_produk = $this->input->post('id_kategori', true);
        // $satuan_produk = $this->input->post('id_satuan', true);
        // $harga_beli = $this->input->post('harga_beli_barang_masuk', true);
        // $harga_modal = $this->input->post('harga_modal', true);
        // $stok_barang_masuk = $this->input->post('stok_barang_masuk', true);
        // $id_barang_masuk = $this->input->post('id_barang_masuk', true);

        // $data = array(
        //     'nama_barang_masuk' => $nama_produk_masuk,
        //     'id_kategori' => $kategori_produk,
        //     'deskripsi_barang_masuk' => $deskripsi_produk_masuk,
        //     'id_satuan' => $satuan_produk,
        //     'stok_barang_masuk' => $stok_barang_masuk,
        //     'harga_beli_barang_masuk' => $harga_beli,
        //     'harga_modal' => $harga_modal,
        //     'id_barang_masuk' => $id_barang_masuk,
        // );


        // $this->db->where('id_barang_masuk', $this->input->post('id_barang_masuk'));
        // $this->db->update('tabel_produk_masuk', $data);
        $this->db->where('id', $id);
        $this->db->update('tabel_barang_masuk', $data);
        return TRUE;
    }

    public function hapusDataProdukMasuk($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tabel_barang_masuk', ['id' => $id]);
    }
}
