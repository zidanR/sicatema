<?php

class Mcrud extends CI_Model
{
    public function update()
    {
        // $this->db->where($where)
        //         ->update($table, $data);
        //     return TRUE;
        $nama = $this->input->post('name');
        $b = $this->input->post('status');

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'kode' => $this->input->post('kode'),
            'status' => $this->input->post('status'),
            'created_date' => date('Y-m-d H:i:s'),
        ];
        // $this->db->where('id_user', $idus);
        $this->db->where('kode', $nama);
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
    public function catatan()
    {
        return $this->db->select('*');
        $this->db->from('catatan_terlambat');
        $this->db->where('');
    }
}
