<!DOCTYPE html>
<html>
<head>
	<title>PROMOTE YOUR HOTEL</title>
</head>
<body>
	<h3>PROMOTE YOUR HOTEL</h3>

	<form action="./includes/action.php" method="POST">
		<table>
			<tr>
				<td>Hotel Title</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Hotel Info</td>
				<td>:</td>
				<td><input type="text" name="info"></td>
			</tr>
			<tr>
				<td>Hotel Price</td>
				<td>:</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Hotel Image</td>
				<td>:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Hotel Link</td>
				<td>:</td>
				<td><input type="text" name="link"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="save" value="ADD DATA">
					<input type="reset" name="reset" value="CANCEL">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>