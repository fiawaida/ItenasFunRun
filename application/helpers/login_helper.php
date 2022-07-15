<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('home');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

        if ($userAccess->num_rows() < 1) {
            if ($role_id == 1) {
                redirect('mahasiswa');
            } else if ($role_id == 2) {
                redirect('prodi');
            } else if ($role_id == 3) {
                redirect('dekan');
            } else if ($role_id == 4) {
                redirect('bka');
            } else if ($role_id == 5) {
                redirect('pendaftar');
            } else if ($role_id == 9) {
                redirect('ba');
            }
        }
    }
}
