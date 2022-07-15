<?php

function kodePendaftar()
{
    $ci = get_instance();
    $query = "SELECT max(no_pendaftaran) as maxKode FROM tbl_pendaftar";
    $data = $ci->db_bsc->query($query)->row_array();
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 3, 3);
    $noUrut++;
    $char = "INVF";
    $thn = date('Y');
    $kodeBaru = $char . $thn . sprintf("%03s", $noUrut);
    return $kodeBaru;
}
