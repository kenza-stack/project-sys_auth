<?php 
    include_once 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            background-color: #1f1f1f;
        }
        .btn-custom {
            background-color: #f25454;
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #e04a4a;
        }

        .hero {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1), rgba(31, 31, 31, 1)), url('photos/977ca3ca-110a-46de-84a4-3f971e1b6aa2.jpeg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
        }


        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .game-card {
            background-color: #292929;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .game-card:hover {
            transform: scale(1.05);
        }

        .game-card img {
            height: 330px;
            object-fit: cover;
        }

        .game-card .card-body {
            text-align: center;
        }

        .game-showcase {
            text-align: center;
            margin: 30px 0;
        }

        .game-showcase h3 {
            font-size: 2rem;
        }

        .game-showcase p {
            font-size: 1.2rem;
        }

        
        #game-image{
            border-radius: 5%;
        }

        #reviews {
            background-color: #292929;
        }

        #reviews h2 {
            font-size: 2rem;
            color: #f25454;
        }
        h6{
            width: 38px;
            height: 20px;
            border-radius: 7px;
        }
        #conte, #conte2, #conte3{
            width: 36px;
            height: 36px;
        }
        #game-image{
            width: 732px;
            height: 410px; 
            object-fit: cover; 
            margin: 15px 0;
        }
    </style>
</head>
<body class="text-white">
    

<!-- hade div dyal tar7ibe -->
<div class="hero">
    <div class="container text-center ">
        <h1 id="index-text" class="text-white">Welcome, <?php if(isset($_SESSION['usersId'])){
            echo explode(" ", $_SESSION['usersName'])[0];
            }else{
                echo 'Guest';
            } 
            ?>
        </h1>
        <p>Découvrez les derniers et meilleurs jeux disponibles dès maintenant</p>
    </div>
</div>



<!-- hadi l9aiima dyal les jeux o atmina -->
<section class="py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 game-card">
                    <img src="photos/Black Myth_ Wukong - Pre-Orders Now Available, yang qi917.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-10%</h6>
                        <h5 class="card-title  text-white">Black Myth Wukong</h5>
                        <p class="card-text text-white">Prix: 599 MAD   Date de sortie: 2020-12-10</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 game-card">
                    <img src="photos/Découvrez Super Mario 64 sur Nintendo 64 et Switch!.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-15%</h6>
                        <h5 class="card-title text-white">Super Mario</h5>
                        <p class="card-text text-white">Prix: 399 MAD   Date de sortie: 2015-05-18</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 game-card">
                    <img src="photos/Poster Assassins Creed Odyssey One Sheet 61x91,5cm.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-30%</h6>
                        <h5 class="card-title text-white">Assassins Creed</h5>
                        <p class="card-text text-white">Prix: 699 MAD   Date de sortie: 2022-02-25</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 game-card">
                    <a href="../html/detail_jeu.html"><img src="photos/Red Dead Redemption 2 PS4 Digital Download (READ….jpeg" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-25%</h6>
                        <h5 class="card-title text-white">Red Dead Redemption 2</h5>
                        <p class="card-text text-white">Prix: 249 MAD   Date de sortie: 2015-05-18</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 game-card">
                    <img src="photos/Call of duty mobile.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-25%</h6>
                        <h5 class="card-title text-white">Call Of Duty</h5>
                        <p class="card-text text-white">Prix: 539 MAD   Date de sortie: 2024-05-18</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 game-card">
                    <img src="photos/Jujutsukaisen.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="bg-danger text-white">-5%</h6>
                        <h5 class="card-title text-white">Jujutsu Kaisen</h5>
                        <p class="card-text text-white">Prix: 169 MAD   Date de sortie: 2050-12-18</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- hadi nfss l7aja ta9ribane walakin b js -->
    <div class="game-showcase">
        <h3 id="game-title">Titre du jeu</h3>
        <img id="game-image">
        <p id="game-info">Prix: $0.00 | Date de sortie: YYYY-MM-DD</p>
    </div>




