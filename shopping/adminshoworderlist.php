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
<table width="1230" border="1" align="center" cellpadding="15" cellspacing="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
  <tr>
    <td width="95" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Product Name </strong></div></td>
    <td width="102" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Product Cost </strong></div></td>
    <td width="69" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Quantity</strong></div></td>
    <td width="116" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Total amount</strong></div></td>
    <td width="94" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Address</strong></div></td>
    <td width="145" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Card Holder Name</strong></div></td>
    <td width="135" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Cvv</strong></div></td>
    <td width="171" bgcolor="#CCCCCC"><div align="center" class="style3 style7"><strong>Order Id</strong></div></td>
  </tr>
  <?php 
$sql = "SELECT * FROM orderlist";
$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_assoc($retval)){
?>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["productname"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["productcost"]?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["quantity"]?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["totalamount"]?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["address"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["cardholdername"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["cvv"]?> </div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $row["orderid"]?> </div></td>
  </tr>
  <?php
}
}
?>
</table>
</body>
</body>
</html>
