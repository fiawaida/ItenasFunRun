<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="page-heading heading-content rsvp-heading">
            <div class="heading-content-group">
                <h1 class="breadcrumb-title"><span></span></h1>
                <div class="heading-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="page-heading-inner heading-group">
                                <div class="breadcrumb clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-content">
            <div class="page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-inner">
                            <div id="shopify-section-rsvp-template" class="shopify-section">
                                <div class="page_rsvp_content">
                                    <br>
                                    <div class="rsvp_content">
                                        <form method="post" action="<?= base_url('home/addPendaftar'); ?>" id="contact_form" class="contact-form" accept-charset="UTF-8">
                                            <div id="contactFormWrapper" class="contactFormWrapper">
                                                <div class="contactFormWrapper_inner">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id">
                                                    </div>
                                                    <p class="col-sm-12 input-row">
                                                        <label class="label">Kategori Itenas Fun Run :</label>
                                                    <p class="col-sm-12 input-row">
                                                        <input type="" id="" name="" placeholder="Email address *" value="PAKET MEDALI 150K" readonly>
                                                    </p>
                                                    <hr>

                                                    <div id="daftar">
                                                        <h2>1. Data Akun</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Email :</label>
                                                            <input class="form-control" type="email" id="username" name="username" placeholder="Email address *">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Password :</label>
                                                            <input class="form-control" type="password" id="password" name="password" placeholder="">
                                                        </p>
                                                        <br>
                                                        <br>
                                                        <h2>2. Data Diri</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nomor KTP :</label>
                                                            <input class="form-control" type="text" id="nomor_pengenal" name="nomor_pengenal" placeholder="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nama Lengkap :</label>
                                                            <input class="form-control" type="text" id="nama_peserta" name="nama_peserta" placeholder="Your name *">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Jenis Kelamin :</label>
                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jenis_kelamin">
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Tanggal Lahir :</label>
                                                            <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" placeholder="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Alamat :</label>
                                                            <textarea class="form-control" rows="15" cols="75" id="alamat" name="alamat" placeholder="Alamat rumah tinggal saat ini"></textarea>
                                                        </p>
                                                        <p class=" col-sm-6 input-row">
                                                            <label class="label">Nomor Handphone :</label>
                                                            <input class="form-control" type="text" id="no_hp" name="no_hp" placeholder="Number phone">
                                                        </p>

                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Nomor Dada :</label>
                                                            <input class="form-control" type="text" id="no_dada" name="no_dada" placeholder="4 digit nomor" value="<?= $no_dada++ ?>" readonly>
                                                        </p>
                                                        <span class="">
                                                            <img src="<?= base_url() ?>assets/images/media/size.jpeg" alt="">
                                                        </span>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Ukuran Baju Jersey :</label>
                                                            <input class="form-control" type="text" id="size_jersey" name="size_jersey" placeholder="masukan jenis ukuran baju">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Instagram Aktif :</label>
                                                            <input class="form-control" type="text" id="instagram" name="instagram">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Golongan Darah :</label>
                                                            <input class="form-control" type="text" id="gol_darah" name="gol_darah">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Kondisi Medis atau Riwayat Penyakit :</label>
                                                            <input class="form-control" type="text" id="riwayat_medis" name="riwayat_medis" placeholder="isikan terkait kondisi medis saat ini atau riwayat penyakit yang pernah dialami">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <input type="submit" id="contactFormSubmit" class="btn">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</div>
