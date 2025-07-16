<?php
// Start the session
session_start();
?>

<?php include("db.php");?>
<?php include("first.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
  .form-wrapper {
  background: #fff;
  padding: 35px 30px;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  width: 400px;
  margin-left:50%;
  transform: translateX(-50%);
  margin-top: 40px;
  }
/* Table Layout */
.login-table {
  width: 100%;
}

.login-table td {
  padding: 10px;
  vertical-align: middle;
}

.login-table label {
  font-weight: 500;
  color: #444;
}

/* Input Fields */
.login-table input[type="email"],
.login-table input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid #ddd;
  background-color: #e6f0ff;
  font-size: 14px;
  outline: none;
}

.login-table input:focus {
  border-color: #ff9f9f;
  background-color: #fff;
}

/* Buttons */
.btn-cell {
  text-align: center;
}

.btn {
  padding: 10px 18px;
  margin: 0 5px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  font-size: 14px;
}

.btn.reset {
  background-color: #ccc;
  color: #333;
}

.btn.submit {
  background-color: #ff6b6b;
  color: white;
}

.btn.submit:hover {
  background-color: #ff4d4d;
}

/* Links & Note */
.register-note {
  text-align: center;
  margin-top: 15px;
  font-size: 14px;
}

.register-note a {
  color: #ff6b6b;
  font-weight: bold;
  text-decoration: none;
}

.register-note a:hover {
  text-decoration: underline;
}
#login{
  text-align: center;
  color: #ff6b6b;
  font-size: 24px;
  margin-bottom: 20px;
}
   .text-center .logo {
      width:45px;
      margin-bottom:0.9rem;
    }
</style>
</head>
<body>
<div class="form-wrapper">
     <div class="text-center">
      <img src="images/favicon.png" alt="GiftShop Logo" class="logo">

    </div>
    <form action="" method="post">
      <h1 id="login">Login</h1>
      <table class="login-table">
        <tr>
          <td><label for="emtxt">Email ID</label></td>
          <td>  <input type="email" name="emtxt"  required/></td>
        </tr>
        <tr>
          <td><label for="pwtxt">Password</label></td>
          <td> <input  type="password" id="pwtxt" name="pwtxt" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
        </tr>
        <tr>
          <td>  <br>
          <br>  <br>
          </td>
        
          <td class="btn-cell">
            <input type="reset" value="Reset" class="btn reset" />
            <input type="submit" name="Submit" value="Submit" class="btn submit" />
          </td>
        </tr>
      </table>
      <p class="register-note">Forgot Password? <a href="#">Click here</a></p>
      <p class="register-note">New user? <a href="sign.php">Register Here</a></p>
    </form>
  </div>
  <!-- <form action="" method="post">
  <table width="389" height="145" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="194" height="45"><div align="center">Email Id </div></td>
      <td width="177"><label>
        <input type="email" name="emtxt"  required/>
      </label></td>
    </tr>
    <tr>
      <td height="43"><div align="center">Password</div></td>
      <td><label>
        <input  type="password" id="pwtxt" name="pwtxt" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
      </label></td>
    </tr>
    <tr>
      <td height="51"><label>
        <div align="center"></div>
      </label></td>
      <td><label>
        <div align="center">
          <input type="reset" name="Reset" value="Reset" /> 
          <input type="submit" name="Submit" value="Submit" />
        </div>
      </label></td>
    </tr>
  </table>
  <p align="center"><strong >"New user? <a class=mysign href="sign.php">Click here  </a>to create an account! &quot;</strong> </p>
</form> -->

<?php 
if(isset($_POST['Submit'])){
$un = $_POST["emtxt"];
$pw = $_POST["pwtxt"];
$sql = "SELECT * FROM  customer where `Email Id` = '$un' and `password` = '$pw'";
$retval = mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0){
$_SESSION['cemail']=$un;
?>

echo '<script>
alert("login success");
window.open("shop.php","_self");
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











