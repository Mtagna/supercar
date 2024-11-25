<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Car</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles de base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            
        }


        nav {
            background-color: #000; /* Couleur noir pur */
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
            width: 20%;
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

    .logo {
        height: 20px; /* Ajuste la hauteur selon tes besoins */
        width: auto; /* Garde les proportions */
        margin-right: 10px; /* Espace entre le logo et les autres éléments */
    }

    footer {
    background-color: #333; /* Couleur de fond du pied de page */
    color: white;
    padding: 20px 0;
    text-align: center;
}

.footer-icons {
    display: flex;
    justify-content: center; /* Centre les icônes horizontalement */
    gap: 15px; /* Espace entre les icônes */
}

.footer-icons a {
    color: white; /* Couleur des icônes */
    text-decoration: none;
    transition: color 0.3s;
}

.footer-icons a:hover {
    color: #007bff; /* Couleur au survol */
}



    </style>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



  </head>
  <body>
  <header>
   <?php include 'index.html'; ?>
   
    </header>

    <?php include 'voiture.html'; ?>
    <?php include 'footer.html'; ?>
  </body>
</html>