<?php
session_start();


$recipient = 'mel.egumes@gmail.com';
// $recipient = 'caussin.jason@gmail.com';
// $recipient = 'caussin.jason@gmail.com, j.serra.guerreiro@gmail.com, thibaut.pierson@outlook.be';
// $recipient = 'caussin.jason@gmail.com, thibaut.pierson@outlook.be';
// $recipient = 'acidtriptyk.runme.spam.all@previews.emailonacid.com';

/* Envoie de mail de contact */

if (isset($_POST['contactSubmit'])) {
    $errors = [];

    if (!array_key_exists('name', $_POST) || $_POST['name'] == "") {
        $errors['name'] = "Vous n'avez pas renseigné votre nom";
    }

    if (!array_key_exists('email', $_POST) || $_POST['email'] == "" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Vous n'avez pas renseigné un email valide";
    }

    if (!array_key_exists('message', $_POST) || $_POST['message'] == "") {
        $errors['message'] = "Vous n'avez pas renseigné votre message";
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: contact');
    } else {
        $emailTo = $recipient;
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $messageWrited = htmlspecialchars($_POST['message']);


        $headers = "From: Contact <info@jasoncaussin.be> \r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = '<!DOCTYPE html>
        <html lang="fr">
        <head>
        <style type="text/css">
        .ReadMsgBody {width: 100%;}
        .ExternalClass {width: 100%;}
        
        
        span.yshortcuts { color:#000; background-color:none; border:none;}
        span.yshortcuts:hover,
        span.yshortcuts:active,
        span.yshortcuts:focus {color:#000; background-color:none; border:none;}
        </style>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Contact</title>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%7COverlock:400,400i,700,700i,900,900i%7CWork+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        </head>
        <body>
            <table width="660" style="margin: 0 auto; display: block; border-collapse: collapse; font-family: \'Work Sans\', sans-serif; font-size: 16px;">
        <!-- logo --><tr>
        <td>
                        <a href="http://melegumes.jasoncaussin.be" target="_blank">
                            <img style="width: 7em; margin-bottom: 2em;" id="logo" src="http://melegumes.jasoncaussin.be/img/melegumes.png" alt="Mél\'égumes" /></a>
                    </td>
                </tr>
        <!-- H1 + information --><tr>
        <td>
                        <h1 style="font-family: \'Overlock\', \'Helvetica\', cursive; font-weight: 900;">Message de ' . $name . '</h1>
                    </td>
                </tr>
        <!-- h2 + début de commande --><tr>
        <td>
                        <p style="margin: 0; padding: 0 0 0 2em;">Nom: <span id="nom"> ' . $name . '</span></p>
                    </td>
                </tr>
        <tr>
        <td>
                        <p style="margin: 0; margin-bottom: 2em; padding: 0 0 0 2em;">E-mail: <span id="mail">' . $email . '</span></p>
                    </td>
                </tr>
        <tr>
        <td style="vertical-align: top;">
                            <p style="margin: 0; margin-bottom: 3.5em; padding: 0 0 0 2em;">Message :<br /><span id="remarques">' . $messageWrited . '</span></p>
                    </td>
                </tr>
        <tr>
        <td height="40"> </td>
                </tr>
                
        </table>
        </body>
        </html>';

        $subject = '[Message] ' . $name;
        mail($emailTo, $subject, $message, $headers, '-freturn@jasoncaussin.be');

        $_SESSION['success'] = 1;
        header('Location: contact');
    }
}


/* Envoie de mail de partenaire */

if (isset($_POST['partenaireSubmit'])) {
    $errors = [];

    if (!array_key_exists('name', $_POST) || $_POST['name'] == "") {
        $errors['name'] = "Vous n'avez pas renseigné votre nom";
    }

    if (!array_key_exists('email', $_POST) || $_POST['email'] == "" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Vous n'avez pas renseigné votre email";
    }

    if (!array_key_exists('company', $_POST) || $_POST['company'] == "") {
        $errors['company'] = "Vous n'avez pas renseigné votre société";
    }

    if (!array_key_exists('tel', $_POST) || $_POST['tel'] == "") {
        $errors['tel'] = "Vous n'avez pas renseigné votre numéro de téléphone";
    }

    if (!array_key_exists('message', $_POST) || $_POST['message'] == "") {
        $errors['message'] = "Vous n'avez pas renseigné votre message";
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: partenaires');
    } else {
        $emailTo = $recipient;
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $company = htmlspecialchars($_POST['company']);
        $tel = htmlspecialchars($_POST['tel']);
        $messageWrited = htmlspecialchars($_POST['message']);


        $headers = "From: Partenaire <info@jasoncaussin.be> \r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = '<!DOCTYPE html>
                <html lang="fr">
                <head>
                <style type="text/css">
                .ReadMsgBody {width: 100%;}
                .ExternalClass {width: 100%;}


                span.yshortcuts { color:#000; background-color:none; border:none;}
                span.yshortcuts:hover,
                span.yshortcuts:active,
                span.yshortcuts:focus {color:#000; background-color:none; border:none;}
                </style>

                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                <title>Contact</title>
                <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%7COverlock:400,400i,700,700i,900,900i%7CWork+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
                </head>
                <body>
                    <table width="660" style="margin: 0 auto; display: block; border-collapse: collapse; font-family: \'Work Sans\', sans-serif,helvetica, sans-serif; font-size: 16px;">
                <!-- logo --><tr>
                <td>
                                <a href="http://melegumes.jasoncaussin.be" target="_blank">
                                    <img style="width: 7em; margin-bottom: 2em;" id="logo" src="http://melegumes.jasoncaussin.be/img/melegumes.png" alt="Mél\'égumes" /></a>
                            </td>
                        </tr>
                <!-- H1 + information --><tr>
                <td>
                                <h1 style="font-family: \'Overlock\', \'Helvetica\', cursive; font-weight: 900;">Demande de partenariat de ' . $name . '</h1>
                            </td>
                        </tr>
                <!-- Contenu --><tr>
                <td>
                                <p style="margin: 0; padding: 0 0 0 2em;">Nom : <span id="nom">' . $name . '</span></p>
                            </td>
                        </tr>
                <tr>
                <td>
                                <p style="margin: 0; padding: 0 0 0 2em;">Société/organisation : <span id="nom">' . $company . '</span></p>
                            </td>
                        </tr>
                <tr>
                <td>
                                <p style="margin: 0; padding: 0 0 0 2em;">E-mail : <span id="mail">' . $email . '</span></p>
                            </td>
                        </tr>
                <tr>
                <td>
                                <p style="margin: 0; margin-bottom: 2em; padding: 0 0 0 2em;">Téléphone : <span id="mail">' . $tel . '</span></p>
                            </td>
                        </tr>
                <tr>
                <td style="vertical-align: top;">
                                    <p style="margin: 0; margin-bottom: 3.5em; padding: 0 0 0 2em;">Message :<br/><span id="remarques">' . $messageWrited . '</span></p>
                            </td>
                        </tr>
                <tr>
                <td height="40"> </td>
                        </tr>
                </table>
                </body>
                </html>';

        $subject = '[Demande de partenaire] ' . $name;
        mail($emailTo, $subject, $message, $headers, '-freturn@jasoncaussin.be');

        $_SESSION['success'] = 1;
        header('Location: partenaires');
    }
}


/* Envoie de mail de commande */

if (isset($_POST['commandeSubmit'])) {
    $errors = [];

    if (!array_key_exists('name', $_POST) || $_POST['name'] == "") {
        $errors['name'] = "Vous n'avez pas renseigné votre nom";
    }

    if (!array_key_exists('email', $_POST) || $_POST['email'] == "" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Vous n'avez pas renseigné votre email";
    }

    if (!array_key_exists('tel', $_POST) || $_POST['tel'] == "") {
        $errors['tel'] = "Vous n'avez pas renseigné votre numéro de téléphone";
    }

    if (!array_key_exists('choix', $_POST) || $_POST['choix'] == "") {
        $errors['choix'] = "Vous n'avez pas choisi la façon de récupérer vos légumes";
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: legumes');
    } else {
        $emailTo = $recipient;
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $tel = htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8');
        $choix = 'Le client viendra ' . htmlspecialchars($_POST['choix'], ENT_QUOTES, 'UTF-8') . ' les légumes';

        if (isset($_POST['message']) && !empty($_POST['message']) && $_POST['message'] != " ") {
            $messageWrited = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
        } else {
            $messageWrited = "Aucune";
        }


        $headers = "From: Commande <info@jasoncaussin.be> \r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $command = "";
        $total = 0;
        foreach ($_SESSION['panier'] as $key => $value) {
            if ($value->amount != 0) {

                if ($value->amount > 1 && $value->unite != 'kg') {
                    $unity = $value->unite . 's';
                } else {
                    $unity = $value->unite;
                }

                $command .= '<tr>
                    <td style="width: 33.33%; border-bottom: 1px solid #333">
                        <img style="width: 10em;" src="http://melegumes.jasoncaussin.be/img/legumes/' . $value->name . '.png" alt="' . $value->name . '">
                    </td>
                    <td style="width: 33.33%; border-bottom: 1px solid #333">
                        <p  style="text-align: center;"><span class="produit"> ' . $value->name . ' </span> | <span class="quantite"> ' . $value->amount . ' </span> ' . $unity . '</p>
                    </td>
                    <td style="width: 33.33%; border-bottom: 1px solid #333">
                        <p style="text-align: right;"><span class="lePrix"> ' . $value->price . ' </span> € </p>
                    </td>
                </tr>';
                $total += $value->price;
            }
        }


        $message = '<!DOCTYPE html>
            <html lang="fr">
            <head>
            <style type="text/css">
            .ReadMsgBody {width: 100%;}
            .ExternalClass {width: 100%;}
            
            
            span.yshortcuts { color:#000; background-color:none; border:none;}
            span.yshortcuts:hover,
            span.yshortcuts:active,
            span.yshortcuts:focus {color:#000; background-color:none; border:none;}
            </style>
            
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <title>Commande</title>
            <link rel="stylesheet" href="css/style.css" />
            <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%7COverlock:400,400i,700,700i,900,900i%7CWork+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
            </head>
            <body>
                <table style="width: 660px; margin: 0 auto; display: block; border-collapse: collapse; font-size: 16px;">
            <!-- logo --><tr>
            <td>
                            <a href="http://melegumes.jasoncaussin.be/" target="_blank">
                                <img style="width: 7em;" id="logo" src="http://melegumes.jasoncaussin.be/img/melegumes.png" alt="Mél\'égumes" /></a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
            <!-- H1 + information --><tr>
            <td colspan="3">
                            <h1 style="font-family: \'Overlock\',Helvetica, cursive; font-weight: 900;">Nouvelle commande</h1>
                            
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
            <!-- contact client --><tr>
            <td colspan="3" style="padding: 2em 0 1em 0;">
                    <h2 style="font-family: Alegreya sans, Helvetica, sans serif; font-weight: 500;">Contact du client</h2>
                </td>
            </tr>
            <tr>
            <td colspan="3">
                    <p style="margin: 0; font-family: \'Work sans\', Helvetica, sans-serif;">Nom : <span id="nom">' . $name . '</span></p>
                </td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
            <td colspan="3">
                    <p style="margin: 0; font-family: \'Work sans\',Helvetica, sans-serif;">E-mail : <span id="mail">' . $email . '</span></p>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td colspan="3">
                    <p style="margin: 0; margin-bottom: 3.5em; font-family: \'Work sans\',Helvetica, sans-serif;">Téléphone : <span id="mail">' . $tel . '</span></p>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td colspan="3">
                    <p style="margin: 0; margin-bottom: 1.5em; font-family: \'Work sans\',Helvetica, sans-serif;">Choix du client : <span id="choix">' . $choix . '</span></p>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td colspan="3">
                    <p style="margin: 0; font-family: \'Work sans\',Helvetica, sans-serif;">Remarques : <span id="remarques">' . $messageWrited . '</span></p>
                </td>
                <td></td>
                <td></td>
            </tr>
            <!-- h2 + début de commande --><tr>
            <td>
                            <h2 style="font-family: Alegreya sans,Helvetica, sans serif; font-weight: 500;">Votre commande</h2>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
            <!-- ligne de commande -->
            ' . $command . '
            <!-- le total --><tr>
            <td style=""></td>
                        <td style="border-bottom: 1px solid #333; padding: 1em 0 1em 0;">
                            <p style="text-align: center; font-weight: 900; margin: 0;">Total</p>
                        </td>
                        <td style="border-bottom: 1px solid #333;">
                            <p style="text-align: right; font-weight: 900; margin: 0;"><span id="prixTotal"> ' . $total . ' </span>€</p>
                        </td>
                    </tr>
            <tr>
            <td colspan="3" style="height: 40px;"> </td>
                        <td></td>
                        <td></td>
                    </tr>
            </table>
            </body>
            </html>';


        $subject = '[Commande] ' . $name;
        mail($emailTo, $subject, $message, $headers, '-freturn@jasoncaussin.be');

        $_SESSION['success'] = 1;
        header('Location: legumes');
    }
}
    

