<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Car</title>
<!--    <link rel="stylesheet" href="styles.css">-->
    <style>
        /* Styles de base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
        }

        .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-grow: 1;
        }

        .menu li {
            position: relative;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
        }

        .menu li a:hover {
            background-color: #444;
        }

        .submenu {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            background-color: #444;
        }

        .menu li:hover .submenu {
            display: block;
        }

        .submenu li a {
            padding: 10px 20px;
            color: white;
        }

        .submenu li a:hover {
            background-color: #555;
        }

        /* Barre de recherche */
        .search-form {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 10px;
            border: none;
            border-radius: 4px;
            outline: none;
        }

        .search-button {
            padding: 10px;
            background-color: #555;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 5px;
        }

        .search-button:hover {
            background-color: #666;
        }

        /* Section Hero */
        /*.hero {
            background-image: url('.jpg'); 
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }*/

        .hero h1 {
            font-size: 48px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        /* Carrousel images */
        .carousel-item img {
            width: 300%;
            height: 1000px;
            object-fit: cover;
            align:center;
        }

        /* Section Call-to-Action */
        .cta {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 40px;
        }

        .cta a {
            display: inline-block;
            background-color: #f00;
            color: white;
            padding: 15px 30px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta a:hover {
            background-color: #d00;
        }

        /* Pied de page */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                align-items: center;
            }

            .service {
                width: 80%;
                margin-bottom: 20px;
            }
        }
        .text-black{
        position: absolute!important;
        top: 50%!important;
        left: 50%!important;
        transform: translate(-50%, -50%);
        z-index: 200000;
        color: white!important;
        box-sizing: border-box;
        font-size: 35px;
        backdrop-filter: blur(16px);
      }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <h1>Super Car</h1>
    

    <nav>
        <ul class="menu">
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="#">Voitures</a>
                <ul class="submenu">
                    <li><a href="voiture.php">Voitures neuves</a></li>
                    <li><a href="#">Voitures d'occasion</a></li>
                    <li><a href="#">Voitures électriques</a></li>
                </ul>
            </li>
            <li><a href="#">Demande d'essai</a></li>
            <li><a href="#">Services</a>
                <ul class="submenu">
                    <li><a href="#">Maintenance</a></li>
                    <li><a href="#">Réparation</a></li>
                    <li><a href="#">Livraison</a></li>
                </ul>
            </li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Contactez-nous</a></li>
        </ul>

        <form class="search-form" action="#" method="get">
            <input type="text" class="search-input" placeholder="Recherche...">
            <button type="submit" class="search-button">🔍</button>
        </form>
    </nav>
    </header>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
      
      <div class="carousel-inner position-relative">
          <div class="postition-absolute text-carousel">
            <h1 class="text-black bg-transparent px-3 py-2 rounded-3">
              Trouvez Votre voiture de luxe parfaite
            </h1>
          </div>
          <div class="carousel-item active">
              <img src="https://i.ytimg.com/vi/LfS3aguG4Uc/maxresdefault.jpg" class="d-block w-100" alt="Car 1">
          </div>
          <div class="carousel-item">
              <img src="https://s1.cdn.autoevolution.com/images/news/gallery/2017-audi-r8-is-finally-beautiful-thanks-to-abt-body-kit_2.jpg" class="d-block w-100" alt="Car 2">
          </div>
          <div class="carousel-item">
              <img src="https://th.bing.com/th/id/R.878f1d746cf3bc8df9a18773ac776606?rik=2TKAEY63wlQriA&pid=ImgRaw&r=0.jpg" class="d-block w-100" alt="Car 3">
          </div>
      </div>
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section class="cta">
        <h2>Prêt à trouver la voiture de vos rêves ?</h2>
        <p>
                Bienvenue sur notre site !
			</p>
			<p>
                Nous sommes une équipe passionnée des voitures. Spéciliser dans la ventre de voiture neuves ou reconditionnées de divers marques.
				Elles sont importés de différents pays, comme par exemples: Japon, Singapour, Afrique, Etat-Unis, France au autres.
            </p>
            <p>
                Depuis 2009, nous avons aidé des milliers de clients à trouver leurs voitures de rêve.
                Avec une équipe dédiée et expérimentée, nous visons à continuer de croître tout en respectant nos engagements envers 
                notre communauté et nos clients.
            </p>
            <p>
                Merci de faire partie de cette aventure avec nous !
            </p>
        
    </section>

    <footer>
        <p>&copy; 2024 - Super Car. Tous droits réservés.</p>
        <nav>
            <a href="accueil.php">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">CGU</a>
            <a href="#">Politique de confidentialité</a>
        </nav>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
