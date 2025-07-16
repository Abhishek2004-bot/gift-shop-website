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
<h1 align="center" class="style5 style2 style4">View Ordered Details</h1>
<table width="1211" height="74%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
  <tr>
    <td width="125" height="61%" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Product Name </strong></div></td>
    <td width="115" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Product Cost </strong></div></td>
    <td width="76" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Quantity</strong></div></td>
    <td width="129" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Address</strong></div></td>
	<td width="106" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Card type</strong></div></td>
	<td width="145" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Card Number</strong></div></td>
    <td width="163" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Order Id</strong></div></td>
    <td width="117" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Status</strong></div></td>
      <td width="215" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <?php 
$sql = "SELECT productname,productcost,quantity,address,cardtype,cardnum,orderid,adminstatus FROM orderlist    ";
$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_assoc($retval)){
?>
  <tr>
    <td height="39%" bgcolor="#FFFFFF"><div align="center"><?php echo $row["productname"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["productcost"]?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["quantity"]?></div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["address"]?> </div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["cardtype"]?> </div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["cardnum"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["orderid"]?> </div></td>
	<td bgcolor="#FFFFFF"><div align="center"><?php echo $row["adminstatus"]?> </div></td>
	
  <td bgcolor="#FFFFFF">
	<form id="form1" name="form1" method="post" action="">
	  <select name="sts">
        <option>Packed</option>
        <option>Shipped</option>
        <option>Delivered</option>
        <option>Cancelled</option>
      </select>
	    <input type="hidden" value="<?php echo $row["orderid"]?>" name="oid"/>
	  <input type="submit" value="Update" name="ord"/>
    </form>    
	</td>
  </tr>
  <?php
}
}
?>
<?php 
  
	  if(isset($_POST['ord'])){
	   $s1 = $_POST["sts"];
	   $id = $_POST["oid"];
	   $sql = "update orderlist set adminstatus = '$s1' where orderid='$id' ";
	   $retval = mysqli_query($conn,$sql);
	   
 ?>

<script>
window.open("adminvieworders.php","_self");
</script>
<?php 
}

?>


</table>
</body>

</html>
