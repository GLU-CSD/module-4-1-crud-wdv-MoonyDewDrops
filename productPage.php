<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>

  <link rel="stylesheet" href="assets/css/pageProductLayout.css">

  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/pageProduct.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">
  <meta name="theme-color" content="#fafafa">

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/ImageSelector.js"></script>
  <script defer src="assets/js/app.js"></script>
</head>

<body>

  <div class="container">
    <!-- Header -->
    <?php include_once 'header.php'; ?>

    <!-- Product -->
    <div class="product">
      <?php

      if (!empty($_GET['id'])) {

        $id = $_GET['id'];

        include_once 'connection.php';

        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          $product = $result->fetch_assoc();
      ?>
          <!-- Display product details -->
          <div id="overviewProduct">
            <img src="assets/Images/<?= $product['photo'] ?>" alt="Big Image" id="bigImage">
            <div id="overall">
              <?= $product['title'] ?> <br> <br>
              €<?= $product['price'] ?> <br> <br>
              <form action="cart.php" method="post">
                <input type="number" name="amountOf" placeholder="1" style="width:10%;" min="1" required>
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <button type="submit" id="description">
                  Add to cart?
                </button>
              </form>
              <br><br>
              <?= $product['descriptions'] ?>
            </div>

            <div id="tinyImages">
              <img src="assets/Images/<?= $product['photo'] ?>" alt="Tiny Image 1" class="tiniestImages">
              <img src="assets/Images/<?= $product['photo2'] ?>" alt="Tiny Image 2" class="tiniestImages">
              <img src="assets/Images/<?= $product['photo3'] ?>" alt="Tiny Image 3" class="tiniestImages">
            </div>
          </div>
      <?php
        } else {

          echo 'Product not found';
        }

        $conn->close();
      } else {

        echo 'Product ID is missing';
      }
      ?>
    </div>

    <!-- Footer -->
    <?php include_once 'footer.php'; ?>
  </div>

</body>

</html>