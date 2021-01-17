<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acommodations</title>
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/acommodations_content.css">
</head>
<body style="margin:0; background: #f7f7f7; margin-top: 20px;">
<?php include_once("./templates/header.php"); ?>
<div class="container">
	<div class="box_informasi">
		<div class="booking1">
			<table>
				<tr>
					<td colspan="2"><h2>Ubud Center</h2></td>
				</tr>
				<tr>
					<td colspan="2"><p>Booking in real-time direct with accommodation providers in Ubud...</p></td>
				</tr>
				<tr>
					<td colspan="2"><p>Destination/hotel name:</p></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="" placeholder="area, hotel name" style="width:100%; height: 33px; background: white; color: black;"></td>
				</tr>
				<tr>
					<td><p><b>Check in</b></p></td>
					<td><p><b style="left: -11px;">Check Out</b></p></td>
				</tr>
				<tr>
					<td><p><input type="date" name="" style="width: 85%; height: 24px;"></p></td>
					<td><p><input type="date" name="" style="width: 85%; height: 24px; left: -13px;"></p></td>
				</tr>
				<tr>
					<td><p><button type="button">Search</button></p></td>
				</tr>
			</table>
		</div>
		<div class="iklan1">
			<table>
				<tr>
					<td><img src="./images/citrus1.jpg"></td>
					<td><b>Citrus Tree Villas- Sungai<br>
						From 135 USD / Night</b><br>
						For on going promotions, please email or click ''Enquire now''Citrus tree villas... <a href="#">Read More</a></td>
				</tr>
				<tr>
					<td><img src="./images/citrus2.jpg"></td>
					<td><b>Citrus Tree Villas - Puri<br>
						From 150 USD / Night</b><br>
						For on going promotions, please email or click ''Enquire now''Puri Putih villa i... <a href="#">Read more</a></td>
				</tr>
			</table>
		</div>
		<div class="left_info">
			<table>
				<tr>
					<td><a href="#">2019 Calendar of Events</a></td>
				</tr>
				<tr>
					<td><a href="#">2020 Calendar of Events</a></td>
				</tr>
				<tr>
					<td><a href="#">Activity Packages</a></td>
				</tr>
				<tr>
					<td><a href="#">Adventures</a></td>
				</tr>
				<tr>
					<td><a href="#">Boat Trips to Islands</a></td>
				</tr>
				<tr>
					<td><a href="#">Classes</a></td>
				</tr>
				<tr>
					<td><a href="#">Cultural Park</a></td>
				</tr>
				<tr>
					<td><a href="#">Dances</a></td>
				</tr>
			</table>
			<div class="left_info_label1">
				<h3>Acommodations</h3>
			</div>
		</div>
		<div class="left_info2">
			<table>
				<tr>
					<td>Refine Result</td>
				</tr>
				<tr>
					<td>Price Interval: 10USD - 1000USD</td>
				</tr>
				<tr>
					<td><input type="hidden" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[100,500]" id="sl2"></td>
				</tr>
			</table>
			<div class="left_info2_label1">
				<h3>Price Filter</h3>
			</div>
		</div>
			<div class="acom_content">
				<h3><a href="admin_touristinfo.php">Promote Your Hotel</a></h3>
				<?php ?>
				<table>
						<?php
							include "./database/connection.php";

							// query sql
							$sql = "SELECT * FROM acommodation_hotel ORDER BY hotel_ID";
							$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

							$no = 1; // no. urut

							while($data = mysqli_fetch_array($query)){

								$id = $data["hotel_ID"];
								$tt = $data["hotel_title"];
								$inf = $data["hotel_info"];
								$pr = $data["hotel_price"];
								$img = $data["hotel_img"];
								$li = $data["hotel_link"];

								echo "<tr>
										<td rowspan='5' ><img src='./img_db/$img' width='80%'></td>
									  </tr>
									  <tr>
									  	<td><h3>$tt</h3></td>
									  </tr>
									  <tr>
									  	<td><b>Rp.$pr,00</b></td>
									  </tr>
									  <tr>
									  	<td>$inf</td>
									  </tr>
									  <tr>
									  	<td><a href=$li>Enquiry Now<a></td>
									  </tr>
									  ";
								$no++;
							}
						?>			
				</table>
			</div>
		</div>
</div>
<?php include_once("./templates/footer.php"); ?>
</body>
</html>