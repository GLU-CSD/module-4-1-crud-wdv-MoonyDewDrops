<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Form</title>

  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/formStyle.css">

  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">
  <meta name="theme-color" content="#fafafa">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>
</head>

<body>

  <div class="container">

    <?php
    include_once 'header.php';
    ?>

    <div class="bestelling">

      <form action="purchaseInfo.php" id="orderForm">

        <br>

        <label for="aanhef"></label>

        <select id="aanhef" name="aanhef" required>
          <option value="" disabled selected>Select</option>
          <option value="Dhr.">Mr.</option>
          <option value="Mevr.">Mrs.</option>
        </select>
        <br><br>

        <label for="voornaam">First name:</label>
        <input type="text" id="voornaam" name="voornaam" required><br><br>


        <label for="tussenvoegsel">Insertion:</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel"><br><br>


        <label for="achternaam">Last name:</label>
        <input type="text" id="achternaam" name="achternaam" required><br><br>


        <label for="straatnaam">Street name:</label>
        <input type="text" id="straatnaam" name="straatnaam" required><br><br>


        <label for="huisnummer">House number:</label>
        <input type="number" id="huisnummer" name="huisnummer" required><br><br>


        <label for="postcode">Postal code:</label>
        <input type="text" id="postcode" name="postcode" pattern="[1-9][0-9]{3} ?[a-zA-Z]{2}" title="Enter a valid postcode" required><br><br>



        <label for="land">Country:</label>
        <input type="text" id="land" name="land" required><br><br>


        <label for="email">Email address:</label>
        <input type="email" id="email" name="email" required><br><br>


        <label for="telefoonnummer">Phone number:</label>
        <input type="tel" id="telefoonnummer" name="telefoonnummer" required><br><br>


        <label for="geboortedatum">Date of Birth:</label>
        <input type="date" id="geboortedatum" name="geboortedatum" required><br><br>


        <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
        <label for="voorwaarden">I agree to the terms and conditions</label><br><br>


        <input type="submit" value="Submit">

      </form>

    </div>


    <?php
    include_once 'footer.php';
    ?>
  </div>




</body>

</html>