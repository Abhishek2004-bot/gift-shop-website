
<?php include("first.php");?>
<?php include ("db.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- <style type="text/css">

.style2 {font-size: 24px}
.style18 {font-size: 18px; font-weight: bold; }
.style21 {font-size: 24px; color: #ffa60cff; }
.h1{ text-align:center;  color:#0099FF}
-->
<!-- </style> --> 
</head>

<body>
<!-- <h1 class="h1">sign up</h1> -->
 <!-- <form action="" method="POST">


<table width="566" border="2" align="center" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th width="242"  scope="row"><div align="center"><span >Username</span></div></th>
    <td width="276">
      <label>
        <input type="text" name="r1"pattern="[a-zA-Z ]{1,}"  title=" only aphabets is need " required/>
        </label>
     </td>
  </tr>
 
  <tr>
    <th  scope="row"><div align="center"><span >Email Id</span></div></th>
    <td>
      <label>
        <input type="email" name="r3" required />
        </label>

    </td>
  </tr>
  <tr>
    <th   scope="row"><div align="center"><span >Phone Number </span></div></th>
    <td>
      <label>
        <input type"text" name="r4" pattern="[0-9]{10}" title=" 10 digit phone number " required/>
        </label>

    </td>
  </tr>
  <tr>
    <th  scope="row"><div align="center"><span >Password</span></div></th>
    <td>
      <label>
        <input type="password" name="r5"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        </label>
    </form>
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>
     
        <label>
        
        <div align="right">
          <input type="submit" name="Submit1" value="Sign Up" />
        </div>
        </label>
 
    </td>
  </tr>
</table> */ -->


<!-- <div align="center"></div>
<div align="center"></div> -->

<div class="container" style="background: #ffffffff; min-height: 100vh; padding-top: 40px;">
  <div class="card" style="width: 100%; max-width: 400px; margin: 0 auto; box-shadow: none; border-radius: 10px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4" style="color: #ff6b6be2;">Sign Up</h3>
      <form action="" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="r1" pattern="[a-zA-Z ]{1,}" title="Only alphabets are allowed" required>
        </div>
        <div class="form-group">
          <label for="email">Email Id</label>
          <input type="email" class="form-control" id="email" name="r3" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" id="phone" name="r4" pattern="[0-9]{10}" title="10 digit phone number" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="r5"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}"
            title="Must contain at least one number, one uppercase and lowercase letter, one special character, and at least 8 or more characters"
            required>
        </div>
       <button type="submit" name="Submit1" class="btn btn-block" style="background-color: #ff6b6b; color: #fff;">Sign Up</button>
      </form>
    </div>
  </div>
</div>




<?php 
if(isset($_POST['Submit1'])){
$r1=$_POST["r1"];
$r3=$_POST["r3"];
$r4=$_POST["r4"];
$r5=$_POST["r5"];

$sql = "insert into customer(`Username`,`Email Id`,`Phone Number`,`Password`)values('$r1','$r3','$r4','$r5')";
if(mysqli_query($conn,$sql)){
?>

<script>alert("Customer account created successfully");</script>

<?php 
}else{
echo "Could not insert record:".mysqli_error($conn);
}
}

?>
</body>
</html>
