<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body >
    
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-danger" href="../html/page_principal.html">DevGaming</a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarnav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link text-white" href="../html/page_principal.html">Boutique</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="../html/news.html">Actualités</a></li>                
                <li class="nav-item"  id="Categorie"><a class="nav-link text-white"  href="Categorie">Categories</a>
                    <!-- lista dyal type dyal les jeux -->
                    <ul class="list-none">
                        <li><a class="catg" href="Action">Action</a></li>
                        <li><a class="catg" href="Sport">Sport</a></li>
                        <li><a class="catg" href="Jeux de combat">Jeux de combat</a></li>
                        <li><a class="catg" href="MOBA">MOBA</a></li>
                        <li><a class="catg" href="Battle Royale">Battle Royale</a></li>
                        <li><a class="catg" href="Aventure">Aventure</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="Details">About Us</a></li>
            </ul>
            <form class="d-flex">
                <!-- khana dyal contenu obutton dyal search  -->
                
                <?php if (!isset($_SESSION['usersId'])) : ?>
                    <a href="signup.php" class="btn btn-outline-danger text-light">Sign Up</a>
                    <a href="login.php" class="btn btn-outline-danger text-light">Login</a>
                <?php else: ?>
                    <a href="./controllers/Users.php?q=logout" class="btn btn-outline-danger">Logout</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body?>
</html>