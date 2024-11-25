<?php
// Informations de connexion à la base de données
$servername = "localhost";  // Hôte
$username = "root";         // Nom d'utilisateur MySQL
$password = "12345";             // Mot de passe MySQL
$dbname = "supercar"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$user = $_POST['username'];
$pass = $_POST['password'];

// Préparer la requête SQL (Exemple d'une requête d'insertion ou vérification utilisateur)
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

// Exécuter la requête
$result = $conn->query($sql);

// Vérifier si l'utilisateur existe
if ($result->num_rows > 0) {
    echo "Connexion réussie, bienvenue " . $user;
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

// Fermer la connexion
$conn->close();
?>
