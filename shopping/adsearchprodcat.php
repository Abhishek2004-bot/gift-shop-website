<?php include("db.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 24px;}
.style2 {
	color: #0033CC;
	font-size: 18px;
}
.style3 {color: #0000FF}
#one{background:#000000;
color:#FF9900}
.style7 {font-size: 18px}
-->
</style>
</head>

<body>
 <div align="center">
<form action="" method="post" class="style1">
  <span class="style2">Search Product
  
    <label> 
    <input type="text" name="textfield" />
    </label>
    
    <label>
    <input type="submit"  id="one" name="Submit" value="Search Product" />
    </label>
    <br />
 
  
    <label> 
       <tr>
      <th width="239" scope="row"><span class="style25">Select Category </span></th>
      <td width="271"><span class="style26">
       <select name="photo">
          <?php 
$sql = "SELECT * FROM category";
$retval = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($retval)){
?>
          <option><?php echo $row['categoryname']?></option>
          <?php 
  
  }
   ?>
   </select>
      </span>
	   </td>
    </tr>
    </label>
    
    <label>
    <input type="submit"  id="one" name="Submit1" value="Search Category " />
    </label>
</form>
</div>
<?php 
if(isset($_POST["Submit1"])){
$photo = $_POST["photo"];
$sql = "SELECT * FROM product where category = '$photo' ";
$retval= mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($retval)){
?>
<table width="444" border="1" align="center" bgcolor="#CCCCCC">
  <tr bgcolor="#CCCCCC">
    <td height="25"><div align="center"><img src="images/<?php echo $row['image'] ?>" width="215" height="129" /></div></td>
  </tr>
  
  <tr>
    <td><p align="center">Product Name: <?php echo $row['productname'] ?></p>
      <p align="center">Product Price:<?php echo $row['productprice'] ?></p>
    </td>
  </tr>
  
 
</table>
<?php 
}
}
?>

</body>
</html>
