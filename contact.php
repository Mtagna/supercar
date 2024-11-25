<?php
require 'config.php';

if(isset($_POST["submit"])){
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - SuperCar</title>
    <link rel="stylesheet" href="style-contact.css">

</head>
<body>

    <!-- Header -->
    <header>
            <?php include 'index.html'; ?>
<!--       <nav>
            <ul class="nav-bar">
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="voitures.html">Voitures</a></li>
                <li><a href="test2.html">Demande d'essai</a></li>
                <li><a href="formulaire.php">Services</a></li>
                <li><a href="contact.php">Contactez-nous</a></li>
                <li class="search-bar"><input type="text" placeholder="Recherche..."><button>🔍</button></li>
            </ul>
        </nav>--> 
    </header>
    <img src="">

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2>Nous Contacter</h2>
            
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="connexion.php" method="POST">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" required>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="objet">Objet de la demande</label>
                    <select class="" name="objet" required>
                        <option value="" selected hidden> L'objet de votre demande</option>
                        <option value="Information" > Informations sur les véhicules</option>
                        <option value="Demande" > Demande de réservation</option>
                        <option value="Service après-vente" >Service après-vente</option>
                        <option value="Autre" >Autre</option>
                    </select>
                    
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <button type="submit">Envoyer</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Informations de Contact</h3>
                <p><strong>Adresse :</strong> 123 Rue SuperCar, Port Louis, Île Maurice</p>
                <p><strong>Téléphone :</strong> +230 123 4567</p>
                <p><strong>Email :</strong> contact@supercar.mu</p> 
                <br>
                <br>

                <!-- Google Map Embed -->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.82239219935!2d-6.288596673747336!3d53.34976446465133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8e8d2e1f8f%3A0x76cfcd2a6e4b6e5b!2sPort%20Louis!5e0!3m2!1sen!2sfr!4v1634981128542!5m2!1sen!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- Social Media Icons -->
                <div class="social-media">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SuperCar. Tous droits réservés.</p>
    </footer>

</body>
</html>
