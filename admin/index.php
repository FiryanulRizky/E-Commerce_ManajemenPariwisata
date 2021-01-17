
<?php
// *** LOAD ADMIN PAGE HEADER
include "header.php";
include "header-admin.php";
echo"<div id='bgkonten'>";
    $result = mysqli_query($conn,"SELECT * FROM admin_web where username='".$_SESSION['admin_username']."'");

 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {

            echo'<p><h3>Selamat Datang </h3></p>';

echo"<p>Halo <h3>".$row['nama']."</h3> Selamat datang di halaman Administrator.</p>";
echo'<p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda.</p>';

             echo'<p>Data Pribadi Anda Adalah : </p><br>';
             echo"<p>&raquo; Nama : ".$row['nama']."</p>";
             echo"<p>&raquo; Telepon :".$row['telepon']."</p>";
             echo"<p>&raquo; Jabatan :".$row['jabatan']."</p>";




}
echo"</div>";
?>
<div class="cleared"></div>
<?php
include"footer.php";
?>
</div>
