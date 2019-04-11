<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil | Mél'égumes</title>
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

<section class="wrapper sections fullpage legumes texte_droite entete">
    <div class="content fullpage" data-aos="fade-in" data-aos-duration="500">
        <div class="textes">
            <h1>Du potager <br/>à votre assiette</h1>
            <h2>Du naturel à l'ancienne, nous vous proposons un large choix de légumes de saison</h2>

            <a class="button big_button button_full" href="legumes.php" title="Commandez des légumes de saison">Commandez-les
                !</a>
        </div>
        <div class="imageAccroche">
            <img class="lazy-load" src="img/Brocoli.png" data-src="img/Brocoli.png"
                 alt="Mascotte de Mel’égumes">
        </div>
    </div>

    <div class="fleches">
        <a href="#aPropos">
            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 53.8 30" style="enable-background:new 0 0 53.8 30;" xml:space="preserve">
                        <g>
                            <path d="M47.6,2L26.9,22.6L6.2,2c-1-1-2.6-1-3.6,0s-1,2.6,0,3.6L25.1,28c1,1,2.6,1,3.6,0L51.2,5.6c0.5-0.5,0.7-1.2,0.7-1.8
                                S51.7,2.5,51.2,2C50.2,1,48.6,1,47.6,2z"/>
                        </g>
                    </svg>
        </a>
    </div>
</section>

<main class="wrapper index">
    <section class="sections page_90 aPropos texte_gauche" id="aPropos">
        <div class="content page_90">
            <div class="textes" data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
                <h3 class="about">Qui sommes-nous ?</h3>
                <p>Mel’égumes c’est un potager urbain utilisant la méthode de la permaculture qui vous propose des
                    paniers de légumes 100 % naturels. Après son voyage au Canada, Mélanie a été intriguée par les
                    agriculteurs qui, de par leur activité, permettent aux personnes en réinsertion sociale de
                    travailler. De retour de son voyage, elle s’est formée à la permaculture et a décidé de créer en
                    collaboration avec Peeter son propre projet de réinsertion sociale. </p>
                <a class="button button_empty" href="a_propos.php" title="En savoir plus sur qui nous sommes">En savoir
                    +</a>
            </div>
            <div class="imageAccroche" data-aos="fade-in" data-aos-duration="500">
                <img class="lazy-load" src="img/Caisse.png" data-src="img/Caisse.png"
                     alt="Panier de légumes frais de saison venant de chez Mél'égumes">
            </div>
        </div>
    </section>
    <section class="sections activites texte_droite carottes" id="activites">
        <div class="content">
            <div class="imageAccroche" data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
                <img class=" lazy-load" src="img/Carottes.png" data-src="img/Carottes.png"
                     alt="Heureuse famille de carottes provenant de chez Mel’égumes">
            </div>
            <div class="textes" data-aos="fade-in" data-aos-duration="500">
                <h3 class="activity">Nos activités</h3>
                <p>Mélanie propose des formations pour les éducateurs, de vous accueillir, d’aller à la rencontre de
                    groupes d’enfants et même d’être présente durant certains évènements mis en place par la ville de
                    Mons ou par d’autres secteurs événementiels, afin de vous sensibiliser à la bonne
                    d’alimentation.</p>
                <a class="button button_empty" href="activites.php" title="En savoir plus sur nos activités">En savoir +</a>
            </div>
        </div>
    </section>
    <section class="sections galleries">
        <div class="content">
            <div class="textes">
                <h3 data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">Instagram</h3>
                <div class="gallery">
                    <?php
                    require_once("class/instagram.php");
                    $instagram = new Instagram(['access_token' => "9363627004.cd40ff3.087d274a70d840d4a2e0557766915b70"]);
                    $limit = 8;
                    try {
                        $medias = $instagram->getRecentMedia($limit);
                        foreach ($medias as $media) {
                            echo '<div class="images" data-aos="fade-in" data-aos-delay="0" data-aos-offset="0">';
                            echo "<a href='{$media->link}' target='_blank'>";
                            echo "<img class='lazy-load' src='{$media->images->low_resolution->url}' data-src='{$media->images->low_resolution->url}' alt='{$media->caption->text}'>";
                            echo "</a>";
                            echo '</div>';
                        }
                    } catch (Exception $e) {
                        die($e->getMessage($limit));
                    }
                    ?>
                </div>
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