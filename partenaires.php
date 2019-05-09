<?php
session_start();
require_once('_inc.php');
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Partenaires | Mél'égumes</title>
        <?php
        require_once("include_head.php");
        ?>
    </head>
    <body data-ng-app="partenaires">
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>

    <?php if (array_key_exists('errors', $_SESSION)): ?>
        <div class="error">
            <?= implode($_SESSION['errors']) ?>
        </div>
    <?php endif; ?>

    <?php if (array_key_exists('success', $_SESSION)): ?>
        <div class="success">
            Votre mail a bien été envoyé
        </div>
    <?php endif; ?>

    <main class="wrapper partenaire" data-ng-controller="DatasCtrl">
        <section class="sections partenaire">

            <div id="divPartenaire">
                <h3 data-aos="fade-in" data-aos-duration="500">Devenez partenaire !</h3>
                <div id="partenaire_content" data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                    <form class="form_partenaire partenaire" action="send_mail.php" method="post">
                        <?= $form->text('name', 'Votre nom'); ?>

                        <?= $form->text('company', 'Nom de la société'); ?>

                        <?= $form->email('email', 'Votre email'); ?>

                        <?= $form->tel('tel', 'Votre numéro de téléphone'); ?>

                        <?= $form->text('tva', 'Votre numéro de TVA'); ?>

                        <?= $form->textarea('message', 'Quelle est votre demande ?', true); ?>

                        <?= $form->submit('partenaire', 'Envoyer'); ?>
                    </form>
                    <p class="avertissements">* Champ obligatoire.</p>
                </div>
            </div>
        </section>


        <section class="sections  partenaire">
            <div class="content">
                <h3 data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">Nos partenaires</h3>
                <div class="sections gallery_partenaire" id="gallery_partenaire" data-aos="fade-in"
                     data-aos-duration="500" data-aos-offset="-1000">
                    <div class="items_partenaire" data-ng-repeat="data in datas" data-aos="fade-in"
                         data-aos-duration="1000" data-aos-delay="200" data-aos-offset="0">
                        <div class="items_partenaire_images">
                            <a data-ng-href="{{ data.lien }}" target="_blank" title="Lien vers site de {{ data.name }}">
                                <img data-ng-src="img/partenaires/{{ data.image }}" alt="Logo de {{ data.name }}"
                                     onMouseOver="partenaireHover(this);" onMouseOut="partenaireOut(this);">
                            </a>
                        </div>
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

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>