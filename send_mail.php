<?php
session_start();

require_once('mails/templates/contact.php');
require_once('mails/templates/partenaires.php');
require_once('mails/templates/legumes.php');
require_once('mails/templates/formations.php');

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('yourMailGunKey');
$domain = "yourMailGunDomain";

$recipient = 'mel.egumes@gmail.com';

# Options default config
$option['FROM_MAIL']="noreply@melegumes.be";
$option['FROM_NAME']="Mél'égumes";
$option['TO_MAIL']="mel.egumes@gmail.com";
$option['TO_NAME']="Mél'égumes";
$option['REPLY_TO']=$recipient; // change dynamic
$option['BCC']="mel.egumes@gmail.com"; // change dynamic
$option['SUBJECT']="Problème d'envoie";
$option['BODY']= "Ceci est un message par défaut. Il y a eu un soucis lors de l'encodage du message";

# Envoi de mail de contact
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
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $messageWrited = htmlspecialchars($_POST['message']);

		# Options config
		$option['REPLY_TO']=$email; // change dynamic
		$option['BCC']="contact@melegumes.be"; // change dynamic
		$option['SUBJECT']='[Message] ' . $name;
		$option['BODY']= contactToMel($name, $email, $messageWrited);


		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
			'from' => $option['FROM_NAME']." <".$option['FROM_MAIL'].">",
			'to' => $option['TO_NAME']." <".$option['TO_MAIL'].">",
			'bcc' => $option['BCC'],
			'h:Reply-To' => $option['REPLY_TO'],
			'subject' => $option['SUBJECT'],
			'html' => $option['BODY']
		));

        $_SESSION['success'] = 1;
        header('Location: contact.php');
    }
}

# Envoi de mail de partenaire
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

    if (!array_key_exists('tva', $_POST) || $_POST['tva'] == "") {
        $errors['tva'] = "Vous n'avez pas renseigné votre numéro de TVA";
    }

    if (!array_key_exists('message', $_POST) || $_POST['message'] == "") {
        $errors['message'] = "Vous n'avez pas renseigné votre message";
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: partenaires');
    } else {
        $name = htmlspecialchars($_POST['name']);
        $company = htmlspecialchars($_POST['company']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $tva = htmlspecialchars($_POST['tva']);
        $messageWrited = htmlspecialchars($_POST['message']);

		# Options config
		$option['REPLY_TO']=$email; // change dynamic
		$option['BCC']="partenaire@melegumes.be"; // change dynamic
		$option['SUBJECT']='[Demande de partenaire] ' . $name;
		$option['BODY']= partenairesToMel($name, $company, $email, $tel, $tva, $messageWrited);


		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
			'from' => $option['FROM_NAME']." <".$option['FROM_MAIL'].">",
			'to' => $option['TO_NAME']." <".$option['TO_MAIL'].">",
			'bcc' => $option['BCC'],
			'h:Reply-To' => $option['REPLY_TO'],
			'subject' => $option['SUBJECT'],
			'html' => $option['BODY']
		));

        $_SESSION['success'] = 1;
        header('Location: partenaires.php');
    }
}

# Envoi de mail de commande
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

    if (!array_key_exists('jour', $_POST) || $_POST['jour'] == "") {
        $errors['jour'] = "Vous devez choisir le jour où vous viendrez chercher vos légumes";
    }

    if (!array_key_exists('heure', $_POST) || $_POST['heure'] == "") {
        $errors['heure'] = "Vous devez choisir l'heure à laquelle vous viendrez chercher vos légumes";
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
		$jour = htmlspecialchars($_POST['jour'], ENT_QUOTES, 'UTF-8');
		$heure = htmlspecialchars($_POST['heure'], ENT_QUOTES, 'UTF-8');

        if (isset($_POST['message']) && !empty($_POST['message']) && $_POST['message'] != " ") {
            $messageWrited = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
        } else {
            $messageWrited = "Aucune";
        }


        # Options config
		$option['REPLY_TO']=$email; // change dynamic
		$option['BCC']="legume@melegumes.be"; // change dynamic
		$option['SUBJECT']='[Commande] ' . $name;
		$option['BODY']= legumesToMel($name, $email, $tel, $choix, $jour, $heure, $messageWrited);


		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
			'from' => $option['FROM_NAME']." <".$option['FROM_MAIL'].">",
			'to' => $option['TO_NAME']." <".$option['TO_MAIL'].">",
			'bcc' => $option['BCC'],
			'h:Reply-To' => $option['REPLY_TO'],
			'subject' => $option['SUBJECT'],
			'html' => $option['BODY']
		));

        $_SESSION['success'] = 1;
        header('Location: legumes.php');
    }
}

# Envoi de mail de formation
if (isset($_POST['formationSubmit'])) {
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

    if (!array_key_exists('module', $_POST) || $_POST['module'] == "" || empty($_POST['module'])) {
        $errors['module'] = "Vous n'avez pas renseigné de module";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: formation');
    } else {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $modules=[];
        
        if (isset($_POST['message']) && !empty($_POST['message']) && $_POST['message'] != " ") {
            $messageWrited = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
        } else {
            $messageWrited = "Aucune";
        }

        $i=0;
        foreach($_POST['module'] as $val){
            $modules[$i] = $val;
            $i++;
        }

		# Options config
		$option['REPLY_TO']=$email; // change dynamic
		$option['BCC']="formation@melegumes.be"; // change dynamic
		$option['SUBJECT']='[Inscription] ' . $name;
        $option['BODY']= formationsToMel($name, $email, $tel, $modules, $messageWrited);


		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
			'from' => $option['FROM_NAME']." <".$option['FROM_MAIL'].">",
			'to' => $option['TO_NAME']." <".$option['TO_MAIL'].">",
			'bcc' => $option['BCC'],
			'h:Reply-To' => $option['REPLY_TO'],
			'subject' => $option['SUBJECT'],
			'html' => $option['BODY']
		));

        $_SESSION['success'] = 1;
        header('Location: formation.php');
    }
}