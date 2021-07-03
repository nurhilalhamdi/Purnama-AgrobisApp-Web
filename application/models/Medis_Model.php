<?php

class Medis_Model extends CI_Model
{

    public function medisInput($data)
    {

        $this->db->insert('tabel_medis', $data);
        return $this->db->affected_rows();
    }


    public function getDataMedis($id = null)
    {


        if ($id === null) {
            # code...
            return $this->db->get('tabel_medis')->result_array();
        } else {
            return $this->db->get_where('tabel_medis', ['id_medis' => $id])->result_array();
        }
    }
}
