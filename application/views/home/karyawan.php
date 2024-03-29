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
                                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://cs-bridal-1.myshopify.com/" title="Bridal 1" itemprop="url"><span itemprop="title">Home</span></a>
                                    </span>
                                    <span class="arrow-space">/</span>
                                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="http://demo.themeforshop.com/pages/rsvp" title="Pendaftartaran" itemprop="url"><span itemprop="title">Pendaftaran</span></a>
                                    </span>
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
                                                        <input type="hidden" class="form-control" name="id" value="">
                                                    </div>
                                                    <p class="col-sm-12 input-row">
                                                        <label class="label">Kategori Itenas Fun Run :</label>
                                                    <p class="col-sm-12 input-row">
                                                        <input type="email" id="email" name="email" placeholder="Email address *" value="PAKET FREE Karyawan Itenas" readonly>
                                                    </p>
                                                    <hr>

                                                    <div id="daftar">
                                                        <h2>1. Data Akun</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Email :</label>
                                                            <input type="email" id="email" name="email" placeholder="Email address *" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Password :</label>
                                                            <input type="password" id="password" name="password" placeholder="" value="">
                                                        </p>
                                                        <br>
                                                        <br>
                                                        <h2>2. Data Diri</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nomor KTP :</label>
                                                            <input type="text" id="nik" name="nik" placeholder="" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nama :</label>
                                                            <input type="text" id="nama" name="nama" placeholder="Your name *" value="">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Jenis Kelamin:</label>
                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jk">
                                                                <option selected value="">Pilih Jenis Kelamin</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Tanggal Lahir :</label>
                                                            <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="" value="">
                                                        </p>
                                                        <p class=" col-sm-6 input-row">
                                                            <label class="label">Nomor Handphone :</label>
                                                            <input type="text" id="telp" name="tlp" placeholder="Number phone" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Alamat :</label>
                                                            <textarea rows="15" cols="75" id="alamat" name="alamat" placeholder="Alamat rumah tinggal saat ini" value=""></textarea>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Kondisi Medis atau Riwayat Penyakit:</label>
                                                            <input type="text" id="medis" name="medis" placeholder="isikan terkait kondisi medis saat ini atau riwayat penyakit yang pernah dialami" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <input type="submit" id="contactFormSubmit" class="btn">
                                                        </p>
                                                    </div>
                                                    <div id="mahasiswa">
                                                        <h2>1. Data Akun</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Email :</label>
                                                            <input type="email" id="email" name="email" placeholder="Email address *" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Password :</label>
                                                            <input type="email" id="password" name="password" placeholder="" value="">
                                                        </p>
                                                        <br>
                                                        <br>
                                                        <h2>2. Data Diri</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">NIM :</label>
                                                            <input type="email" id="nik" name="nik" placeholder="" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nama Lengkap:</label>
                                                            <input type="text" id="nama" name="nama" placeholder="Your name *" value="">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Jenis Kelamin:</label>
                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jk">
                                                                <option selected value="">Pilih Jenis Kelamin</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Tanggal Lahir :</label>
                                                            <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="" value="">
                                                        </p>
                                                        <p class=" col-sm-6 input-row">
                                                            <label class="label">Nomor Handphone :</label>
                                                            <input type="text" id="telp" name="tlp" placeholder="Number phone" value="">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Nomor Dada :</label>
                                                            <input type="text" id="no_dada" name="no_dada" placeholder="4 digit nomor" value="" readonly>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Alamat :</label>
                                                            <textarea rows="15" cols="75" id="alamat" name="alamat" placeholder="Alamat rumah tinggal saat ini" value=""></textarea>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Kondisi Medis atau Riwayat Penyakit:</label>
                                                            <input type="text" id="medis" name="medis" placeholder="isikan terkait kondisi medis saat ini atau riwayat penyakit yang pernah dialami" value="" readonly>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <input type="submit" id="contactFormSubmit" class="btn">
                                                        </p>
                                                    </div>
                                                    <div id="karyawan">
                                                        <h2>1. Data Akun</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Email :</label>
                                                            <input type="email" id="email" name="email" placeholder="Email address *" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Password :</label>
                                                            <input type="email" id="password" name="password" placeholder="" value="">
                                                        </p>
                                                        <br>
                                                        <br>
                                                        <h2>2. Data Diri</h2>
                                                        <hr>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">NPP :</label>
                                                            <input type="email" id="nik" name="nik" placeholder="" value="">
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Nama Lengkap:</label>
                                                            <input type="text" id="nama" name="nama" placeholder="Your name *" value="">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Jenis Kelamin:</label>
                                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jk">
                                                                <option selected value="">Pilih Jenis Kelamin</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Tanggal Lahir :</label>
                                                            <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="" value="">
                                                        </p>
                                                        <p class=" col-sm-6 input-row">
                                                            <label class="label">Nomor Handphone :</label>
                                                            <input type="text" id="telp" name="tlp" placeholder="Number phone" value="">
                                                        </p>
                                                        <p class="col-sm-6 input-row">
                                                            <label class="label">Nomor Dada :</label>
                                                            <input type="text" id="no_dada" name="no_dada" placeholder="4 digit nomor" value="" readonly>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Alamat :</label>
                                                            <textarea rows="15" cols="75" id="alamat" name="alamat" placeholder="Alamat rumah tinggal saat ini" value=""></textarea>
                                                        </p>
                                                        <p class="col-sm-12 input-row">
                                                            <label class="label">Kondisi Medis atau Riwayat Penyakit:</label>
                                                            <input type="text" id="medis" name="medis" placeholder="isikan terkait kondisi medis saat ini atau riwayat penyakit yang pernah dialami" value="" readonly>
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