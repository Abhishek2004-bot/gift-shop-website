<?php include("db.php");?>

<?php include("addproduct.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style25 {font-size: 24px; font-family: "Times New Roman", Times, serif; color: #666666; }
.style26 {color: #666666}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="548" border="1" align="center" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <th width="239" scope="row"><span class="style25">Select Category </span></th>
      <td width="271"><span class="style26">
        <select name="p0">
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
      </span> </td>
    </tr>

    <tr>
      <th height="38" scope="row"><span class="style25">Enter Product Name </span></th>
      <td><span class="style26">
        <label>
        <input type="text" name="p1" />
        </label>
      </span></td>
    </tr>
    <tr>
      <th scope="row"><span class="style25">Enter Product Cost </span></th>
      <td><span class="style26">
        <label>
        <input type="text" name="p2" />
        </label>
      </span></td>
    </tr>
    <tr>
      <th scope="row"><span class="style25">Add product image </span></th>
      <td><span class="style26">
        <label>
        <input type="file" name="p3" />
        </label>
      </span></td>
    </tr>
    <tr>
      <th scope="row"><span class="style25">Quantity</span></th>
      <td><span class="style26">
        <label>
        <input type="number" name="p4" />
        </label>
      </span></td>
    </tr>
  <tr>
      <th height="86" scope="row"><span class="style25">Description</span></th>
      <td><span class="style26">
        <label>
        <input type="text" name="p5" />
        </label>
      </span></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><label>
        <input type="reset" name="Reset" value="Reset" />
        <input type="submit" name="Submit1" value="Add" />
      </label></td>
    </tr>
  </table>
  <label></label>
</form>
<?php 
if(isset($_POST['Submit1'])){
$p0=$_POST["p0"];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];

$sql = "insert into product(category,productname,productprice,image,quantity,description)
values('$p0','$p1','$p2','$p3','$p4','$p5')";
if(mysqli_query($conn,$sql)){
?>

<script>alert("Product added successfully");</script>

<?php 
}else{
echo "Could not insert record:".mysqli_error($conn);
}
}

?>


</body>
</html>
