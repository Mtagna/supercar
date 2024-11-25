<?php
// Inclure le fichier de configuration pour la connexion à la base de données
include 'config.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    // Requête SQL pour insérer les données dans la table `demandes_essai`
    $sql = "INSERT INTO demandes_essai (model, date_essai, name, phone, email, comments) 
            VALUES ('$model', '$date', '$name', '$phone', '$email', '$comments')";

    // Exécuter la requête et vérifier si l'insertion a réussi
    if (mysqli_query($conn, $sql)) {
        echo "Votre demande d'essai a été envoyée avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>
