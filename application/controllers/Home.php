<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PendaftaranModel');
    }

    public function index()
    {
        // $data['undangan'] = $this->db->get('tamu')->result();

        $this->load->view('home/templates/header');
        $this->load->view('home/mainpage');
        $this->load->view('home/templates/footer');
    }

    public function addPendaftar()
    {

        $this->PendaftaranModel->addUser150();
        $this->session->set_flashdata('daftar_berhasil', 'Tugas berhasil ditambahkan');
        redirect('home/Authlogin');
    }

    public function addPendaftar75()
    {

        $this->PendaftaranModel->addUser75();
        $this->session->set_flashdata('daftar_berhasil', 'Tugas berhasil ditambahkan');
        redirect('home/Authlogin');
    }
    public function addPendaftarMahasiswa()
    {

        $this->PendaftaranModel->addUserMhs();
        $this->session->set_flashdata('daftar_berhasil', 'Tugas berhasil ditambahkan');
        redirect('home/Authlogin');
    }

    public function Authlogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('home/templates/header');
            $this->load->view('login/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //jika usernya ada
        if ($user) {
            //cek password
            if (md5($password) == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'id_role' => $user['id_role']
                ];

                $this->session->set_userdata($data);

                if ($user['id_role'] == 1) {
                    redirect('pembayaran');
                } else if ($user['id_role'] == 2) {
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah!
                </div>');
                    redirect('home/Authlogin');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            User tidak terdaftar!
          </div>');
            redirect('home/Authlogin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
          </div>');
        redirect('home');
    }
}
