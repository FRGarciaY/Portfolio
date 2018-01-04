<section id="contact"><!-- #contact -->
    <h2 class="text-center policeSpecial">Me contacter</h2>
    <div id="contactContent">
        <div id="map"><!-- #map -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQic6ufCXCKTBI08BsESe6eAP4dmVKoi4&callback=initialisation"></script>
            <noscript>
                <img id="noscriptContact" src="images/Contact.jpg" alt=""/>
            </noscript>
        </div><!-- Fin #map-->
        
        <div id="formContact" class="row"><!-- #formContact -->
            <form method="post" action="vues/mail.php" >
                <h3 class="text-center policeSpecial">Envoyer un message</h3>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-info"></i></span>
                    <input type="text" class="form-control col-sm-12" name="nomExpediteur" placeholder="Votre nom" required="required">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope text-info"></i></span>
                    <input class="form-control col-sm-12" id="contact_mail" type="email" name="emailExpediteur" placeholder="votre adresse mail" required="required">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign text-info"></i></span>
                    <input class="form-control col-sm-12" id="contact_objet" type="text" name="objetMessage" placeholder="objet" required="required">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-file text-info"></i></span>
                    <textarea class="form-control noresize col-sm-12" id="contact_message" name="texteMessage" placeholder="votre message" required="required"></textarea>
                </div>
                <br>
                <input class="btn" type="submit" value="Envoyer">             
            </form>
        </div><!-- Fin #formContact-->
        <div id="carte">
            <img id="carteVisite" class="img-responsive" src="./images/carteVisite.png" alt="Carte de visite"/>
        </div>
    </div>
</section><!-- Fin #contact -->
