<?php   
/*    if (!isset($_SESSION['visite_en_cours'])){
        //Déclaration des variables
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date("d-m-Y");
        $heure = date("H:i:s");
        $PARAM_hote = 'sql.free.fr';
        $PARAM_bd = 'stat';
        $PARAM_user = 'portfolio.yanngarcia';
        $PARAM_password = 'nousdeux69';
        $bd;
        $sql = "INSERT INTO stat (ip, date, heure) VALUES ('".$ip."','".$date."','".$heure."')";
        $_SESSION['visite_en_cours'] = true;
        
        // 
        $link = mysql_connect($PARAM_hote,$PARAM_user,$PARAM_password)or die("Impossible de se connecter à la base de données : " . mysql_error());
        mysql_select_db($PARAM_bd, $link);
        mysql_query($sql);
    }*/
?>