<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ( isset($page) ) { echo $page . ' - '; } ?> ECF </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="site-header">
        <section class="real-header">
            <div class="container">
                <div class="logo-header">
                    <a href="index.php" class="link-logo-header"><h1 class="logo">DWWM</h1></a>
                </div>
                <nav class="main-nav">
                    <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
                    <ul id="menu" class="menu" role="list" hidden>
                        <li class="menu-item">
                            <a href="index.php" class="menu-link <?php if ( isset($page) && $page === "home" ){echo "menu-active";}?>"> Accueil</a>
                        </li>
                        <li class="menu-item">
                            <a href="formation.php" class="menu-link <?php if ( isset($page) && $page === "formation" ){echo "menu-active";}?>" target="blank">La formation</a>
                        </li>
                        <li class="menu-item">
                            <a href="student.php" class="menu-link <?php if ( isset($page) && $page === "student" ){echo "menu-active";}?>" target="blank">Les etudiant</a>
                        </li>
                        <li class="menu-item">
                            <a href="news.php" class="menu-link <?php if ( isset($page) && $page === "news" ){echo "menu-active";}?>" target="blank">Actualités</a>
                        </li>
                        <li class="menu-item">
                            <a href="contact.php" class="menu-link <?php if ( isset($page) && $page === "contact" ){echo "menu-active";}?>" target="blank">Nous contacter</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    
    </header>
