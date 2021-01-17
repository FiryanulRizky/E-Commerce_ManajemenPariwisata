<div id='wrapper'>
<?php
// *** LOAD ADMIN PAGE HEADER
include "header-admin.php";

if ($_POST['aksi']=="hapus"){
    @mysqli_query($conn,"DELETE  FROM konfirmasi WHERE id_konfirmasi='".$_GET['id']."'");
    echo'<script>alert("Sure to Delete??");window.location ="konfirmasi.php";</script>';
}

if (!empty($_GET['id'])){

    $rs=@mysqli_query($conn,"SELECT * FROM konfirmasi WHERE id_konfirmasi='".$_GET['id']."'");
    $row=@mysqli_fetch_array($rs,MYSQLI_ASSOC);

			if (file_exists("../gambar/".$row['id_konfirmasi'].".jpg"))
                $gambar="<a href=\"../gambar/".$row['id_konfirmasi'].".jpg\"><img src=\"../gambar/".$row['id_konfirmasi'].".jpg\" width=50></br>view image</a>";
            else
                $gambar="";

echo '
<div id="bgkonten">
<form method="post" enctype="multipart/form-data">
&laquo;&nbsp;Kode Order : '.$row['kode_order'].'<br>
&laquo;&nbsp;Tanggal Transfer : '.$row['tanggal_transfer'].'<br>
&laquo;&nbsp;Nama Pemilik Rekening : '.$row['pemilik_rekening'].'<br>
&laquo;&nbsp;Nama Bank: '.$row['nama_bank'].'<br>
&laquo;&nbsp;Harga: '.$row['jumlah_transfer'].'<br>
&laquo;&nbsp;Alamat: '.$row['alamat_kirim'].'<br>
&laquo;&nbsp;'.$gambar.'</br>
    <a href="konfirmasi.php">[BACK]</a>
    <input type="submit" value="HAPUS" class="btn">
    <input type="hidden" name="aksi" value="hapus" >
    <input type="hidden" name="id" value="'.$_GET['id_konfirmasi'].'">
    </form>
';

}
echo"</div>";
include"footer.php";
?>
</div>
