<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PendaftaranModel');
        $this->load->model('Auth_model');
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
        $ada_akun = $this->db->where('username', $this->input->post('username'))->get('tbl_peserta')->row_array();
        if ($ada_akun['username'] == $this->input->post('username')) {
            $this->session->set_flashdata('akun_ada', TRUE);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'id_tiket' => '1',
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nomor_pengenal' => $this->input->post('nomor_pengenal'),
                'nama_peserta' => $this->input->post('nama_peserta'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => str_replace("_", "", $this->input->post('no_hp')),
                'no_dada' => $this->input->post('no_dada'),
                'size_jersey' => $this->input->post('size_jersey'),
                'instagram' => $this->input->post('instagram'),
                'riwayat_medis' => $this->input->post('riwayat_medis'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
        }
        $query = $this->db->insert('tbl_peserta', $data);
        if ($query) {
            $this->session->set_flashdata('insert_akun', "Tambah Berhasil");
            redirect('home/Authlogin');
        } else {
            $this->session->set_flashdata('insert_akun', "Tambah Gagal");
            redirect('pendaftaran');
        }
    }


    public function addPendaftar75()
    {
        $ada_akun = $this->db->where('username', $this->input->post('username'))->get('tbl_peserta')->row_array();
        if ($ada_akun['username'] == $this->input->post('username')) {
            $this->session->set_flashdata('akun_ada', TRUE);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'id_tiket' => '2',
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nomor_pengenal' => $this->input->post('nomor_pengenal'),
                'nama_peserta' => $this->input->post('nama_peserta'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => str_replace("_", "", $this->input->post('no_hp')),
                'no_dada' => $this->input->post('no_dada'),
                'size_jersey' => $this->input->post('size_jersey'),
                'instagram' => $this->input->post('instagram'),
                'riwayat_medis' => $this->input->post('riwayat_medis'),
                'keterangan' => "Belum Bayar",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
        }
        $query = $this->db->insert('tbl_peserta', $data);
        if ($query) {
            $this->session->set_flashdata('insert_akun', "Tambah Berhasil");
            redirect('home/Authlogin');
        } else {
            $this->session->set_flashdata('insert_akun', "Tambah Gagal");
            redirect('pendaftaran');
        }
    }
    public function addPendaftarMahasiswa()
    {
        $data['mahasiswa'] = $this->db->get('tbl_mahasiswa')->result();
        die(var_dump($data['mahasiswa']));
        $this->session->set_flashdata('daftar_berhasil', 'Tugas berhasil ditambahkan');
        redirect('home/Authlogin');
    }
    public function addPendaftarKaryawan()
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

        $user = $this->db->get_where('tbl_peserta', ['username' => $username])->row_array();

        //jika usernya ada
        if ($user) {
            //cek password
            if (md5($password) == $user['password']) {
                $data = [
                    'username' => $user['username']
                ];

                $this->session->set_userdata($data);
                $this->session->set_flashdata('suksesLogin', TRUE);
                redirect('pembayaran');
            } else {
                $this->session->set_flashdata('gagalLogin', TRUE);
                redirect('home/Authlogin');
            }
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
