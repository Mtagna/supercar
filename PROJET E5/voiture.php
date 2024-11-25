<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voiture</title>
</head>
<body>
<?php include "header.php"; ?>
<h2>Télécharger une image</h2>
<form action="" method="post" enctype="multipart/form-data">
    Sélectionnez une image à télécharger :
    <input type="file" name="imageToUpload" id="imageToUpload" required>
    <input type="submit" value="Télécharger l'image" name="submit">
</form>
<?php include "footer.php"; ?>
</body>
</html>
