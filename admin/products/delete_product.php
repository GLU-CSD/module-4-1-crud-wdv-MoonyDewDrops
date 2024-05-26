<?php
session_start();

include_once '../../connection.php';

//checking if its a GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //checking if girl aint starving[empty]
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    //setting the thing as the post so we acc got sum to work with
    $id = $_GET['id'];

    // Getting the photo's path n stuff :3
    $sql = "SELECT photo FROM products WHERE id = ?";

    $stmt = $conn->prepare($sql);
    //the whole binding shebang for the id
    $stmt->bind_param("s", $id);
    $stmt->execute();


    //the binding shebang for the photo n stuff
    $stmt->bind_result($photo);
    $stmt->fetch();
    $stmt->close();

    //the sql command :3
    $sql = "DELETE FROM products WHERE id = ?";

    $stmt = $conn->prepare($sql);
    //bind the question mark in the sql command to the variable. very useful my friend 
    $stmt->bind_param("s", $id);

    //checkin if its bein executed
    if ($stmt->execute()) {
      //to see if there was any of the things affected, and if it isnt, it'll display an error  
      if ($stmt->affected_rows > 0) {
        // Delete the image file
        if (file_exists($photo)) {
          unlink($photo);
        }
?>
        <a href='index.php'>Deleted successfully</a>
<?php
      } else {
        //error message :3
        echo "No product found with the ID provided";
      }
    } else {
      //other error message :D
      echo "Error deleting product: " . $conn->error;
    }

    $stmt->close();
  } else {
    //yuupp, shows if there's nothing filled in
    echo "Product ID is required";
  }
}

$conn->close();
?>