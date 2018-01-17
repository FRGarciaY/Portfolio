<section id="realisation" class="policeSpecial2"><!-- #realisation -->
    <h2 class="text-center policeSpecial souligne">Réalisations personnelles</h2>
    <br>
    <a href="telechargement/tableau_synthese.pdf" target="_blank"><span><img id="pdf" src="images/pdf_icon.png" alt=""/></span>Télécharger le tableau de synthèse</a>
    <div class="row" id="sitePortfolio"><!-- #sitePortfolio -->
        <h2 class="text-center policeSpecial">Portfolio</h2>
        <div class="col-xs-12 col-sm-6 policeSpecial2 padding15">
            <br>
            <p>C'est le site que vous visitez en ce moment. Il a été réalisé en HTLM5, CSS3 (Bootstrap) et jQuery.</p>
            <p>Le site se charge, puis des instructions en jquery permettent de changer la mise en page si javascript est activé sur le navigateur.</p>
            <p>Il est fonctionnel que javascript soit activé ou non. Seul change le confort de navigation.</p>
            <br>
            <br>
            <a href="https://github.com/FRGarciaY/Portfolio" target="_blank"><span><img id="jpg" src="images/github.gif" alt=""/></span>Code source</a>
            <p>Vous pouvez acceder au code source directement. (Ctrl U)</p>
        </div>
        <div class="col-xs-12 col-sm-6 padding15">
            <div class="padding15 text-center">
                <img class="padding15" id="imgSite" src="images/site.png" alt=""/>
            </div>
        </div>
    </div><!-- Fin #sitePortfolio -->
    
    <div class="row" id="plentycoups"><!-- #plentycoups -->
        <h2 class="text-center policeSpecial">Plentycoups</h2>
        <br>
        <div class="col-xs-12 policeSpecial2 padding15">
            <p>Réalisé pendant mon stage en entreprise, PlentyCoups est un CRM (Customer Relationship Management) développé en PHP 7.1.9 sous Symfony 3.3.9.</p>
        </div>
        <div class="col-xs-12 col-sm-6 policeSpecial2 padding15">
            <h2 class="text-center policeSpecial">La base de données</h2>
            <br>
            <p>Après avoir étudié le cahier des charges, j'en ai déduit les besoins de l'application. J'ai donc modélisé la base de données, puis sous Symfony 3, créée les entités (objets). J'ai ensuite réalisé le mapping, c'est à dire les relations entre les objets, puis grace à <a href="https://fr.wikipedia.org/wiki/Doctrine_(ORM)" title="Definition de Doctrine selon Wikipedia">Doctrine</a>, ORM par defaut de Symfony, j'ai généré la base de données MySQL correspondante.</p>
            <br>    
            <a href="telechargement/mcd.jpg" target="_blank"><span><img id="jpg" src="images/jpg.png" alt=""/></span>Télécharger le MCD</a>
            <br>
            <a href="telechargement/mld.jpg" target="_blank"><span><img id="jpg" src="images/jpg.png" alt=""/></span>Télécharger le MLD</a>
            <br>
            <br>
        </div>
        <div class="col-xs-12 col-sm-6 padding15">
            <div class="padding15 text-center">
                <img class="padding15" id="imgSite" src="images/login.png" alt=""/>
            </div>
        </div>
        <div class="row"></div>
        <div class="col-xs-12 col-sm-6 policeSpecial2 padding15">
            <h2 class="text-center policeSpecial">L'application</h2>
            <br>
            <p>Une fois la base de données prête, il reste à développer l'application qui permettra de l'interroger ou la mettre à jour. Pour cela Symfony permet de créer des formulaires à l'intérieur du controleur, Doctrine fait le lien avec la base de données, puis ensuite à l'intérieur des vues, <a href="https://fr.wikipedia.org/wiki/Twig" title="Definition de Twig selon Wikipedia">Twig</a> simplifie le code en évitant d'insérer des variabes php.</p>
            <p>Afin de simplifier la gestion des versions de notre code, nous avons utilisé Tortoise SVN.</p>
            <br>
            <a href="telechargement/Documentation.pdf" target="_blank"><span><img id="pdf" src="images/pdf_icon.png" alt=""/></span>Télécharger la documentation</a>
            <br>
        </div>
        <div class="col-xs-12 col-sm-6 padding15">
            <div class="padding15 text-center">
                <img class="padding15" id="imgSite" src="images/plentycoups.png" alt=""/>
            </div>
        </div>
    </div><!-- Fin #plentycoups -->
    
    <div class="row" id="plentycoups"><!-- #GSB -->
        <h2 class="text-center policeSpecial">GSB</h2>
        <br>
        <div class="col-xs-12 policeSpecial2 padding15">
            <p>GSB Galaxy Swiss Bourdin est le contexte choisi pour l'épreuve E4 du BTS. Le travail demandé étant de réaliser une application web et une application desktop permettant l'identification, ainsi que l'une des onzes missions prédefinies. J'ai choisi de travailler sur la mission 3.1 Visiteur, dont les fonctionnalités sont les suivantes : </p>
            <ul>
                <li>
                    Recherche d'un rapport de visite d'après le nom d'un praticien ou date d'un rapport de visite
                </li>
                <li>
                    L'ajout, la modification et la suppression d'un médicament offert dans un rapport de visite
                </li>
            </ul>
            <p>Les Tables MEDICAMENT, FAMILLE, OFFRIR, RAPPORT-VISITE, PRATICIEN sont concernées</p>
        </div>
        <div class="col-xs-12 col-sm-6 policeSpecial2 padding15">
            <h2 class="text-center policeSpecial">L'application Web</h2>
            <br>
            <p>J'ai choisi de développer cette application Web en PHP avec le framwork Symfony, ainsi qu'une base de données MySql<br>
            <br>
            <a href="https://github.com/FRGarciaY/GSB_WEB" target="_blank"><span><img id="jpg" src="images/github.gif" alt=""/></span>Code source</a>
            
        </div>
        <div class="col-xs-12 col-sm-6 padding15">
            <div class="padding15 policeSpecial2">
                <ul><p>Visualiser les différents écrans</p>
                    <li><a href="images/GSB_Web_login.png" target="_blank">Identification</a></li>
                    <li><a href="images/GSB_Web_Rechercher.png" target="_blank">Rechercher un rapport de visite par le nom du praticien et/ou par date</a></li>
                    <li><a href="images/GSB_Web_Resultats.png" target="_blank">Affichage des résultats de la recherche</a></li>
                    <li><a href="images/GSB_Web_Rapport.png" target="_blank">Affichage du rapport de visite séléctionné</a></li>
                    <li><a href="images/GSB_Web_Modification.png" target="_blank">Modification de la quantité d'échantillons offerts</a></li>
                </ul>
            </div>
        </div>
        <div class="row"></div>
        <div class="col-xs-12 col-sm-6 policeSpecial2 padding15">
            <h2 class="text-center policeSpecial">L'application Desktop</h2>
            <br>
            <p>J'ai choisi de développer ma version Desktop de GSB dans le langage C# en Windows Forms avec le framwork .net et linq</p>
            <br>
            <a href="https://github.com/FRGarciaY/GSB_DESKTOP" target="_blank"><span><img id="jpg" src="images/github.gif" alt=""/></span>Code source</a>
            <br>
        </div>
        <div class="col-xs-12 col-sm-6 padding15">
            <div class="padding15 policeSpecial2">
                <ul><p>Visualiser les différents écrans</p>
                    <li><a href="images/GSB_Desktop_main.png" target="_blank">Application avant identification</a></li>
                    <li><a href="images/GSB_Desktop_login.png" target="_blank">Identification</a></li>
                    <li><a href="images/GSB_Desktop_main_logOk.png" target="_blank">Application après identification</a></li>
                    <li><a href="images/GSB_Desktop_Recherche.png" target="_blank">Rechercher un rapport de visite par le nom du praticien et/ou par date</a></li>
                    <li><a href="images/GSB_Desktop_Resultat.png" target="_blank">Affichage des résultats de la recherche</a></li>
                    <li><a href="images/GSB_Desktop_Rapport.png" target="_blank">Affichage du rapport de visite séléctionné</a></li>
                    <li><a href="images/GSB_Desktop_Ajouter.png" target="_blank">Ajout d'un échantillons offerts</a></li>
                    <li><a href="images/GSB_Desktop_Modifier.png" target="_blank">Modification de la quantité d'échantillons offerts</a></li>
                </ul>
            </div>
        </div>
    </div><!-- Fin #GSB -->
    
</section><!-- Fin #realisation -->
