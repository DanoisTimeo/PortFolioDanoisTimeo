<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <title>Danois Timéo - BTS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/BTS.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- tsParticles -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.29.0"></script>

</head>
<body>
<?php include 'MenuBurger.php'; ?>

<div class="Corps_de_page">
    <div class="acceuil">
        <div class="text-haut">
            <p>Bienvenue, cette page a été rajoutées pour correspondre aux attentes du BTS. Elle me présente plus en détails 
                avec <a href="BTS.php#parcoursScolaire">mon parcours scolaire</a>, <a href="BTS.php#stages">mes stages</a> et <a href="BTS.php#epreuveE5">mon projet E5</a> et une <a href="BTS.php#veilleTechnologique">veille technologique.</a></p>
        </div>
        <div class="gauche">
            <img src="Images/BTS/Photo_presentation.png" alt="Photo" class="grossis">
        </div>
        <div class="droite">
            <h2 id="typedHeading"></h2>
            <h1 id="typedName"></h1>
            <p><span id="typedParagraph"></span><span class="paragraph-long" id="paragraph-long">Suite à ma première année d'étude supérieure, 
                j'ai découvert ce monde et je me suis dirigé vers l'option SLAM qui m'attirait 
                énormément depuis mes premières semaines de cours. À l’issue de ce BTS, je souhaite 
                faire une licence en alternance, pour ensuite poursuivre ma formation vers un Master.</span>
                <span class="voirPlus" id="voirPlus" onclick="toggleParagraph()"></span>
            </p>
            <div class="btn_presentation">
                <a download="Danois_Timeo_CV.pdf" href="Danois_Timeo_CV.pdf" class="desactive">Télécharger mon CV</a>
                <a href="Home.php#contact" class="desactive">Contact</a>
            </div>
        </div>
    </div>
    <div class="parcoursScolaire" id="parcoursScolaire">
        <h1 class="titre">Mon Parcours Scolaire</h1>
        <div class="lesCartesScolaires">
            <div class="carte">
                <div class="gauche">
                    <h1>Objectif</h1>
                </div>
                <div class="centre">
                    <h1>Master</h1>
                    <p>Je souhaite continuer mes études à EPSI jusqu'au Master. Pour arriver à ce résultat,
                        je suis actuellement à la recherche d'une alternance pour une licence.
                    </p>
                </div>
                <div class="droite">
                    <h1>2027</h1>
                </div>
            </div>
            <div class="carte">
                <div class="gauche">
                    <h1>Bts SIO</h1>
                </div>
                <div class="centre">
                    <h1>Bts SIO option SLAM</h1>
                    <p>BTS Services Informatiques aux Organisations option Solutions d'Infrastructure, 
                        Solutions Logicielles et Applications Métiers. Je suis à la fin de ma deuxième année d'étude
                        à EPSI</p>
                </div>
                <div class="droite">
                    <h1>2022 - 2024</h1>
                </div>
            </div>
            <div class="carte">
                <div class="gauche">
                    <h1>Bac STI2D</h1>
                </div>
                <div class="centre">
                    <h1>Baccalauréat STI2D : Option systèmes d'information et numérique</h1>
                    <p>J'ai passé mon bac au lycée Camille Claudel, à Blain. L'option SIN 
                        de mon bac m'a fait découvrir ma passion pour les métiers de l'informatique.
                    </p>
                </div>
                <div class="droite">
                    <h1>2022</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="stages" id="stages">
        <div class="gauche">
            <h1 class="titre">Mes Stages</h1>

            <div class="boutons">
                <div class="btn_stage btn_stageBlock" id="btn_stage2" onclick="changeButtonAndToggleDiv(2)">
                    <p>Stage de 2<sup>e</sup> année</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#17181C"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </div>
                <div class="btn_stage" id="btn_stage1" onclick="changeButtonAndToggleDiv(1)">
                    <p>Stage de 1<sup>er</sup> année</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#17181C"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </div>
            </div>
        </div>
        <div class="droite">
            <div id="stage2" class="stage2">
                <div class="haut">
                    <div class="gauchehaut">
                        <h1>La tête dans la toile</h1>
                        <h2>Stage de deuxième année de BTS</h2>
                        <p>PHP - HTML - CSS - JavaScript  -  WordPress</p>
                        <a href="https://www.latetedanslatoile.fr/" target="_blank">Site de l'entreprise</a>
                    </div>
                    <div class="droitehautLaTeteDansLaToile">
                        <div class="un">&lt;<span>O</span>&gt;</div>
                        <div class="deux">&lt;<span>O</span>&gt;</div>
                        <div class="trois">&lt;<span>O</span>&gt;</div>
                        <div class="quatre">&lt;<span>O</span>&gt;</div>
                        <div class="cinq">&lt;<span>O</span>&gt;</div> 
                        <div class="six">&lt;<span>O</span>&gt;</div>
                        <div class="sept">&lt;<span>O</span>&gt;</div>
                    </div>
                </div>
                <div class="bas">
                    <p>J’ai eu la chance de passer cinq semaines de stage dans l’entreprise 
                        La tête dans la toile avec Alan Ferronnière mon maître de stage. Il a créé 
                        et dirige cette agence de développement. L’entreprise développe des sites web 
                        sur mesure pour ses différents clients (particuliers ou entreprises). Accompagné 
                        d'un second stagiaire et sous le regard de notre maître de stage, 
                        nous avons travaillé sur le site des laboratoires vivants, un théâtre nantais. Nous 
                        avions pour mission de créer un système de covoiturage, pour que les spectateurs puissent 
                        se rendre aux spectacles en groupe. Cela m'a beaucoup appris sur le développement, mais 
                        aussi sur les méthodes de travail, particulièrement sur la gestion de projet en équipe. 
                        Si vous voulez en savoir plus, j'ai parlé de ce stage sur une autre page. 
                    </p>
                    <div class="btn_stage">
                        <a href="Projets.php#Projet1">En savoir plus</a>
                        <a download="Danois_Timeo_Rapport_de_stage_2.pdf" href="Danois_Timeo_Rapport_de_stage_2.pdf">Télécharger le rapport de stage</a>
                    </div>
                </div>
            </div>
            <div id="stage1" class="stage1 desactive">
                <div class="haut">
                    <div class="gauchehaut">
                        <h1>Dragonium</h1>
                        <h2>Stage de première année de BTS</h2>
                        <p>PHP - HTML - CSS - MySQL</p>
                        <a href="https://www.dragonium.net/" target="_blank">Site du jeu</a>
                    </div>
                    <div class="droitehautDragonium">
                        <img src="Images/Projets/Projet2/Logo_Dragonium.png" alt="Logo de jeu Dragonium">
                    </div>
                </div>
                <div class="bas">
                    <p>Dragonium est un jeu de rôle et de stratégie médiéval fantastique, gratuit qui se joue sur navigateur, 
                        géré par l'association Zyzomis, et accessible à tous. Pendant mon stage, j'ai eu l'occasion de travailler 
                        sur le site. Mes missions étaient de corriger des bugs et d'ajouter des petites ou grosses fonctionnalités. 
                        J'ai beaucoup appris en développement comme en travail d'autonomie. Nous avions un logiciel de ticketing et 
                        si aucune tâche ne m'était assignée, j'allais donc moi-même trouver de nouvelles missions. J'ai travaillé sur 
                        tellement de sujets différents durant ce stage que pour ne pas faire 100 pages, j'ai dû sélectionner mes 
                        préférés pour écrire mon rapport. Si vous voulez en savoir plus j'ai une page qui parle brièvement des deux 
                        grosses missions du stage. Même si les vrais détails sont dans le rapport que vous pouvez télécharger. 
                    </p>
                    <div class="btn_stage">
                        <a href="Projets.php#Projet2">En savoir plus</a>
                        <a download="Danois_Timeo_Rapport_de_stage_1.pdf" href="Danois_Timeo_Rapport_de_stage_1.pdf">Télécharger le rapport de stage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="epreuveE5" id="epreuveE5">
        <div class="gauche">
            <h1 class="titre">Épreuve E5</h1>

            <div class="Carte_Projet Carte_Projet_3" onclick="window.location.href = 'Projets.php#Projet3';">
                <div class="Carte_Haut">
                    <h1>Projet TardyGrade</h1>
                    <p>Création d'un réseau social pour le BTS</p>
                </div>
                <div class="Carte_Bas">
                    <img src="Images/pictogrammes/School.svg" alt="Pictogramme D'un chapeau d'étudiant">
                    <div>
                        <h3>Développement</h3>
                        <p>PHP - Symphony - HTML - CSS - C# - .Net</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="droite">
            <div id="stage2" class="stage2">
                <div class="haut">
                    <div class="gauchehaut">
                        <h1>Création d'un réseau social</h1>
                        <p>Dans le cadre du BTS, nous avons eu le projet "Tardy-Grade": développer un réseau 
                            social et le déployer sur les serveurs de l'école</p>
                    </div>
                    <div class="droitehaut">
                        <a download="Cahier_des_charges_Tardygrade.pdf" href="Cahier_des_charges_Tardygrade.pdf" target="_blank">Cahier des charges</a>
                        <a download="#.pdf" href="#.pdf">Rapport</a>
                        <a download="#.pdf" href="#.pdf">Contrôle de conformité</a>
                    </div>
                </div>
                <div class="bas">
                    <p>Le projet Tardy-Grade a pour but de créer un réseau social de partage de raisons 
                        de retard entre les utilisateurs. Que ce soit pour un retard à l’école ou à un rendez-vous, 
                        les utilisateurs peuvent partager des excuses originales, drôles ou surprenantes, en fonction 
                        de leur situation et de leur humeur. Nous avons créé le réseau social grâce à symfony. Nous 
                        avons aussi développé une application avec WPF et une Web API, qui a pour but de donner les 
                        statistiques de l'application pour une période donnée (nombre d'utilisateurs, nombre de posts, 
                        etc). Nous avons travaillé à deux sur ce projet, nous utilisions Azure Devops pour organiser nos 
                        tâches et se partager le code. 
                    </p>
                    <div class="btn_stage">
                        <a href="Projets.php#Projet3">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="veilleTechnologique" id="particles-container">
    <div id="tsparticles"></div>
    <div class="titre" id="veilleTechnologique">
        <h1>Veille Technologique</h1>
    </div>
    <div class="outils">
        <h1>Ma veille technologique et mes outils</h1>
        <p> Pour effectuer ma veille technologique, j’utilise « Google Alertes », qui me crée des alertes toutes les 
            semaines. Celui-ci me permet d’être toujours au courant de toutes les actualités de mon choix. Pour ma 
            veille technologique, j'ai choisi l'abandon des cookies par Google. J’ai ajouté à Google Alertes différentes 
            recherches avec des sources telles que : ANSSI, Le Monde Informatique, Ouest France, les blogs de Google, etc... </p>
    </div>
    <div class="veille">
        <h1>Privacy Sandbox</h1>
        <p>Privacy Sandbox est un projet annoncé en août 2019, par google. Ils souhaitent créer des normes Web permettant aux 
            sites d'accéder à l'information des utilisateurs sans compromettre la vie privée. Son objectif principal est de 
            faciliter la publicité en ligne en partageant un sous-ensemble d'informations privées d'utilisateurs sans utiliser de 
            cookies tiers.</p>
    </div>
    <div class="cookies">
        <h1>Les cookies tiers</h1>
        <p>Ce sont les cookies qui sont principalement utilisés pour le suivi des utilisateurs dans le but de la publicité. 
            Les cookies tiers sont jugés particulièrement intrusifs au regard de la vie privée. Certains navigateurs ont d’ailleurs 
            anticipé tout problème de conformité à la réglementation en bloquant par défaut les cookies tiers, comme les dernières 
            versions de Mozilla Firefox et Safari (Apple). Google a annoncé la suppression des cookies tiers sur son navigateur Chrome 
            en 2020. Cependant, ce service étant le moteur de recherche le plus utilisé dans le 
            monde (64,8 % de parts de marché en 2023), ils font une disparition progressive. La mise en place initiale prévue en 
            2022 connut finalement plusieurs reports, avant de devenir effective en 2024.</p>
    </div>
    <div class="articles">
        <h1 class="articlestitre">Mes Articles</h1>
        <div class="listeArticles">
            <div class="CartesPar2">
                <div class="Carte_Aritcle" onclick="window.open('https://www.adimeo.com/blog/disparition-cookies-tiers-marketing', '_blank');">
                    <div class="Carte_Haut">
                        <img src="Images/pictogrammes/newspaper.svg" alt="Pictogramme D'un journal">
                        <div>
                            <h2>Adimeo</h2>
                            <p>Publié le 05/02/2024</p>
                        </div>
                    </div>
                    <div class="Carte_Bas">
                        <p>Explication des cookies et de leurs impacts.</p>
                        <div>
                        <img src="Images/Articles/CookiesWebImg.jpg" alt="Image de Cookies sur les navigateurs">
                        </div>
                    </div>
                </div>
                <div class="Carte_Aritcle" onclick="window.open('https://www.cbnews.fr/tribune/image-boite-cookies-est-vide-comment-ia-va-combler-fin-cookies-tiers-81052', '_blank');">
                    <div class="Carte_Haut">
                        <img src="Images/pictogrammes/newspaper.svg" alt="Pictogramme D'un journal">
                        <div>
                            <h2>CB News</h2>
                            <p>Publié le 12/12/2023</p>
                        </div>
                    </div>
                    <div class="Carte_Bas">
                        <p>Les outils qui remplacent les cookies tiers.</p>
                        <div>
                        <img src="Images/Articles/TechImg.png" alt="Image de technologie">
                        </div>
                    </div>
                </div>
            </div>
            <div class="CartesPar2">
                <div class="Carte_Aritcle" onclick="window.open('https://www.ouest-france.fr/high-tech/google/google-va-mettre-fin-aux-cookies-dans-chrome-mais-est-ce-vraiment-une-bonne-nouvelle-118b2414-53d8-11ee-bfe4-12df3a326052', '_blank');">
                    <div class="Carte_Haut">
                        <img src="Images/pictogrammes/newspaper.svg" alt="Pictogramme D'un journal">
                        <div>
                            <h2>Ouest France</h2>
                            <p>Publié le 15/09/2023</p>
                        </div>
                    </div>
                    <div class="Carte_Bas">
                        <p>Chrome remplace les cookies par un service qui permet de lire l'historique.</p>
                        <div>
                        <img src="Images/Articles/fincookies.jpg" alt="Image de google, d'une poubelle et d'un cookies">
                        </div>
                    </div>
                </div>
                <div class="Carte_Aritcle" onclick="window.open('https://blog.google/intl/fr-fr/nouvelles-de-lentreprise/technologie/topics-la-nouvelle-api-de-la-privacy/', '_blank');">
                    <div class="Carte_Haut">
                        <img src="Images/pictogrammes/newspaper.svg" alt="Pictogramme D'un journal">
                        <div>
                            <h2>Google</h2>
                            <p>Publié le 25/01/2022</p>
                        </div>
                    </div>
                    <div class="Carte_Bas">
                        <p>Explication par google de topic api "le système qui lit l'historique".</p>
                        <div>
                        <img src="Images/Articles/Chrome.jpg" alt="Image de google chrome">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include 'footer.php'; ?>

