<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Car</title>
    <link rel="stylesheet" href="style.css">
</head>

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
    <br>
    <br>
    <br>
<!--
    <section class="hero">
	<h1>Trouvez votre voiture de luxe parfaite</h1>
	
    </section>-->
<!-- Conteneur du carrousel -->
<div class="carousel-container">

    <!-- Diapo 1 -->
    <div class="carousel-slide fade">
        <img src="./images/mclaren.jpg"> </div>
    <!-- Diapo 2 -->
    <div class="carousel-slide fade">
        <img src="./images/mc720s.jpg"></div>
    <!-- Diapo 3 -->
    <div class="carousel-slide fade">
        <img src="./images/rolls-royce.jpg"></div>
    <!-- Boutons précédent et suivant -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Points de navigation -->
<div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Fonction pour avancer/reculer entre les diapos
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Fonction pour afficher la diapo courante
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    // Afficher les diapos
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("carousel-slide");
        let dots = document.getElementsByClassName("dot");

        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }

    // Carrousel automatique
    let autoIndex = 0;
    autoShowSlides();

    function autoShowSlides() {
        let i;
        let slides = document.getElementsByClassName("carousel-slide");
        let dots = document.getElementsByClassName("dot");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        autoIndex++;
        if (autoIndex > slides.length) {autoIndex = 1}    

        slides[autoIndex-1].style.display = "block";  
        dots[autoIndex-1].className += " active";

        setTimeout(autoShowSlides, 2000); // Change d'image toutes les 2 secondes
    }
</script>
    <section class="cta">
        <h2>Prêt à trouver la voiture de vos rêves ?</h2>
		<p>
                Bienvenue sur notre site !
			</p>
			<p>
                Nous sommes une équipe passionnée des voitures. Spéciliser dans la ventre de voiture neuves ou reconditionnées de divers marques.
				Elles sont importés de différents pays, comme par exemples: Japon, Singapour, Afrique, Etat-Unis, France au autres.
            </p>
            <p>
                Depuis 2009, nous avons aidé des milliers de clients à trouver leurs voitures de rêve.
                Avec une équipe dédiée et expérimentée, nous visons à continuer de croître tout en respectant nos engagements envers 
                notre communauté et nos clients.
            </p>
            <p>
                Merci de faire partie de cette aventure avec nous !
            </p>
        <a href="#">Explorez notre collection</a>
    </section>
    <br>
<?php include 'footer.php'; ?>
<!--    <footer>
        <p>&copy; 2024 - Super Car. Tous droits réservés.</p>
        <nav>
            <a href="accueil.php">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">CGU</a>
            <a href="#">Politique de confidentialité</a>
        </nav>
    </footer>-->

</body>

</html>
