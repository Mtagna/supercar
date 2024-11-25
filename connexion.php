<?php
// Définir les paramètres de connexion
$host = "localhost";
$login = "root";
$pass = "";
$dbname = "data";

// Établir la connexion avec la base de données
$bdd = mysqli_connect($host, $login, $pass, $dbname);

// Vérification de la connexion
if (!$bdd) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Changer le jeu de caractères en utf8
mysqli_set_charset($bdd, "utf8");

// Vérifier si les données sont envoyées par le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = mysqli_real_escape_string($bdd, $_POST['nom']);
    $email = mysqli_real_escape_string($bdd, $_POST['email']);
    $objet = mysqli_real_escape_string($bdd, $_POST['objet']);
    $message = mysqli_real_escape_string($bdd, $_POST['message']);
    
    // Préparer la requête d'insertion
    $sql = "INSERT INTO form (nom, email, objet, massage) VALUES ('$nom', '$email', '$objet', '$message')";
    
    // Exécuter la requête
    if (mysqli_query($bdd, $sql)) {
        echo "Données insérées avec succès !";
    } else {
        echo "Erreur lors de l'insertion des données : " . mysqli_error($bdd);
    }
}

// Fermer la connexion
mysqli_close($bdd);
?>
