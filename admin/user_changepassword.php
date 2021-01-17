
<?php
// *** LOAD ADMIN PAGE HEADER
include "header-admin.php";

If ( !empty($_POST['pasw_old']) AND
     !empty($_POST['pasw_new']) AND
     !empty($_POST['pasw_new2']) AND
     ($_POST['pasw_new'] == $_POST['pasw_new2'])

){
    //echo"OKE".$_SESSION['admin_username'];
 $betul=@mysqli_num_rows(@mysqli_query($conn,"SELECT username FROM anggota_web WHERE username='".$_SESSION['admin_username']
 ."' AND password='".md5($_POST['pasw_old']) ."'"));
 
 //echo $kueriku . " = ".$betul;
 
 $isganti=@mysqli_query($conn,"UPDATE admin SET password='".md5($_POST['pasw_new'])."' ");
 if ($isganti) echo "password sudah dirubah";
 
 

}

echo'<center>
<div id="bgkonten">
<h1>User Ganti Password</h1>
<form method="post">
 Password Lama:</br><input name="pasw_old" type="password" class="texbox"></br>
 Password Baru:</br><input name="pasw_new" type="password" class="texbox"></br>
 Password Baru (ketik ulang):</br><input name="pasw_new2" type="password" class="texbox"></br><br>
<input type="submit" value="UPDATE" class="btn_submit"></br>
</form>
</div></center>
';

?>
<div class="cleared"></div>
<?php
include"footer.php";
?>

