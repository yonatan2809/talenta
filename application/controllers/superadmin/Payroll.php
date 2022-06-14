<?php

class Payroll extends CI_Controller
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
        $data['title'] = "Payroll";
        $data['pay'] = $this->db->query("SELECT * FROM transaksi
            INNER JOIN karyawan ON karyawan.nip = transaksi.nip")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/payroll', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function slip($id)
    {
        $where = array('id_transaksi' => $id);
        $data['gaji'] = $this->db->query("SELECT * FROM transaksi INNER JOIN karyawan ON karyawan.nip = transaksi.nip WHERE id_transaksi='$id'")->result();
        $data['title'] = "Payslip";
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/slip', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function pdf($id)
    {
        $data['title'] = "Print";
        $data['invoice'] = $this->db->query("SELECT * FROM transaksi
            INNER JOIN karyawan ON karyawan.nip = transaksi.nip
            INNER JOIN jabatan ON jabatan.nama_jabatan = transaksi.nama_jabatan
             INNER JOIN divisi ON divisi.nama_divisi = transaksi.nama_divisi
            WHERE id_transaksi = '$id'")->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Payslip.pdf";
        $this->pdf->load_view('superadmin/pdf', $data);
    }

     public function transaksi($id)
    {
        $data['title'] = "Employee Detail";
        $where = array('id_karyawan' => $id);
        $data['add'] = $this->db->query("SELECT * FROM karyawan 
             INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
            WHERE id_karyawan='$id'")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/add_transaksi', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

     public function proses_transaksi()
    {
        $id_transaksi   = $this->input->post('id_transaksi');
        $user           = $this->input->post('user');
        $tgl_transaksi  = $this->input->post('tgl_transaksi');
        $tgl_gaji       = $this->input->post('tgl_gaji');
        $nip            = $this->input->post('nip');
        $nama_jabatan   = $this->input->post('nama_jabatan');
        $nama_divisi    = $this->input->post('nama_divisi');
        $hadir          = $this->input->post('hadir');
        $izin           = $this->input->post('izin');
        $alpha           = $this->input->post('alpha');


        $data = array(
            'id_transaksi'  => $id_transaksi,
            'user'          => $user,
            'tgl_transaksi' => $tgl_transaksi,
            'tgl_gaji'      => $tgl_gaji,
            'nip'           => $nip,
            'nama_jabatan'  => $nama_jabatan,
            'nama_divisi'   => $nama_divisi,
            'hadir'         => $hadir,
            'izin'          => $izin,
            'alpha'          => $alpha
        );

        $this->m_talenta->insert_data($data, 'transaksi');
        redirect('superadmin/payroll');
    }
}
