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
        $this->data['title_web'] = 'Data Siswa ';
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['users'] = $this->db->get('users')->result();
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('siswa/index', $this->data);
        $this->load->view('footer_view', $this->data);
        // $this->load->view('multiple/index', $this->data);
    }

    public function add()
    {
        $this->form_validation->set_rules(
            'siswa',
            'Siswa',
            'required'
        );
        $this->form_validation->set_rules(
            'no_induk_siswa',
            'Nomor Induk Siswa',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $this->data['title_web'] = 'Data Siswa';
            $this->data['idbo'] = $this->session->userdata('ses_id');
            $this->data['users'] = $this->db->get('users')->result();
            $this->data['kelas'] = $this->db->get('kelas')->result();
            // var_dump($this->data['users']);
            // die;
            $this->load->view('header_view', $this->data);
            $this->load->view('sidebar_view', $this->data);
            $this->load->view('siswa/add', $this->data);
            $this->load->view('footer_view', $this->data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('siswa')),
                'no_induk_siswa' => htmlspecialchars($this->input->post('no_induk_siswa')),
                'kelas' => htmlspecialchars($this->input->post('kelas')),
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('users', 'Berhasil ditambahkan!');
            redirect('Multiple');
        }
    }
    public function edit_siswa($id)
    {
        $this->form_validation->set_rules(
            'id',
            'id',
            'required',
            ['required' => 'harus diisi']
        );
        $this->form_validation->set_rules(
            'siswa',
            'name',
            'required',
            ['required' => 'harus diisi']
        );
        $this->form_validation->set_rules(
            'no_induk_siswa',
            'no_induk_siswa',
            'required',
            ['required' => 'harus diisi']
        );
        $this->form_validation->set_rules(
            'kelas',
            'kelas',
            'required',
            ['required' => 'harus diisi']
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title_web'] = 'Edit Siswa';
            $data['idbo'] = $this->session->userdata('ses_id');
            $data['users'] = $this->Mcrud->getbyId($id);
            $data['kelas'] = $this->Mcrud->kelas();
            // var_dump($data['users']);
            // die;
            $this->load->view('header_view', $data);
            $this->load->view('sidebar_view', $data);
            $this->load->view('siswa/edit_siswa', $data);
            $this->load->view('footer_view', $data);
        } else {
            $id = htmlspecialchars($this->input->post('id'));
            $data = [
                'name' => htmlspecialchars($this->input->post('siswa')),
                'no_induk_siswa' => htmlspecialchars($this->input->post('no_induk_siswa')),
                'kelas' => htmlspecialchars($this->input->post('kelas'))
            ];
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            // var_dump($this->db->last_query());
            // die;
            $this->session->set_flashdata('users', 'telah diganti');
            redirect('multiple/index');
        }
    }
    public function delete($id)
    {
        if ($id == NULL) {
            $this->db->get_where('users', ['id' => $id])->result_array();
        } else {
            return $this->db->get_where('users', ['id' => $id])->row_array();
            $id = htmlspecialchars($this->input->post('id'));
            $this->db->where('id', $id);
            $this->db->delete('users');
            $this->sesion->set_flasdata('users', 'Telah Dihapus');
            redirect('Multiple');
        }
    }
    public function edit($id)
    {
        // $data['kode_area'] = $this->db->get_where('kode_area', ['id_user'=>$id])->result();
        $this->data['title_web'] = 'Data Siswa ';
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['users'] = $this->db->get('users')->result();
        $this->data['kode_area'] = $this->db->get_where('kode_area', ['id' => $id])->result_array();
        $this->data['get_id'] = $id;
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('siswa/edit', $this->data);
        $this->load->view('footer_view', $this->data);
        // $this->load->view('multiple/edit', $data);
    }ssss