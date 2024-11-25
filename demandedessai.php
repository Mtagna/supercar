<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Essai - SUPERCAR</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=1.1">
</head>
<?php include 'config.php'; ?>
<body>
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
    <!--<section class="image-section">
    <h2>Découvrez notre flotte de véhicules</h2>
    <img src="C:\wamp\www\DemandedEssai\images\Voiture.jpg" alt="Voiture de SUPERCAR" class="featured-image">
    </section>-->
    <section class="intro-section">
        <h1>Demande d'Essai</h1>
        <p>Vous hésitez entre plusieurs modèles ? Rien de mieux qu'un essai routier pour découvrir la sensation de conduite de votre futur véhicule.</p>
        <p>Remplissez simplement le formulaire ci-dessous pour fixer un rendez-vous à l'heure et au lieu de votre choix.</p>
    </section>

    <hr>

    <section class="form-section">
        <div class="form-container">
            <div class="form-box">
                <h2>Choix du Modèle</h2>
                <form>
                    <label for="model">Sélectionnez un modèle</label>
                    <select id="model" name="model"required>
                        <option value="BMW Série 3">BMW Série 3</option>
                        <option value="Audi A4">Audi A4</option>
                        <option value="Mercedes Classe C">Mercedes Classe C</option>
                        <option value="Tesla Model 3">Tesla Model 3</option>
                    </select>

                    <label for="date">Date et Heure</label>
                    <input type="datetime-local" id="date" name="date"required>
                </form>
            </div>

            <div class="form-box">
                <h2>Coordonnées</h2>
                <form action="enregistrer.php" method="post" name="form1">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom"required>

                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone"required>

                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre e-mail"required>
                </form>
            </div>
        </div>
        
        <div class="comment-section">
            <h2>Votre avis nous intéresse, n'hésitez pas !</h2>
            <label for="comments">Commentaires</label>
            <textarea id="comments" name="comments" placeholder="Laissez un commentaire ou une question"></textarea>
        </div>

        <div class="submit-section">
            <button type="submit" class="submit-btn">Envoyer la Demande</button>
        </div>
        <div class="form-group">
            <button type="submit">Enregistrer</button>
        </div>
    </section>
    <?php include 'footer.html'; ?>
</body>
</html>
