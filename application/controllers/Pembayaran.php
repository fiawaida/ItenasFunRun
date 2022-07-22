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
        $data['peserta'] = $this->db->get_where('tbl_peserta', ['username' => $this->session->userdata('username')])->row_array();
        if ($data['peserta']['keterangan'] == "Telah Bayar") {
            $this->load->view('home/templates/header_user');
            $this->load->view('home/pembayaran_berhasil', $data);
            $this->load->view('home/templates/footer');
        } else if ($data['peserta']['keterangan'] == "Belum Bayar") {
            $this->load->view('home/templates/header_user');
            $this->load->view('home/kehadiran', $data);
            $this->load->view('home/templates/footer');
        } else if ($data['peserta']['keterangan'] == "Selesai") {
            $this->load->view('home/templates/header_user');
            $this->load->view('home/pembayaran_berhasil', $data);
            $this->load->view('home/templates/footer');
        }
    }

    public function upload_pembayaran()
    {
        $config['upload_path'] = './assets/bukti_bayar';
        $config['encrypt_name'] = TRUE;
        $config['allowed_types'] = 'jpeg|jpg|png';
        $this->upload->initialize($config);
        $upload = $this->upload->do_upload('bukti');
        if (empty($upload)) {
            $this->session->set_flashdata('failed', "Tambah Gagal");
            redirect('pembayaran');
        }
    }

    public function addPembayaran()
    {
        $date = date('Y-m-d H:i:s');
        $this->upload_pembayaran();
        $id = $this->db->get_where('tbl_peserta', ['username' => $this->session->userdata('username')])->row('id_user');
        $tiket = $this->db->get_where('tbl_peserta', ['username' => $this->session->userdata('username')])->row('id_tiket');
        $data = array(
            'id_tiket' => $tiket,
            'nama_file' => $this->input->post('nama_file'),
            'file' => $this->upload->data('file_name'),
            'tgl_pembayaran' => date('Y-m-d H:i:s'),
            'id_user' => $id,
            'created_at' => $date,
            'updated_at' => $date
        );
        $query = $this->db->insert('tbl_pembayaran', $data);
        if ($query) {
            $data = array(
                'keterangan' => "Telah Bayar",
                'updated_at' => date('Y-m-d H:i:s')
            );
            $this->db->where('id_user', $id)->update('tbl_peserta', $data);
            $this->session->set_flashdata('insert_akun', "Tambah Berhasil");
        } else {
            $this->session->set_flashdata('failed', TRUE);
        }
        redirect('pembayaran');
    }
}
