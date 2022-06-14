<?php

class M_talenta extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    //public function sumlembur($nama)
    //{
        //return $this->db->query("SELECT sum(jml_lembur) AS jumlahlembur from data_lembur where nama_pegawai = '$nama'");
    //}

    //public function sumpinjaman($nama)
    //{
        //return $this->db->query("SELECT sum(jml_pinjaman) AS jumlahpinjaman from data_pinjaman where nama_pegawai = '$nama'");
    //}

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }

    public function GetPie()
    {
        $query = $this->db->query("select * from data_jabatan;");
        return $query;
    }

    public function cek_login()
    {
        $nip             = set_value('nip');
        $password        = set_value('password');

        $result = $this->db->where('nip', $nip)
            ->where('password', ($password))
            ->limit(1)
            ->get('user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('data_pegawai', array('id_pegawai' => $id))->row();
        return $query;
    }

    public function detail_admin($id = NULL)
    {
        $query = $this->db->get_where('data_admin', array('id_pegawai' => $id))->row();
        return $query;
    }

    public function detail_jabatan($id = NULL)
    {
        $query = $this->db->get_where('data_jabatan', array('no_jabatan' => $id))->row();
        return $query;
    }

    public function detail_divisi($id = NULL)
    {
        $query = $this->db->get_where('data_divisi', array('no_divisi' => $id))->row();
        return $query;
    }

    public function detail_negara($id = NULL)
    {
        $query = $this->db->get_where('data_country', array('no_negara' => $id))->row();
        return $query;
    }

    public function detail_cuti($id)
    {
       $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('cuti', 'cuti.nip = karyawan.nip');
        $this->db->where('karyawan.nip', $id);
        return $this->db->get();
    }

     public function detail_payroll($id)
    {
       $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('transaksi', 'transaksi.nip = karyawan.nip');
        $this->db->where('karyawan.nip', $id);
        return $this->db->get();
    }

    public function detail_provinsi($id = NULL)
    {
        $query = $this->db->get_where('data_provinsi', array('no_provinsi' => $id))->row();
        return $query;
    }

    public function detail_pegawai($id = NULL)
    {
        $query = $this->db->get_where('data_pegawai', array('id_pegawai' => $id))->row();
        return $query;
    }

    public function detail_asuransi($id = NULL)
    {
        $query = $this->db->get_where('data_asuransi', array('no_asuransi' => $id))->row();
        return $query;
    }

    public function dataPegawai()
    {
        $this->db->select('*');
        $this->db->from('data_pegawai');
        $this->db->order_by('id_pegawai', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    function pegawaiid($id)
    {
        $this->db->select('*');
        $this->db->from('data_pegawai');
        $this->db->where('data_pegawai.id_pegawai', $id);
        return $this->db->get();
    }

    public function cuti()
    {
        $this->db->select('*');
        $this->db->from('data_cuti');
        $this->db->join('data_pegawai', 'data_cuti.nama_pegawai = data_pegawai.nama_pegawai');
        $this->db->order_by('data_cuti.id', 'desc');
        return $this->db->get();
    }
    
    public function cuti_pegawai($id)
    {
        $this->db->select('*');
        $this->db->from('cuti');
        $this->db->join('karyawan', 'cuti.nip = karyawan.nip');
        $this->db->where('karyawan.nip', $id);
        $this->db->order_by('cuti.waktu_pengajuan', 'desc');
        return $this->db->get();
    }

    function absendaily($id, $tahun, $bulan, $hari)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('nip', $id);
        $this->db->where('year(waktu)', $tahun);
        $this->db->where('month(waktu)', $bulan);
        $this->db->where('day(waktu)', $hari);
        return $this->db->get();
    }

    public function absen()
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->join('karyawan', 'absen.nip = karyawan.nip');
        $this->db->join('shift', 'absen.id_shift = shift.id_shift');
        $this->db->order_by('absen.waktu', 'desc');
        return $this->db->get();
    }

    public function absensi_pegawai($id)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->join('karyawan', 'absen.nip = karyawan.nip');
        $this->db->where('absen.nip', $id);
        $this->db->order_by('absen.waktu');
        return $this->db->get();
    }

    function hari($hari)
    {

        switch ($hari) {
            case 'Sun':
                $hari_ini = "Minggu";
                break;

            case 'Mon':
                $hari_ini = "Senin";
                break;

            case 'Tue':
                $hari_ini = "Selasa";
                break;

            case 'Wed':
                $hari_ini = "Rabu";
                break;

            case 'Thu':
                $hari_ini = "Kamis";
                break;

            case 'Fri':
                $hari_ini = "Jumat";
                break;

            case 'Sat':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }

        return $hari_ini;
    }
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
    function hadirtoday($tahun, $bulan, $hari)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('keterangan', 'masuk');
        $this->db->where('year(waktu)', $tahun);
        $this->db->where('month(waktu)', $bulan);
        $this->db->where('day(waktu)', $hari);
        return $this->db->get();
    }
}
