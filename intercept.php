<?php
session_start();

//gets stuff
if (isset($_POST['clear_cart'])) {
  //unsets session
  session_unset();

  //the sql command :3
  $sql = "DELETE FROM cart";
  include_once 'connection.php';

  //the stuff to acc delete it. Also got the error thing to keep it safe (not sure, wasn't specified in guide i watched :3)
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec($sql);
    echo "Record deleted successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;

  header("Location: cart.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirecting...</title>
  <meta http-equiv="refresh" content="0; URL=cart.php">
</head>

<body>
  <a href="cart.php">Click here if not redirected.</a>
</body>

</html>