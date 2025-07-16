<?php include("db.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #CC6633}
.style3 {color: #CCCCCC; }
.style4 {color: #000000}
.style6 {color: #0066CC; }
-->
</style>
</head>
<body>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style6">Admin page</h1>
<form action="" method="post" class="style3">
  <table width="310" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="148" height="49"><div align="center" class="style4">Username</div></td>
      <td width="144"><label>
        <input type="text" name="untxt" pattern="[a-zA-Z ]{1,}"  title=" only aphabets is need "  required/>
      </label></td>
    </tr>
    <tr>
      <td height="33"><div align="center" class="style4">Password</div></td>
      <td><label>
        <input type="password" name="pwtxt"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
    </tr>
    <tr>
      <td height="33"><div align="center"></div></td>
      <td><div align="center">
        <input name="Submit" type="submit" />
      </div></td>
    </tr>
  </table>
  <label></label>
</form>
<?php 
if(isset($_POST['Submit'])){
$un = $_POST["untxt"];
$pw = $_POST["pwtxt"];
$sql = "SELECT * FROM adminlogin where username='$un' and password='$pw'";
$retval = mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0){
?>

<script>
alert("login success");
window.open("admintab.php","_self");
</script>

<?php
}else{

echo '<script>
alert("login Failed");
</script>';
}
}
?>
</body>
</html>











