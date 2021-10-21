<?php

Class Multiple extends CI_Controller
{
    public function __construct(){
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
        $data['kode_area'] = $this->db->get_where('kode_area', ['id_user'=>$id])->result();
        $data['get_id'] = $id;
        $this->load->view('multiple/edit', $data);
    }

    public function approval($id)
    {
        $a = $this->input->post('kode[]');
        $b = $this->input->post('status[]');

        $i = 1;
        foreach($b as $status)
        {
            if(!empty($status))
            {
                $where = [
                    'id_user'=>$id,
                    'kode'=>$a[$i]
                ];
                $data = ['status'=>$status];
                $this->Mcrud->update('kode_area', $data, $where);
                $i++;
            }
        }

        $this->session->set_flashdata('pesan', 'Data area user berhasil diverifikasi');
        redirect('index.php/multiple');
    }
} 

?>
            