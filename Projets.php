<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <title>Danois Timéo - Projets</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/Projets.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<?php include 'MenuBurger.php'; ?>

<div class="Corps_de_page">
    <div class="Haut_de_page">
        <h1>Mes Projets</h1>
        <p>Durant mes études, mes stages et dans ma vie personnelle, j'ai réalisé 
            plusieurs projets. Voici une liste de quelques réalisations.</p>

        <div class="Liste_btn_projets">
            <a href="#Projet1">Projet 1</a>
            <a href="#Projet2">Projet 2</a>
            <a href="#Projet3">Projet 3</a>
            <a href="#Projet4">Projet 4</a>
        </div>
    </div>

    <div id="Projet" class="Projet1 Projet">
        <div class="carte_1">
            <div class="background_Carte_1">
                <h1>La tête dans la toile</h1>
                <p>Stage de deuxième année</p>
            </div>
        </div> 
        <div class="partie2">
            <div class="gauche">
                <div></div>
                <div></div>
            </div>
            <div class="droite">
                    <h1>La tête dans la toile : <span style="opacity: 0.6;"> Création d'un site de covoiturage</sapn></h1>
                <h2>
                    J'ai effectué mon stage de deuxième année (5 semaines) dans l'entreprise de 
                    developpement "<a href="https://www.latetedanslatoile.fr/">La tête dans la toile</a>". 
                    Accompagné d'un second stagiaire et sous le regard d'Alan Ferronnière notre maitre 
                    de stage, nous avons travaillé sur le site <a href="https://www.leslaboratoiresvivants.com/">des 
                    laboratoires vivants</a>, un théâtre Nantais.
                </h2>
                <p>
                    Le site permet de présenter les spectacles et les 
                    évènements du théatre, ainsi que de réserver des places. Nous avions 
                    comme mission de créer un système de covoiturage, 
                    pour que les spectateurs puissent se rendre aux spectacles en groupe.
                </p>
            </div>
        </div>
        <div class="partie3">
            <div class="fondPartie3"></div>
            <div class="TextPartie3">
                <h1>WordPress:</h1>
                <h1>Création des covoiturages</h1>
                <p>Le site utilise WordPress. Nous avons donc utilisé ACF et CPT UI pour 
                    créer des trajets de covoiturage. Avec les nombreuses possibilités qu'offre wordpress, le php, le css et le javascript,
                    nous avons pu créer un système de covoiturage simple et efficace, qui correspond à la demande du théâtre.
                </p>
            </div>
            <div class="CartePartie3">
                <img src="Images/Projets/Projet1/Carte1.png" alt="Screen des trajets de covoiturages">
                <div class="BasCartePartie3">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Liste des trajets</h3>
                </div>
            </div>
        </div>
        <div class="partie4">
            <div class="fondPartie4"></div>
            <div class="TextPartie4">
                <h1>WordPress:</h1>
                <h1>Création des comptes utilisateurs</h1>
                <p>Nous avons utilisé les plugins Ultimate Member et Loco Translate pour 
                    créer des comptes utilisateurs. Une fois connectés les spectateurs peuvent retrouver les trajets 
                    disponibles, ainsi que les covoiturages auxquels ils vont ou ils ont participé.
                </p>
            </div>
            <div class="ImagesPartie4">
                <img src="Images/Projets/Projet1/Connexion.png" alt="Screen du formulaire de connexion">
                <img src="Images/Projets/Projet1/Profil.png" alt="Screen de la page de profil">
                <img src="Images/Projets/Projet1/CreationCompte.png" alt="Screen du formulaire de creation de compte">
            </div>
            <div class="backgroundImagesPartie4">
                <div class="CarteBackgroundImagesPartie4"></div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
                <div class="CarteBackgroundImagesPartie4"></div>
            </div>
        </div>
        <div class="partie5">
            <h1>Création du système de message</h1>
            <p>Les utilisateurs peuvent discuter entre eux pour participer aux covoiturages. A l'instar du boncoin, ils parlent sur le site 
                et reçoivent des emails pour les prévenir des messages.
            </p>
            <div class="CartePartie5">
                <img src="Images/Projets/Projet1/Message.png" alt="Screen de la messagerie">
            </div>
        </div>
        <div class="partie6">
            <h1>Les bénéfices</h1>
            <p>J’ai beaucoup appris pendant ce stage avec Alan ferronnière et je le remercie pour cela. 
                J’ai principalement découvert Wordpress et Azure Devops. Mais j'ai également grandement perfectionné mes compétences en php, 
                css et javascript. J'ai aussi appris à travailler en équipe et à m'organiser pour rendre un projet dans les temps. 
                Pour en savoir plus je vous laisse consulter mon rapport de stage.
            </p>
            <button class="button" id="downloadButton">
                <img src="Images/Pictogrammes/Telecharger2.svg" alt="Pictogramme de téléchargement">
                <img src="Images/Pictogrammes/Telecharger.svg" alt="Pictogramme de téléchargement">
            </button>
            <div class="fondPartie6"></div>
        </div>
        <div class="pre-footer"></div>
    </div>
    <div id="Projet" class="Projet2 Projet" style="display: none;">
        <div class="carte_1">
            <div class="background_Carte_1">
                <h1>Dragonium</h1>
                <p>Stage de première année</p>
            </div>
        </div>
        <div class="partie2">
            <div class="gauche">
                <img src="Images/Projets/Projet2/Logo_Dragonium.png" alt="Logo de Dragonium">
            </div>
            <div class="droite">
                    <h1>Dragonium</h1>
                <h2>
                    <a href="https://www.dragonium.net">Dragonium</a> est un jeu de rôle et de stratégie médiéval 
                    fantastique, gratuit qui se joue sur navigateur, géré par l'association Zyzomis, et accesible à tous y compris aux non-voyants.
                </h2>
                <p>
                    Durant un stage de 7 semaines j'ai eu l'occasion de travailler sur le site. Mes missions étaient de 
                    corriger des bugs et d'ajouter des petites ou grosses fonctionnalités.
                </p>
            </div>
        </div>
        <div class="partie3">
            <div class="TextPartie3">
                <h1>Création d'un système de médailles</h1>
                <p>Les médailles sont des récompenses que les joueurs peuvent gagner en réalisant des actions spécifiques. 
                    J'ai créé un système de médailles qui permet de les afficher sur le profil des joueurs. Créer ce système
                    nous a fait modifier la base de données, créer des crons, modifier la page de profil et les paramètres des comptes.
                </p>
            </div>
            <div class="fondPartie3"></div>
            <div class="CartePartie3">
                <img src="Images/Projets/Projet2/Carte_de_Dragonium.png" alt="Image de la map de Dragonium">
                <div class="BasCartePartie3">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Carte de Dragonium</h3>
                </div>
            </div>
            <div class="CartePartie3 CartePartie3_2">
                <img src="Images/Projets/Projet2/Interface_Dragonium.png" alt="Image de l'inteface joueur">
                <div class="BasCartePartie3">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Inteface joueur</h3>
                </div>
            </div>
        </div>
        <div class="partie4">
            <div class="gauche">
                <h1>
                    Création d'un système de multicompte
                </h1>
                <p>
                    Beaucoup de joueurs ont plusieurs comptes. Pour les aider à les gérer, nous avons eu comme mission de créer un système de 
                    multicompte. Les joueurs peuvent lier leurs comptes et passer de l'un à l'autre en un clic. J'ai donc appris à gérer 
                    des mots de passe ainsi que la connexion et déconnexion des comptes.
                </p>
            </div>
            <div class="droite">
            </div>
        </div>
        <div class="partie5">
            <div class="backgroundPartie5">
            </div>
            <h1>Les bénéfices</h1>
            <p>
                Durant mon stage chez Zyzomis j’ai eu la chance de voir mes programmes mis en ligne et utilisés par les joueurs. 
                Les missions étaient parfois plus qu’importantes pour le site, comme la résolution de certains bugs, mais d’autres étaient plutôt esthétiques. 
                J'ai posé ma pierre sur cette édifice et j'ai appris beaucoup de choses. Pour en savoir plus je vous laisse consulter mon rapport de stage.
            </p>
            <button class="button" id="downloadButtonStage2">
                <img src="Images/Pictogrammes/Telecharger2.svg" alt="Pictogramme de téléchargement">
                <img src="Images/Pictogrammes/Telecharger.svg" alt="Pictogramme de téléchargement">
            </button>
        </div>
    </div>
    <div id="Projet" class="Projet3 Projet" style="display: none;">
        <div class="carte_1">
            <div class="background_Carte_1">
                <h1>Projet TardyGrade</h1>
                <p>Création d'un réseau social pour le BTS</p>
            </div>
        </div>
        <div class="partie2">
            <div class="gauche">
                <h1>Le projet "Tardy-Grade"</h1>
                <h2>
                    Le but du projet était de développer en binome, un réseau social de partage de raisons de retard entre les utilisateurs. 
                    Et de le déployer sur les serveurs de l'écoles.
                </h2>
                <p>
                    Nous avons aussi développé une application avec WPF et une Web API, qui a pour but de donner les statistiques 
                    de l'application pour une période donnée (nombre d'utilisateurs, nombre de posts, etc).
                </p>
                <a download="Cahier_des_charges_Tardygrade.pdf" href="Cahier_des_charges_Tardygrade.pdf" target="_blank">Cahier des charges</a>
            </div>
            <div class="droite">
                <img src="Images/Projets/Projet3/TardyGrade.png" alt="Logo du projet TardyGrade">
            </div>
        </div>
        <div class="partie3">
            <div class="fondPartie3"></div>
            <div class="TextPartie3">
                <h1>Création du réseau social</h1>
                <p>Après avoir schématisé notre base de données, nous avons développé le site avec symfony. 
                    Les utilisateurs peuvent s'abonner à des établissements ou à d'autres utilisateurs. Ils 
                    peuvent se créer un compte, le modifier, s'identifier, etc... Ils peuvent faire des posts, 
                    qui peuvent être likés, commentés, et super likés (1 super like par semaine par utilisateur). 
                </p>
            </div>
            <div class="CartePartie3">
                <img src="Images/Projets/Projet1/Carte1.png" alt="Screen des ?????">
                <div class="BasCartePartie3">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Trouver une image</h3>
                </div>
            </div>
        </div>
        <div class="partie4">
            <div class="CartePartie4">
                <img src="Images/Projets/Projet1/Carte1.png" alt="Screen des ?????">
                <div class="BasCartePartie4">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Trouver une image</h3>
                </div>
            </div>
            <div class="CartePartie4">
                <img src="Images/Projets/Projet1/Carte1.png" alt="Screen des ?????">
                <div class="BasCartePartie4">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Trouver une image</h3>
                </div>
            </div>
            <div class="CartePartie4">
                <img src="Images/Projets/Projet1/Carte1.png" alt="Screen des ?????">
                <div class="BasCartePartie4">
                    <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                    <h3>Trouver une image</h3>
                </div>
            </div>
            <div class="fondPartie4"></div>
        </div>
        <div class="partie5">
            <h1>Création d'une application pour donner les statistiques du réseau</h1>
            <p>Nous avons développé une API avec symfony qui permet de donner les statistiques avec plusieurs méthodes (nombre de compte, 
                de posts, etc...) pour une période donnée. 
                Nous avons aussi développé une application WPF qui permet de visualiser les graphiques de toutes ces stats entre deux 
                dates.
            </p>
            <div class="Carousel-Conteneur">
                <div id="btnSliderPrev" class="btnSliderPrev">
                    <img src="Images/pictogrammes/FlecheGauche.svg" alt="Flèche pour aller à gauche">
                </div>
                <div id="btnSliderNext" class="btnSliderNext">
                        <img src="Images/pictogrammes/FlecheDroite.svg" alt="Flèche pour aller à droite">
                </div>
                <div class="CartePartie5CarrouselConteneur">
                    <div class="CartePartie5 CartePartie5_1">
                        <div class="HautCartePartie5">
                            <img src="Images/Projets/Projet3/ApplicationWPF_Acceuil.png" alt="Screen de l'appli de stats">
                        </div>
                        <div class="BasCartePartie5">
                            <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                            <h3>Acceuil de l'application WPF</h3>
                        </div>
                    </div>
                    <div class="CartePartie5 CartePartie5_2" style="display: none;">
                        <div class="HautCartePartie5">
                            <img src="Images/Projets/Projet3/ApplicationWPF_Affichage_Stat.png" alt="Screen de l'application de stats">
                        </div>
                        <div class="BasCartePartie5">
                            <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                            <h3>Fenêtre d'affichage d'une statistiques</h3>
                        </div>
                    </div>
                    <div class="CartePartie5 CartePartie5_3" style="display: none;">
                        <div class="HautCartePartie5">
                            <img src="Images/Projets/Projet3/API_TardyGrade_Symfony.png" alt="Screen de l'API Symfony">
                        </div>
                        <div class="BasCartePartie5">
                            <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                            <h3>API Symfony</h3>
                        </div>
                    </div>
                    <div class="CartePartie5 CartePartie5_4" style="display: none;">
                        <div class="HautCartePartie5">
                            <img src="Images/Projets/Projet3/API_TardyGrade_CSharp.png" alt="Screen de l'API C#">
                        </div>
                        <div class="BasCartePartie5">
                            <img src="Images/Pictogrammes/Eclair.svg" alt="Pictogramme d'un éclair">
                            <h3>API C#</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partie6">
            <div class="gauche">
                <img src="Images/Projets/Projet3/ArchitectureApi.png" alt="Image du schema de fonctionnement">
            </div>
            <div class="droite">
                <h1>
                    Schéma du fonctionnement
                </h1>
                <p>
                    Quand nous créons une nouvelle période, nous passons par plusieurs couches pour arriver à la couche BLL. 
                    Nous vérifions dans l'historique si la période existe, si elle existe nous la renvoyons, sinon nous allons 
                    chercher dans l'API symfony les données, les enregistrons et les renvoyons.
                </p>
            </div>
        </div>
        <div class="partie7">
            <div class="fondPartie7"></div>
            <h1>La finalité</h1>
            <p>
            J'ai déployé une version finale de production sur les serveurs de l'école, avec des vm proxmox mises à notre disposition. 
            J'ai beaucoup appris sur symfony et sur la création d'API. Je me suis aussi perfectionné dans l'organisation et 
            le travail en équipe. Pour en savoir plus je vous laisse consulter le rapport du projet avec la notice. 
            </p>
            <a download="#.pdf" href="#.pdf">Rapport</a>
            <a download="#.pdf" href="#.pdf" class="a2">Contrôle de conformité</a>
        </div>
        <script src="Carousel_TardyGrade.js"></script>
    </div>
    <div id="Projet" class="Projet4 Projet" style="display: none;">
        <div class="carte_1">
            <div class="background_Carte_1">
                <h1>Création Jeu Mobile</h1>
                <p>Un projet qui ravit les petits cousins</p>
            </div>
        </div> 
        <div class="partie2">
            <div class="gauche">
                <img src="Images/Projets/Projet4/John.png" alt="Image du personnage du jeu">
            </div>
            <div class="droite">
                <h1>Pourquoi ? Quoi ? Comment ?</h1>
                <h2>
                Nous avons eu un cours qui nous a montré les bases de blender et d'unity. 
                Pour l'évaluation nous devions réaliser un petit jeu mobile, comme un jeu 
                où un personnage court pour récupérer des pièces.
                </h2>
                <p>
                Comme je n'avais jamais fait de jeu et que l'exercice me semblait intéressant, j'ai 
                voulu faire un un peu plus compliqué. Mon idée était que l'utilisateur arrivait dans 
                la map où il devrait trouver une arme. Ensuite, on le confronterait à des ennemis de plus en plus puissants.
                </p>
            </div>
        </div>
        <div class="partie3">
            <div class="fondPartie3">

            </div>
            <div class="TextPartie3">
                <h1>Création du personnage </h1>
                <h1>et de ses fonctionnnalités sur mobile</h1>
                <p>Nous avions vu en cours l'utilisation de l'asset "Starter Assets - ThirdPerson" qui 
                    permet d'avoir un personnage qui se déplace et que l'on contrôle de manière taclile ou par clavier. 
                    Mais moi je voulais créer un personnage capable d'attaquer, de 
                    ramasser des objets et de mourir. Les créateurs de l'asset qu'on utilisait proposaient 
                    cette version mais en payante. J'ai donc préféré suivre plusieurs tutos et créer 
                    moi même un personnage. 
                    Je remercie d'ailleurs la chaine youtube "TUTO UNITY FR" qui m'a beaucoup appris.
                </p>
            </div>
            <div class="CartePartie3">
                <img src="Images/Projets/Projet4/EcranJeu.png" alt="Screen de l'interface du jeu">
                <div class="BasCartePartie3">
                    <img src="Images/Pictogrammes/JeuxTel.svg" alt="Pictogramme d'un jeu sur télephone">
                    <h3>Interface du jeu</h3>
                </div>
            </div>
        </div>
        <div class="partie4">
            <div class="backgroundImagesPartie4">
                <div class="CarteBackgroundImagesPartie4"></div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
                <div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                    <div class="CarteBackgroundImagesPartie4"></div>
                </div>
            </div>
            <img src="Images/Projets/Projet4/Armes.png" alt="Image de certaine armes du jeu">
            <div class="TextPartie4">
                <h1>Création des armes</h1>
                <p>Les armes sont des objets que le joueur peut ramasser et utiliser pour attaquer les ennemis. 
                    Elles sont disposées à plusieurs endroits de la map.
                    J'ai créé plusieurs armes, chacune ayant des caractéristiques différentes. 
                    J'ai aussi créé un système de dégâts qui permet de calculer les dégâts infligés par les armes.
                </p>
            </div>
        </div>
        <div class="partie5">
            <div class="fondPartie5"></div>
            <div class="TextPartie5">
                <h1>Le map</h1>
                <p>Le joueur arrive dans un bâtiment abandoné. Il y a dedans des armes qui trainent, 
                    et différents ennemis. Au début, il y a seulement des loups. En tuant le plus gros, 
                    une clef est dropée. Elle déverouille une porte qui donne accès à de nouvelles 
                    pièces, où il faudra tuer le boss des ours, qui donne le clef du sous sol où il y a la morgue. 
                    Là le joueur devra tuer les zombies, ce qui lui affichera l'écran de victoire.
                </p>
            </div>
            <div class="CartePartie5">
                <img src="Images/Projets/Projet4/Map.png" alt="Screen de la map">
                <div class="BasCartePartie5">
                    <img src="Images/Pictogrammes/JeuxTel.svg" alt="Pictogramme d'un jeu sur télephone">
                    <h3>Map d'un asile abandonné</h3>
                </div>
            </div>
        </div>
        <div class="partie6">
            <div class="TextePartie6">
                <h1>Les ennemis, <span style="opacity: 0.6;">création de leur IA<span></h1>
                <p>Les ennemis sont des personnages non-joueurs qui attaquent le joueur. 
                    J'ai récupéré leurs modèles 3D sur l'unity asset store et j'ai aussi créé un petit système qui leur
                    permet de se déplacer et d'attaquer le joueur, chacun ayant des caractéristiques différentes.
                </p>
            </div>
            <div class="ImagesDesTroisEnnemis">
                <div>
                    <div>
                        <img src="Images/Projets/Projet4/Loup.png" alt="Image du loup">
                    </div>
                    <h1>Les Loups</h1>
                    <p>Les loups sont les ennemis les plus faibles du jeu, mais une grande meute s'est installée dans le hall</p>
                </div>
                <div>
                    <div>
                        <img src="Images/Projets/Projet4/Ours.png" alt="Image de l'ours">
                    </div>
                    <h1>Les Ours</h1>
                    <p>Deux couples d'ours ont pris possessions des grands espaces du batiment. 
                        Il faut tuer le plus vieux pour avoir la clef du sous sol</p>
                </div>
                <div>
                    <div>
                        <img src="Images/Projets/Projet4/Zombie.png" alt="Image du zombie">
                    </div>
                    <h1>Les Zombies</h1>
                    <p>Les cadavres de la morgue se sont réveillés, il faut les tuer pour finir le jeu</p>
                </div>
            </div>
            <div class="fondPartie6">

            </div>
        </div>
        <div class="partie7">
            <div>
            <h1>Télécharger le jeu</h1>
            <button class="button" id="downloadButtonJeu">
                <img src="Images/Pictogrammes/Telecharger2.svg" alt="Pictogramme de téléchargement">
                <img src="Images/Pictogrammes/Telecharger.svg" alt="Pictogramme de téléchargement">
            </button>
                
            </div>
            <p>Si vous disposez d'un appareil Android et que tester ce petit jeu vous tente, je vous laisse le télécharger ici</p>
        </div>
    </div>
