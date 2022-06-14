<?php

class Absensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '3') {
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
        $data['title'] = "Attendance history";
         $id = $this->session->userdata('nip');
         $data['karyawan'] = $this->db->query("SELECT * FROM karyawan 
             INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
          WHERE nip='$id'")->result();
           $data['data'] = $this->m_talenta->absensi_pegawai($this->session->userdata('nip'))->result();
        $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/absensi', $data);
        $this->load->view('user_interface/user/footer');
    }
}
