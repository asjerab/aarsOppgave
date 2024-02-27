<?php
session_start();
$feil = "";
if (isset($_POST['submit'])) {
  //Gjøre om POST-data til variabler
  $username = $_POST['navn'];
  $password = $_POST['passord'];

  //lage en kobling til databasen
  $dbc = mysqli_connect('localhost', 'root', '', 'weatherapp') or die('Error connecting to MySQL server: ' . mysqli_connect_error());

  //gjøre klar en SQL-query
  $query = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";


  //Gjør en spørring 
  $result = mysqli_query($dbc, $query)
    or die(' Error querying databases. ');

  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION = $row;
  }

  //koble fra databasen
  mysqli_close($dbc);

  //sjekk om spørring gir resultater
  if ($result->num_rows > 0) {
    //login success
    header('location: app.php');
  } else {
    //login failure
    $feil = "<div class='feil'>Inncorect username or password </div>";
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
  <title>Login | skyklima</title>
</head>

<body>
  <a href="index.html"><img class="back-arrow" src="images/arrow.png" alt=""></a>


  <h1 class="Intro-text">Login</h1>
  <form method="post" action="login.php">
    <div class="login-form">
      <?php echo $feil; ?>
      <input type="text" name="navn" id="" placeholder="Username">
      <input type="password" name="passord" id="" placeholder="Password">
    </div>
    <button class="submit-button" type="submit" name="submit">Login</button>
  </form>
  <p class="other">Or Signup <a href="registartion.php"> "Here" </a>if you want an account</p>

</body>

</html>