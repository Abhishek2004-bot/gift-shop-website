<?php include("admintab.php");?>
<?php include("db.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {color: #FF6600}
.style3 {font-size: 18px}
.style4 {font-size: 24px}
-->
</style>
</head>

<body>

<body>
<h1 align="center" class="style5 style2">&nbsp;</h1>
<h1 align="center" class="style5 style2 style4">View Customer Details</h1>
<table width="776" border="1" align="center" cellpadding="15" cellspacing="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
  <tr>
    <td width="144" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Usename </strong></div></td>
    <td width="110" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Email Id</strong></div></td>
    <td width="171" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Phone Number</strong></div></td>
	
    <td width="196" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Customer Id</strong></div></td>


  </tr>
  <?php 
$sql = "SELECT * FROM customer";
$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_assoc($retval)){
?>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["Username"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["Email Id"]?></div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["Phone Number"]?> </div></td>
    <td width="196" bgcolor="#FFFFFF"><div align="center"><?php echo $row["Customer Id"]?></div></td>
    
   
  </tr>
  <?php
}
}
?>
</table>
</body>

</html>
