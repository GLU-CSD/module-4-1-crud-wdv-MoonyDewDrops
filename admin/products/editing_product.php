<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
</head>

<body>

    <!-- form for editing products -->
    <div class="editProduct">
        <p>Edit a product</p>
        <form action="edit_product.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">

            <label for="productID">Product ID:</label><br>
            <input type="text" id="productID" name="productID"><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>

            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category"><br>

            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price"><br>

            <label for="photo">Photo:</label><br>
            <input type="file" id="photo" name="photo"><br>

            <label for="descriptions">Description:</label><br>
            <textarea id="descriptions" name="descriptions"></textarea><br><br>

            <input type="submit" value="Edit Product">
        </form>
    </div>


</body>

</html>