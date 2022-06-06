<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./img/avatar/favicoGG_128.png" />

    <!-- Titre de la page -->
    <title>WebDev Galaxy - GG - [promo Einstein]</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Roboto&display=swap" rel="stylesheet">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="./css/reset.css"> <!-- le reset -->
    <link rel="stylesheet" href="./css/theme/colorDefault.css"> <!-- le thème couleur -->
    <link rel="stylesheet" href="./css/style.css"> <!-- mon style -->
</head>

<body>
    <header>
        <div class="galaxy"><!-- Menu de liens externes -->

        <?php foreach ($externLinks as $titleLink => $details) : ?>
            <a href="<?= $details['aHref'] ?>" class="galaxy__link" title="<?= $details['aTitle'] ?>" target="_blank">
                <img src="<?= $details['imgSrc'] ?>" alt="<?= $details['imgAlt'] ?>" class="galaxy__logo">
            </a>        
        <?php endforeach; ?>
            
        </div><!-- Fin du menu de liens externes -->
                    
        <h1 class="titre-page"><!-- Titre de la bannière -->
            <a href="http://localhost/einstein/" title="Naviguer dans les challenges"><span class="titre-page__balise">DevWEB</span><span class="titre-page__class">class</span><span class="titre-page__attr">einstein</span></a>
        </h1><!-- Fin du titre de la bannière -->
    </header>

    <main class="flex">
        <nav class="categories"><!-- Menu de navigation des catégories, fixe sur la gauche -->
            <ul class="categories__liste">

            <?php for ($i = 0; $i < count($categories); $i++) :?> 
                <li><a href="#<?= $categories[$i] ?>" class="categories__link" data-categorie="<?= $categories[$i] ?>"><?= $categories[$i] ?></a></li>    
            <?php endfor; ?>

            </ul>
        </nav><!-- Fin du menu de navigation des catégories -->

        <div class="main-content"><!-- Contenu des catégories -->