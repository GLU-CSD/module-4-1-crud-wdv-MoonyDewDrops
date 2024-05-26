<?php
session_start();

include_once '../../connection.php';

//checking if its a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //checking if girl aint starving[empty]
    $titel = $_POST['titel'];
    $author = $_POST['author'];
    $bericht = $_POST['bericht'];

    if (isset($_FILES['afbeelding']) && $_FILES['afbeelding']['error'] === UPLOAD_ERR_OK) {
        $afbeeldingName = $_FILES['afbeelding']['name'];
        $afbeeldingTempName = $_FILES['afbeelding']['tmp_name'];
        $afbeeldingSize = $_FILES['afbeelding']['size'];

        $wantedDirectory = '../../assets/Images/';
        $wantedPath = $wantedDirectory . $afbeeldingName;
        if (move_uploaded_file($afbeeldingTempName, $wantedPath)) {

            //sql command :33
            $sql = "INSERT INTO nieuwsbericht (titel, author, bericht, afbeelding) VALUES (?, ?, ?, ?)";

            //querry thingy
            $insertqry = $conn->prepare($sql);
            //if there aint a update querry, show an error :3
            if ($insertqry === false) {
                echo mysqli_error($conn);
            } else {
                //else it just updates!! :DD
                $afbeelding = $wantedPath;
                $insertqry->bind_param('ssss', $titel, $author, $bericht, $afbeelding);
                if ($insertqry->execute()) {
                    //if it succesfully adds the thing
?>
                    <a href='index.php'>Added succesfully</a>
<?php
                } else {
                    //if it fails
                    echo "Error adding message: " . $insertqry->error;
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