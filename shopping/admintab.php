<?php include("db.php");?>
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .nav-link{
      font-size:14px;font-weight:100;
      display: flex;
      flex-direction:row;
     justify-content:space-evenly;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            GiftNest
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="adminhometab.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">
                ADD PRODUCTS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminviewproduct.php">
                VIEW PRODUCTS
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="admincustomerdetails.php">
                VIEW CUSTOMERS
              </a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="adminsearchprod.php">Search Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminvieworders.php">
                VIEW ORDERS
              </a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="viewevents.php">VIEW EVENTS</a>
            </li>
          </ul>
          <div class="user_option">
        
			   <a href="index.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                LOGOUT
              </span>
            </a>
          
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    
   
     

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>