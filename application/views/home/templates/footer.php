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