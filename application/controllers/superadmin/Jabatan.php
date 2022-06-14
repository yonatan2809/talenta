<?php

class Jabatan extends CI_Controller
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
        $data['title'] = "Data Jabatan";
         $data['jabatan'] = $this->db->query("SELECT * FROM jabatan")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/jabatan', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

     public function proses()
    {
        $kode_jabatan      = $this->input->post('kode_jabatan');
        $nama_jabatan    = $this->input->post('nama_jabatan');


        $data = array(
            'kode_jabatan'    => $kode_jabatan,
            'nama_jabatan'  => $nama_jabatan
        );

        $this->m_talenta->insert_data($data, 'jabatan');
        redirect('superadmin/jabatan');
    }

     public function update()
    {
        $id_jabatan         = $this->input->post('id_jabatan');
        $kode_jabatan                = $this->input->post('kode_jabatan');
        $nama_jabatan       = $this->input->post('nama_jabatan');

        $data = array(
            'kode_jabatan'   => $kode_jabatan,
            'nama_jabatan'      => $nama_jabatan
        );

        $where = array(
            'id_jabatan' => $id_jabatan
        );
        $this->m_talenta->update_data('jabatan', $data, $where);
        redirect('superadmin/jabatan');
    }

     public function delete($id)
    {
        $where = array('id_jabatan' => $id);
        $this->m_talenta->delete_data($where, 'jabatan');
        redirect('superadmin/jabatan');
    }
}
