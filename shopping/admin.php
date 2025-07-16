<?php include("db.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
  <meta charset="UTF-8">
  <title>GiftShop Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #ff6b6b 0%, #f7f7fa 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .admin-login-card {
      border-radius: 16px;
      box-shadow: 0 4px 32px rgba(0,0,0,0.08);
      padding: 2.5rem 2rem 2rem 2rem;
      background: #fff;
      max-width: 370px;
      width: 100%;
    }
    .admin-login-card .logo {
      width: 60px;
      margin-bottom: 1rem;
    }
    .admin-login-card .btn-primary {
      background-color: #ff6b6b;
      border: none;
    }
    .admin-login-card .btn-primary:hover {
      background-color: #ff5252;
    }
    .admin-login-card h3 {
      color: #ff6b6b;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }
    .admin-login-card .form-control:focus {
      border-color: #ff6b6b;
      box-shadow: 0 0 0 0.2rem rgba(255,107,107,.15);
    }
  </style>
</head>
<body>
  <div class="admin-login-card mx-auto">
    <div class="text-center">
      <img src="images/favicon.png" alt="GiftShop Logo" class="logo">
      <h3>Admin Login</h3>
    </div>
    <form action="" method="POST" autocomplete="off">
      <div class="form-group">
        <label for="adminuser">Username</label>
        <input type="text" class="form-control" id="adminuser" name="user" placeholder="Enter admin username" required>
      </div>
      <div class="form-group">
        <label for="adminpass">Password</label>
        <input type="password" class="form-control" id="adminpass" name="pass" placeholder="Enter password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>

  
<?php 
if(isset($_POST['submit'])){
$un = $_POST["user"];
$pw = $_POST["pass"];
$sql = "SELECT * FROM  adminlogin where `username` = '$un' and `password` = '$pw'";
$retval = mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0){
$_SESSION['cemail']=$un;
?>

echo '<script>
alert("login success");
window.open("admintab.php","_self");
</script>';


<?php
}else{

echo '<script>
alert("login Failed");
</script>';
}
}
?>

</body>
</html>