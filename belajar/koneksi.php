<?php

global $koneksi;

$namerserver="localhost"; 
$username="root"; 
$password=""; 
$db="crud";

$koneksi = mysqli_connect($namerserver,$username,$password,$db);

if(!$koneksi)
	{ echo "Koneksi Gagal".mysqli_connect_error();
}

?>