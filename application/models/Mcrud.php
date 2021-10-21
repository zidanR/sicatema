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
}
