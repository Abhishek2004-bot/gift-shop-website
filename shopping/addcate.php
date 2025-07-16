<?php include("db.php"); ?>

<?php include("addproduct.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
  <style type="text/css">
    <!--
    .style2 {
      font-size: 24px
    }

    .style19 {
      font-size: 24px;
      color: #FFFF00;
    }

    .style21 {
      font-size: 24px;
      color: #0066FF;
    }
    -->
  </style>
</head>

<body>
  <form action="" method="POST">
    <div align="center">
      <p class="style21">Add Category </p>
      <p class="style2">&nbsp;</p>
      <table width="488" border="1" cellpadding="8" cellspacing="0" bgcolor="#333333">
        <tr>
          <th width="212" class="style19" scope="row">Add Category Name </th>
          <td width="238"><label>
              <input type="text" name="a1" />
            </label></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><label>
              <input type="submit" name="Submit1" value="Submit" />
            </label></td>
        </tr>
      </table>
    </div>
  </form>
  <?php 
if(isset($_POST['Submit1'])){
$a1=$_POST["a1"];


$sql = "insert into category (categoryname)values('$a1')";
if(mysqli_query($conn,$sql)){
?>

<script>alert("Category Added");</script>

<?php 
}else{
echo "Could not insert record:".mysqli_error($conn);
}
}

?>
</body>

</html>