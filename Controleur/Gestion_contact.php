<?php
ini_set('smtp', 'smtp.free.fr');
// Déclaration des variables
$destinataire = 'yann.garcia.mail@gmail.com';
$adressePortfolio = 'portfolio.yanngarcia@free.fr';
$reponse = "";
$ligneSuivante = "\r\n";
$envoi = false;
$debutTraitement = new DateTime();
$finTraitement = new DateTime();
$tempsTraitement = new DateInterval('PT0S');
$tempsTraitement = $debutTraitement->diff($finTraitement);
$executionProbable = false;
if(isset($_POST['nomExpediteur']) && isset($_POST['emailExpediteur']) && isset($_POST['objetMessage']) && isset($_POST['texteMessage']))
{
    // Recupération des $_POST
    $objet = $_POST['objetMessage'];
    $nomExpediteur = $_POST['nomExpediteur'];
    $mailExpediteur = $_POST['emailExpediteur'];
    $txtMessage = $_POST['texteMessage'];
    $boundary = "-----=".md5(rand());
    
    // Contenu du message
    // Html
    $messageHtml = '<html>';
    $messageHtml .= '   <head></head>';
    $messageHtml .= '   <body>';
    $messageHtml .= '       <div>Message de : '.$nomExpediteur.'</div>';
    $messageHtml .= '       <div>Adresse de messagerie : '.$mailExpediteur.'</div>';
    $messageHtml .= '       <div style="width: 100%; font-weight: bold"><br>'.$txtMessage.'</div>';
    $messageHtml .= '   </body>';
    $messageHtml .= '</html>';

    // Déclaration du header
    $header = 'From: Portfolio <'.$adressePortfolio.'>'.$ligneSuivante;
    $header .= 'Reply-To: '.$mailExpediteur.$ligneSuivante;
    $header .= 'MIME-Version: 1.0'.$ligneSuivante;
    $header .= 'Content-type: multipart/mixed;boundary='.$boundary.$ligneSuivante;
    
    // Declaration du message
    $message .= $ligneSuivante."--".$boundary.$ligneSuivante;
    $message .=  "Content-Type: text/html; charset=\"ISO-8859-1\"".$ligneSuivante;
    $message .= "Content-Transfer-Encoding: 8bit".$ligneSuivante;
    $message .= $ligneSuivante.$messageHtml.$ligneSuivante;
    $message .= $ligneSuivante."--".$boundary."--".$ligneSuivante;
    
    // Boucle de test de temps de traitement de la fonction mail()
    for($i=0; $i<50; $i++){
        if($tempsTraitement->s < 1){
            $debutTraitement = new DateTime();
            $envoi = mail($destinataire, $objet, $message, $header);
            $finTraitement = new DateTime();
            $tempsTraitement = $debutTraitement->diff($finTraitement);
        }else{
            $executionProbable = true;
        }
    }
    if($envoi && $executionProbable){
        $reponse = "Votre message a bien été envoyé !";
    }else{
        $reponse = "Attention ! En raison d'un problème de connexion avec le serveur de messagerie, votre message n'à pas pu être envoyé,\n L'adresse de messagerie utilisé est probablement erronée !";
    }
    
    // Enregistrement du message dans la BDD
    $PARAM_hote = 'sql.free.fr';
    $PARAM_bd = 'message';
    $PARAM_user = 'portfolio.yanngarcia';
    $PARAM_password = 'nousdeux69';
    $bd;
    $dateMessage = date("Y-m-j H:i:s");
    if($reponse){
        $sql = "INSERT INTO message (dateMessage, nomExpediteur, emailExpediteur, objetMessage, texteMessage, envoye) VALUES ('".$dateMessage."','".$nomExpediteur."','".$mailExpediteur."','".$objet."','".$txtMessage."','1')";
    }else{
        $sql = "INSERT INTO message (dateMessage, nomExpediteur, emailExpediteur, objetMessage, texteMessage, envoye) VALUES ('".$dateMessage."','".$nomExpediteur."','".$mailExpediteur."','".$objet."','".$txtMessage."','0')";
    }
    // 
    $link = mysql_connect($PARAM_hote,$PARAM_user,$PARAM_password)or die("Impossible de se connecter à la base de données : " . mysql_error());
    mysql_select_db($PARAM_bd, $link);
    mysql_query($sql);
}
?>
