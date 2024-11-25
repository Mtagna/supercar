<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - SuperCar</title>
    <link rel="stylesheet" href="static/css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('./images/mc720s.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        header {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
        }

        header h1 {
            color: white;
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a.active {
            text-decoration: underline;
        }

        .contact-section {
            padding: 50px 0;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            margin: 50px 0;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            background-color: rgba(255, 0, 0, 0.253);
            
        }

        .contact-form {
            width: 50%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.178);
            padding: 30px;
            border-radius: 10px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 10px;
        }

        .contact-form input,
        .contact-form select,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background: rgba(219, 202, 202, 0.8);
        }

        .contact-form button {
            padding: 15px 30px;
            background-color: #000;
            color: rgb(133, 39, 54);
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        footer {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
            color: red;
        }

        .contact-info {
            margin-top: 45px;
            margin-right: 200px;
            background-color:rgba(0, 0, 0, 0.418);}
        .contact-info p {
            font-size: 18px;
            color:rgb(151, 29, 29);
        }

        .map {
            margin-top: 20px;
           
        }

        .social-media a {
            color: red;
            margin-right: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <?php include 'index.html'; ?>
        <!-- Header <h1>SuperCar</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="voitures.php">Voitures</a></li>
                <li><a href="demande-essai.php">Demande d'essai</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="ok.html" class="active">Contactez-nous</a></li>
            </ul>
        </nav>
    -->
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Nous Contacter</h2>

        <!-- Contact Form -->
        <div class="contact-form">
            <form action="connexion.php" method="POST">
                <label for="nom">Nom complet</label>
                <input type="text" id="nom" name="nom" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="objet">Objet de la demande</label>
                <select name="objet" required>
                    <option value="" selected hidden> L'objet de votre demande</option>
                    <option value="Information">Informations sur les véhicules</option>
                    <option value="Demande">Demande de réservation</option>
                    <option value="Service après-vente">Service après-vente</option>
                    <option value="Autre">Autre</option>
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
            
           
<!-- Google Map  -->
<div class="map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11999.52658469739!2d57.507594!3d-20.160891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5d66c5f9ab65%3A0x1234abcd5678ef90!2s123%20Rue%20SuperCar%2C%20Port%20Louis%2C%20%C3%8Ele%20Maurice!5e0!3m2!1sfr!2sfr!4v1634981128542!5m2!1sfr!2sfr&q=-20.160891,57.507594"
        width="780" 
        height="600" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>



            <!-- Social Media Icons -->
            
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
        <p>&copy; 2024 SuperCar. Tous droits réservés.</p>
        
    </footer>

</body>
</html>
