<?php
session_start();

include_once '../../connection.php';

//checking if its a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //checking if girl aint starving[empty]
    $productID = $_POST['productID'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['descriptions'];

    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photoName = $_FILES['photo']['name'];
        $photoTempName = $_FILES['photo']['tmp_name'];
        $photoSize = $_FILES['photo']['size'];

        $wantedDirectory = '../../assets/Images/';
        $wantedPath = $wantedDirectory . $photoName;

        if(move_uploaded_file($photoTempName, $wantedPath)) {
            $sql = "INSERT INTO products (productID, title, category, price, photo, descriptions) VALUES (?, ?, ?, ?, ?, ?)";
            $insertqry = $conn->prepare($sql);

            if ($insertqry === false) {
                echo mysqli_error($conn);
            } else {
                $photo = $wantedPath;
                $insertqry->bind_param('sssdss', $productID, $title, $category, $price, $photo, $description); 
                if ($insertqry->execute()) {
                    //if it succesfully adds the thing?>
                    <a href='index.php'>Added succesfully</a>
                <?php
                } else {
                    //if it fails
                    echo "Error adding product: " . $insertqry->error;
                }
            }
            $insertqry->close();
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "Error uploading file.";
    }
}

$conn->close();
?>
