<?php 
    include_once './helpers/session_helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
      <?php flash('register') ?>
        <h2>SIGN UP ACCOUNT</h2>
        <p>WELCOME TO OUR WEBSITE</p>

        <input type="hidden" name="type" value="register">

        <input type="text" name="usersName" placeholder="ENTER USER NAME" required>
        <input type="text" name="usersEmail" placeholder="ENTER EMAIL" required>
        <input type="text" name="usersUid" placeholder="ENTER USERNAME" required>
        <input type="password" name="usersPwd" placeholder="ENTER PASSWORD" required>
        <input type="password" name="pwdRepeat" placeholder="REPEAT PASSWORD" required>

        <div class="password-rules">
            <p>Password must contain:</p>
            <div class="rules-list">
                At least 6 characters<br>
                At least one uppercase letter (A-Z)<br>
                At least one lowercase letter (a-z)<br>
                At least one number (0-9)<br>
                At least one special character (@, $, !, %, *, ?, &)
            </div>
        </div>
        <button class="btn-primary" type="submit" name="submit">SIGN UP</button>
        <a href="login.php"><button class="btn-secondary" type="button">LOG IN</button></a>
    </form>
    </div>
  </div>


</body>
</html>
