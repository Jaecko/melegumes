<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formation | Mél'égumes</title>
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

<section class="sections entete aPropos">
    <div class="wrapper content entete_full">
        <div class="textes" data-aos="fade-in" data-aos-duration="500">
            <h3 class="training">[NOM DE LA FORMATION]</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et aliquid cumque sed dolorum assumenda autem possimus officia qui? Debitis, culpa? Sequi quod rem sint officia repellendus delectus illum facere. Omnis?</p>
        </div>
    </div>
</section>

<main class="wrapper">
    <section class="sections page_70 aPropos texte_droite">
        <div class="content page_70">
            <div class="imageAccroche scale" data-aos="fade-in" data-aos-duration="500">
                <img class="lazy-load" src="img/Persil.png" data-src="img/Persil.png"
                     alt="Mélanie faisant un calin au persil provenant de son potager">
            </div>
            <div class="textes" data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
                <h3 class="values">Nos valeurs</h3>
                <p>En plus de partager sa passion pour la permaculture avec les petits et les grands, Mélanie tiens
                    beaucoup à tisser des liens sociaux. La réintégration sociale, les formations ou les activités
                    pédagogiques y contribuent grandement. De plus cela permet de ne pas exclure les personnes en
                    difficultés. Elle prône également un modèle économique beaucoup plus chaleureux tel que le circuit
                    court, qui permet d’avoir un contact direct entre le producteur et le client.</p>
            </div>
        </div>
    </section>
    <section class="sections page_70 aPropos texte_gauche">
        <div class="content page_70 ">
            <div class="textes" data-aos="fade-in" data-aos-duration="500">
                <h3 class="melanie">Notre équipe</h3>
                <p>Avec un coeur d’artichaut, Mélanie tient à tisser des liens sociaux forts. Elle a donc commencé une
                    collaboration avec l’ASBL “L’évasion”. Leur résidents, atteints du syndrome de Korsakof, ont
                    aujourd’hui une activité régulière dans le potager.</p>
                <p>Peeter, passionné de permaculture, met un point d’honneur à transmettre ses valeurs à la nouvelle
                    génération! Il aide également les résidents de l’ASBL “L’évasion” à réaliser leurs activités.</p>
                <p class="citation">“La nature avec un grand "N", c’est la nature humaine.”<span
                            class="auteur"> Peeter<span></p>
            </div>
            <div class="imageAccroche" data-aos="fade-in"
                 data-aos-duration="500">
                <img class="scale lazy-load" src="img/Bettes.png" data-src="img/Bettes.png"
                     alt="Bettes travaillant dans le potager de Mél'égumes">
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