<?php
session_start();
require_once('_inc.php');

$mois = array(
    'January'=>'Janvier',
    'February'=>'Février',
    'March'=>'Mars',
    'April'=>'Avril',
    'May'=>'Mai',
    'Juny'=>'Juin',
    'July'=>'Juillet',
    'August'=>'Aout',
    'September'=>'Septembre',
    'October'=>'Octobre',
    'November'=>'Novembre',
    'December'=>'Décembre'
);

$jour = array(
    'Monday'=>'Lundi',
    'Tuesday'=>'Mardi',
    'Wednesday'=>'Mercredi',
    'Thursday'=>'Jeudi',
    'Friday'=>'Vendredi',
    'Saturday'=>'Samedi',
    'Sunday'=>'Dimanche'
);

$tabJour = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];   

?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Nos légumes | Mél'égumes</title>
        <?php
        require_once("include_head.php");
        ?>
    </head>
    <body data-ng-app="legumes">
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
            Merci pour votre commande, nous vous contacterons dans les plus brefs délais
        </div>
    <?php endif; ?>

    <section class="sections entete legumes entete_legumes">
        <div class="wrapper content entete_legumes entete_full">
            <div class="textes" data-aos="fade-in" data-aos-duration="1000">
                <h3 class="vegetables">Nos légumes</h3>
                <p data-aos="fade-in" data-aos-duration="1000">Les légumes proviennent d’une terre riche, ils sont 100 %
                    naturels et aucun produit chimique n’est utilisé pour les cultiver. Mélanie vous offre les
                    possibilités de créer votre propre panier et de les récolter vous-mêmes.</p>
                <h4>Horaires</h4>
                <p><strong>Commandez</strong> vos paniers de légumes par téléphone le <strong>lundi et mardi</strong>, venez les <strong>chercher</strong> le <strong>jeudi et vendredi</strong>. La <strong>récolte</strong> des légumes se fait <strong>uniquement en été</strong>.</p>
            </div>
        </div>
    </section>
    <div class="popUpBg"></div>
    <main class="wrapper wrapper_legumes" data-ng-controller="DatasCtrl">
        <div>
            <!-- Paniers surprise -->
            <div class="paniers_content panierSurprise legumes ">
                <h3 data-aos="fade-in" data-aos-duration="1000">Paniers surprises</h3>
                <p data-aos="fade-in" data-aos-duration="1000" data-aos-offset="-1000">Dans les paniers surprises, vous retrouverez un peu de
                    tout.</p>
                <div class="sections gallery_paniers">
                    <div class="paniers panier_small" data-aos="flip-right" data-aos-duration="1000"
                         data-aos-offset="-1000">
                        <div class="title">
                            <div class="namePrice">
                                <h4>Petit</h4>
                                <p>20€</p>
                            </div>
                            <p>Panier pour 1 à 2 personnes</p>
                        </div>
                        <div class="moreOrLess">
                            <button class="less" onclick='less(this)' data-num="0" title="Retirer un petit panier">-
                            </button>
                            <input class="exact" id="petit_input" type="number" required="required" value="0"
                                   autocomplete="off" onchange='exact(this)' data-num="0"
                                   title="Modifier manuellement le nombre de petit panier">
                            <button class="more" onclick='more(this)' data-num="0" title="Ajouter un petit panier">+
                            </button>
                        </div>
                    </div>
                    <div class="paniers" data-aos="flip-right" data-aos-duration="1000" data-aos-offset="-1000">
                        <div class="title">
                            <div class="namePrice">
                                <h4>Moyen</h4>
                                <p>25€</p>
                            </div>
                            <p>Panier pour 3 à 4 personnes</p>
                        </div>
                        <div class="moreOrLess">
                            <button class="less" onclick='less(this)' data-num="1" title="Retirer un panier moyen">-
                            </button>
                            <input class="exact" id="moyen_input" type="number" required="required" value="0"
                                   autocomplete="off" onchange='exact(this)' data-num="1"
                                   title="Modifier manuellement le nombre de panier moyen">
                            <button class="more" onclick='more(this)' data-num="1" title="Ajouter un panier moyen">+
                            </button>
                        </div>
                    </div>
                    <div class="paniers panier_big" data-aos="flip-right" data-aos-duration="1000"
                         data-aos-offset="-1000">
                        <div class="title">
                            <div class="namePrice">
                                <h4>Grand</h4>
                                <p>35€</p>
                            </div>
                            <p>Panier pour 5 à 6 personnes</p>
                        </div>
                        <div class="moreOrLess">
                            <button class="less" onclick='less(this)' data-num="2" title="Retirer un grand panier">-
                            </button>
                            <input class="exact" id="grand_input" type="number" required="required" value="0"
                                   autocomplete="off" onchange='exact(this)' data-num="2"
                                   title="Modifier manuellement le nombre de grand panier">
                            <button class="more" onclick='more(this)' data-num="2" title="Ajouter un grand panier">+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panier Personalisé -->
            <div class="paniers_content panierPerso legumes ">
                <div id="titreSearch">
                    <h3 data-aos="fade-in" data-aos-duration="1000">Créez votre panier</h3>
                    <div id="searchContent" data-aos="fade-in" data-aos-duration="1000">
                        <div class="search_content">
                            <div class="search" id="search">
                                <input id="research" type="search" aria-label="Search" data-ng-model="search">
                            </div>
                        </div>
                    </div>
                </div>
                <p data-aos="fade-in" data-aos-duration="1000" data-aos-offset="0">Personnalisez vous-même vos paniers
                    en
                    choisissant vos légumes.</p>
                <div class="sections gallery_legumes" id="gallery_legumes" data-aos="fade-in" data-aos-delay="0"
                     data-aos-duration="500" data-aos-offset="-1000">
                    <div class="items" data-ng-repeat="data in datas | filter:search" data-aos="fade-top"
                         data-aos-duration="1000" data-aos-delay="200" data-aos-offset="0">
                        <div class="items_images">
                            <img ng-src="img/legumes/{{data.slug}}.png" alt="{{ data.name }}">
                        </div>
                        <div class="title">
                            <h4>{{ data.name }}</h4>
                            <p>{{ data.price }}€/{{ data.unite }}</p>
                        </div>
                        <div class="moreOrLess">
                            <button class="less" onclick='less(this)' data-num="{{data.id}}"
                                    title="Retirer un/une {{ data.unite }} de {{ data.name }}">-
                            </button>
                            <input class="exact" id="{{data.slug}}_input" type="number" required="required" value="0"
                                   onchange='exact(this)' data-num="{{data.id}}"
                                   title="Modifier manuellement le nombre de {{ data.name }}">
                            <button class="more" onclick='more(this)' data-num="{{data.id}}"
                                    title="Ajouter un/une {{ data.unite }} de {{ data.name }}">+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="aside legumes">
            <div id="aside_all_content">
                <button id="buttonForm"><span>2</span></button>
                <div id="aside_content">
                    <div class="form_legumes">

                        <div class="myInputs">
                            <table id="tab_head">
                                <tr>
                                    <th></th>
                                    <th>Produits</th>
                                    <th>Quant.</th>
                                    <th>€</th>
                                </tr>
                            </table>
                            <table id="commande" class="scroller">
                                <tbody id="tab_body">
                                </tbody>
                            </table>
                            <table id="total">
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th></th>
                                    <th><span id="span_total">0</span></th>
                                </tr>
                            </table>
                        </div>

                        <div class="myInputs">
                            <button class="button button_full" type="submit" id='form_legumes_commander'>Commander
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <section class="wrapper sections form_contact_legumes legumes" id="form_contact_legumes" data-aos="fade-in" data-aos-duration="500">
        <h3>Commander</h3>
        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
        <form action="send_mail.php" method="post">

            <?= $form->text('name', 'Votre nom'); ?>

            <?= $form->email('email', 'Votre email'); ?>

            <?= $form->tel('tel', 'Votre numéro de téléphone'); ?>

            <?= $form->radio('choix', [['chercher', 'Je viendrais chercher mon panier'], ['cueillir', 'Je souhaite venir cueillir mes légumes']]); ?>

            <?= $form->textarea('message', 'Votre message'); ?>


            <div class="myInputs-2">
                <?php
                    $jourAjd = date("l");
                    // echo "<script>console.log( 'Debug Objects: Aujourd-hui : " . $jourAjd . "' );</script>";
                    $tabDate = [];
                    $i = 0;
                    foreach ($tabJour as $key => $value) {
                        if($value == $jourAjd){
                            $ajd = $key+1;
                            // echo "<script>console.log( 'Debug Objects: var ajd : " . $ajd . "' );</script>";
                        }
                    }
                    foreach ($tabJour as $key => $value) {
                        if($value == "Thursday" || $value == "Friday"){
                            $diff = ($key+1) - $ajd;
                            // echo "<script>console.log( 'Debug Objects: var diff : " . $diff . "' );</script>";
                            if($diff <= 0){
                                $diff = 7 + $diff;
                            }

                            $date = date("l j F Y", mktime(0, 0, 0, date("m"), date('d')+$diff, date('y')));
                            $date = explode(" ",$date);
                            $date = $jour[$date[0]].", ".$date[1]." ".$mois[$date[2]]." ".$date[3];
                            // echo "<script>console.log( 'Debug Objects: " . $date . "' );</script>";
                            $tabDate[$i] = $date;
                            $i++;
                        }   
                    }
                    $_SESSION['jours']= $tabDate;

                ?>
                <?= $form->select('jour','Jour de retrait', [$tabDate[0], $tabDate[1]]); ?>
                <?= $form->select('heure','Heure de retrait', ['17h - 17h15', '17h15 - 17h30', '17h30 - 17h45', '17h45 - 18h', '18h - 18h15', '18h15 - 18h30']); ?>
            </div>

            <?= $form->submit('commande', 'Envoyer'); ?>
        </form>
        <p class="avertissements">Le paiement de vos paniers s’effectue sur place.</p>
        <p class="avertissements">* Champ obligatoire.</p>
    </section>


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