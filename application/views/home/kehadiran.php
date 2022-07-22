<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="page-content">
            <div class="page-wrapper">
                <div class="page-inner">
                    <div class="event-party-content">
                        <div id="shopify-section-event-information-template" class="shopify-section">
                            <div class="information_layout">
                                <div class="container">
                                    <div class="row">
                                        <div class="home_infoevent_inner">
                                            <div class="home_infoevent_content">
                                                <div class="infoevent_content col-sm-6">
                                                    <div class="infoevent_content_group">
                                                        <span class="">
                                                            <img src="<?= base_url() ?>assets/images/media/icon_funrun.png" alt="">
                                                        </span>
                                                        <?php if ($peserta['id_tiket'] == 1) { ?>
                                                            <span class="title">Paket Spesial IDR 150k</span>
                                                        <?php } else if ($peserta['id_tiket'] == 2) { ?>
                                                            <span class="title">Paket Regular IDR 75k</span>
                                                        <?php } else if ($peserta['id_tiket'] == 3) { ?>
                                                            <span class="title">Paket Free Mahasiswa</span>
                                                        <?php } else if ($peserta['id_tiket'] == 4) { ?>
                                                            <span class="title">Paket Free Karyawan</span>
                                                        <?php } ?>
                                                        <div class="datetime">
                                                            <span class="date"><?= $peserta['no_dada'] ?></span>
                                                            <span class="time"><?= $peserta['nama_peserta'] ?></span>
                                                        </div>
                                                        <span class="location">Scan QRCode berikut untuk melakukan Pembayaran atau transfer melalui no.rek 1425841933 a.n kegiatan itenas</span>
                                                        <?php if ($peserta['id_tiket'] == 1) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Rp150.000 </strong></span>
                                                            <div class="home_caption_bayar">
                                                                Apabila telah melakukan pembayaran, silakan <strong>upload bukti pembayaran pada tombol dibawah QRIS</strong> berikut agar dapat diverifikasi pada proses selanjutnya. Terimakasih.
                                                            </div>
                                                            <span class="">
                                                                <img src="<?= base_url('assets/images/media/Qris.jpg') ?>">
                                                            </span>
                                                            <br>
                                                            <hr>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti">
                                                                Upload Bukti
                                                            </button>
                                                        <?php } else if ($peserta['id_tiket'] == 2) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Rp75.000 </strong></span>
                                                            <div class="home_caption_bayar">
                                                                Apabila telah melakukan pembayaran, silakan <strong>upload bukti pembayaran pada tombol dibawah QRIS</strong> berikut agar dapat diverifikasi pada proses selanjutnya. Terimakasih.
                                                            </div>
                                                            <span class="">
                                                                <img src="<?= base_url('assets/images/media/Qris.jpg') ?>">
                                                            </span>
                                                            <br>
                                                            <hr>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti">
                                                                Upload Bukti
                                                            </button>
                                                        <?php } else if ($peserta['id_tiket'] == 3) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Free </strong></span>
                                                        <?php } else if ($peserta['id_tiket'] == 4) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Free </strong></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a class="btn" href="<?= base_url('tamu/print/' . $undangan['id_tamu']) ?>">Print</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<div class="modal fade" id="bukti" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pembayaran/addPembayaran'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php if ($peserta['id_tiket'] == 1) { ?>
                            <input class="form-control" name="nama_file" type="hidden" value="Pembayaran150K<?= $peserta['nama_peserta'] ?>">
                        <?php } else { ?>
                            <input class="form-control" name="nama_file" type="hidden" value="Pembayaran75K<?= $peserta['nama_peserta'] ?>">
                        <?php } ?>
                        <label for="exampleFormControlFile1"></label>
                        <input type="file" class="form-control-file" id="bukti_bayar" name="bukti" data-allowed-file-extensions="png jpg jpeg" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
