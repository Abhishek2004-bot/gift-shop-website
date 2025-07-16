<?php
session_start();
include("db.php");

if (isset($_POST['remove'])) {
  $product = $_POST['p_id'];
  $email = $_SESSION['cemail'];

  $query = "DELETE FROM cart WHERE pname = '$product' AND cemail = '$email'";
  mysqli_query($conn, $query);

  header("Location:mycart.php");
}
?>