<!-- hadi 9aiima dyal les jeux li3ndhoum ta9yime tal3 -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Le plus populaire en ce moment</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card game-card">
                        <img src="photos/Jouer à Fortnite _ Xbox Cloud Gaming (bêta) sur Xbox_com.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">Fortnite</h5>
                            <p class="card-text text-white">4.8 Les etoiles   2.3M les joueurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card game-card">
                        <img src="photos/Art Posters for sale _ eBay.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">PUBG</h5>
                            <p class="card-text text-white">4.7 Les etoiles   2.2M les joueurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card game-card">
                        <img src="photos/Dota 2 — Википедия.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">Dota 2</h5>
                            <p class="card-text text-white">4.6 Les etoiles   2.1M les joueurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card game-card">
                        <img src="photos/CRASH BANDICOOT 4 (RIDE) MAXI POSTER.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">CS-GO</h5>
                            <p class="card-text text-white">4.9 Les etoiles  3.0M les joueurs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

<!-- hadi lista dyal ta3ali9 dyal lil3bou hade les jeux -->
    <section class="py-5" id="reviews">
        <div class="container">
            <h2 class="text-center mb-4">Avis des joueurs</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="photos/Bellingham to be on FC Mobile 2024_25 cover 💫.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">FC Mobile 2025</h5>
                            <img id="conte" src="photos/5eee0d1e-4463-4dae-a0ad-abfc42e8fd00-removebg-preview.png">
                            <p class="card-text text-white">"Je n'ai rencontré aucun problème pour télécharger le jeu et le jeu est fluide"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="photos/0242d215-278f-4181-8952-047a0d49b315.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">Forza Horizen</h5>
                            <img id="conte2" src="photos/5eee0d1e-4463-4dae-a0ad-abfc42e8fd00-removebg-preview.png">
                            <p class="card-text text-white">"Excellent jeu de voiture et bon service de site Web"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="photos/a25f6549-e44f-44e4-9107-da8d10907c0a.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">Naruto Storm 4</h5>
                            <img id="conte3" src="photos/5eee0d1e-4463-4dae-a0ad-abfc42e8fd00-removebg-preview.png">
                            <p class="card-text text-white">"Au début, j'avais peur de le télécharger, mais après l'avoir téléchargé, je ne l'ai pas regretté"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>






<!-- hade lcode houwa likit7keme f tabdile dyal tsawere -->
<script>
    // variable
    const games = [

    // hadou houma les jeux
        {
            title: "Grand Theft auto",
            price: "599 MAD",
            releaseDate: "2020-12-10",
            image: "photos/téléchargement.jpeg"
        },
        {
            title: "Black Myth Wukong",
            price: "0 MAD",
            releaseDate: "2015-05-18",
            image: "photos/Tudo sobre Black Myth_ Wukong_ o essencial.jpeg"
        },
        {
            title: "God Of War",
            price: "149 MAD",
            releaseDate: "2022-02-25",
            image: "photos/God of War (PS4, 2018).jpeg"
        },
        {
            title: "Ark Survival Evolved",
            price: "799 MAD",
            releaseDate: "2018-04-20",
            image: "photos/ARK_ Survival Ascended è ora disponibile su PC come Accesso Anticipato; arriva su PS5 e Xbox Series a Novembre _ CrazyGameCommunity_it.jpeg"
        }
    ];

    // variable o function lighadi yt7kmou ftabdile dyal tsawere osmiya olprix ...
    let currentGameIndex = 0;

    function updateGameShowcase() {
        const game = games[currentGameIndex];
        document.getElementById("game-title").textContent = game.title;
        document.getElementById("game-info").textContent = `Price: ${game.price} | Release Date: ${game.releaseDate}`;
        document.getElementById("game-image").src = game.image;
        document.getElementById("game-image").alt = game.title;
        currentGameIndex = (currentGameIndex + 1) % games.length;
    }

    setInterval(updateGameShowcase, 3000);
    updateGameShowcase();
</script>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


</body>
</html>
