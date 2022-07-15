<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['id'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row('id_user');
        $data['peserta'] = $this->db->get_where('peserta', ['id_user' =>  $data['id']])->row_array();
        // die(var_dump($data['peserta']));
        $this->load->view('home/templates/header');
        $this->load->view('home/kehadiran', $data);
        $this->load->view('home/templates/footer');
    }
}
