<footer style="border-top: 4px solid #ff8680; padding-top: 40px; background-color: #fff; font-family: 'Montserrat', sans-serif;">
		<div class="container" style="padding-bottom: 50px;">
			<div class="row">
				<!-- Company Info Column -->
				<div class="col-md-4">
					<h3 style="font-family: 'Playfair Display', serif; color: #ff8680; margin-bottom: 20px; font-weight: 700;">Informasi Ulos</h3>
					<p style="color: #555; line-height: 1.8;"><i class="glyphicon glyphicon-map-marker" style="color: #e6736d; margin-right: 8px;"></i> Jl. Sitoluama 1 No.10C</p>
					<p style="color: #555; line-height: 1.8;"><i class="glyphicon glyphicon-earphone" style="color: #e6736d; margin-right: 8px;"></i> +6287804616097</p>
					<p style="color: #555; line-height: 1.8;"><i class="glyphicon glyphicon-envelope" style="color: #e6736d; margin-right: 8px;"></i> InformasiUlos@gmail.com</p>
				</div>
				
				<!-- Menu Links Column -->
				<div class="col-md-4">
					<h3 style="font-family: 'Playfair Display', serif; color: #ff8680; margin-bottom: 20px; font-weight: 700;">Menu</h3>
					<p><a href="index.php" style="color: #555; text-decoration: none; transition: all 0.3s ease; line-height: 2.0; display: block;">
						<i class="glyphicon glyphicon-home" style="color: #e6736d; margin-right: 8px;"></i> Beranda
					</a></p>
					<p><a href="produk.php" style="color: #555; text-decoration: none; transition: all 0.3s ease; line-height: 2.0; display: block;">
						<i class="glyphicon glyphicon-tag" style="color: #e6736d; margin-right: 8px;"></i> Produk
					</a></p>
					<p><a href="tradisional.php" style="color: #555; text-decoration: none; transition: all 0.3s ease; line-height: 2.0; display: block;">
						<i class="glyphicon glyphicon-bookmark" style="color: #e6736d; margin-right: 8px;"></i> Ulos Tradisional
					</a></p>
					<p><a href="modern.php" style="color: #555; text-decoration: none; transition: all 0.3s ease; line-height: 2.0; display: block;">
						<i class="glyphicon glyphicon-bookmark" style="color: #e6736d; margin-right: 8px;"></i> Ulos Modern
					</a></p>
					<p><a href="about.php" style="color: #555; text-decoration: none; transition: all 0.3s ease; line-height: 2.0; display: block;">
						<i class="glyphicon glyphicon-info-sign" style="color: #e6736d; margin-right: 8px;"></i> Tentang Kami
					</a></p>
				</div>

				<!-- User Account Column -->
				<div class="col-md-4">
					<h3 style="font-family: 'Playfair Display', serif; color: #ff8680; margin-bottom: 20px; font-weight: 700;">Akun</h3>
					<?php if(isset($_SESSION['kd_cs'])): ?>
						<div style="background: linear-gradient(to right, #ff8680, #e6736d); padding: 20px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
							<p style="color: white; font-weight: 600; margin-bottom: 5px;">Selamat datang,</p>
							<h4 style="color: white; font-family: 'Playfair Display', serif; margin-top: 0; margin-bottom: 15px;"><?php echo isset($_SESSION['user']) ? $_SESSION['user'] : 'User'; ?></h4>
							<a href="proses/logout.php" class="btn" style="background-color: white; color: #e6736d; border-radius: 30px; padding: 8px 15px; font-weight: 600; text-transform: uppercase; font-size: 12px; transition: all 0.3s ease; display: inline-block; text-align: center;">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					<?php else: ?>
						<p style="color: #555; margin-bottom: 20px;">Masuk untuk menjelajahi koleksi ulos kami dan melakukan pembelian.</p>
						<a href="user_login.php" class="btn" style="background: linear-gradient(to right, #ff8680, #e6736d); color: white; border-radius: 30px; padding: 10px 20px; font-weight: 600; text-transform: uppercase; font-size: 14px; transition: all 0.3s ease; display: inline-block; margin-right: 10px; border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
							<i class="glyphicon glyphicon-log-in"></i> Login
						</a>
						<a href="register.php" class="btn" style="background: white; color: #e6736d; border: 2px solid #e6736d; border-radius: 30px; padding: 8px 18px; font-weight: 600; text-transform: uppercase; font-size: 14px; transition: all 0.3s ease; display: inline-block;">
							<i class="glyphicon glyphicon-user"></i> Register
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="copy" style="background: linear-gradient(to right, #ff8680, #e6736d); padding: 15px; color: #fff; text-align: center;">
			<p style="margin: 0; font-size: 14px;">Copyright &copy; <?php echo date('Y'); ?> Informasi Ulos | Kelompok 18</p>
		</div>
	</footer>

</body>
</html>