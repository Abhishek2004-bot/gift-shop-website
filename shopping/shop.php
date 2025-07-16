<?php
// Start the session
session_start();
?>
<?php include("db.php"); ?>
<?php include("customernavbar.php"); ?>
<!DOCTYPE html>
<html>


<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    #search-con {
      position: relative;
      width: 100%;
    }

    #search-box {
      width: 100%;
      align-content: center;
      padding: 6px;
      margin-right: 50px;
      margin: 30px 0;
      border: 1px solid #ccc;
      border-radius: 20px;
      word-spacing: 5px;

    }

    #search-con i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;

    }

    .container {
      margin-top: -80px;
    }

    .addcart {
      margin-right: 40px;
      padding: 2px;
    }
  </style>
</head>

<body>

  <div id="search-con">
    <input type="search" name="pname" placeholder="Search Your Favourite Gift items here.." class="search-box" id="search-box" />
    <i class="fa fa-search" aria-hidden="true"></i>
  </div>

  <!-- end hero area -->

  <!-- shop section -->
  <section class="shop_section layout_padding">
    <div class="container">

      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <?php
        $sql = "SELECT * FROM product";
        $retval = mysqli_query($conn, $sql);


        while ($row = mysqli_fetch_assoc($retval)) {

        ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
              <a href="">
                <div class="img-box">
                  <img src="images/<?php echo $row['image'] ?>" alt="img">
                </div>
                <div class="detail-box">
                  <h6>
                    <?php echo $row['productname'] ?>
                  </h6>
                  <h6>
                    ₹
                    <span>
                      <?php echo $row['productprice'] ?>
                    </span>
                  </h6>
                </div>
                <!-- <div class="new">
                  <span>
                    New
                  </span>
                </div> -->
              </a>
              <form action="buyproduct.php" method="post">
                <input name="p_id" type="hidden" value="<?php echo $row['productname'] ?>">
                <!-- <input name="Submit" type="submit" value="Buy Now">
                <input name="Addtocart" type="submit" value="Add to cart"> -->
                <div class="d-flex gap-2">
                  <button name="Submit" type="submit" class="btn btn-success btn-sm">
                    <i class="bi bi-lightning-charge-fill"></i> Buy Now
                  </button>
                  <button name="Addtocart" type="submit" class="btn btn-outline-warning btn-sm" title="Add to Cart">
                    <i class="bi bi-cart-plus-fill"></i>
                  </button>
                  
                </div>

              </form>
            </div>



          </div>
        <?php
        }

        ?>
      </div>

      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>

      <?php
      if (isset($_POST["showwithname"])) {
        $pname = $_POST["pname"];
        $sql = "SELECT * FROM product where productname='$pname'";
        $retval = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($retval)) {
      ?>
          </span>
          <table width="444" border="1" align="center" bgcolor="white">
            <tr bgcolor="white">
              <td height="25" class="style10">
                <div align="center"><img src="images/<?php echo $row['image'] ?>" width="200" height="250" /></div>
              </td>
            </tr>

            <tr>
              <td class="style10">
                <p align="center">Product Name: <?php echo $row['productname'] ?></p>
                <p align="center">Product Price:<?php echo $row['productprice'] ?></p>
              </td>
            </tr>
          </table>
          <span class="style10"><br />

        <?php
        }
      }
        ?>


  </section>

  <!-- end shop section -->

  <!-- info section -->



  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>