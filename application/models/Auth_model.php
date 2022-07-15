<?php


class Auth_model extends CI_Model
{
    public function getTamu()
    {
        $query = $this->db->query("SELECT * FROM tamu");
        return $query;
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
