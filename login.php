<div id="signin">
<fieldset>
<img src="avatar.png" width="120px" />
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>ADMINISTRATOR</h3>
  <p>SILAHKAN LOGIN</p>
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" name="login" id="login" value="LOGIN ADMIN">
</form>
<?php
if( isset($_POST['login']) ){

  $sqla = mysqli_query($dbs, "select * from tbl_admin where username='$_POST[username]' and password='$_POST[password]'");
  $ra = mysqli_fetch_array($sqla);
  $row = mysqli_num_rows($sqla);
  if($row > 0){
    session_start();
	$_SESSION["useradm"] = $ra["username"];
	$_SESSION["passadm"] = $ra["password"];
  echo "Login Berhasil";

  }else{
    echo "<div class='alert'>
    <span class='closebutn' onclick='this.parentElement.style.display='none';'>&times;</span> 
    <strong>Danger!</strong> username atau password yang anda masukan salah.
    </div>";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
}
  
?>

</fieldset>
</div>
