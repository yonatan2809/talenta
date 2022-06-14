<?php

class Karyawan extends CI_Controller
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
        $data['title'] = "Employee list";
         $id = $this->session->userdata('nip');
         $data['karyawan'] = $this->db->query("SELECT * FROM karyawan 
             INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
          WHERE nip='$id'")->result();
        $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/karyawan', $data);
        $this->load->view('user_interface/user/footer');
    }

    public function add()
    {
        $data['title'] = "Add employee";
        $data['divisi'] = $this->m_talenta->get_data('divisi')->result();
        $data['jabatan'] = $this->m_talenta->get_data('jabatan')->result();
        $data['shift'] = $this->m_talenta->get_data('shift')->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/tambah_karyawan', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function proses()
    {
        $nama_depan         = $this->input->post('nama_depan');
        $nama_belakang      = $this->input->post('nama_belakang');
        $email              = $this->input->post('email');
        $no_hp              = $this->input->post('no_hp');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tgl_lahir          = $this->input->post('tgl_lahir');
        $gender             = $this->input->post('gender');
        $status_nikah       = $this->input->post('status_nikah');
        $gol_darah          = $this->input->post('gol_darah');
        $agama              = $this->input->post('agama');
        $jenis_identitas    = $this->input->post('jenis_identitas');
        $no_identitas       = $this->input->post('no_identitas');
        $alamat             = $this->input->post('alamat');
        $nip                = $this->input->post('nip');
        $status_karyawan    = $this->input->post('status_karyawan');
        $tgl_gabung         = $this->input->post('tgl_gabung');
        $cabang             = $this->input->post('cabang');
        $id_divisi          = $this->input->post('id_divisi');
        $id_jabatan         = $this->input->post('id_jabatan');
        $id_shift           = $this->input->post('id_shift');
        $gaji_pokok         = $this->input->post('gaji_pokok');
        $tunjangan          = $this->input->post('tunjangan');
        $jenis_pembayaran   = $this->input->post('jenis_pembayaran');
        $no_rek             = $this->input->post('no_rek');
        $bank               = $this->input->post('bank');
        $nama_akun          = $this->input->post('nama_akun');
        $npwp               = $this->input->post('npwp');
        $ptkp               = $this->input->post('ptkp');
        $metode_pajak       = $this->input->post('metode_pajak');
        $pph21              = $this->input->post('pph21');
        $no_bpjs            = $this->input->post('no_bpjs');
        $npp_bpjs           = $this->input->post('npp_bpjs');
        $biaya_bpjs         = $this->input->post('biaya_bpjs');
        $biaya_jht          = $this->input->post('biaya_jht');
        $tgl_selesai        = $this->input->post('tgl_selesai');


        $data = array(
            'nama_depan'        => $nama_depan,
            'nama_belakang'     => $nama_belakang,
            'email'             => $email,
            'no_hp'             => $no_hp,
            'tempat_lahir'      => $tempat_lahir,
            'tgl_lahir'         => $tgl_lahir,
            'gender'            => $gender,
            'status_nikah'      => $status_nikah,
            'gol_darah'         => $gol_darah,
            'agama'             => $agama,
            'jenis_identitas'   => $jenis_identitas,
            'no_identitas'      => $no_identitas,
            'alamat'            => $alamat,
            'nip'               => $nip,
            'status_karyawan'   => $status_karyawan,
            'tgl_gabung'        => $tgl_gabung,
            'cabang'            => $cabang,
            'id_divisi'         => $id_divisi,
            'id_jabatan'        => $id_jabatan,
            'id_shift'          => $id_shift,
            'gaji_pokok'        => $gaji_pokok,
            'tunjangan'         => $tunjangan,
            'jenis_pembayaran'  => $jenis_pembayaran,
            'no_rek'            => $no_rek,
            'bank'              => $bank,
            'nama_akun'         => $nama_akun,
            'npwp'              => $npwp,
            'ptkp'              => $ptkp,
            'no_bpjs'           => $no_bpjs,
            'npp_bpjs'          => $npp_bpjs,
            'biaya_bpjs'        => $biaya_bpjs,
            'biaya_jht'         => $biaya_jht,
            'metode_pajak'      => $metode_pajak,
            'pph21'             => $pph21,
            'tgl_selesai'       => $tgl_selesai
        );

        $this->m_talenta->insert_data($data, 'karyawan');
        redirect('superadmin/karyawan');
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
        $id_karyawan         = $this->input->post('id_karyawan');
        $nama_depan          = $this->input->post('nama_depan');
        $nama_belakang       = $this->input->post('nama_belakang');
        $email               = $this->input->post('email');
        $no_hp               = $this->input->post('no_hp');
        $tempat_lahir        = $this->input->post('tempat_lahir');
        $tgl_lahir           = $this->input->post('tgl_lahir');
        $gender              = $this->input->post('gender');
        $status_nikah        = $this->input->post('status_nikah');
        $gol_darah           = $this->input->post('gol_darah');
        $agama               = $this->input->post('agama');
        $alamat              = $this->input->post('alamat');
        $jenis_identitas     = $this->input->post('jenis_identitas');
        $no_identitas        = $this->input->post('no_identitas');

        $data = array(
            'nama_depan'        => $nama_depan,
            'nama_belakang'     => $nama_belakang,
            'email'             => $email,
            'no_hp'             => $no_hp,
            'tempat_lahir'      => $tempat_lahir,
            'tgl_lahir'         => $tgl_lahir,
            'gender'            => $gender,
            'status_nikah'      => $status_nikah,
            'gol_darah'         => $gol_darah,
            'agama'             => $agama,
            'no_hp'             => $no_hp,
            'alamat'            => $alamat,
            'no_identitas'      => $no_identitas,
            'jenis_identitas'   => $jenis_identitas
        );

        $where = array(
            'id_karyawan' => $id_karyawan
        );
        $this->m_talenta->update_data('karyawan', $data, $where);
        redirect('user/karyawan');
    }

    public function detail($id)
    {
        $data['title'] = "Employee Detail";
         $data['divisi'] = $this->m_talenta->get_data('divisi')->result();
        $data['jabatan'] = $this->m_talenta->get_data('jabatan')->result();
        $data['shift'] = $this->m_talenta->get_data('shift')->result();
        $where = array('id_karyawan' => $id);
        $data['detail'] = $this->db->query("SELECT * FROM karyawan 
            INNER JOIN user ON user.nip = karyawan.nip
            INNER JOIN divisi ON divisi.id_divisi = karyawan.id_divisi
            INNER JOIN jabatan ON jabatan.id_jabatan = karyawan.id_jabatan
            WHERE id_karyawan='$id'")->result();
        $this->load->view('user_interface/user/header', $data);
        $this->load->view('user/detail_karyawan', $data);
        $this->load->view('user_interface/user/footer');
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
