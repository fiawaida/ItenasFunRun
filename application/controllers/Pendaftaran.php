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
        $data['kode'] = $this->PendaftaranModel->kodeM();
        // die(var_dump($data['kode']));
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran150k', $data);
        $this->load->view('home/templates/footer');
    }


    public function tujuhlima()
    {
        $data['kode'] = $this->PendaftaranModel->kodeJ();
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran75K', $data);
        $this->load->view('home/templates/footer');
    }
    public function mahasiswa()
    {

        $this->load->view('home/templates/header');
        $this->load->view('home/mahasiswa');
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
