<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Car</title>
    <link rel="stylesheet" href="styles.css">
    
    <?php include "header.php"; ?>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        div {
            margin-bottom: 20px;
            text-align: center; /* Centre le contenu des divs */
        }

        table {
            border-collapse: collapse;
            width: 90%; /* Ajusté pour s'adapter à l'écran */
            margin: 20px auto; /* Centre le tableau */
            background-color: #000; /* Fond noir pour les tableaux */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            color: white; /* Texte en blanc */
        }

        th {
            background-color: #444; /* Couleur de fond pour l'en-tête */
        }

        tr:nth-child(even) {
            background-color: #222; /* Couleur de fond pour les lignes paires */
        }
0
        tr:hover {
            background-color: #333; /* Survol des lignes */
        }

        button {
            background-color: #000; /* Couleur de fond noire pour le bouton */
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px; /* Coins arrondis pour le bouton */
            transition: background-color 0.3s;
            display: block; /* Permet au bouton de prendre toute la largeur */
            margin: 10px auto; /* Centre le bouton */
        }

        button:hover {
            background-color: #ff0000; /* Couleur de fond rouge au survol */
        }
    </style>
</head>
<body>
    <div>
        <h2>Maintenance</h2>
        <table id="tableau1">
            <thead>
                <tr>
                    <th>Pour chaque maintenance de votre véhicule, c'est par ici</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <button onclick="ajouterTexte('tableau1', 'input1')">
            <a id="link" href="maintenance.php" style="color: white; text-decoration: none;">Suivant</a>
            </button>
            </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <h2>Livraison</h2>
        <table id="tableau2">
            <thead>
            <tr>
            <th>Choisir le lieu de livraison</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <button onclick="ajouterTexte('tableau2', 'input2')">
            <a id="link" href="livraison.php" style="color: white; text-decoration: none;">Suivant</a>
            </button>
            </td>
            </tr>
            </tbody>
        </table>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
