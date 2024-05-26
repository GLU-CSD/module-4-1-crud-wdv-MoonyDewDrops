<?php
session_start();
//this makes it so that once you are at this page, your cart empties and it doesn't display anything anymore. Else, it would just 
//still be in your cart, whilst you've already bought your selected item.
session_unset();

// include_once 'connection.php';

// $sql = "SELECT * FROM cart";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   $cart = array();
//   while ($row = $result->fetch_assoc()) {
//     $cart[] = $row;
//   }
// } else {
//   echo "No products found";
// }

// $conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- all the styles n stuff -->
  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/purchase.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>

  <title>Purchase Completed</title>
</head>

<body>
  <div class="container">
    <?php
    include 'header.php';
    ?>

   <div class="info">
      Thank you for your order! Here is the information of your order:
      <!-- 
       <?php //foreach ()
        // $products['title']
        ?> -->


      Thank you again for shopping with us!

    </div>

    <?php
    include 'footer.php';
    ?>
  </div>

</body>

</html>

<!-- <?php
      // session_unset();
      ?> -->