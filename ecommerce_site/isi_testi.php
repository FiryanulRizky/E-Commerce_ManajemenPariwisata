<?php

include"header.php";

if ($_POST['act']=="add"){
{
   // membaca data komentar dari form
   $nama = strip_tags($_POST['nama']);
   $url = strip_tags($_POST['url']);
  // $komentar = $_POST['komentar'];
   $isi = strip_tags($_POST['komentar']);
   //$idArtikel = $_POST['idArtikel'];
   $tglKomentar = date("Y-m-d");

   $ada=mysqli_query($conn,"SELECT * FROM pages WHERE komentar=$isi");
   if(mysqli_num_rows($ada)>0)
    {
     echo"Data sudah Ada";
     exit;
    }
   // daftar bad words

$badWords = array("sex","xxx","viagra","http","porn");

// asumsikan komentarnya tidak mengandung bad word

$status = "tak ada";


// cek keberadaan setiap bad word dalam komentar

for($i = 0; $i <= count($badWords)-1; $i++)
{
   if (!(strpos($isi, $badWords[$i]) == false))
   {
      // jika ditemukan sebuah bad word dalam komentar, maka status menjadi 'ada'
      // proses looping langsung dihentikan

      $status = "ada";
      break;
   }
}

if ($status == "tak ada")
{

   $hasil = mysqli_query($conn,"INSERT INTO pages (nama, email, komentar, commentDate)
           VALUES ('$nama', '$url', '$komentar', '$tglKomentar')");
   
if( !empty($_FILES['gambar']['name']) )
    {
    $path = "testi/";
    $lastid=@mysqli_result(@mysqli_query($conn,"SELECT id FROM pages ORDER BY id DESC LIMIT 0,1"),0,0);
    $new_image_name = $lastid.".jpg";
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, $path.$new_image_name);
    }

   if ($hasil) echo "Terimakasih Telah Mengisi Testimoni";
   else echo "Pengisian Komentar gagal";
}
else
{
   echo "Maaf komentar Anda mengandung kata-kata yang tidak sopan";
}


}
?>





<?php

$hasil = mysqli_query($conn,"SELECT * FROM pages");
if (mysqli_num_rows($hasil) > 0)
{

   // jika ada komentar (jumlah data hasil query > 0), maka tampilkan komentarnya
   while ($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC))
   {
       //echo"<table>";
     // echo"<tr>";
      echo"<div id='comment'>";

      echo"<p>&raquo;".$data['commentDate']."</small></p>";
      echo "<p><img src='images/stats.png'>&nbsp;".$data['commentAuthor']." &nbsp; &raquo;<a href='".$data['urlAuthor']."'>".$data['urlAuthor']."</a>&laquo;</p>";
      echo "<p>&raquo;".$data['comment']."</p>";
     // echo"</tr>";
     // echo"</table>";
     echo"<a href='reply.php'>Reply</a>";
     echo"</div>";
   }

}

// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar
//else if (mysqli_num_rows($hasil) == 0) echo "<p>Belum ada komentar.</p>";
//else if (mysqli_num_rows($hasil) > 0) echo "".$hasil."";


// menampilkan form pengisian komentar
?>

<div id='formcomment'>
<form method="post" enctype="multipart/form-data">
<table>
<tr><td>Nama Anda</td><td>:</td><td><input type='text' name='nama' class='texbox'></td></tr>
<tr><td>URL Anda</td><td>:</td><td><input type='text' name='url' class='texbox'></td></tr>
<tr><td>Komentar Anda</td><td>:</td><td><textarea name='komentar' class='texarea' cols='60' rows='5'></textarea></td></tr>";
<tr><td>&laquo;&nbsp;<input type="file" name="gambar" ></td></tr>
<tr><td><input type="submit" value="TAMBAH" class="btn"></td></tr>
    <tr><td><input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</div>
<div class='cleared'></div>

<?php
  include"footer.php";
?>