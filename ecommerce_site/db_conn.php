<?php
// KONEKSI DATABASE
//$conn = mysqli_connect($db_host,$db_user,$db_pass) or die("can not access database");
//mysqli_select_db($db_name,$conn) or die("can not connect"); 

	$server = "localhost";//nama server
	$user = "root"; //username server
	$pass = "";  //password
	$dbase = "ubudcenter"; // database yang dipakai

	//Membuat koneksi
	$conn = mysqli_connect($server, $user, $pass, $dbase);

	//Mengecek koneksi 
	/**if(!$koneksi) {
	 die("Koneksi Gagal : ".mysqli_connect_error());
	}

	echo "Koneksi Berhasil";*/

?>