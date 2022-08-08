<!DOCTYPE html>
<html>
<head>
	<title>Login | Sacode</title>
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<!-- CONTAINER START -->
<div class="container">
	<div class="row mt-5">
		<div class="col-6 shadow border m-auto rounded p-5">
			<form>
				<div class="text-center">
					<img src="images/logo-sacode.png" class="mb-4" width="120px" alt="Logo SaCode">
				</div>
				<div class="text-center mt-3">
					<h1 class="fw-bold">SaCode</h1>
				</div>
				<div class="text-center mt-4">
					<p class="text-muted">#PapuaCodingSchool #PapuaTechCommunity</p>
				</div>
				<div>
					<h2 class="fw-bolder">Login</h2>
					<hr>
				</div>
				<div class="form-group mb-3">
					<label class="form-label text-muted" for="email">Alamat Email</label>
					<input type="email" name="" class="form-control form-control-lg py-3" placeholder="Masukkan Email" id="email" required="">
				</div>
				<div class="form-group mb-3">
					<label for="password" class="form-label text-muted" for="">Password</label>
					<input id="password" type="password" name="" class="form-control form-control-lg py-3" placeholder="Masukkan Password" required="">
				</div>
				<div class="form-group mb-3">
					<a href="lupa.php">Lupa Kata Sandi ?</a>
				</div>
				<div class="form-group mb-3 d-grid">
					<button type="Submit" class="btn btn-primary fw-bold btn-lg py-3">Login</button>
				</div>
				<div class="mb-5 text-center">
					<p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- CONTAINER END -->

<!-- FOOTER START -->
<footer>
	<p class="mt-5 text-mute text-center"> Copyright @ 2022 Developed By Archy Gia Destara</p>
</footer>
<!-- FOOTER END -->

<!-- JS BOOTSTRAP -->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>
</html>