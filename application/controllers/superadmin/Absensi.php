<?php

class Absensi extends CI_Controller
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
        $data['title'] = "Attendance";
         $data['data'] = $this->db->query("SELECT * FROM absen INNER JOIN karyawan ON karyawan.nip = absen.nip")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/absensi', $data);
        $this->load->view('user_interface/superadmin/footer');
    }
}
