<?php

class User_Model extends CI_Model
{

    public function getUserIdLogin($id = null)
    {


        if ($id === null) {
            # code...
            return $this->db->get('tabel_user')->result_array();
        } else {
            return $this->db->get_where('tabel_user', ['id_user' => $id])->result_array();
        }
    }
    // public function getUserIdLogin($id = null)
    // {


    //     if ($id === null) {
    //         # code...
    //         return $this->db->get('tabel_user')->result_array();
    //     } else {
    //         return $this->db->get_where('tabel_user', ['id_user' => $id])->result_array();
    //     }
    // }

    public function getUser($username = null)
    {
        return $this->db->get_where('tabel_user', ['username' => $username])->result_array();
    }
    // public function getUser($username = null)
    // {
    //     return $this->db->get_where('tabel_user', ['username' => $username])->result_array();
    // }

    function checkusername($username)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function userLogin($username, $password, $email)
    {
        $result = $this->db->query("SELECT id_user,nama,status
         FROM tabel_user WHERE (username = '$username' or email = '$email') AND password = '$password'");
        return $result->result_array();
    }

    public function userRegister($data)
    {

        $this->db->insert('tabel_user', $data);
        return $this->db->affected_rows();
    }


    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('tabel_user');

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("id", $params)) {
            $this->db->where('id', $params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }

            if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
                $result = $this->db->count_all_results();
            } elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->row_array() : false;
            } else {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }

        //return fetched data
        return $result;
    }

    public function deletePetugas($id)
    {
        # code...
        $this->db->delete('tabel_user', ['id_user' => $id]);
        return $this->db->affected_rows();
    }

    public function updatePetugas($data, $id)
    {
        $this->db->update('tabel_user', $data, ['id_user' => $id]);
        return $this->db->affected_rows();
    }
}
