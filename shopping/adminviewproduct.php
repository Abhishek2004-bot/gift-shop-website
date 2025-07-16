<?php include("db.php"); ?>
<?php include("admintab.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
  </style>
</head>

<body>

  <div id="search-con">
    <input type="search" name="pname" placeholder="Search Your Favourite Gift items here.." class="search-box" id="search-box" />
    <i class="fa fa-search" aria-hidden="true"  ></i>
	<!-- <input type=" submit" name="showwithname" value="showwithname" /> -->
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
                    Price
                    <span>
                      <?php echo $row['productprice'] ?>
                    </span>
                  </h6>
                </div>
                <div class="new">
                  <span>
                    New
                  </span>
                </div>
              </a>
              <form action="" method="post">
                <input name="p_id" type="hidden" value=" <?php echo $row['id'] ?>">
                <input name="Submit" type="submit" value="Buy Now">

               
                <input type="submit" name="delete" value="Delete" <i class="fa-solid fa-trash-can" style="color: #e62828;"></i>/>
           
                
                <input type="text" name="pprice" value="<?php echo $row['productprice'] ?>" required/>
                <input type="submit" name="update" value="Update Price" />
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
      if (isset($_POST["delete"])) {
        $pid = $_POST["p_id"];
        $sql = "delete from product where id ='$pid'";
        if (mysqli_query($conn, $sql)) {

      ?>
          <script>
            alert("product deleted successfully");
            window.open("adminviewproduct.php", "_self");
          </script>

      <?php
        }
      }
      ?>

<?php
      if (isset($_POST["update"])) {
        $pprice = $_POST["pprice"];
        $pid = $_POST["p_id"];
        $sql = "update  product set productprice ='$pprice' where id = '$pid'";
        if (mysqli_query($conn, $sql)) {

      ?>
          <script>
            alert("product price update successfully");
            window.open("adminviewproduct.php","_self");
          </script>

      <?php
        }
      }
      ?>
      


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>


</html>