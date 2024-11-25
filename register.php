<?php
// Démarrer une session pour gérer des messages d'erreur ou de succès
session_start();

// Vérifier que la requête est bien envoyée par le formulaire (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "12345", "supercar");

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Récupérer les données du formulaire et les sécuriser
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérifier si le mot de passe et la confirmation correspondent
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header("Location: inscription.php");
        exit();
    }

    // Vérifier si l'utilisateur existe déjà
    $sql_check = "SELECT id FROM user WHERE username = '$username'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        // Si l'utilisateur existe déjà
        $_SESSION['error'] = "Le nom d'utilisateur est déjà pris.";
        header("Location: inscription.php");
        exit();
    }

    // Hacher le mot de passe avant de le stocker
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    $sql_insert = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql_insert) === TRUE) {
        $_SESSION['success'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        header("Location: demandedessai.php");
        exit();
    } else {
        // En cas d'erreur lors de l'insertion
        $_SESSION['error'] = "Erreur lors de l'inscription : " . $conn->error;
        header("Location: test2.html");
        exit();
    }

    // Fermer la connexion à la base de données
    $conn->close();
} else {
    // Si la page est accédée directement sans soumettre le formulaire
    header("Location: test2.html");
    exit();
}
?>
