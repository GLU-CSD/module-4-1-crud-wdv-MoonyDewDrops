<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT id, productID, title, category, price, photo, descriptions FROM products WHERE id = ?";

        include_once '../../connection.php';
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

        <?php
                $stmt = $conn->prepare($sql);

                if ($stmt === false) {
        
                    echo mysqli_error($conn);
        
                } else {
        
                    $stmt->bind_param("i", $id);
        
                    if ($stmt->execute()) {
        
                        $stmt->bind_result($id, $productID, $title, $category, $price, $photo, $description);
        
                        if ($stmt->fetch()) {
                ?>            
                
        
        <form action="edit_product.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">

            <label for="productID">Product ID:</label><br>
            <input type="text" id="productID" name="productID" value="<?= $productID ?>"><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="<?= $title ?>"><br>

            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category" value="<?= $category ?>"><br>

            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price" value="<?= $price ?>"><br>

            <label for="photo">Photo:</label><br>
            <input type="file" id="photo" name="photo" value="<?= $photo ?>"><br>

            <label for="descriptions">Description:</label><br>
            <input id="descriptions" name="descriptions" value="<?= $description ?>"></input><br><br>

            <?php
                        } else {
                            echo 'No products found shawty';
                        }
                    } else {
                        echo 'Failed to do allat gril: ' . $stmt->error;
                    }
                    $stmt->close();

            }
        }
    }

            ?>

            <input type="submit" value="Edit Product">
        </form>
    </div>


</body>

</html> 