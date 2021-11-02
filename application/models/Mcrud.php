<?php

class Mcrud extends CI_Model
{
    public function update()
    {
        // $this->db->where($where)
        //         ->update($table, $data);
        //     return TRUE;
        $a = $this->input->post('kode');
        $b = $this->input->post('status');

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'kode' => $this->input->post('kode'),
            'status' => $this->input->post('status'),
            'created_date' => date('Y-m-d H:i:s'),
        ];
        // $this->db->where('id_user', $idus);
        $this->db->where('kode', $a);
        $this->db->update('kode_area', $data);
    }


    public function getbyId($id = null)
    {
        if ($id != NULL) {
            return $this->db->get_where('users', ['id' => $id])->row_array();
        } else {
            return $this->db->get('users')->result_array();
        }
    }

    public function kelas()
    {
        return $this->db->get('kelas')->result_array();
    }
}
