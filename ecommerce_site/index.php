<?php
include "header.php";
// *** DB CONNECTION
include "db_conn.php";
?>

<?php
session_start();

if ($_GET['logoutdong']=="1"){
	session_destroy();
}

if (!empty($_POST['username'])){
	$password_md5= md5($_POST['password']);
	$rs=@mysqli_num_rows(@mysqli_query($conn,"SELECT * FROM anggota_web WHERE username ='".$_POST['username']."' AND password='". $password_md5 ."'"));
	if ($rs > 0){
		$_SESSION['login']=$_POST['username'];
  echo'<script>alert("Congratulation Login Succes");window.location ="home.php";</script>';
	} else {
		echo'<script>alert("Sorry username and Password isnt valid please try again !!!");window.location ="home.php";</script>';
	}
}


if (!$_SESSION['login']){

echo '
<form method="post">
<table border="1">
<tr>
	<td><input name="username" placeholder="masukkan akun"></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="masukkan sandi"></td>
</tr>
<tr>
	<td><a href="home.php"><input type="submit" name="Login" value="masuk"></a> <a href = "daftar_anggota.php">Daftar</a></td>
</tr>
</table>
</form>
';

} else {
	echo '<h2>Hallo ' .$_SESSION['login'].'</h2>';
	echo '<a href="'.$_SERVER['PHP_SELF'].'?logoutdong=1">keluar</a>';
}

?>

<?php
include"footer.php";

?>




