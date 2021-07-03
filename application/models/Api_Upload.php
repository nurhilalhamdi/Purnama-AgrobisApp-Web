<?php

class Api_Upload extends CI_Model
{

    public function getUpload()
    {
        return $this->db->get('upload_tabel')->result_array();
    }

    public function upload()
    {

        $config['upload_path'] = './Test/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $return = array(
                'result' => 'success',
                'file' => $this->upload->data(),
                'error' => ''
            );
            return $return;
        } else {
            $return = array(
                'result' => 'failed',
                'file' => '',
                'error' => $this->upload->display_errors()
            );
            return $return;
        }
    }

    public function createMember($upload)
    {

        $data_member = [
            "nama" => $this->input->post('nama', true),
            "image" => $upload['file']['file_name']
        ];
        $this->db->insert('upload_tabel', $data_member);
    }
}
