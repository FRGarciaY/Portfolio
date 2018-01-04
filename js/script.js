//
// Déclaration des variables
//
var tempsSlide = 800;
var tempsAttenteSlide = 800;
var DelaiChangementImages =1500;
// Images compétences techniques developpement
var nbImageDev = 8;
var indexImageDevPrecedent = 8;
var indexImageDev = 1;
// Images compétences techniques base de données
var nbImageBdd = 2;
var indexImageBddPrecedent = 2;
var indexImageBdd = 1;
// Images compétences techniques IDE Environnement
var nbImageIde = 3;
var indexImageIdePrecedent = 3;
var indexImageIde = 1;
// Images compétences techniques Conception
var nbImageConception = 2;
var indexImageConceptionPrecedent = 2;
var indexImageConception = 1;
// Images compétences techniques Divers
var nbImageDivers = 2;
var indexImageDiversPrecedent = 2;
var indexImageDivers = 1;


// Affichage du loader
$(document).ready(function(){
    $("#load").removeClass("loaderOff");
    $("#load").addClass("loader");
});

// Modification des balises section
// Determiner la hauteur de la page à chaque redimenssionnement de la fenetre et en deduire la hauteur de la balise section
var height = $(window).height();
var hauteurSection = height-150;
$(document).ready(function(){
    $("section").css({"height":hauteurSection});    
    $(window).resize(function(){
        height = $(window).height();
        hauteurSection = height-150;
        $("section").css({"height":hauteurSection});    
    });
});

// Cacher toutes les sections sauf id #accueil
// Supprimer la bordure, attribuer une hauteur et un overflow aux balises section
$(document).ready(function(){
    $("#presentation, #cv, #stage, #realisation, #veille, #contact" ).hide(); 
    $("section").css({"width":"100%", "border":"none", "padding-top":"0px", "overflow-x":"hidden", "overflow-y": "auto"});
    $("#presentation").css("padding-top" , "70px");
});

// Modification de la section #cv
$(document).ready(function(){
    $("#competences_Developpement, #competences_Bdd, #competences_Ide, #competences_Conception, #competences_Divers").removeClass("col-xs-12 col-lg-8");
    $("#competences_Developpement, #competences_Bdd, #competences_Ide, #competences_Conception, #competences_Divers").addClass("text-center competences");
    $("#titreCompetences_Developpement, #titreCompetences_Bdd, #titreCompetences_Ide, #titreCompetences_Conception, #titreCompetences_Divers").removeClass("col-xs-12 col-lg-3 policeSpecial");
    $("#titreCompetences_Developpement, #titreCompetences_Bdd, #titreCompetences_Ide, #titreCompetences_Conception, #titreCompetences_Divers").addClass("policeSpecial2");
    $("#divCompetences_Developpement, #divCompetences_Bdd, #divCompetences_Ide, #divCompetences_Conception, #divCompetences_Divers").addClass("col-xs-12 col-sm-6 col-md-2 text-center");
    $("#divCompetences_Developpement").addClass("col-md-offset-1");
    $("#CD1, #CB1, #CE1, #CC1, #CX1").addClass("competenceCvOn");
    $("#CD2, #CD3, #CD4, #CD5, #CD6, #CD7, #CD8, #CB2, #CE2, #CE3, #CC2, #CX2").addClass("competenceCvOff");
    $("#divCompetences_Bdd, #divCompetences_Ide, #divCompetences_Conception, #divCompetences_Divers").prependTo($("#row1"));
    $("#divCompetences_Developpement").prependTo($("#row1"));
    $("#row2, #row3, #row4, #row5").remove();
});

// Lancement de la fonction pour changer les images de compétences du cv
$(document).ready(function(){
    ChangementImages();
});

// Affichage de la page au clic sur le lien
$(document).ready(function(){
    $("#page1, #Mpage1").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#presentation").slideDown(tempsSlide)  
        },tempsAttenteSlide);
    });
    $("#page2, #Mpage2").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#cv").slideDown(tempsSlide)
        },tempsAttenteSlide);
    });
    $("#page3, #Mpage3").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#stage").slideDown(tempsSlide)
        },tempsAttenteSlide);
    });
    $("#page4, #Mpage4").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#realisation").slideDown(tempsSlide)
        },tempsAttenteSlide);
    });
    $("#page5, #Mpage5").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#veille").slideDown(tempsSlide) 
        },tempsAttenteSlide);
    });
    $("#page6, #Mpage6").click(function(){
        $("section").slideUp(tempsSlide);
        setTimeout(function(){
            $("#contact").slideDown(tempsSlide)
        },tempsAttenteSlide);
        setTimeout("initialisation()", tempsSlide);
    });
});

// PROBLEME POUR FERMER LE MENU AU CLIC SUR UN LIEN

// Fermer le menu lors du choix d'un clic
$(document).ready(function(){
    $("#Mpage1, #Mpage2, #Mpage3, #Mpage4, #Mpage5, #Mpage6").click(function() {
        //$("#liMenu").unbind('hover');
    });
});

// Fin du loader
$(window).on('load',function(e){
    $("#load").fadeOut(1500)
});