<script>
    function changeButtonAndToggleDiv(id) {
        // Réinitialiser les boutons
        document.getElementById('btn_stage2').classList.remove('btn_stageBlock');
        document.getElementById('btn_stage1').classList.remove('btn_stageBlock');

        // Ajouter la classe btn_stageBlock au bouton cliqué
        document.getElementById('btn_stage' + id).classList.add('btn_stageBlock');

        // Afficher le contenu correspondant au stage
        document.getElementById('stage2').classList.toggle('desactive', id === 1);
        document.getElementById('stage1').classList.toggle('desactive', id === 2);
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Texte à taper
        var headingText = "Étudiant en BTS SIO";
        var nameText = "Timéo Danois";
        var paragraphText = "J'ai passé un Bac STI2D option SIN, et c'est durant ces années de lycée que je me suis découvert une passion pour l'informatique, les nouvelles technologies et particulièrement pour la programmation. C'est pour cela que je me suis dirigé vers un BTS SIO.";
        var voirPlusText = "Voir plus";
        
        // Eléments de texte à manipuler
        var headingElement = document.getElementById('typedHeading');
        var nameElement = document.getElementById('typedName');
        var paragraphElement = document.getElementById('typedParagraph');
        var voirPlusElement = document.getElementById('voirPlus');
        var cvLink = document.querySelector('.btn_presentation a[href="Danois_Timeo_CV.pdf"]');
        var contactLink = document.querySelector('.btn_presentation a[href="Home.php#contact"]');
        
        // Fonction pour ajouter chaque lettre avec un léger délai
        function typeWriter(text, element, speed, callback) {
            var i = 0;
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                } else {
                    callback(); // Appeler la fonction de rappel une fois que tout le texte a été écrit
                }
            }
            type();
        }
        
        // Fonction pour changer les classes des liens pour activer le téléchargement du CV et le lien vers la page de contact
        function activateLinks() {
            cvLink.classList.remove('desactive');
            cvLink.classList.add('grossis');
            contactLink.classList.remove('desactive');
            contactLink.classList.add('grossis');
        }
        
        // Commencer à taper le texte pour le titre (h2), le nom (h1) et le paragraphe (p)
        typeWriter(headingText, headingElement, 40, function() {
            typeWriter(nameText, nameElement, 40, function() {
                typeWriter(paragraphText, paragraphElement, 15, function() {
                    typeWriter(voirPlusText, voirPlusElement, 20, function() {
                        activateLinks(); // Activer les liens après avoir écrit tout le texte
                    });
                });
            });
        });
    });

    function toggleParagraph() {
        var longParagraph = document.getElementById('paragraph-long');
        var voirPlusButton = document.getElementById('voirPlus');

        if (longParagraph.style.display === 'none'  || longParagraph.style.display === '') {
            longParagraph.style.display = 'block';
            voirPlusButton.textContent = 'Voir moins';
        } else {
            longParagraph.style.display = 'none';
            voirPlusButton.textContent = 'Voir plus';
        }
    }

    // Configuration de Particles.js
    tsParticles.load("tsparticles", {
        fps_limit: 40,
        interactivity: {
            detect_on: "canvas",
            events: {
            onhover: {
                enable: true,
                mode: "repulse",
                parallax: { enable: false, force: 60, smooth: 10 }
            },
            resize: true
            },
            modes: {
            bubble: { distance: 400, duration: 2, opacity: 0.8, size: 40, speed: 3 },
            grab: { distance: 400, line_linked: { opacity: 1 } },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
            repulse: { distance: 200, duration: 0.4 }
            }
        },
        particles: {
            color: { value: "#ffffff" },
            line_linked: {
            color: "#ffffff",
            distance: 150,
            enable: true,
            opacity: 0.4,
            width: 1
            },
            move: {
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
            bounce: false,
            direction: "none",
            enable: true,
            out_mode: "out",
            random: false,
            speed: 1,
            straight: false
            },
            number: { density: { enable: true, value_area: 800 }, value: 80 },
            opacity: {
            anim: { enable: false, opacity_min: 0.1, speed: 1, sync: false },
            random: false,
            value: 0.5
            },
            shape: {
            character: {
                fill: false,
                font: "Verdana",
                style: "",
                value: "*",
                weight: "400"
            },
            image: {
                height: 100,
                replace_color: true,
                src: "images/github.svg",
                width: 100
            },
            polygon: { nb_sides: 5 },
            stroke: { color: "#000000", width: 0 },
            type: "circle"
            },
            size: {
            anim: { enable: false, size_min: 0.1, speed: 40, sync: false },
            random: true,
            value: 5
            }
        },
        polygon: {
            draw: { enable: false, lineColor: "#ffffff", lineWidth: 0.5 },
            move: { radius: 10 },
            scale: 1,
            type: "none",
            url: ""
        },
        retina_detect: true
    });




</script>