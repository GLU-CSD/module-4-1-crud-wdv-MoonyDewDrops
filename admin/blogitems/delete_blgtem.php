<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting</title>
</head>

<body>
    <?php
    include_once '../../connection.php';

    //checking if its a GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        //checking if girl aint starving[empty]
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            //setting the thing as the GET so we acc got sum to work with
            $id = $_GET['id'];

            // Getting the afbeelding's path n stuff :3
            $sql = "SELECT afbeelding FROM nieuwsbericht WHERE id = ?";

            $stmt = $conn->prepare($sql);
            //bind the question mark in the sql command to the variable. very useful my friend 
            $stmt->bind_param("s", $id);
            $stmt->execute();

            //the binding shebang for the afbeelding n stuff
            $stmt->bind_result($afbeelding);
            $stmt->fetch();
            $stmt->close();

            //the sql command :3
            $sql = "DELETE FROM nieuwsbericht WHERE id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id);

            //checkin if its bein executed
            if ($stmt->execute()) {
                //to see if there was any of the things affected, and if it isnt, it'll display an error
                if ($stmt->affected_rows > 0) {
                    if (file_exists($afbeelding)) {
                        unlink($afbeelding);
                    }
    ?>
                    <a href='index.php'>Deleted succesfully</a>
    <?php
                } else {
                    //error message :3
                    echo "No message found with the ID provided";
                }
            } else {
                //other error message :D
                echo "Error deleting message: " . $conn->error;
            }

            //closin it up
            $stmt->close();
        } else {
            //yuupp, shows if there's nothing filled in
            echo "id is required";
        }
    }

    $conn->close();
    ?>

</body>

</html>