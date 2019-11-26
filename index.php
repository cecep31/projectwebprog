<?php
  session_start();
  include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//id" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="gaya.css" />
<title>kuycoding | belajar coding gampang</title>
</head>

<body>
<?php
if(!empty($_SESSION["useradm"]) and !empty($_SESSION["passadm"])){
  $sqla = mysqli_query($dbs, "select * from tbl_admin where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
  $ra = mysqli_fetch_array($sqla);
?>
<div class="grid">
  <div class="dh12">
    <div class="container1">
      <span style="font-size:20px; cursor:pointer; padding-right:20px; " align="right" onclick="openNav()">&#9776;</span>
      kuycoding
    </div>
  </div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="../foto/avatar.png" width="150px" />
  <p>Selamat Datang</p>
  <h3><?php echo "$ra[namalengkap]"; ?></h3>
  <a href="<?php echo "?p=home"; ?>">Beranda</a>
  <a href="<?php echo "?p=kategori"; ?>">Kategori</a>
  <a href="<?php echo "?p=produk"; ?>">produk</a>
  <a href="<?php echo "?p=logout"; ?>">Logout</a>
</div>

<script>
function openNav(){
  document.getElementById("mySidenav").style.width = "350px";
}
function closeNav(){
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="grid">
  <div class="dh12">
    <div class="container2">
<?php
  if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "kategori"){
    include "kategori.php";
  }else if($_GET["p"] == "kategoriadd"){
    include "kategoriadd.php";
  }else if($_GET["p"] == "kategoriedit"){
    include "kategoriedit.php";
  }else if($_GET["p"] == "kategoridel"){
    include "kategoridel.php";
	
	
	}else if($_GET["p"] == "produk"){
    include "produk.php";
  }else if($_GET["p"] == "produkadd"){
    include "produkadd.php";
  }else if($_GET["p"] == "produkedit"){
    include "produkedit.php";
  }else if($_GET["p"] == "produkdel"){
    include "produkdel.php";
  }else if($_GET["p"] == "produkdetail"){
    include "produkdetail.php";
	
  }else{
    include "main.php";
  }
?> 
    </div>
  </div>
</div>
<?php
}else{
  include "login.php";
}
?>
</body>
</html>
