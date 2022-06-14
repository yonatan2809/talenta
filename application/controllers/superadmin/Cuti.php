<?php

class Cuti extends CI_Controller
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
        $data['title'] = "Time Off";
         $data['cuti'] = $this->db->query("SELECT * FROM cuti
            INNER JOIN karyawan ON karyawan.nip = cuti.nip")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/cuti', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

     public function proses()
    {
        $nama_libur      = $this->input->post('nama_libur');
        $tgl_libur    = $this->input->post('tgl_libur');


        $data = array(
            'nama_libur'    => $nama_libur,
            'tgl_libur'  => $tgl_libur
        );

        $this->m_talenta->insert_data($data, 'hari_libur');
        redirect('superadmin/hari_libur');
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

     public function approval($id)
    {
        $this->db->update('cuti', ['status' => '2'], ['nip' => $id]);
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Menerima pengajuan cuti", "success");');
        redirect('superadmin/cuti');
    }
}
