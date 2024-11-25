<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement du formulaire</title>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $serveur = "localhost";
        $user = "root";
        $password = "12345";
        $db_name = "supercar";

        $connexion = new mysqli($serveur, $user, $password, $db_name);

              if ($connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $connexion->connect_error);
        }

        $requete = "INSERT INTO users (name, email, phone) 
                    VALUES ('$name', '$email', '$phone')";


        if ($connexion->query($requete) === TRUE) {
            echo "<p>Les données ont été enregistrées avec succès.</p>";
        } else {
            echo "<p>Erreur lors de l'enregistrement des données : " . $connexion->error . "</p>";
        }

      
        $connexion->close();
    } else {
        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>
</body>
</html>
