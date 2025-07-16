<?php include("db.php");?>
<?php include("admintab.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {font-size: 24px}
.style4 {
	color: #FF9900;
	font-size: 36px;
}
.style6 {
	color: #3333FF;
	font-size: 22px;
}
.style10 {font-size: 18px; }
.style13 {
	color: #3399CC;
	font-size: 22px;
}
-->
</style>
</head>

<body>
<div align="center" class="style1 style2">
  <p>&nbsp;</p>
  <p class="style4">Search Product</p>
</div>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p align="center" class="style10"><span class="style6"> Select Category</span> 
      
      <select name="s2">
        <?php 
   $sql = "SELECT distinct category FROM product";  
$retval=mysqli_query($conn, $sql);  
  
 
 while($row = mysqli_fetch_assoc($retval)){ 
  ?>
          <option><?php echo $row['category']  ?></option>     
        
        <?php 
	  }
	  ?>   
      </select>  
      <input type="submit" name="searchCat" value="Seach with category" />
    </p>
    <p align="center" class="style10"><span class="style13"> Enter Product name</span> 
      
      <input type="text" name="pname" />
      <input type="submit" name="showwithname" value="Search with Product Name" />
    </p>
    <p align="center" class="style10">
      <input type="submit" name="showall" value="Show All Products" />
    </p>
  </div>
</form>


<span class="style10">
<?php 
if(isset($_POST["searchCat"])){
$pcat=$_POST["s2"];
 $sql = "SELECT * FROM product where category='$pcat'";  
$retval=mysqli_query($conn, $sql);  
  
 
 while($row = mysqli_fetch_assoc($retval)){ 
?>
</span>
<table width="444" border="1" align="center" bgcolor="white">
  <tr bgcolor="white">
    <td height="25" class="style10"><div align="center"><img src="images/<?php echo $row['image'] ?>" width="200" height="250" /></div></td>
  </tr>
  
  <tr>
    <td class="style10"><p align="center">Product Name: <?php echo $row['productname'] ?></p>
      <p align="center">Product Price:<?php echo $row['productprice'] ?></p>    </td>
  </tr>
</table>
<span class="style10"><br />

<?php
}
}
?>


<?php 
if(isset($_POST["showwithname"])){
$pname=$_POST["pname"];
 $sql = "SELECT * FROM product where productname like '%$pname%'";  
$retval=mysqli_query($conn, $sql);  
  
while($row = mysqli_fetch_assoc($retval)){ 
?>
</span>
<table width="444" border="1" align="center" bgcolor="white">
  <tr bgcolor="white">
    <td height="25" class="style10"><div align="center"><img src="images/<?php echo $row['image'] ?>" width="200" height="250" /></div></td>
  </tr>
  
  <tr>
    <td class="style10"><p align="center">Product Name: <?php echo $row['productname'] ?></p>
      <p align="center">Product Price:<?php echo $row['productprice'] ?></p>    </td>
  </tr>
</table>
<span class="style10"><br />

<?php
}
}
?>







<?php 
if(isset($_POST["showall"])){

 $sql = "SELECT * FROM product";  
$retval=mysqli_query($conn, $sql);  
  
 
 while($row = mysqli_fetch_assoc($retval)){ 
?>
</span>
<table width="444" border="1" align="center" bgcolor="white">
  <tr bgcolor="white">
    <td height="25" class="style10"><div align="center"><img src="images/<?php echo $row['image'] ?>" width="200" height="250" /></div></td>
  </tr>
  
  <tr>
    <td class="style10"><p align="center">Product Name: <?php echo $row['productname'] ?></p>
      <p align="center">Product Price:<?php echo $row['productprice'] ?></p>    </td>
  </tr>
</table>
<span class="style10"><br />

<?php
}
}
?>
</span>
</body>
</html>