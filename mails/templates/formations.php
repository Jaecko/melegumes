<?php


function formationsToMel($name, $email, $tel, $modules, $messageWrited){
    
    $tab_modules=[0 => 'Démarrer son potager', 1 => 'Techniques de semis', 2 => 'Construction', 3 => 'Travail de la terre', 4 => 'Culture', 5 => 'Notions avancées'];

    foreach ($modules as $key => $value) {
        $modules[$key] = $tab_modules[$value];
    }

    $choix_modules = join(", ", $modules);

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
                    <a href="http://www.melegumes.be/" target="_blank">
                        <img style="width: 7em;" id="logo" src="http://www.melegumes.be/img/melegumes.png" alt="Mél\'égumes" /></a>
                </td>
                <td></td>
                <td></td>
            </tr>
    <!-- H1 + information --><tr>
    <td colspan="3">
                    <h1 style="font-family: \'Overlock\',Helvetica, cursive; font-weight: 900;">Nouvelle inscription</h1>
                    
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
            <p style="margin: 0; margin-bottom: 1.5em; font-family: \'Work sans\',Helvetica, sans-serif;">Téléphone : <span id="mail">' . $tel . '</span></p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <td colspan="3">
            <p style="margin: 0; margin-bottom: 1.5em; font-family: \'Work sans\',Helvetica, sans-serif;">Modules choisis : <span id="choix">' . $choix_modules . '</span></p>
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
    </table>
    </body>
    </html>';
    return $message;
}