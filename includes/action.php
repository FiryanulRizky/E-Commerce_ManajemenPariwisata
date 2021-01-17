<?php
	include "../database/connection.php";

	$tt = $_POST["title"];
	$inf = $_POST["info"];
	$pr = $_POST["price"];
	$img = $_POST["image"];
	$li = $_POST["link"];	
	
	// query sql
	$sql = "INSERT INTO acommodation_hotel (hotel_title, hotel_info, hotel_price, hotel_img, hotel_link) VALUES('$tt','$inf','$pr','$img','$li')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

	if($query){
		echo "Data berhasil di insert!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);

?>