</div>




<?php include 'footer.php'; ?>

<script>
    document.getElementById("downloadButton").addEventListener("click", function() {
        var filename = "Danois_Timeo_Rapport_de_stage_2.pdf";
        var link = document.createElement('a');
        link.href = filename;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    document.getElementById("downloadButtonStage2").addEventListener("click", function() {
        var filename = "Danois_Timeo_Rapport_de_stage_1.pdf";
        var link = document.createElement('a');
        link.href = filename;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    document.getElementById("downloadButtonJeu").addEventListener("click", function() {
        var filename = "Danois_Timeo_Jeu.apk";
        var link = document.createElement('a');
        link.href = filename;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Sélection des boutons de projet
        var boutonsProjet = document.querySelectorAll('.Liste_btn_projets a');

        // Parcourir chaque bouton de projet
        boutonsProjet.forEach(function(bouton) {
            // Ajouter un écouteur d'événement au clic
            bouton.addEventListener('click', function(event) {
                // Empêcher le comportement par défaut du lien

                // Récupérer l'identifiant de la classe du projet associé au bouton cliqué
                var projetClass = this.getAttribute('href').substring(1);

                // Sélection de toutes les divs de projet
                var divsProjet = document.querySelectorAll('.Projet');

                // Parcourir chaque div de projet
                divsProjet.forEach(function(div) {
                    // Vérifier si la classe de la div correspond au projet cliqué
                    if (div.classList.contains(projetClass)) {
                        // Afficher la div correspondante
                        div.style.display = 'block';
                    } else {
                        // Masquer les autres divs de projet
                        div.style.display = 'none';
                    }
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Vérifier si l'URL contient un fragment correspondant à un projet
        var projetFragment = window.location.hash.substring(1);
        
        if (projetFragment) {
            // Sélectionner toutes les divs de projet
            var divsProjet = document.querySelectorAll('.Projet');

            // Parcourir chaque div de projet
            divsProjet.forEach(function(div) {
                // Vérifier si la classe de la div correspond au projet dans l'URL
                if (div.classList.contains(projetFragment)) {
                    // Afficher la div correspondante
                    div.style.display = 'block';
                } else {
                    // Masquer les autres divs de projet
                    div.style.display = 'none';
                }
            });
        }
    });
</script>