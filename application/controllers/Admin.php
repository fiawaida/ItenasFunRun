<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $query = $this->db->query("SELECT count(id_tamu) as jmlHadir from tamu where status='hadir' ")->result();
        foreach ($query as $d => $object) {
            $data['jml_hadir'] = $object->jmlHadir;
        };
        $hadir = $this->db->query("SELECT count(id_tamu) as jmlAkanHadir from tamu where status!='hadir' ")->result();
        foreach ($hadir as $d => $object) {
            $data['jml_Akanhadir'] = $object->jmlAkanHadir;
        };
        $data['meja'] = $this->Auth_model->getMeja()->result();
        $data['tamu'] = $this->Auth_model->getTamu()->result();
        $data['riwayat'] = $this->Auth_model->getHistory()->result();
        // var_dump($data['tamu']);
        // die();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
    public function UpHadir($id)
    {
        $data = [
            "status" => 'hadir',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ];

        $this->db->where('id_tamu', $id);
        $this->db->update('tamu', $data);
        $this->session->set_flashdata('insert_pengajuan', 'Diubah');

        redirect('admin/guest');
    }

    public function history()
    {
        $data['riwayat'] = $this->Auth_model->getHistory()->result();

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/history', $data);
        $this->load->view('admin/footer');
    }

    public function guest()
    {
        $data['undangan'] = $this->Auth_model->getTamu()->result();
        // var_dump($data['undangan']);
        // die();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/guest_book', $data);
        $this->load->view('admin/footer');
    }
}
