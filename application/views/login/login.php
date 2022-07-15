<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="collection-heading heading-content ">
			<div class="container">
				<div class="row">
					<div class="collection-wrapper">
						<h1 class="collection-title"><span>Login</span></h1>
						<div class="breadcrumb-group">
							<div class="breadcrumb clearfix">
								<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="index.html" title="Bridal 1" itemprop="url">
										<span itemprop="title">Home</span>
									</a>
								</span>
								<span class="arrow-space">/</span>
								<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="login.html" title="Login" itemprop="url">
										<span itemprop="title">Login</span>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<section class="login-content">
			<div class="login-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="login-content-inner">
							<div id="customer-login">
								<div id="login" class="">
									<form id="customer_login1" action="<?= base_url('home/Authlogin'); ?>" accept-charset="UTF-8" method="post">
										<input type="hidden" value="customer_login" name="form_type">
										<input type="hidden" name="utf8" value="✓">
										<br>
										<label for="customer_username" class="label">Username</label>
										<input class="form-control" type="text" placeholder="Masukan Email" id="username" name="username" value="<?= set_value('username'); ?>">
										<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
										<label for="customer_password" class="label">Password</label>
										<input class="form-control" type="password" placeholder="Password" id="password" name="password" size="16">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										<div class="action_bottom">
											<input class="btn" type="submit">

										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script type="text/javascript">
			function showRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'block';
				document.getElementById('login').style.display = 'none';
			}

			function hideRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'none';
				document.getElementById('login').style.display = 'block';
			}

			if (window.location.hash == '#recover') {
				showRecoverPasswordForm()
			}
		</script>
	</main>
</div>