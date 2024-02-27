<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <a href="app.php"><img class="back-arrow" src="images/arrow.png" alt=""></a>


    <div class="reset-password-container">
        <h1>Reset Password.</h1>
        <p>Have you forgotten your password?
            <br>
            Dont worry, you can easily reset your password in the input below.
        </p>
    </div>


    <form method="post" action="reset.php">
        <div class="reset-input-container">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="reset-button-container">
            <button type="submit">Reset</button>
        </div>
    </form>






</body>

</html>