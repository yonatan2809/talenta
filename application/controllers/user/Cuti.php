<?php

class Cuti extends CI_Controller
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
        $data['title'] = "Time off history";
         $id = $this->session->userdata('nip');
         $data['karyawan'] = $this->db->query("SELECT * FROM karyawan 
             INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
          WHERE nip='$id'")->result();
           $data['data'] = $this->m_talenta->detail_cuti($this->session->userdata('nip'))->result();
        $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/cuti', $data);
        $this->load->view('user_interface/user/footer');
    }

     public function permohonan()
    {
        $data['data'] = $this->m_talenta->cuti_pegawai($this->session->userdata('nip'))->result();
        $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/permohonan', $data);
        $this->load->view('user_interface/user/footer');
    }

    public function proses()
    {
        $nip                        = $this->input->post('nip');
        $jenis_cuti                 = $this->input->post('jenis_cuti');
        $alasan                     = $this->input->post('alasan');
        $status                     = $this->input->post('status');
        $waktu_pengajuan            = $this->input->post('waktu_pengajuan');
        $waktu_selesai              = $this->input->post('waktu_selesai');
        $date_created               = $this->input->post('date_created');
        $file                       = $_FILES['file']['name'];
        if ($file = '') {
        } else {
            $config['upload_path']     = './assets/file';
            $config['allowed_types']     = 'jpg|jpeg|png|pdf';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "file Gagal di Upload!";
            } else {
                $file = $this->upload->data('file_name');
            }
        }



        $data = array(
            'nip'               => $this->session->userdata('nip'),
            'jenis_cuti'        => $jenis_cuti,
            'alasan'            => $alasan,
            'status'            => $status,
            'waktu_pengajuan'   => $waktu_pengajuan,
            'waktu_selesai'     => $waktu_selesai,
            'date_created'      => $date_created,
            'file'              => $file

        );

        $this->m_talenta->insert_data($data, 'cuti');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Data berhasil ditambahkan!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        redirect('user/cuti');
    }
}
