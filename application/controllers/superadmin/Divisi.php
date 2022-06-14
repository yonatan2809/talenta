<?php

class Divisi extends CI_Controller
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
        $data['title'] = "Data Divisi";
         $data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
        $this->load->view('user_interface/superadmin/header', $data);
        $this->load->view('superadmin/divisi', $data);
        $this->load->view('user_interface/superadmin/footer');
    }

    public function proses()
    {
        $kode_divisi      = $this->input->post('kode_divisi');
        $nama_divisi    = $this->input->post('nama_divisi');


        $data = array(
            'kode_divisi'    => $kode_divisi,
            'nama_divisi'  => $nama_divisi
        );

        $this->m_talenta->insert_data($data, 'divisi');
        redirect('superadmin/divisi');
    }

    public function update()
    {
        $id_divisi         = $this->input->post('id_divisi');
        $kode_divisi                = $this->input->post('kode_divisi');
        $nama_divisi       = $this->input->post('nama_divisi');

        $data = array(
            'kode_divisi'   => $kode_divisi,
            'nama_divisi'      => $nama_divisi
        );

        $where = array(
            'id_divisi' => $id_divisi
        );
        $this->m_talenta->update_data('divisi', $data, $where);
        redirect('superadmin/divisi');
    }

     public function delete($id)
    {
        $where = array('id_divisi' => $id);
        $this->m_talenta->delete_data($where, 'divisi');
        redirect('superadmin/divisi');
    }
}
