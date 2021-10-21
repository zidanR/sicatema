<?php

class Multiple extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data['users'] = $this->db->get('users')->result();
        $this->load->view('multiple/index', $data);
    }

    public function edit($id)
    {
        // $data['kode_area'] = $this->db->get_where('kode_area', ['id_user'=>$id])->result();
        $data['kode_area'] = $this->db->get_where('kode_area', ['id' => $id])->result_array();
        $data['get_id'] = $id;
        $this->load->view('multiple/edit', $data);
    }

    public function approval($id)
    {
        // $a = $this->input->post('kode');
        // $b = $this->input->post('status');
        // // var_dump($this->session->userdata());
        // // die;
        // // var_dump($a);
        // // var_dump($b);
        // // die;
        // $i = 1;
        // $idus = $id;
        // $kd = $a[$i];

        // date_default_timezone_set('Asia/Jakarta');
        // $data = [
        //     'kode' => $this->input->post('kode'),
        //     'status' => $this->input->post('status'),
        //     'created_date' => date('Y-m-d H:i:s'),
        // ];
        // // $this->db->where('id_user', $idus);
        // $this->db->where('kode', $a);
        // $this->db->update('kode_area', $data);
        // $where = [
        //     'id_user' => $id,
        //     'kode' => $a[$i]
        // ];
        // var_dump($where);
        // die;
        // $data = ['status' => $b];
        // var_dump($data);
        // $this->db->last_query();
        // die;

        // foreach ($b as $status) {
        //     if (!empty($status)) {
        //         $idus = $id;
        //         $kd = $a[$i];

        //         // $where = [
        //         //     'id_user' => $id,
        //         //     'kode' => $a[$i]
        //         // ];
        //         // var_dump($where);
        //         // die;
        //         $data = ['status' => $status];
        //         var_dump($data);
        //         $this->db->where('id_user', $idus);
        //         $this->db->where('id_user', $kd);
        //         $this->db->update('kode_area', $data);
        //         // $this->db->last_query();
        //         // die;
        //         // $this->Mcrud->update('kode_area', $data, $where);
        //         // $i++;
        //     }
        // }

        $this->Mcrud->update();
        $this->session->set_flashdata('pesan', 'Data area user berhasil diverifikasi');
        redirect('index.php/multiple');
    }
}
