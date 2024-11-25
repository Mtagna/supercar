<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#date_naissance").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1950:2024",
                dateFormat: "dd-mm-yy"
            });
        });
    </script>
    <?php include "header.php"; ?> 
    <style>
       body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4; /* Couleur de fond plus douce */
    color: #FFFFFF; /* Couleur du texte */
}

.container {
    max-width: 600px;
    margin: auto;
    padding: 30px; /* Augmentation du padding */
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    background-color: black; /* Fond noir pour le conteneur */
}

h1 {
    text-align: center;
    color: #FFFFFF; /* Couleur du titre */
}

.form-group {
    margin-bottom: 20px; /* Augmentation de l'espacement entre les groupes */
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold; /* Mettre en gras les labels */
}

.form-group input, .form-group select, .form-group textarea {
    width: 100%;
    padding: 10px; /* Augmentation du padding */
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px; /* Bords arrondis */
    transition: border-color 0.3s; /* Transition pour le changement de couleur */
}

.form-group input:focus, .form-group select:focus, .form-group textarea:focus {
    border-color: #007BFF; /* Changer la couleur de bordure au focus */
    outline: none; /* Retirer le contour par défaut */
}

.form-group input[type="radio"] {
    width: auto;
}

.form-group textarea {
    resize: vertical;
}

.form-group button {
    padding: 10px 20px;
    background-color: #000000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s; /* Ajout de transitions */
}

.form-group button:hover {
    background-color: #FF0000;
    transform: scale(1.05); /* Effet de zoom au survol */
}

::placeholder {
    color: #aaa; /* Couleur des placeholders */
    opacity: 1; /* S'assurer que l'opacité est à 1 */
}

    </style>
</head>
<body>

<div class="container">
    <h1>Information</h1>
    <form action="enregistrer.php" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>
        </div>
        <div class="form-group">
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>
        </div>
        <div class="form-group">
            <label for="code_postal">Code Postal :</label>
            <input type="text" id="code_postal" name="code_postal" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de naissance :</label>
            <input type="text" id="date_naissance" name="date_naissance" required>
        </div>
        <div class="form-group">
            <label>Sexe :</label>
            <input type="radio" id="homme" name="sexe" value="Homme" required>
            <label for="homme">Homme</label>
            <input type="radio" id="femme" name="sexe" value="Femme" required>
            <label for="femme">Femme</label>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</div>

<?php include "footer.php"; ?> 
</body>
</html>
