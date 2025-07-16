<?php
// Start the session
session_start();
?>
<?php include("customernavbar.php"); ?>
<?php include("db.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="iso-8859-1" />
  <title>View Ordered Details</title>
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
    }
    .style2 {
      color: #FF6600;
    }
    .style3 {
      font-size: 18px;
    }
    .style4 {
      font-size: 24px;
    }
    table {
      background-color: #e8e6e2ff;
      border-collapse: collapse;
      width: 90%;
  
    }
    table td, table th {
      border: 1px solid #999999;
      padding: 15px;
      text-align: center;
      background-color: #ffffffff;
      border: none;
    }
    table th {
      background-color: #ffa012ff;
      color:black;
      border-radius:2px;
    }
    h1 {
      color: #FF6600;
      margin-top: 30px;
    }
  </style>
</head>

<body>
  <h1 align="center" class="style4">View Ordered Details</h1>

  <table align="center" cellpadding="10" cellspacing="5">
    <tr>
      <th class="style3"><strong>Product</strong></th>
      <th class="style3"><strong>Product Cost</strong></th>
      <th class="style3"><strong>Quantity</strong></th>
      <th class="style3"><strong>Address</strong></th>
      <th class="style3"><strong>CVV</strong></th>
      <th class="style3"><strong>Order ID</strong></th>
      <th class="style3"><strong>Order Status</strong></th>
    </tr>

    <?php 
    $email = $_SESSION['cemail'];
    $sql = "SELECT o.*, p.image FROM orderlist o 
            JOIN product p ON o.productname = p.productname 
            WHERE o.cemail = '$email'";
    $retval = mysqli_query($conn, $sql);
    if (mysqli_num_rows($retval) > 0) {
      while ($row = mysqli_fetch_assoc($retval)) {
    ?>
    <tr>
      <td><img src="images/<?php echo $row["image"]; ?>" alt="Product image" width="100" height="100" /></td>
      <td><?php echo $row["productcost"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["address"]; ?></td>
      <td><?php echo $row["cvv"]; ?></td>
      <td><?php echo $row["orderid"]; ?></td>
      <td><?php echo $row["adminstatus"]; ?></td>
    </tr>
    <?php
      }
    } else {
      echo '<tr><td colspan="7">No orders found.</td></tr>';
    }
    ?>
  </table>
</body>
</html>
