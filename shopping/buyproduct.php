<?php
// Start the session
session_start();
?>
<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>

  <style type="text/css">
    /* <!--
    .style1 {
      color: #0066CC
    }

    .style2 {
      color: #000000;
      font-size: 18px;
    }

    .style3 {
      font-size: 18px
    }
    -->
  </style> */
</head>

<body>
  <?php

  if (isset($_POST['Submit'])) {
    $id = $_POST["p_id"];
    echo $id;

    $sql = "SELECT * FROM  product where productname='$id'";
    $retval = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($retval)) {
  ?>



      <div class="container my-5">
        <h2 class="text-center text-primary mb-4">🚚 Shipping Details</h2>

        <form action="" method="post" class="mx-auto" style="max-width: 500px;">
          <div class="card shadow p-4 bg-light">

            <div class="mb-3">
              <label class="form-label">Product Name</label>
              <input type="text" name="s1" class="form-control" value="<?php echo $row['productname']; ?>" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label">Product Price</label>
              <input type="text" name="s2" class="form-control" value="<?php echo $row['productprice']; ?>" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label">Quantity</label>
              <input type="number" name="s3" class="form-control" value="1" min="1" pattern="[0-9]{1,}" title="Number is required" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Address</label>
              <textarea name="s4" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">Card Type</label>
              <select name="s5" class="form-select" required>
                <option value="">-- Select Card Type --</option>
                <option>Debit Card</option>
                <option>Credit Card</option>
                <option>Master Card</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Card Number</label>
              <input name="s6" type="text" placeholder="XXXX XXXX XXXX" pattern="[0-9]{12}" title=" 12 digit Debit card number" required class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">CVV</label>
              <input name="s7" type="password" placeholder="XXX" pattern="[0-9]{3}" title=" 3 digit cvv number" required maxlength="3" class="form-control" required>
            </div>

            <div class="mb-4">
              <label class="form-label">Pin</label>
              <input type="password" name="s8" maxlength="6" pattern="[0-9]{6}"  class="form-control" required>
            </div>

            <div class="d-grid">
              <button type="submit" name="order" class="btn btn-success">✅ Place Your Order</button>
            </div>

          </div>
        </form>
      </div>

  <?php
    }
  }
  ?>

  <?php
  if (isset($_POST['order'])) {

    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];
    $s4 = $_POST["s4"];
    $s5 = $_POST["s5"];
    $s6 = $_POST["s6"];
    $s7 = $_POST["s7"];
    $s8 = $_POST["s8"];

    $s9 = $_SESSION['cemail'];

    $sql = "insert into orderlist(productname,productcost,quantity,address,cardtype,cardnum,cvv,pin,cemail)values('$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')";
    if (mysqli_query($conn, $sql)) {
  ?>

      <script>
        alert("Order Booked Successfully");
        window.open("shop.php", "_self");
      </script>


  <?php
    }
  }

  ?>

  <?php
  if (isset($_POST['Addtocart'])) {
    $p_id = $_POST["p_id"];
    $sql = "SELECT * FROM product where productname='$p_id'";
    $retval = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($retval)) {
  ?>
      <div class="hero_area">
        <header class="header_section">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <form method="post" action="buyproduct.php">

              <div class="img-box">

                <img src="images/<?php echo $row['image'] ?>" width="303" height="190" />
                <input name="c1" type="hidden" value="<?php echo $row['image'] ?>" />
              </div>

              <div class="detail-box">
                <h6><?php echo $row['productname']; ?></h6>

                <h6> ₹<?php echo $row['productprice']; ?></h6>

              </div>

              <input type="hidden" name="c2" value="<?php echo $row['productname']; ?>" />
              <input type="hidden" name="c3" value="<?php echo $row['productprice']; ?>" />

           

              <button class="btn btn-danger btn-sm" type="submit" name="Add" title="Add to Cart">
                <i class="bi bi-cart-plus-fill"></i>
              </button>



      </div>
      </div>
      </form>
      </nav>
      </header>
      </div>
  <?php
    }
  }
  ?>
  <?php
  if (isset($_POST['Add'])) {
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_SESSION['cemail'];


    $sql = "INSERT  INTO cart(pimage,pname,pprice,cemail) VALUES('$c1','$c2','$c3','$c4')";

    if (mysqli_query($conn, $sql)) {
  ?>
      <script>
        alert("Product added to Cart");
        window.open("mycart.php", "_self");
      </script>

  <?php
    } else {
      echo "Could not insert record: " . mysqli_error($conn);
    }
  }
  ?>


</body>

</html>