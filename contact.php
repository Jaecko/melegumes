<?php
session_start();
require_once('_inc.php');
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Contact | Mél'égumes</title>
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

    <main class="wrapper_contact" ng-controller="DatasCtrl">

        <div id="iframe" data-aos="fade-in" data-aos-duration="500" data-aos-offset="-1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.3929591810115!2d3.9534683156220454!3d50.47102779376323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c24fdf5d798f0f%3A0x38bb990cdb3b3f7e!2sAvenue+de+la+Joyeuse+Entr%C3%A9e+13%2C+7000+Mons!5e0!3m2!1sfr!2sbe!4v1553960054072!5m2!1sfr!2sbe" style="border:0" allowfullscreen></iframe>
        </div>


        <div id="all_form_contact">
            <div>
                <h3 class="contactus" data-aos="fade-in" data-aos-duration="500">Nous contacter</h3>
                <div id="contact_content" data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                    <form class="form_contact" action="send_mail.php" method="post">

                        <?= $form->text('name', 'Votre nom'); ?>

                        <?= $form->email('email', 'Votre email'); ?>

                        <?= $form->textarea('message', 'Votre message', true); ?>

                        <?= $form->submit('contact', 'Envoyer'); ?>

                    </form>
                    <p class="avertissements">* Champ obligatoire.</p>
                </div>
            </div>
        </div>

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