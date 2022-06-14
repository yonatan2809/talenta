<?php

class Dashboard extends CI_Controller
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
         date_default_timezone_set('asia/jakarta');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $id = $this->session->userdata('nip');
        $data['karyawan'] = $this->db->query("SELECT * FROM karyawan WHERE nip='$id'")->result();
        $tahun      = date('Y');
        $bulan      = date('m');
        $hari       = date('d');
        $absen      = $this->m_talenta->absendaily($this->session->userdata('nip'), $tahun, $bulan, $hari);
        if ($absen->num_rows() == 0) {
            $data['waktu'] = 'IN';
        } elseif ($absen->num_rows() == 1) {
            $data['waktu'] = 'OUT';
        } else {
            $data['waktu'] = 'dilarang';
        }
       $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('user_interface/user/footer');
    }

     //proses absen
    public function absence()
    {
        $id = $this->session->userdata('nip');
        $p = $this->input->post();
        $data = [
            'nip'    => $id,
            'keterangan' => $p['ket']
        ];
        $this->db->insert('absen', $data);
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Melakukan absen", "success");');
        redirect('user/dashboard');
    }
}
