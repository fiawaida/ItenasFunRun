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
                                                        <span class="location">Scan QRCode Pembayaran</span>
                                                        <?php if ($peserta['id_tiket'] == 1) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Rp150.000 </strong></span>
                                                            <span class="">
                                                                <img src="<?= base_url('assets/images/media/Qris.jpg') ?>">
                                                            </span>
                                                        <?php } else if ($peserta['id_tiket'] == 2) { ?>
                                                            <span class="location">Total Pembayaran : <strong> Rp75.000 </strong></span>
                                                            <span class="">
                                                                <img src="<?= base_url('assets/images/media/Qris.jpg') ?>">
                                                            </span>
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