<?php
session_start();

  include_once 'connection.php';
  //getting the stuff
  if (isset($_POST['amountOf'])) {

  //the variables for the data that will go into the database down by the $sql variable
  $product_id = $_POST['id'];
  $quantity = $_POST['amountOf'];

  //over here :D
  $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";
  //this check the stuff n if it isn't it does a error thingy
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

//sql command
$sql = "SELECT products.*, cart.quantity FROM products INNER JOIN cart ON products.id = cart.product_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/cartStyle.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="shortcut icon" href="assets/Images/favicon.ico">
  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>
  <title>Cart</title>
</head>

<body>
  <div class="container">
    <?php
    include_once 'header.php';
    ?>

    <div id="cart">
      <header style="font-size: 40px; text-align: center;">Cart</header>
      <br>

      <?php
      //if statement for the things
      if ($result->num_rows > 0) {
        //a while loop to do the things
        while ($product = $result->fetch_assoc()) {

          $totals = $product['price'] * $product['quantity'];

          $btwMath = (($product['price'] * $product['quantity']) / 100 * 21);
          $priceWbtwMath = ($product['price'] * $product['quantity']) + ((($product['price'] * $product['quantity']) / 100 * 21));
          
          $totalPrice = number_format($totals, 2, ',', '');
          $btw = number_format($btwMath, 2, ',', '');
          $priceWbtw = number_format($priceWbtwMath, 2, ',', '');

      ?>
          <div class="product">

            <img src="assets/Images/<?= $product['photo'] ?>" alt="Product Image" id="ImageStyle" style="height:200px;width:auto;">
            <div class="product-details">

              <div class="name">Name: <?= $product['title'] ?></div>
              <div class="productPrice">Single product price: €<?= number_format($product['price'], 2, ',', '') ?></div>

              <div class="amountInCart">Amount: <?= $product['quantity'] ?></div>
              <div class="totalPrice">Total Price: €<?=$totalPrice?></div>

              <div>Btw: €<?= $btw ?></div>
              <div>Price including Btw: €<?= $priceWbtw ?></div>

              <br>
              <br>

            </div>

          </div>
      <?php
        }
      } else {
        echo "Cart is empty";
      }

      $conn->close();
      ?>

      <!-- Cute lil buttons for paying and clearing the cart -->
      <div class="buttons">

        <button id="Paying" onclick="location.href='form.php'">Pay?</button>
        <form action="intercept.php" method="post">
          <button type="submit" name="clear_cart" id="ClearCart">Clear?</button>
        </form>

      </div>

      <br>
      <br>

    </div>

    <?php
    include_once 'footer.php';
    ?>

  </div>

</body>

</html>