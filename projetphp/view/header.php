<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img src="https://picsum.photos/150/50">
            <a href="index.php?page=accueil">Accueil</a>
            <a href="index.php?page=nutriscore">Nutriscore</a>
            <a href="index.php?page=contact">Contact</a>
            <a href="?page=articles">Articles</a>
            <?php if(!isset($_SESSION['nom'])) { ?>
            <a href="?page=inscription">Inscription</a>
            <a href="?page=authentification">Authentification</a>
            <?php } else { ?>
            Bonjour <?=@$_SESSION['nom']?>
            <a href="?page=exit">Se deconnecter</a>
            <?php } ?>
            
        </nav>
    </header>
    <hr>

