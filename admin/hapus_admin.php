
<?php
// *** LOAD ADMIN PAGE HEADER
include "header-admin.php";

if ($_POST['act']=="delete"){
    @mysqli_query($conn,"DELETE FROM admin_web "
    ."WHERE id_admin='".$_POST['id']."'");
    echo'<script>alert("Sure to Delete??");window.location ="tambah_user.php";</script>';
}

if (!empty($_GET['id'])){

    $rs=@mysqli_query($conn,"SELECT * FROM admin_web WHERE id_admin='".$_GET['id']."'");
    $row=@mysqli_fetch_array($rs,MYSQLI_ASSOC);



echo '
<div id="bgkonten">
<td><a href="tambah_kategori.php"><i class="fa fa-arrow-circle-o-left"></i> Back</a></td>
<form method="post" enctype="multipart/form-data">
<p>Username : '.$row['username'].'</p><br>
<p>Password : '.$row['password'].'</p><br>
    
    <input type="submit" value="DELETE" class="btn_submit">
    <input type="hidden" name="act" value="delete" >
    <input type="hidden" name="id" value="'.$row['id_admin'].'">
    </form>';

}
echo"</div>";
?>
<div class="cleared"></div>
<?php
include"footer.php";
?>

