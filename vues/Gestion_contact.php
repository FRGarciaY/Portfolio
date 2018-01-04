<?php
// Déclaration des variables
$reponse = "";
$ligneSuivante = "\r\n";
$destinataire = 'yann.garcia.mail@gmail.com; yann.garcia@laposte.net';
$expediteur = 'portfolio.yanngarcia@free.fr';
$envoi = false;
$debutTraitement = new DateTime();
$finTraitement = new DateTime();
$tempsTraitement = new DateInterval('PT0S');
$tempsTraitement = $debutTraitement->diff($finTraitement);
$executionProbable = false;
if(isset($_POST['nomExpediteur']) && isset($_POST['emailExpediteur']) && isset($_POST['objetMessage']) && isset($_POST['texteMessage']))
{
    
    $boundary = "-----=".md5(rand());
    $objet = $_POST['objetMessage'];
    $headers = 'From: Portfolio <'.$expediteur.'>'.$ligneSuivante;
    $headers .= 'Cc: yann.garcia@laposte.net'.$ligneSuivante;
    $headers .= 'Reply-To: '.$_POST['emailExpediteur'].$ligneSuivante;
    $headers .= 'MIME-Version: 1.0'.$ligneSuivante;
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'.$ligneSuivante;
    $headers .= 'Delivered-to: '.$destinataire.$ligneSuivante;
    $headers .= 'Content-Transfer-Encoding: 8bit'.$ligneSuivante.'boundary=\"$boundary\"'.$ligneSuivante;
    
    $message = $ligneSuivante.'--'.$boundary.$ligneSuivante;
    $message .= '<html>';
    $message .= '   <head></head>';
    $message .= '   <body>';
    $message .= '       <div>Message de : '.$_POST['nomExpediteur'].'</div>';
    $message .= '       <div>Adresse de messagerie : '.$_POST['emailExpediteur'].'</div>';
    $message .= '       <div style="width: 100%; font-weight: bold"><br>'.$_POST['texteMessage'].'</div>';
    $message .= '   </body>';
    $message .= '</html>';
    $message .= $ligneSuivante.'--'.$boundary.$ligneSuivante;
            
    for($i=0; $i<50; $i++){
        if($tempsTraitement->s < 1){
            $debutTraitement = new DateTime();
            $envoi = mail($destinataire, $objet, $message, $headers);
            $finTraitement = new DateTime();
            $tempsTraitement = $debutTraitement->diff($finTraitement);
        }else{
            $executionProbable = true;
        }
    }
    if($envoi && $executionProbable){
        $reponse = "Votre message a bien été envoyé !";
    }else{
        $reponse = "Attention ! Suite à un problème de connexion avec le serveur de messagerie, votre message n'à pas pu être envoyé !";
    }
}
?>