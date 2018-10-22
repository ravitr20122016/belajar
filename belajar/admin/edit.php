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
	<title>
		
	</title>
</head>
<body>
	
<?php

include"../koneksi.php";
$idd=$_GET['idd'];
$query=mysqli_query($koneksi,"SELECT * FROM tipe WHERE id_kend='$idd'");
while ($a=mysqli_fetch_array($query)) {

	?>

<form method="post" name="editt">
<table>
	<tr>
		<td>ID KENDARAAN</td>
		<td> <input type="text" name="id_kend" value="<?php echo $a['id_kend']; ?>"> </td>
	</tr>
		<tr>
		<td>KODE KENDARAAN</td>
		<td> <input type="text" name="kode_kend" value="<?php echo $a['kode_kend']; ?>"> </td>
	</tr>
	<tr>
		<td>NAMA KENDARAAN</td>
		<td> <input type="text" name="nama_kend" value="<?php echo $a['nama_kend']; ?>"> </td>
	</tr>
	<tr>
		<td>TIPE KENDARAAN</td>
		<td> <input type="text" name="tipe_kend" value="<?php echo $a['tipe_kend']; ?>"> </td>
	</tr>	
	<tr>
		<td> <input type="submit" name="editt" value="editt"> </td>
	</tr>
</table>





	
</form>















<?php
}

?>
<?php
if (isset($_POST['editt'])) {
	$id_kend=$_POST['id_kend'];
	$kode_kend=$_POST['kode_kend'];
	$nama_kend=$_POST['nama_kend'];
	$tipe_kend=$_POST['tipe_kend'];

	mysqli_query($koneksi,"UPDATE tipe set kode_kend='$kode_kend',nama_kend='$nama_kend',tipe_kend='$tipe_kend' WHERE id_kend='$id_kend' ");
	header("location: tambah-kendaraan.php");
}
?>



<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
</body>
</html>