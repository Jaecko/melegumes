<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head><?php
    require_once("include_head.php");
    ?>
    <title>Activités | Mél'égumes</title>
    <?php
    require_once("include_head.php");
    ?>
</head>
<body>
<header>
    <?php
    require_once("header.php");
    ?>
</header>

<section class="sections entete activites">
    <div class="wrapper content entete_full">
        <div class="textes" data-aos="fade-in" data-aos-duration="500">
            <h3 class="training">Nos formations</h3>
            <p>Mélanie propose diverses formations pour éducateurs désireux d’offrir de nouvelles activités, de nouvelles techniques pédagogiques originales dans un cadre relaxant, n’hésitez pas à la contacter !</p>
                <!-- <a class="button button_full formation" href="formation" title="Commandez des légumes de saison">En savoir +</a> -->
        </div>
    </div>
    <div data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
        <div class="banner" id="banner2" data-parallax="scroll" data-image-src="img/Moutarde.jpg"></div>
    </div>
</section>

<main class="wrapper">
    <section class="sections page_70 activites texte_droite">
        <div class="content page_70">
            <div class="imageAccroche scale" data-aos="fade-in" data-aos-duration="500">
                <img class="lazy-load" src="img/Radis.png" data-src="img/Radis.png"
                     alt="Caisse de légumes venant de chez Mél'égumes">
            </div>
            <div class="textes" data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
                <h3 class="kids">Pour les enfants</h3>
                <p>Sensibiliser à l’importance du vivant et la façon de bien s’alimenter… tout en s’amusant !  Mélanie peut vous accueillir sur place ou se déplacer dans les établissements scolaires avec son tout nouveau dossier pédagogique </p>
            </div>
        </div>
    </section>
    <section class="sections page_70 activites texte_gauche">
        <div class="content page_70">
            <div class="textes" data-aos="fade-in" data-aos-duration="500">
                <h3 class="events">Événements</h3>
                <p>Présente lors de certains événements mis en place par la ville de Mons ou par d’autres secteurs événementiels. Mélanie a également plusieurs idées événements qu’elle aimerait organiser et ce même au sein de son potager !</p>
            </div>
            <div class="imageAccroche" data-aos="fade-in" data-aos-duration="500">
                <img class="scale lazy-load" src="img/Citrouille.png" data-src="img/Citrouille.png"
                     alt="Caisse de légumes venant de chez Mél'égumes">
            </div>
        </div>
    </section>
</main>


<footer>
    <?php
    require_once("footer.php");
    ?>
</footer>


<?php
require_once("include_scripts.php");
?>
</body>
</html>