//
// Fonctions
//
// Google maps
function initialisation() {
    var maPosition = {lat:45.726735, lng:4.811022};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: maPosition,
        scrollwheel: false,
        zoom: 13
    });
    map.setCenter({lat:45.726735, lng:4.811022});
    var marker = new google.maps.Marker({
        map: map,
        position: maPosition,
        center: maPosition,
        title: 'Mon adresse'
    });
}
// Changement des images des compétences sur le cv
function ChangementImages(){
    // Variables
    var idEnCoursDev = "CD"+indexImageDev;
    var idPrecedentDev = "CD"+indexImageDevPrecedent;
    var idEnCoursBdd = "CB"+indexImageBdd;
    var idPrecedentBdd = "CB"+indexImageBddPrecedent;
    var idEnCoursIde = "CE"+indexImageIde;
    var idPrecedentIde = "CE"+indexImageIdePrecedent;
    var idEnCoursConception = "CC"+indexImageConception;
    var idPrecedentConception = "CC"+indexImageConceptionPrecedent;
    var idEnCoursDivers = "CX"+indexImageDivers;
    var idPrecedentDivers = "CX"+indexImageDiversPrecedent;
    // Changement class
    $("#"+idEnCoursDev).addClass("competenceCvOn");
    $("#"+idEnCoursDev).removeClass("competenceCvOff");
    $("#"+idPrecedentDev).addClass("competenceCvOff");
    $("#"+idPrecedentDev).removeClass("competenceCvOn");
    $("#"+idEnCoursBdd).addClass("competenceCvOn");
    $("#"+idEnCoursBdd).removeClass("competenceCvOff");
    $("#"+idPrecedentBdd).addClass("competenceCvOff");
    $("#"+idPrecedentBdd).removeClass("competenceCvOn");
    $("#"+idEnCoursIde).addClass("competenceCvOn");
    $("#"+idEnCoursIde).removeClass("competenceCvOff");
    $("#"+idPrecedentIde).addClass("competenceCvOff");
    $("#"+idPrecedentIde).removeClass("competenceCvOn");
    $("#"+idEnCoursConception).addClass("competenceCvOn");
    $("#"+idEnCoursConception).removeClass("competenceCvOff");
    $("#"+idPrecedentConception).addClass("competenceCvOff");
    $("#"+idPrecedentConception).removeClass("competenceCvOn");
    $("#"+idEnCoursDivers).addClass("competenceCvOn");
    $("#"+idEnCoursDivers).removeClass("competenceCvOff");
    $("#"+idPrecedentDivers).addClass("competenceCvOff");
    $("#"+idPrecedentDivers).removeClass("competenceCvOn");
    // Incrémentation
    // Dev
    indexImageDev++;
    if (indexImageDev == nbImageDev +1){
        indexImageDev = 1;
    }
    indexImageDevPrecedent++;
    if (indexImageDevPrecedent == nbImageDev +1){
        indexImageDevPrecedent = 1;
    }
    // Bdd
    indexImageBdd++;
    if (indexImageBdd == nbImageBdd +1){
        indexImageBdd = 1;
    }
    indexImageBddPrecedent++;
    if (indexImageBddPrecedent == nbImageBdd +1){
        indexImageBddPrecedent = 1;
    }
    // Ide
    indexImageIde++;
    if (indexImageIde == nbImageIde +1){
        indexImageIde = 1;
    }
    indexImageIdePrecedent++;
    if (indexImageIdePrecedent == nbImageIde +1){
        indexImageIdePrecedent = 1;
    }
    // Conception
    indexImageConception++;
    if (indexImageConception == nbImageConception +1){
        indexImageConception = 1;
    }
    indexImageConceptionPrecedent++;
    if (indexImageConceptionPrecedent == nbImageConception +1){
        indexImageConceptionPrecedent = 1;
    }
    // Divers
    indexImageDivers++;
    if (indexImageDivers == nbImageDivers +1){
        indexImageDivers = 1;
    }
    indexImageDiversPrecedent++;
    if (indexImageDiversPrecedent == nbImageDivers +1){
        indexImageDiversPrecedent = 1;
    }
    setTimeout("ChangementImages()", DelaiChangementImages);
}
// Infobulles
$(document).ready(function(){
    $(".DifferenceBitcoinEthereum").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'top'
        });
    });
    $(".GoogleAlert").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'bottom'
        });
    });
    $(".Flipboard").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'bottom'
        });
    });
    $(".SourceEthereumFrance").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'top'
        });
    });
    $(".SourceSolidity").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'top'
        });
    });
    $(".SourceSymfony").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'top'
        });
    });
    $("a").hover(function(){
        $(this).tooltip({
            animation: true,
            html: true,
            placement: 'top'
        });
    });
});
// Bouton Veille technologique
$(document).ready(function(){
    // quand le document est chargé on cache les trois <DIV> de description de la veille
    $("#btVeille1").next().hide();
    $("#btVeille2").next().hide();
    $("#btVeille3").next().hide();
    // Au clic
    $("#btVeille1").on('click',function() {
        $("#btVeille1").next().toggle(1000);
        $("#btVeille2").next().hide(1000);
        $("#btVeille3").next().hide(1000);
    });
    $("#btVeille2").on('click',function() {
        $("#btVeille2").next().toggle(1000);
        $("#btVeille1").next().hide(1000);
        $("#btVeille3").next().hide(1000);
    });
    $("#btVeille3").on('click',function() {
        $("#btVeille3").next().toggle(1000);
        $("#btVeille1").next().hide(1000);
        $("#btVeille2").next().hide(1000);
    });
});
