<?php
class PendaftaranModel extends CI_Model
{
    public function addUser150()
    {
        $data = array(
            'id_role' => 1,
            'username' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('user', $data);
        $query = $this->db->get_where('user', ['username' => $this->input->post('email')])->row('id_user');
        $data = array(
            'id_user' => $query,
            'id_tiket' => 1,
            'nama_peserta' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('tlp'),
            'no_dada' => $this->input->post('no_dada'),
            'alamat' => $this->input->post('alamat'),
            'kondisi_medis' => $this->input->post('medis'),
            'status_pembayaran' => 'belum',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('peserta', $data);
    }

    public function addUser75()
    {
        $data = array(
            'id_role' => 1,
            'username' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('user', $data);
        $query = $this->db->get_where('user', ['username' => $this->input->post('email')])->row('id_user');
        $data = array(
            'id_user' => $query,
            'id_tiket' => 2,
            'nama_peserta' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('tlp'),
            'no_dada' => $this->input->post('no_dada'),
            'alamat' => $this->input->post('alamat'),
            'kondisi_medis' => $this->input->post('medis'),
            'status_pembayaran' => 'belum',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('peserta', $data);
    }
    public function addUserMhs()
    {
        $data = array(
            'id_role' => 1,
            'username' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('user', $data);
        $query = $this->db->get_where('user', ['username' => $this->input->post('email')])->row('id_user');
        $data = array(
            'id_user' => $query,
            'id_tiket' => 3,
            'nama_peserta' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('tlp'),
            'alamat' => $this->input->post('alamat'),
            'kondisi_medis' => $this->input->post('medis'),
            'status_pembayaran' => 'belum',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('peserta', $data);
    }
    public function addUserKaryawan()
    {
        $data = array(
            'id_role' => 1,
            'username' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('user', $data);
        $query = $this->db->get_where('user', ['username' => $this->input->post('email')])->row('id_user');
        $data = array(
            'id_user' => $query,
            'id_tiket' => 3,
            'nama_peserta' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('tlp'),
            'alamat' => $this->input->post('alamat'),
            'kondisi_medis' => $this->input->post('medis'),
            'status_pembayaran' => 'belum',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        );
        $this->db->insert('peserta', $data);
    }

    public function kodeM()
    {
        $kode = "M-";
        $query = "SELECT max(no_dada) as k FROM peserta";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['k'];
        $max_kode2 = (int)substr($max_kode, 8, 3);
        $max_kode2++;
        $kode_auto = $kode . sprintf('%04s', $max_kode2);

        $data = [
            'no_dada' => $kode_auto
        ];
        // $this->db->insert('peserta', $data);
        return $kode_auto;
    }

    public function kodeJ()
    {
        $kode = "J-";
        $query = "SELECT max(no_dada) as k FROM peserta";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['k'];
        $max_kode2 = (int)substr($max_kode, 8, 3);
        $max_kode2++;
        $kode_auto = $kode . sprintf('%04s', $max_kode2);

        $data = [
            'no_dada' => $kode_auto
        ];
        $this->db->insert('peserta', $data);
        return $kode_auto;
    }

    public function getMeja()
    {
        $query = $this->db->query("SELECT * FROM meja");
        return $query;
    }
    public function jmlHadir()
    {
        $query = $this->db->query("SELECT count(id_tamu) from tamu where status='hadir' ");
        return $query;
    }
    public function getHistory()
    {
        $query = $this->db->query("SELECT * from tamu where status='hadir'");
        return $query;
    }
    public function getTable()
    {
        $this->db->select('id_meja, meja.no_meja, nama');
        $this->db->from('meja');
        $this->db->join('tamu', 'tamu.no_meja = meja.id_meja');
        $this->db->join('riwayat', 'riwayat.id_tamu = tamu.id_tamu');
        $query = $this->db->get();
        return $query->result();
    }
}
