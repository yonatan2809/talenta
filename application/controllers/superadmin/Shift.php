<?php

class Shift extends CI_Controller
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
        $data['title'] = "Data Schedule";
        $data['shift'] = $this->db->query("SELECT * FROM shift")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/shift', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

     public function proses()
    {
        $shift              = $this->input->post('shift');
        $jadwal          = $this->input->post('jadwal');


        $data = array(
            'shift'         => $shift,
            'jadwal'     => $jadwal
        );

        $this->m_talenta->insert_data($data, 'shift');
        redirect('superadmin/shift');
    }

    public function proses_update()
    {
        $id_pegawai         = $this->input->post('id_pegawai');
        $nik                = $this->input->post('nik');
        $nama_pegawai       = $this->input->post('nama_pegawai');
        $username           = $this->input->post('username');
        $hak_akses          = $this->input->post('hak_akses');

        $data = array(
            'nik'   => $nik,
            'nama_pegawai'      => $nama_pegawai,
            'username'      => $username,
            'hak_akses'      => $hak_akses
        );

        $where = array(
            'id_pegawai' => $id_pegawai
        );
        $this->penggajianModel->update_data('data_admin', $data, $where);
        redirect('admin/Dashboard');
    }
}
