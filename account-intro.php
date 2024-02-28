<?php
session_start();


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

    <div class="intro">
        <h1 class="Intro-text">Hurray!
            <br>
            welcome to Skyklima
        </h1>
        <p class="intro-info">The weather app made for you!
            Click Next to enter you account</p>
        <div class="info-images">
            <img class="info-planets" src="images/earth.png" alt="">
            <img class="info-planets" src="images/saturn.png" alt="">
        </div>
        <a href="app.php" class="next-a"><button class="next-button">Next</button></a>
    </div>

</body>

</html>