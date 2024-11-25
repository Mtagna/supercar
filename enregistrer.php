<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement du formulaire</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Récupérer les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Connexion à la base de données (inclus via config.php)
        include 'config.php';

        // Vérifier la connexion à la base de données
        if ($conn->connect_error) {
            die("Échec de la connexion à la base de données : " . $conn->connect_error);
        }

        // Préparer la requête SQL pour insérer les données
        $requete = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

        // Exécuter la requête
        if ($conn->query($requete) === TRUE) {
            echo "<p>Les données ont été enregistrées avec succès.</p>";
        } else {
            echo "<p>Erreur lors de l'enregistrement des données : " . $conn->error . "</p>";
        }

        // Fermer la connexion
        $conn->close();
    } else {
        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>
</body>
</html>
