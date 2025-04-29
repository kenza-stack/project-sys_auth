<?php 
    include_once './helpers/session_helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style2.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <div class="left-side">
        <img src="https://wallpaperbat.com/img/11552943-red-gaming-dark-legends-wallpaper.jpg" alt="Game Art">
    </div>

    <div class="right-side">
        <form class="form" method="post" action="./controllers/Users.php">
        <?php flash('login') ?>
        <h2>LOGIN ACCOUNT</h2>
        <p>WELCOME BACK</p>

        <input type="hidden" name="type" value="login">

        <input type="text" name="name/email" placeholder="ENTER USERNAME OR EMAIL" required>
        <input type="password" name="usersPwd" placeholder="ENTER PASSWORD" required>



        <button class="btn-primary" type="submit" name="submit">LOG IN</button>
        <a href="signup.php"><button class="btn-secondary" type="button">SIGN UP</button></a>
    </form>
</div>
</div>


</body>
</html>