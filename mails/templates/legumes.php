<?php


function legumesToMel($name, $email, $tel, $choix, $jour, $heure, $messageWrited){
    
    $tab_heure=[0 => '17h - 17h15', 1 => '17h15 - 17h30', 2 => '17h30 - 17h45', 3 => '17h45 - 18h', 4 => '18h - 18h15', 5 => '18h15 - 18h30'];
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
                    <img style="width: 10em;" src="http://melegumes.jasoncaussin.be/img/legumes/' . $value->slug . '.png" alt="' . $value->name . '">
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

    $message = '
    <!DOCTYPE html>
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
            <p style="margin: 0; margin-bottom: 1.5em; font-family: \'Work sans\',Helvetica, sans-serif;">Choix du client : <span id="choix">' . $choix . '</span> le '.$_SESSION['jours'][$jour].' vers '.$tab_heure[$heure].'</p>
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
    return $message;
}