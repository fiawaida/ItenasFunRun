<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('PendaftaranModel');
    }


    public function index()
    {
        // $data['kode'] = $this->PendaftaranModel->kodeM();
        // die(var_dump($data['kode']));
        $kode = "M-";
        $query = "SELECT max(no_dada) as k FROM tbl_peserta";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['k'];
        $max_kode2 = (int)substr($max_kode, 8, 3);
        $max_kode2++;
        $kode_auto = $kode . sprintf('%04s', $max_kode2);
        $data = [
            'no_dada' => $kode_auto
        ];
        // $this->db->insert('peserta', $data);
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran150k', $data);
        $this->load->view('home/templates/footer');
    }
    public function kodeJ()
    {
        $kode = "J-";
        $query = "SELECT max(no_dada) as k FROM tbl_peserta";
        $data = $this->db->query($query)->row_array();
        $max_kode = $data['k'];
        $max_kode2 = (int)substr($max_kode, 8, 3);
        $max_kode2++;
        $kode_auto = $kode . sprintf('%04s', $max_kode2++);
        $data = [
            'no_dada' => $kode_auto
        ];
        return $kode_auto;
    }
    public function tujuhlima()
    {
        $data['kode'] = $this->kodeJ();
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran75K', $data);
        $this->load->view('home/templates/footer');
    }
    public function mahasiswa()
    {
        $data['mahasiswa'] = $this->db->get('tbl_mahasiswa')->result();

        $this->load->view('home/templates/header');
        $this->load->view('home/mahasiswa', $data);
        $this->load->view('home/templates/footer');
    }
    public function karyawan()
    {

        $this->load->view('home/templates/header');
        $this->load->view('home/karyawan');
        $this->load->view('home/templates/footer');
    }

    public function print($id)
    {
        $data['undangan'] = $this->db->get_where('tamu', ['id_tamu' => $id])->row_array();
        $this->load->view('home/header');
        $this->load->view('home/cetak', $data);
    }
}
