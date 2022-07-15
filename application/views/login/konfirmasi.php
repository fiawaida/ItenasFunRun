<div class="main-wrapper login-body">
	<div class="login-wrapper">
		<video muted loop id="autoplay">
			<source src="<?= base_url(); ?>assets/img/udanganinput.mp4" type="video/mp4">
		</video>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 col-lg-8 col-xl-9">
					<div class="card">
						<div class="card-body">
							<form action="tamu/edit" method="POST">
								<div class="form-group">
									<input type="hidden" class="form-control" name="id" value="<?= $undangan['id_tamu'] ?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" value="<?= $undangan['nama'] ?>">
								</div>
								<div class="form-group">
									<label>Email ID</label>
									<input type="email" class="form-control" name="email" value="<?= $undangan['email'] ?>">
								</div>
								<div class="form-group">
									<label>Nomor Handphone</label>
									<input type="text" class="form-control" name="tlp" value="<?= $undangan['no_hp'] ?>">
								</div>
								<div class="form-group">
									<label>Jumlah yang hadir </label>
									<input type="text" class="form-control" name="jml" value="<?= $undangan['jumlah'] ?>" readonly>
								</div>
								<div class="form-group">
									<label>Konfirmasi Kehadiran</label>
									<select class="form-control" name="konfirmasi">
										<?php foreach ($hadir as $k) : ?>
											<?php if ($k == $undangan['konfirmasi']) : ?>
												<option value="<?= $k; ?>" selected><?= $k; ?></option>
											<?php else : ?>
												<option value="<?= $k; ?>"><?= $k; ?></option>
											<?php endif; ?>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Pesan</label>
									<input type="text" class="form-control" name="pesan" value="<?= $undangan['pesan'] ?>">
								</div>
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn">Simpan Perubahan</button>
								</div>
							</form>

						</div>
					</div>
				</div>
				<?php if ($undangan['qr_code'] != '') { ?>
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						<div class="profile-sidebar">
							<div class="progress-bar-custom">
								<h6>QR Code untuk Bukti Kehadiran</h6>
								<img src="<?= base_url() ?>assets/QRCODE/<?= $undangan['qr_code'] ?>" class="img-fluid">
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>


<script>
	window.onload = function() {
		document.getElementById("autoplay").play();
	}
</script>