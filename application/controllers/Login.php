<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$titleTag = 'Login';
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Aplikasi Kepegawaian";
			$this->load->view('login');
		} else {
			$nip = $this->input->post('nip');
			$password = $this->input->post('password');

			$cek = $this->m_talenta->cek_login($nip, $password);

			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan_error', 'Username dan password tidak terdaftar');
				redirect('login');
			} else {
				$this->session->set_userdata('role_id', $cek->role_id);
				$this->session->set_userdata('nama', $cek->nama);
				$this->session->set_userdata('nip', $cek->nip);
				switch ($cek->role_id) {
					case 1:
					redirect('superadmin/dashboard');
					break;
					case 2:
					redirect('admin/dashboard');
					break;
					case 3:
					redirect('user/dashboard');
					break;
					default:
					break;
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function tambah_admin()
	{
		$nik            = $this->input->post('nik');
		$nama_pegawai   = $this->input->post('nama_pegawai');
		$username       = $this->input->post('username');
		$password       = ($this->input->post('password'));
		$hak_akses      = $this->input->post('hak_akses');


		$data = array(
			'nik'               => $nik,
			'nama_pegawai'      => $nama_pegawai,
			'username'          => $username,
			'password'          => $password,
			'hak_akses'         => $hak_akses
		);

		$this->m_talenta->insert_data($data, 'data_admin');
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Tambah data akses admin", "success");');
		redirect('login');
	}

	public function delete_admin($id)
	{
		$where = array('id_pegawai' => $id);
		$this->m_talenta->delete_data($where, 'data_admin');
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Menolak data akses admin", "success");');
		redirect('admin/System/admin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
