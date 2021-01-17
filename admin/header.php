<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// *** LOAD SESSION
session_start();
// *** DB CONNECTION
include "../ecommerce_site/db_conn.php";
date_default_timezone_set('Asia/Makassar');
?>
<!DOCTYPE html>
<head>
<title>Your Title Here</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../ecommerce_site/style.css" rel="stylesheet" type="text/css" media="screen" />

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<style>
#bgmenu{
    background:#0096D6;
    height:26px;
    width:100%;
    padding-top:5px;
}

</style>
<div id="bgmenu">
<div id="contact">
<ul>
       <li><a href="../index.php">Home</a></li>
       <li><a href="../events.php">Activities & Events</a></li>
       <li><a href="../acommodations.php">Acommodations</a></li>
       <li><a href="../taxi.php">E-TAXI</a></li>
       <li></li><li></li>  <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
	   <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                            <li><a href="../ecommerce_site/index.php"><i class="fa fa-user"></i> Login Anggota</a></li>
</ul>
</div>
</div>

<div id="container"><!--start container-->
<div class="cleared"></div>