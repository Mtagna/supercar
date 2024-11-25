<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Car</title>
    <link rel="stylesheet" href="styles.css">
  <style>
        /* Style du conteneur de l'image */
        .image-container {
            max-width: 600px;  /* Limite la largeur maximale de l'image */
            margin: 50px auto; /* Centrage horizontal de l'image */
            padding: 15px;     /* Espace entre l'image et le bord du cadre */
            border: 5px solid #333; /* Bordure du cadre */
            border-radius: 15px;    /* Coins arrondis */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Ombre portée */
            background-color: #f9f9f9; /* Couleur de fond du cadre */
        }

        /* Style de l'image */
        .image-container img {
            width: 100%; /* L'image prend toute la largeur du conteneur */
            height: auto; /* Garde le ratio d'aspect de l'image */
            border-radius: 10px; /* Coins arrondis de l'image */
        }
    </style>
</head>
<body>
<?php include "header.php"; ?> 
    <div class="image-container">
        <img src="PROJET E5/Ferrari/SP3/avant.jpg" alt="Description de l'image">
    </div>
  <?php include "footer.php"; ?>    
</body>
</html>
