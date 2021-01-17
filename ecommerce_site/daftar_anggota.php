
<?php

include"header.php";
include"db_conn.php";

?>
<div id='bgkonten'>
<table border="0px">
 <form method="post" enctype="multipart/form-data">
<tr><td>Username</td> <td>:</td> <td><input name="pengguna" size="50" class="texbox" maxlength="12"></td></tr>
<tr><td>Password</td> <td>:</td><td><input name="sandi" size="50" class="texbox"></td></tr>
<tr><td>Nama</td> <td>:</td><td><input name="nama" size="50" class="texbox"></td></tr>
<tr><td>Telepon</td> <td>:</td><td><input name="telepon" size="50" class="texbox"></td></tr>
<tr><td><input type="submit" value="TAMBAH" class="btn_submit"></td></tr>
</div>
    </form>
    
    <?php

                if ($_POST['act']=="add"){
                    $pengguna=$_POST['pengguna'];
                    $sandi=md5($_POST['sandi']);
                    $nama=$_POST['nama'];
                    $telepon=$_POST['telepon'];
                    $hasil=mysqli_query($conn,"INSERT INTO anggota_web(username,password,nama,telepon)
                             VALUES('$pengguna','$sandi','$nama','$telepon')");
                echo'<script>alert("Sorry username and Password isnt valid please try again !!!");window.location ="index.php";</script>';
                }
                       
    ?>




