<?php
session_start();
include("db.php");
include("customernavbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Cart</title>

  <!-- Styles -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <style>
    .style1 {
      font-size: 24px;
      font-weight: bold;
      color: #CC6699;
    }

    .cart-container {
      padding: 20px;
    }

    .product-card {
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
      padding: 15px;
      margin: 10px;
      width: 330px;
    }

    .img-box img {
      width: 100%;
      height: auto;
      border-radius: 6px;
    }

    .detail-box h6 {
      margin: 8px 0;
    }

    .btn-remove {
      background-color: #dc3545;
      color: #fff;
    }

    .total-section {
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <div align="center" class="style1">Your Cart Products</div>
  <div class="container cart-container d-flex flex-wrap justify-content-center gap-4">

    <?php
    $cb = $_SESSION['cemail'];
    $sql = "SELECT cart.*, product.description 
            FROM cart 
            JOIN product ON cart.pname = product.productname  
            WHERE cart.cemail = '$cb'";
    $retval = mysqli_query($conn, $sql);
    $total = 0;

    while ($row = mysqli_fetch_assoc($retval)) {
      $total += $row['pprice']; // Accumulate total price
    ?>
      <div class="product-card">
        <div class=" text-center">
          <img src="images/<?php echo $row['pimage']; ?>" alt="Product Image" />
        </div>

        <div class="detail-box text-center">
          <h6><?php echo $row['pname']; ?></h6>
          <h6>₹<?php echo $row['pprice']; ?></h6>
          <h6><?php echo $row['description']; ?></h6>
        </div>

        <form method="post" action="buyproduct.php" class="text-center mt-2">
          <input type="hidden" name="p_id" value="<?php echo $row['pname']; ?>" />
          <label for="qty_<?php echo $row['pname']; ?>">Quantity:</label>
          <input type="number" name="qty" id="qty_<?php echo $row['pname']; ?>" value="1" min="1" max="10" class="form-control w-50 d-inline-block mb-2" />

          <button type="submit" name="Submit" value="Buy Now" class="btn btn-success btn-sm">
            Buy Now
          </button>
        </form>

        <form method="post" action="removecart.php" class="text-center mt-2">
          <input type="hidden" name="p_id" value="<?php echo $row['pname']; ?>" />
          <button type="submit" name="remove" class="btn btn-remove btn-sm">
            Remove
          </button>
        </form>
      </div>
    <?php } ?>
  </div>

  <div class="total-section">
    <?php echo "Total Cart Value: ₹" . $total; ?>
  </div>

</body>

</html>