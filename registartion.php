<?php
session_start();

if (isset($_POST['submit'])) {
  //Gjøre om POST-data til variabler
  $username = $_POST['navn'];
  $password = $_POST['passord'];

  //lage en kobling til databasen
  $dbc = mysqli_connect('localhost', 'root', '', 'weatherapp') or die('Error connecting to MySQL server: ' . mysqli_connect_error());


  //gjøre klar en SQL-query
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

  //utfør spørringen 
  $result = mysqli_query($dbc, $query) or die('Error querying database.');

  mysqli_close($dbc);


  //sjekk om spørring gir resulater
  if ($result) {
    // Login success 
    // Redirect to test.php
    header("Location: account-intro.php");
    exit(); // Ensure that the script stops here to prevent further execution
  } else {
    // Login failure 
    echo "Noe gikk galt, Prøv igjen!";
  }

}
?>


<!DOCTYPE html>
<html lang="en"
  style="background-color: #2C3543; display: flex; justify-content: center; align-items: center; width: 100%; height: 100vh;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>skyklima</title>
</head>

<body>
  <a href="index.html"><img class="back-arrow" src="images/arrow.png" alt=""></a>


  <h1 class="Intro-text">Signup</h1>
  <form method="post" action="registartion.php">
    <div class="login-form">
      <input type="text" name="navn" id="" placeholder="Username" required>
      <input type="password" name="passord" id="" placeholder="Password" required>
    </div>
    <button class="submit-button" type="submit" name="submit">Signup</button>
  </form>
  <p class="other">Or login <a href="login.php"> "Here" </a>if you have an account</p>

</body>

</html>