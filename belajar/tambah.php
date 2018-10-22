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
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>


<div class="container login">
<div class="row">
	<form class="form-group" method="post">


	<div class=" col-md-1"><p style="padding-top: 12%"> Username</p></div>
	<div class="col-md-11"><input class="form-control" type="text" name="username" placeholder="username"></div>

	<div class="col-md-1"><p style="padding-top: 12%"> Password</p></div>
	<div class="col-md-11"><input class="form-control" type="password" name="password" placeholder="password"></div>
	
	<div class="col-md-1"><p style="padding-top: 12%;"> Email</p></div>
		<div class="col-md-11"><input class="form-control" type="email" name="email" placeholder="email"></div>
	
	<div class="col-md-4"></div>
	<div class="btn-group" role="group"><input type="submit" name="simpan" class="btn btn-primary"></div>
	<a href="login.php" class="btn btn-primary">Kembali</a>
	</form>

</div>
</div>

<?php 


if (isset($_POST['simpan']))
	{

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$db='user';
	$Tambah = mysqli_query($koneksi,"INSERT INTO $db(username,password,email) VALUES('$username','$password','$email')");
	
	if ($Tambah) {
		echo "Berhasil Menambahkan Data";
	}

	
	else{
		echo "data gagal di input".mysqli_connect_error();

	}
}

 ?>
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


