<?php
include("bdconnect.php");


$host = 'localhost';
$username = 'root';
$password = '';

// Connexion à MySQL sans spécifier de base de données
$conn = mysqli_connect($host, $username, $pass);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// Sélection de la base de données 'contacts'
mysqli_select_db($conn, 'contacts');

mysqli_connect($host,$login,$pass,$dbname);

// mysqli_select_db($dbname);

$name=$_REQUEST["nom"];
$email=$_REQUEST["email"];
$objet=$_REQUEST["objet"];
$commentaires=$_REQUEST["commentaires"];

echo("<br/>"); echo $name;
echo("<br/>"); echo $email;
echo("<br/>"); echo $objet;
echo("<br/>"); echo $commentaires;

//$ajouter="INSERT INTO guestbook(name, adresse, email, url, commentaires) values('$name', '$adresse', '$email', '$url', '$commentaires')";
//mysqli_query($ajouter);


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contacts';

// Connexion à MySQL
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// requête d'insertion dans la base de données
$query = "INSERT INTO formulaire(nom, email, objet, commentaires) 
          VALUES('$name', '$email', 
                 '$objet', '$commentaires')";

// Exécution de la requête
if (mysqli_query($conn, $query)) {
    echo "Données insérées avec succès !";
} else {
    echo "Erreur lors de l'insertion : " . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);


?>

<p>

<h2 align='center'> Merci </h2>
<h2 align='center'><a href='view.php'> Veuillez consulter mon guest-book!</a></h2>

</p>


