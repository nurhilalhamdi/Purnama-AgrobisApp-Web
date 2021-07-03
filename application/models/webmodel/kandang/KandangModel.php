<?php

class KandangModel extends CI_Model
{

    public function tambahKandangInput($data)
    {

        $this->db->insert('tabel_kandang', $data);
        return $this->db->affected_rows();
    }


    public function getDataTambahKandang($id_user = null)
    {


        if ($id_user === null) {
            # code...
            return $this->db->get('tabel_kandang')->result_array();
        } else {
            return $this->db->get_where('tabel_kandang', ['id_user' => $id_user])->result_array();
        }
    }

    public function getAllKandang()
    {
        return $this->db->get('tabel_kandang')->result_array();
    }


    // public function getDetil()
    // {


    //     $this->db->select('*'); // <-- There is never any reason to write this line!
    //     $this->db->from('tabel_kandang');
    //     $this->db->join('tabel_chickin', 'tabel_kandang.id_kandang = tabel_kandang.id_kandang');
    //     $this->db->join('tabel_chickin', 'tabel_detil_kandang.id_chickin = tabel_chickin.id');
    //     $query = $this->db->get();
    //     return $query->result_array();

    // }



    public function getDataKandangWhereIdKandang($id_kandang = null)
    {


        if ($id_kandang === null) {
            # code...
            return $this->db->get('tabel_kandang')->result_array();
        } else {
            return $this->db->get_where('tabel_kandang', ['id_kandang' => $id_kandang])->result_array();
        }
    }

    // public function searchKandang($id_user = null, $kode_blok = null)
    // {
    //     if($kode_blok === null){
    //         return $this->db->get_where('tabel_kandang', ['id_user' => $id_user])->result_array();
    //     }else{
    //         return $this->db->get_where('tabel_kandang', ['kode_blok' => $kode_blok])->result_array();
    //     }
    // }


    public function kandangbyid($id)
    {
        // AND tabel_chickin.periode = $periode
        // return $this->db->get_where('tabel_pengecekan_harian', ['id' => $id])->row_array();
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_stok ON tabel_stok.id_barang = tabel_pakan.id_barang JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id");
        // return $query->row_array();
        $this->db->select('*');
        // $this->db->join('tabel_kandang', 'tabel_kandang.id_kandang = tabel_pengecekan_harian.id_kandang');
        // $this->db->join('tabel_chickin', 'tabel_chickin.id_chickin = tabel_pengecekan_harian.id_chickin');
        // $this->db->join('tabel_user', 'tabel_user.id_user = tabel_pengecekan_harian.id_user');
        $query = $this->db->get_where('tabel_kandang', ['id_kandang' => $id]);
        return $query->row_array();
    }



    public function getAyamMatiSakit($id)
    {
        $query = $this->db->query("SELECT SUM(ayam_mati) as ayam_mati,SUM(ayam_sakit) as ayam_sakit FROM tabel_pengecekan_harian WHERE id_kandang = $id");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->row_array();
    }

    public function getPanenGagalPanen($id)
    {
        $query = $this->db->query("SELECT SUM(jumlah_panen) as jumlah_panen,SUM(gagal_panen) as gagal_panen FROM tabel_panen WHERE id_kandang = $id");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->row_array();
    }

    public function getStokPakanKandang($id)
    {

        $query = $this->db->query("SELECT id_pakan,tabel_pakan.id_barang,nama,id_kandang,satuan,SUM(stok_pakan) as jumlah_pakan from tabel_pakan JOIN tabel_stok ON tabel_pakan.id_barang = tabel_stok.id_barang JOIN tabel_satuan on tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id GROUP BY tabel_pakan.id_barang");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result_array();
    }

    public function getStokObatKandang($id)
    {

        $query = $this->db->query("SELECT id_obat,tabel_obat.id_barang,nama,id_kandang,satuan,SUM(stok_obat) as jumlah_obat from tabel_obat JOIN tabel_stok ON tabel_obat.id_barang = tabel_stok.id_barang JOIN tabel_satuan on tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id GROUP BY tabel_obat.id_barang");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result_array();
    }


    public function getStokVitaminKandang($id)
    {

        $query = $this->db->query("SELECT id_vitamin,tabel_vitamin.id_barang,nama,id_kandang,satuan,SUM(stok_vitamin) as jumlah_vitamin from tabel_vitamin JOIN tabel_stok ON tabel_vitamin.id_barang = tabel_stok.id_barang JOIN tabel_satuan on tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id GROUP BY tabel_vitamin.id_barang");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result_array();
    }


    public function getStokVaksinKandang($id)
    {

        $query = $this->db->query("SELECT id_vaksin,tabel_vaksin.id_barang,nama,id_kandang,satuan,SUM(stok_vaksin) as jumlah_vaksin from tabel_vaksin JOIN tabel_stok ON tabel_vaksin.id_barang = tabel_stok.id_barang JOIN tabel_satuan on tabel_stok.id_satuan = tabel_satuan.id_satuan WHERE id_kandang = $id GROUP BY tabel_vaksin.id_barang");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result_array();
    }

    public function getPanen($id)
    {

        $query = $this->db->query("SELECT * FROM tabel_panen where id_kandang = $id");
        // $query = $this->db->query("SELECT * FROM tabel_pengecekan_harian JOIN tabel_pakan ON tabel_pengecekan_harian.id_pakan = tabel_pakan.id_pakan JOIN tabel_kandang ON tabel_pengecekan_harian.id_kandang = tabel_kandang.id_kandang JOIN tabel_chickin ON tabel_pengecekan_harian.id_chickin = tabel_chickin.id_chickin WHERE tabel_pengecekan_harian.id_kandang = $id_kandang AND tabel_chickin.periode = $periode");
        return $query->result_array();
    }
}
