<?php

function partenairesToMel($name, $company, $email, $tel, $tva, $messageWrited){
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
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%7COverlock:400,400i,700,700i,900,900i%7CWork+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    </head>
    <body>
        <table width="660" style="margin: 0 auto; display: block; border-collapse: collapse; font-family: \'Work Sans\', sans-serif,helvetica, sans-serif; font-size: 16px;">
    <!-- logo --><tr>
    <td>
                    <a href="http://www.melegumes.be" target="_blank">
                        <img style="width: 7em; margin-bottom: 2em;" id="logo" src="http://www.melegumes.be/img/melegumes.png" alt="Mél\'égumes" /></a>
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
                    <p style="margin: 0; padding: 0 0 0 2em;">Téléphone : <span id="tel">' . $tel . '</span></p>
                </td>
            </tr>
    <tr>
    <td>
                    <p style="margin: 0; margin-bottom: 2em; padding: 0 0 0 2em;">TVA : <span id="tva">' . $tva . '</span></p>
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

    return $message;
}