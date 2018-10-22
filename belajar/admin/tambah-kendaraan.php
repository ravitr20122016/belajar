
<?php

	
	ob_start();
	session_start();
	if(!isset($_SESSION['user_id'])||$_SESSION['user_akses']!='admin'){ header("location: ../login.php");}
		include "../koneksi.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Tipe Kendaraanr</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>






	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Welcome</span><?php echo $_SESSION["user_username"];?></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["user_username"];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
<ul class="nav menu">
			<li ><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="#"><em class="fa fa-car">&nbsp;</em>Tipe Kendaraan</a></li>
			<li ><a href="regis.php"><em class="fa fa-users">&nbsp;</em>Tambah User</a></li>
			<li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Tambah Tipe Kendaraan</h1>
			</div>
		</div><!--/.row-->
				
		
				
				
				<div class="panel panel-default">
					<div class="panel-heading">

							<?php
						if (isset($_GET['input-sukses'])) {?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
	  
	  <p name="msg">Data Berhasil Diinput</p>
	</div>
						<?php }?>


						

					</div>
					<div class="panel-body" style="padding-top:3%;">
						<div class="col-md-12">
							<form role="form" method="post">



								<div class="form-group">
									<label>Kode </label>
									<input class="form-control" name="kode" placeholder="Kode">
								</div>
								
								<div class="form-group">
									<label>Nama Kendaraan</label>
									<input class="form-control" name="nama_kend" placeholder="Nama Kendaraan">
								</div>

								<div class="form-group">
									<label>Tipe Kendaraan</label>
									<select class="form-control" name="tipe_kend">
											<option>--Pilihan--</option>
											<option>Mesin</option>
											<option>Non Mesin</option>
											
										</select>
								</div>
								
								
										
								
							
										<div class="form-group">
										<input type="submit" name="simpan" class="btn btn-lg btn-primary " value="Tambahkan">
										</div>
														
								</div>
								
							
						
					</div>
				</div><!-- /.panel-->




							<div class="panel panel-default">

							<?php
							$tampil= mysqli_query($koneksi,"SELECT * FROM tipe ORDER BY id_kend DESC");
							if(mysqli_num_rows($tampil)>0){
							?>
					  <!-- Default panel contents -->
					  <div class="panel-heading">
					  <strong>Tipe Kendaraan</strong>
					  </div>

						<div class="container">
					  <!-- Table -->
					  <table class="table">
					    <thead>
					    	<tr>
					    		<th>No</th>
					    		<th>Kode Kendaraan</th>
					    		<th>Nama Kendaraan</th>
					    		<th>Tipe Kendaraan</th>
					    		<th>Edit</th>


					    	</tr>
					    <tbody>

					    <?php 
					       $no=1; 	   
					       while ($data=mysqli_fetch_array($tampil)) { ?>
					    	<tr>
					    		<td> <?php echo $no; ?> </td>
					    		<td> <?php echo $data['kode_kend']; ?> </td>
					    		<td> <?php echo $data['nama_kend']; ?> </td>
					    		<td> <?php echo $data['tipe_kend']; ?> </td>

					    		<td>
					    		<a href="edit2.php?idd=<?php echo $data['id_kend'];?>" type="button" class="btn btn-warning">Edit</a> 
					    		<a onclick="return confirm('Yakin Ingin Menghapus data?')" href="tambah-kendaraan.php?delet=<?php echo $data['id_kend']; ?>" type="button" class="btn btn-danger">Hapus</a>

					    			
					    		</td>
					    			
					    	</tr>
					    	</div>
					    	<?php $no++;} ?>
					    	<?php }?>

					    		<?php



									if(isset($_GET['delet'])){
										$id = $_GET['delet'];
										echo "AW $ID";
										mysqli_query($koneksi,"DELETE FROM tipe where id_kend=$id");
										header("location:tambah-kendaraan.php");

									}

									?>
					    </tbody>

					    </thead>
					  </table>
					</div>



	</div>
	</div>
	
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->


<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>

<?php 


if (isset($_POST['simpan']))
	{

	$kode = $_POST['kode'];
	
	$nama_kend = $_POST['nama_kend'];
	$tipe_kend= $_POST['tipe_kend'];

	$akses= $_POST['akses'];







	$user_check = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tipe where kode_kend ='$kode'"));

	if ($user_check >0) 
	{
		header("location: tambah-kendaraan.php?sudah-ada");
	}
	elseif (empty($kode)||empty($nama_kend)||empty($tipe_kend)) {
		header("location: tambah-kendaraan.php?datakosong");
	}
	else{
	
	$Tambah = mysqli_query($koneksi,"INSERT INTO tipe(kode_kend,nama_kend,tipe_kend) VALUES('$kode','$nama_kend','$tipe_kend')");
	
	if ($Tambah) 
	{
		header("location: tambah-kendaraan.php?input-sukses");
	}

	
	else{
		echo "data gagal di input".mysqli_connect_error();

		}
	}
}




 ?>
	
</body>
</html>





<?php
mysqli_close($koneksi);
ob_end_flush();
?>