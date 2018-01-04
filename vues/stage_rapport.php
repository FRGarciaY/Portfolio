<section id="stage" class="policeSpecial2"><!-- #stage -->
    <h2 class="policeSpecial text-center">Journal de bord</h2>
    <h4 class="policeSpecial">Semaine 1</h4>
    <p>La mission à effectuer durant le stage est la reprise d'une application web développée par d'anciens stagiaires pour correction de bugs et améliorations.</p>
    <p>Cette application web est un CRM (Customer Relationship Management), c'est à dire un logiciel informatique qui permet de gérer la relation de l'entreprise avec ses clients</p>
    <p>Elle est developpée en Java EE et contient une base de données MySql. La persistence est gérée par un framework open source : Hibernate.</p>
    <p>Cette première semaine à été consacrée à la formation sur Java EE, sa structure Modèle-vue-contrôleur et ses spécificités de programmations (la couche Modèle est constituée d'objets Java (Beans) ; la couche Vue est constituée de pages JSP ;la couche Contrôle est constituée de servlets.), ainsi que le framwork Hibernate.</p>
    <br>
    <p><u>Les difficultées rencontrées :</u></p>
    <p>- complexité de compréhension de la structure de Java EE et des nombreuses syntaxes de codes utilisés (Expression Language (EL) dans les pages JSP, mapping, langages HQL)</p>
    <p>- difficultés pour ouvrir le projet sur l'IDE eclipse (serveur tomcat, projet, configuration...)</p>
    <br>
    <p><u>Les solutions :</u></p>
    <p>- Prise de contact par mail avec le dernier stagiaire sur le projet, qui a repondu à certaines questions techniques et qui a envoyé une documentation ainsi qu'une version plus aboutie de l'application</p>
    
    <h4 class="policeSpecial">Semaine 2</h4>
    <p>Après avoir étudié le projet des précédents stagiaires, nous avons constaté que :</p>
    <p>- le projet n'était pas très avancé, et que le peu qui avait été fait n'était pas fonctionnel,</p>
    <p>- le langage utilisé n'était pas le plus approprié,</p>
    <p>- les frameworks utilisés compliquaient la compréhension.</p>
    <p>Il a donc été décidé, après consultation d'un développeur de l'entreprise, de repartir à zéro et compte tenu de la taille du projet, de développer le CRM en PHP.</p>
    <p>Un nouveau cahier des charges a donc été établi, et une nouvelle base de données à été créée.</p>
    
    <h4 class="policeSpecial">Semaine 3</h4>
    <p>Après avoir recommencé le projet en PHP, il nous a été demandé en milieu de semaine d'utiliser le framework Symfony.</p>
    <p>Nous avons donc étudié les bases du framework Symfony et donc recommencé en l'utilisant.</p>
    <p>Symfony utilise Doctrine, un ORM (Object Relational Mapping) qui permet d'utiliser des objets représentant la base de données, les relations étant définies par le mapping.</p>
    <p>Cette particularité permet, une fois les objets bien mappés, de ne plus gérer les requètes SQL, Doctrine s'en charge.</p>
    <p>Il a été difficile de bien comprendre le mode de fonctionnement de Symfony et de Doctrine. Nous avons supprimé la base de donnée et Doctrine en a généré une nouvelle en fonction des objets et du mapping.</p>

    <h4 class="policeSpecial">Semaine 4</h4>
    <p>Le projet de CRM sous Symfony avance bien, les modules Client et Contact sont fonctionnels, la partie affichage de ses modules comporte un champ de recherche du client et du contact auto-implementé en ajax.</p>
    <p>La gestion administrateur (comprenant les utilisateurs, les différents paramètres tel que les civilité, les types d'actions...) est également fonctionnelle.</p>
    <p>La difficulté principale a été de comprendre et d'utiliser le formBuilder de Symfony.</p>
    
    <h4 class="policeSpecial">Semaines 5 à 7</h4>
    <p>Le cahier des charges ayant été modifié, le projet a été modifié pour répondre aux nouvelles exigences.</p>
    <p>Nous avons livré une version du CRM, suite à laquelle de nouvelles demandes ont été formulées, le projet sera de nouveau adapté.</p>
    <p>En parallèle, nous élaboront un manuel d'installation et d'utilisation.</p>
</section><!-- Fin #stage -->
