<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>

<body>

  <?php
  include_once '../core/headers.php';
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Product ID</th>
        <th>Title</th>
        <th>Category</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT id, productID, title, category, price, photo, descriptions FROM products;";
      include_once '../../connection.php';

      $liqry = $conn->prepare($sql);
      if ($liqry === false) {
        echo mysqli_error($conn);
      } else {
        if ($liqry->execute()) {
          $liqry->bind_result($id, $productID, $title, $category, $price, $photo, $description);
          while ($liqry->fetch()) {
      ?>
            <tr>
              <td><?= $id ?></td>
              <td><?= $productID; ?></td>
              <td><?= $title; ?></td>
              <td><?= $category; ?></td>
              <td><?= $price; ?></td>
              <td><?= $photo; ?></td>
              <td><?= $description; ?></td>
              <td><a href='editing_product.php?id=<?= $id ?>'>Edit</a></td>
              <td><a href='delete_product.php?id=<?= $id ?>'>Delete</a></td>
            </tr>
      <?php
          }
        }
        $liqry->close();
      }
      ?>
    </tbody>
  </table>

  <!-- form for adding products -->
  <div class="addProduct">
    <p>Add a product</p>
    <form action="add_product.php" method="post" enctype="multipart/form-data">

      <label for="productID">Product ID:</label><br>
      <input type="text" id="productID" name="productID" required><br>

      <label for="title">Title:</label><br>
      <input type="text" id="title" name="title" required><br>

      <label for="category">Category:</label><br>
      <input type="text" id="category" name="category" required><br>

      <label for="price">Price:</label><br>
      <input type="number" id="price" name="price" min="1" required><br>

      <label for="photo">Photo:</label><br>
      <input type="file" id="photo" name="photo" required><br>

      <label for="descriptions">Description:</label><br>
      <textarea id="descriptions" name="descriptions" required></textarea><br>

      <input type="submit" value="Add Product">
    </form>
  </div>

  <?php
  include_once '../core/footers.php';
  ?>

</body>

</html>