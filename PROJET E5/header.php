<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Car</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <nav>
        <ul class="menu">
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="#">Voitures</a>
                <ul class="submenu">
                    <li><a href="voiture.php">Voitures neuves</a></li>
				    <li><a href="ferrari.php">Ferrari</a></li>
                    <li><a href="#">Voitures électriques</a></li>
                </ul>
            </li>
            <li><a href="#">Demande d'éssai</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Contactez-nous</a></li>
        </ul>

        <!-- Ajout de la barre de recherche -->
        <form class="search-form" action="#" method="get">
            <input type="text" class="search-input" placeholder="Recherche...">
            <button type="submit" class="search-button">🔍</button>
        </form>
    </nav>

   

    <style>
        /* Styles de base pour le menu */
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            display: flex;
            align-items: center; /* Aligne verticalement les éléments */
            padding: 0 20px; /* Ajoute un peu de padding à gauche et à droite */
        }

        .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-grow: 1; /* Permet au menu de s'étendre pour occuper l'espace disponible */
        }

        .menu > li {
            position: relative;
        }

        .menu > li > a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            background-color: #333;
            transition: background-color 0.3s ease;
        }

        .menu > li > a:hover {
            background-color: #444;
        }

        /* Styles pour les sous-menus */
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

        .submenu li a {
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }

        .submenu li a:hover {
            background-color: #555;
        }

        /* Affichage du sous-menu au survol */
        .menu > li:hover .submenu {
            display: block;
        }

        /* Styles pour la barre de recherche */
        .search-form {
            display: flex;
            align-items: center;
            margin-left: 20px; /* Espace entre le menu et la barre de recherche */
        }

        .search-input {
            padding: 10px;
            border: none;
            border-radius: 4px; /* Coins arrondis */
            outline: none; /* Enlève la bordure de focus */
        }

        .search-button {
            padding: 10px;
            background-color: #555;
            color: white;
            border: none;
            border-radius: 4px; /* Coins arrondis */
            cursor: pointer; /* Change le curseur en main */
            margin-left: 5px; /* Espace entre l'input et le bouton */
        }

        .search-button:hover {
            background-color: #666; /* Change de couleur au survol */
        }
    </style>
	</body>
	<div/>
</html>
