<footer class="footer">
	<div id="shopify-section-theme-footer" class="shopify-section">
		<section class="footer_instagram_block">
			<div class="footer_instagram_wrapper">
				<div class="footer_instagram_inner">
					<div class="footer_instagram_content">
						<div id="instafeed">
						</div>
						<script type="text/javascript">
							var feed = new Instafeed({
								get: 'user',
								userId: 4613449456,
								accessToken: '4613449456.1677ed0.3c99c78d02524e54a5b65b46007d99e6',
								after: function() {
									$("#instafeed a > img").each(function(index) {
										var src = $(this).attr('src').replace('/s150x150/', '/s320x320/');
										$(this).attr('src', src);
									});
								},
								limit: 14
							});
							feed.run();
						</script>
					</div>
				</div>
			</div>
		</section>
		<section class="footer_social_block">
			<div class="footer_social_wrapper">
				<div class="container">
					<div class="row">
						<div class="footer_social_inner">
							<div class="footer_social_content">
								<a href="#" title="Bridal 1 on Facebook" class="icon-social facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" title="Bridal 1 on Twitter" class="icon-social twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" title="Bridal 1 on Google+" class="icon-social google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" title="Bridal 1 on Pinterest" class="icon-social pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" title="Bridal 1 on Instagram" class="icon-social instagram"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="copy-right">
			<div class="copy-right-wrapper">
				<div class="container">
					<div class="row">
						<div class="copy-right-inner">
							<div class="copy-right-group">
								<div class="footer_copyright">Copyright © 2017 <a href="./index.html" title=""></a>. All Rights Reserved</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>

<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Modal Lightbox-->
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<div class="modal-content">
			<div class="modal-body">
				<img src="assets/images/b17.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<!-- Float right icon -->
<div class="float-right-icon">
	<ul>
		<li>
			<div id="scroll-to-top" data-toggle="" data-placement="left" title="Scroll to Top" class="off">
				<i class="fa fa-angle-up"></i>
			</div>
		</li>
	</ul>
</div>
<?php if ($this->session->flashdata('gagalLogin')) { ?>
	<script>
		swal({
			title: "Login Failed!",
			text: "Email atau password salah, silahkan coba lagi",
			icon: "error",
			timer: 2000
		});
	</script>
<?php } ?>
<?php if ($this->session->flashdata('suksesLogin')) { ?>
	<script>
		swal({
			title: "Login Success!",
			text: "Anda berhasil login",
			icon: "success",
			timer: 2000
		});
	</script>
<?php } ?>
<?php if ($this->session->flashdata('akun_ada')) { ?>
	<script>
		swal({
			title: "Registration Failed!",
			text: "Akun sudah terdaftar!",
			icon: "error",
			timer: 2000
		});
	</script>
<?php } ?>

<?php if ($this->session->flashdata('insert_akun')) { ?>
	<script>
		swal({
			title: "Registration Success!",
			text: "Akun sudah tersimpan, silahkan login dan lengkapi data",
			icon: "success",
			timer: 3000
		});
	</script>
<?php } ?>
<?php if ($this->session->flashdata('insert_data', TRUE)) { ?>
	<script>
		swal({
			title: "Insert Success!",
			text: "Data anda telah berhasil masuk!",
			icon: "success",
			timer: 2000
		});
	</script>
<?php } ?>
<script>
	$(document).ready(function() {
		$('#mahasiswa').hide();
		$('#karyawan').hide();
		$('#paket').change(function() {
			if ($('#paket').val() == "1") {
				$('#daftar').show();
				$('#mahasiswa').hide();
				$('#karyawan').hide();
			} else if ($('#paket').val() == '2') {
				$('#daftar').show();
				$('#mahasiswa').hide();
				$('#karyawan').hide();
			} else if ($('#jurusan').val() == '3') {
				$('#daftar').hide();
				$('#mahasiswa').show();
				$('#karyawan').hide();
			}
		});
	})
</script>

</body>

</html>
