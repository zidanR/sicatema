<?php

class Multiple extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->data['title_web'] = 'Datasiswa';
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['users'] = $this->db->get('users')->result();
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('multiple/index', $this->data);
        $this->load->view('footer_view', $this->data);
        // $this->load->view('multiple/index', $this->data);
    }

    public function edit($id)
    {
        // $data['kode_area'] = $this->db->get_where('kode_area', ['id_user'=>$id])->result();
        $this->data['title_web'] = 'Data Siswa ';
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['users'] = $this->db->get_where('users', ['id' => $id])->row();
        // var_dump($this->data['users']);
        // die;
        // $this->data['kode_area'] = $this->db->get_where('kode_area', ['id' => $id])->result_array();
        $this->data['get_id'] = $id;
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('siswa/edit', $this->data);
        $this->load->view('footer_view', $this->data);
        // $this->load->view('multiple/edit', $data);
    }
    public function terlambat($id)
    {
        $nama = $this->input->post('name');
        $x = $this->input->post('status');
        $i = 1;
        $idus = $id;
        $kd = $nama[$i];
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'nama' => $this->input->post('name'),
            'status' => $this->input->post('status'),
            ''
        ];

        $this->db->where('nama', $nama);
        $this->db->where('catatan_terlambat', $data);
        $where = [
            'id_user' => $id,
            'nama' => $nama[$i]
        ];

        foreach ($x as $status) {
            if (!empty($status)) {
                $idus = $id;
                $kd = $nama[$i];
                $data = ['status' => $status];
                var_dump($data);
                $this->db->where('id_user', $idus);
                $this->db->where('id_user', $kd);
                $this->db->update('users', $data);
            }
        }
        $this->Mcrud->update();
        $this->session->set_flashdata('pesan', 'Data area user berhasil diverifikasi');
        redirect('index.php/multiple');
    }
    // public function approval($id)
    // {
    //     $a = $this->input->post('kode');
    //     $b = $this->input->post('status');
    //     // var_dump($this->session->userdata());
    //     // die;
    //     // var_dump($a);
    //     // var_dump($b);
    //     // die;
    //     $i = 1;
    //     $idus = $id;
    //     $kd = $a[$i];

    //     date_default_timezone_set('Asia/Jakarta');
    //     $data = [
    //         'kode' => $this->input->post('kode'),
    //         'status' => $this->input->post('status'),
    //         'created_date' => date('Y-m-d H:i:s'),
    //     ];
    //     // $this->db->where('id_user', $idus);
    //     $this->db->where('kode', $a);
    //     $this->db->update('kode_area', $data);
    //     $where = [
    //         'id_user' => $id,
    //         'kode' => $a[$i]
    //     ];
    //     // var_dump($where);
    //     // die;
    //     // $data = ['status' => $b];
    //     // var_dump($data);
    //     // $this->db->last_query();
    //     // die;

    //     foreach ($b as $status) {
    //         if (!empty($status)) {
    //             $idus = $id;
    //             $kd = $a[$i];

    //             // $where = [
    //             //     'id_user' => $id,
    //             //     'kode' => $a[$i]
    //             // ];
    //             // var_dump($where);
    //             // die;
    //             $data = ['status' => $status];
    //             var_dump($data);
    //             $this->db->where('id_user', $idus);
    //             $this->db->where('id_user', $kd);
    //             $this->db->update('kode_area', $data);
    //             // $this->db->last_query();
    //             // die;
    //             // $this->Mcrud->update('kode_area', $data, $where);
    //             // $i++;
    //         }
    //     }

    //     $this->Mcrud->update();
    //     $this->session->set_flashdata('pesan', 'Data area user berhasil diverifikasi');
    //     redirect('index.php/multiple');
    // }
}
