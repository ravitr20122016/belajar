<?php

/**SESSION LOGIN JIKA TIDAK MAKA KEMBALI KE HALAMAN LOGIN
-pada session ada ['user_id'] PENJELASAN = user adalah nama file dan id adalah nama colom
**/
	
		include "koneksi.php";
	
?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>


	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Pendaftaran</div>
				<div class="panel-body">


					<form role="form" method="post">
						<?php
						if (isset($_GET['daftar-sukses'])) {?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
	  <strong>Pendaftaran Sukses</strong> Silahkan Login <a href="login.php">Disini...!!</a>
	</div>
						<?php }?>

								<?php
						if (isset($_GET['datakosong'])) {?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
	  <strong>Form Tidak Boleh Kosong</strong> Silahkan Isi Form Dan Daftar
	</div>
						<?php }?>



								<?php
						if (isset($_GET['sudah-ada'])) {?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
	  <strong>Maaf Username Tersebut Sudah Ada </strong> Silahkan Registrasi Ulang
	</div>
						<?php }?>




						
						
						<fieldset>
							<div class="form-group">
							<label>Username</label>
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
							<label>Password</label>
								<input class="form-control" placeholder="password" name="password" type="password" value="">
							</div>
							<div class="form-group">
							<label>email</label>
								<input class="form-control" placeholder=email name="email" type="email" value="">
							</div>
							


							<div class="row">
							<div class="col-md-6"><input type="submit" class="btn btn-primary btn-lg" value="DAFTAR" name="simpan" style="margin-left: 40%;"></div>
							<div class="col-md-6"><a href="index.php" type="submit" class="btn btn-primary btn-lg">KEMBALI</a></div>
							</div>

							
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	





















<?php 


if (isset($_POST['simpan']))
	{

	$username = $_POST['username'];
	
	$password = $_POST['password'];
	$email = $_POST['email'];
	$akses= 'user';

	$db='user';





	$user_check = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user where username ='$username'"));
	if ($user_check >0) 
	{
		header("location: regis.php?sudah-ada");
	}
	elseif (empty($username)||empty($password)||empty($email)||empty($akses)) {
		header("location: regis.php?datakosong");
	}
	else{
	
	$Tambah = mysqli_query($koneksi,"INSERT INTO $db(username,password,email,akses) VALUES('$username','$password','$email','$akses')");
	
	if ($Tambah) 
	{
		header("location: regis.php?daftar-sukses");
	}

	
	else{
		echo "data gagal di input".mysqli_connect_error();

		}
	}
}




 ?>


<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


