<?php
session_start();
require_once('_inc.php');
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

<?php if (array_key_exists('errors', $_SESSION)): ?>
    <div class="error">
        <?= implode($_SESSION['errors']) ?>
    </div>
<?php endif; ?>

<?php if (array_key_exists('success', $_SESSION)): ?>
    <div class="success">
        Merci pour votre inscription, nous vous contacterons dans les plus brefs délais
    </div>
<?php endif; ?>

<section class="sections entete">
    <div class="wrapper content entete_full">
        <div class="textes" data-aos="fade-in" data-aos-duration="500">
            <h3 class="training">Le potager en permaculture</h3>
            <p>Cette formation vous apprendra à cultiver vous-même vos légumes avec la méthode de permaculture. Elle est composée de 6 modules, étalés sur plusieurs dates que vous retrouverez ci-dessous. Chaque module coute <strong>75€</strong> et se déroule à la date indiquée <strong>de 13h à 17h</strong>.</p>
        </div>
    </div>
</section>

<main class="wrapper" data-aos="fade-in" data-aos-duration="1000" data-aos-offset="-1000">
    <h3>Modules</h3>
    <p>Choisissez les modules qui vous intéressent.</p>
    <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
    <form action="send_mail.php" method="post">
        <div class="modules">
            <section class="module">
                <input type="checkbox" id="module_0" name="module[]" value="0">
                <label for="module_0" class='module_card'>
                    <h1 class="module_title">Démarrer son potager</h1>
                    <div class="sous_modules">
                        <div>
                            <h3 class="date">11 mai</h3>
                            <p class="sous_modules_title">La butte auto-fertile</p>
                        </div>
                        <div>
                            <h3 class="date">25 mai</h3>
                            <p class="sous_modules_title">Faire son compost</p>
                        </div>
                    </div>
                </label>
            </section>

            <section class="module">
                <input type="checkbox" id="module_1" name="module[]" value="1">
                <label for="module_1" class='module_card'>
                    <h1 class="module_title">Techniques de semis</h1>
                    <div class="sous_modules">
                        <div>
                            <h3 class="date">8 juin</h3>
                            <p class="sous_modules_title">Graines</p>
                        </div>
                        <div>
                            <h3 class="date">22 juin</h3>
                            <p class="sous_modules_title">Terre et outils</p>
                        </div>
                    </div>
                </label>
            </section>

            <section class="module">
                <input type="checkbox" id="module_2" name="module[]" value="2">
                <label for="module_2" class='module_card'>
                    <h1 class="module_title">Construction</h1>
                    <div class="sous_modules">
                        <div>
                            <h3 class="date">6 juillet</h3>
                            <p class="sous_modules_title">Bac de culture</p>
                        </div>
                        <div>
                            <h3 class="date">20 juillet</h3>
                            <p class="sous_modules_title">Potager en carré</p>
                        </div>
                    </div>
                </label>
            </section>

            <section class="module">
                <input type="checkbox" id="module_3" name="module[]" value="3">
                <label for="module_3" class='module_card'>
                    <h1 class="module_title">Travail de la terre</h1>
                    <div class="sous_modules">
                        <div>
                            <h3 class="date">3 août</h3>
                            <p class="sous_modules_title">Nourrir son sol</p>
                        </div>
                        <div>
                            <h3 class="date">17 août</h3>
                            <p class="sous_modules_title">Créer un sol vivant</p>
                        </div>
                    </div>
                </label>
            </section>

            <section class="module">
                <input type="checkbox" id="module_4" name="module[]" value="4">
                <label for="module_4" class='module_card'>
                    <h1 class="module_title">Culture</h1>
                    <div class="sous_modules">
                        <div>
                            <h3 class="date">31 août</h3>
                            <p class="sous_modules_title">Plants</p>
                        </div>
                        <div>
                            <h3 class="date">14 septembre</h3>
                            <p class="sous_modules_title">Associations</p>
                        </div>
                    </div>
                </label>
            </section>

            <section class="module">
                <input type="checkbox" id="module_5" name="module[]" value="5">
                <label for="module_5" class='module_card'>
                    <h1 class="module_title">Notions avancées</h1>
                    <div class="sous_modules sous_modules_solo">
                        <div>
                            <h3 class="date">28 septembre</h3>
                            <p class="sous_modules_title">Plantes bio sanitaires, purins, décoctions, traitements</p>
                        </div>
                    </div>
                </label>
            </section>

        </div>
        <div class="training_form">
            <?= $form->text('name', 'Votre nom'); ?>

            <?= $form->email('email', 'Votre email'); ?>

            <?= $form->tel('tel', 'Votre numéro de téléphone'); ?>

            <?= $form->textarea('message', 'Votre message'); ?>

            <?= $form->submit('formation', 'Réserver'); ?>
            <p class="avertissements">* Champ obligatoire.</p>
        </div>
        
    </form>
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
unset($_SESSION['panier']);

?>