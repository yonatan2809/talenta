<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Anda belum login!</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               </div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Employee list";
        $data['user'] = $this->db->query("SELECT * FROM user WHERE role_id IN ('1')")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/user', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function add()
    {
        $data['title'] = "Add employee";
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/tambah_user', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function proses()
    {
        $nip         = $this->input->post('nip');
        $nama      = $this->input->post('nama');
        $password           = ($this->input->post('password'));
        $role_id              = $this->input->post('role_id');


        $data = array(
            'nip'        => $nip,
            'nama'     => $nama,
            'password'             => $password,
            'role_id'             => $role_id
        );

        $this->m_talenta->insert_data($data, 'user');
        redirect('superadmin/user');
    }

     public function registrasi_account()
    {
        $nip                = $this->input->post('nip');
        $nama               = $this->input->post('nama');
        $password           = ($this->input->post('password'));
        $role_id            = $this->input->post('role_id');


        $data = array(
            'nip'               => $nip,
            'nama'              => $nama,
            'password'          => $password,
            'role_id'           => $role_id
        );

        $this->m_talenta->insert_data($data, 'user');
        redirect('superadmin/karyawan');
    }

    public function update()
    {
        $nip                 = $this->input->post('nip');
        $password            = ($this->input->post('password'));

        $data = array(
            'password'     => $password
        );

        $where = array(
            'nip' => $nip
        );
        $this->m_talenta->update_data('user', $data, $where);
        redirect('superadmin/user');
    }

    public function detail($id)
    {
        $data['title'] = "Employee Detail";
         $data['divisi'] = $this->m_talenta->get_data('divisi')->result();
        $data['jabatan'] = $this->m_talenta->get_data('jabatan')->result();
        $data['shift'] = $this->m_talenta->get_data('shift')->result();
        $where = array('id_karyawan' => $id);
        $data['detail'] = $this->db->query("SELECT * FROM karyawan 
            INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
            WHERE id_karyawan='$id'")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/detail_karyawan', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function detail_akun($id)
    {
        $data['title'] = "Employee Detail";
        $where = array('id_karyawan' => $id);
        $data['akun'] = $this->db->query("SELECT * FROM karyawan 
            INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
            WHERE id_karyawan='$id'")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/detail_akun', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function proses_permission()
    {
        $nip         = $this->input->post('nip');
        $nama      = $this->input->post('nama');
        $password           = ($this->input->post('password'));
        $role_id              = $this->input->post('role_id');


        $data = array(
            'nip'        => $nip,
            'nama'     => $nama,
            'password'             => $password,
            'role_id'             => $role_id
        );

        $this->m_talenta->insert_data($data, 'user');
        redirect('superadmin/karyawan');
    }
}
