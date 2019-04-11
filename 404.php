<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>404 | Mél'égumes</title>
    <?php
    require_once("include_head.php");
    ?>
</head>
<body>

<section class="sections fullpage legumes texte_droite entete">
    <div class="wrapper content fullpage">
        <div class="textes" data-aos="fade-up" data-aos-duration="1000">
            <h1>Page <br/>introuvable</h1>
            <h2>Désolé, la page que vous souhaitez consulter n'existe pas.</h2>

            <a class="button big_button button_full" href="index" data-aos="fade-up" data-aos-duration="1500"
               title="Revenir
            à l'accueil">Revenir à l'accueil</a>
        </div>
        <div class="imageAccroche" data-aos="fade-zoom-in"
             data-aos-duration="2000">
            <img src="img/Brocoli_404.png" alt="Brocolie de l'erreur 404">
        </div>
    </div>
</section>


<?php
require_once("include_scripts.php");
?>
</body>
</html>