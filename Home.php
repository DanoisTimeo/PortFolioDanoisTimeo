<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>Danois Timéo</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">

</head>
<body>

<div class="Presentation" id="accueil">
    <img src="Images/Image_Fond_Acceuil1.jpg" class="Fond_Pres" alt="Ciel étoilé">
    <div class="overlay"></div>
    <div class="text_presentation">
        <h2>Hello <span id="typedWord"></span><span class="clignote">|</span></h2>
        <h1 id="typedHeading"></h1>
        <p id="typedParagraph"></p>
        <img src="Images/pictogrammes/FlecheBas.svg" alt="Pictogramme d'une fleche vers le bas" class="desactive" id="scroll">
    </div>
</div>
<div class="Corps_de_page">
    <?php include 'MenuBurger.php'; ?>

    <div class="MesProjets" id="projets">
        <H2>Mes Projets </H2>    
    </div>
</div>
<div class="Carousel-Conteneur">
    <div id="btnSliderPrev" class="btnSliderPrev">
        <img src="Images/pictogrammes/FlecheGauche.svg" alt="Flèche pour aller à gauche">
    </div>
    <div id="btnSliderNext" class="btnSliderNext">
            <img src="Images/pictogrammes/FlecheDroite.svg" alt="Flèche pour aller à droite">
    </div>
    <div class="Liste_Projets">
        <div class="Carte_Projet Carte_Projet_1" onclick="window.location.href = 'Projets.php#Projet1';">
            <div class="Carte_Haut">
                <h1>La tête dans la toile</h1>
                <p>Stage de deuxième année</p>
            </div>
            <div class="Carte_Bas">
                <img src="Images/pictogrammes/Equerre.svg" alt="Pictogramme D'une équerre">
                <div>
                    <h3>Développement</h3>
                    <p>PHP - HTML - CSS - JavaScript  -  WordPress</p>
                </div>
            </div>
        </div>

        <div class="Carte_Projet Carte_Projet_2" onclick="window.location.href = 'Projets.php#Projet2';">
            <div class="Carte_Haut">
                    <h1>Dragonium</h1>
                    <p>Stage de première année</p>
            </div>
            <div class="Carte_Bas">
                <img src="Images/pictogrammes/Equerre.svg" alt="Pictogramme D'une équerre">
                <div>
                    <h3>Développement</h3>
                    <p>PHP - HTML - CSS - MySQL</p>
                </div>
            </div>
        </div>
        
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

        <div class="Carte_Projet Carte_Projet_4" onclick="window.location.href = 'Projets.php#Projet4';">
            <div class="Carte_Haut">
                <h1>Création Jeu Mobile</h1>
                <p>Un projet qui ravit les petits cousins</p>
            </div>
            <div class="Carte_Bas">
                <img src="Images/pictogrammes/JeuxTel.svg" alt="Pictogramme D'un Téléphone">
                <div>
                    <h3>Développement</h3>
                    <p>Unity - C#</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Corps_de_page">
    <div class="Competences" id="competences">
        <h2>Mes Compétences</h2>
        <div class="Competences_arbre">
            <div class="branche1">
                <div class="branche_1_1">
                    <div class="feuille">
                        <img src="Images/competences/Python_logo.svg" alt="Pictogramme Python">
                        <span class="feuille-text">Python</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/html5.svg" alt="Pictogramme HTML">
                        <span class="feuille-text">HTML</span>
                    </div>
                </div>
                <div class="branche_1_2">
                    <div class="feuille">
                        <img src="Images/competences/php.svg" alt="Pictogramme PHP">
                        <span class="feuille-text">PHP</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/scss.png" alt="Pictogramme SASS">
                        <span class="feuille-text">SCSS / CSS</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/JavaScript_logo.svg" alt="Pictogramme JavaScript"> 
                        <span class="feuille-text">JavaScript</span>                       
                    </div>
                </div>
                <div class="branche_1_3">
                    <div class="feuille">
                        <img src="Images/competences/mysql.svg" alt="Pictogramme MySQL">
                        <span class="feuille-text">MySQL</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/bootstrap.svg" alt="Pictogramme Bootstrap">
                        <span class="feuille-text">Bootstrap</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/C__.png" alt="Pictogramme C++">
                        <span class="feuille-text">C++</span>
                    </div>
                </div>
                <div class="branche_1_4">
                    <div class="feuille">
                        <img src="Images/competences/sql-server.svg" alt="Pictogramme SQL Server">
                        <span class="feuille-text">Microsoft SQL Server</span>
                    </div>
                    <div class="feuille">
                        <img src="Images/competences/symfony.svg" alt="Pictogramme Symfony">
                        <span class="feuille-text">Symfony</span>

                    </div>
                    <div class="feuille">
                        <img src="Images/competences/CSharp.png" alt="Pictogramme C#">
                        <span class="feuille-text">C#</span>
                    </div>
                </div>
                <div class="branche_1_5">
                    <div class="feuille">
                        <img src="Images/competences/DotNet.png" alt="Pictogramme DotNet" class="heightAuto">
                        <span class="feuille-text">.net 8</span>
                    </div>
                    <div class="feuille feuille_bloque">
                        <img src="Images/competences/Cadena.svg" alt="Pictogramme Cadena">
                        <span class="sablier">
                            <img class="img_sablier" src="Images/competences/Sablier.svg" alt="Pictogramme d'un sablier" />
                        </span>
                    </div>
                    <div class="feuille feuille_bloque">
                        <img src="Images/competences/Cadena.svg" alt="Pictogramme Cadena">
                        <span class="sablier">
                            <img class="img_sablier" src="Images/competences/Sablier.svg" alt="Pictogramme d'un sablier" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="branche2">
                <div class="feuille">
                    <img src="Images/competences/wordpress.svg" alt="Pictogramme WordPress">
                    <span class="feuille-text">WordPress</span>
                </div>
                <div class="feuille">
                    <img src="Images/competences/azure-devops.svg" alt="Pictogramme Azure DevOps">
                    <span class="feuille-text">Azure DevOps</span>
                </div>
                <div class="feuille">
                    <img src="Images/competences/git.svg" alt="Pictogramme Git">
                    <span class="feuille-text">Git</span>
                </div>
                <div class="feuille">   
                    <img src="Images/competences/Unity.svg" alt="Pictogramme Unity">
                    <span class="feuille-text">Unity</span>
                </div>
                <div class="feuille feuille_bloque">
                    <img src="Images/competences/Cadena.svg" alt="Pictogramme Cadena">
                    <span class="sablier">
                        <img class="img_sablier" src="Images/competences/Sablier.svg" alt="Pictogramme d'un sablier" />
                    </span>
                </div>
                <a download="Danois_Timeo_CV.pdf" href="Danois_Timeo_CV.pdf" class="cv">Télécharger mon CV</a>
            </div>
        </div>
    </div>

    <div class="Page_Contact" id="contact">
        <div class="Page_Contact_Gauche">
            <h1>Contactez moi</h1>
            <p>Vous avez un projet à me proposer, une question à me poser ou une offre à me faire ?</p>
            <form id="contactForm" method="post">
                <div class="nom_prenom">
                    <input type="text" name="Nom" placeholder="Nom" require>
                    <input type="text" name="Prenom" placeholder="Prénom">
                </div>
                <input type="email" name="Email" placeholder="Email" require>
                <input type="telephone" name="Telephone" placeholder="Numéro de téléphone">
                <textarea name="Message" placeholder="Message" require></textarea>
                <input class="btn-envoyer" type="submit" value="Envoyer">
                <p class="msgContact msgContactEncour">Le message est en cours d'envoi</p>
                <p class="msgContact msgContactOK">Le message a bien été envoyé</p>
                <p class="msgContact msgContact_erreur">Le message n'a pas pu être envoyé</p>
            </form>
            <div class="emailContact">
                <h2>Vous préférez par <span>mail</span> ?</h2>
                <h1>Timeo.dns@gmail.com</h1>
            </div>
        </div>
        <div class="Page_Contact_Droite">
            <h2>Vous préférez me contacter par <span>mail</span> ?</h2>
            <h1>Timeo.dns@gmail.com</h1>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<script src="Carousel.js"></script>

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault(); // Empêcher la soumission normale du formulaire

            var formData = $(this).serialize(); // Récupérer les données du formulaire

            // Affichage du message "Le message est en train de s'envoyer"
            $('.msgContactEncour').css('display', 'block');
            $('.msgContactOK').css('display', 'none');
            $('.msgContact_erreur').css('display', 'none');

            $('.btn-envoyer').css('opacity', '0.5');

            $.ajax({
                type: 'POST',
                url: 'FonctionContactForm.php', // Assurez-vous que le nom du fichier est correct
                data: formData,
                success: function(response) {
                    $('.msgContactEncour').css('display', 'none');
                    $('.msgContactOK').css('display', 'block');
                    $('.btn-envoyer').css('opacity', '1');
                },
                error: function(xhr, status, error) {
                    $('.msgContactEncour').css('display', 'none');
                    $('.msgContact_erreur').css('display', 'block');
                    $('.btn-envoyer').css('opacity', '1');
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Texte à taper
        var headingText = "Danois Timéo";
        var paragraphText = "Bienvenue dans le monde extraordinaire de Timéo, un développeur intéressé et étudiant en deuxième année d’un BTS SIO, qui souhaite continuer ces études en alternance sur Nantes à la rentrée de septembre 2024.";
        
        // Eléments de texte à manipuler
        var headingElement = document.getElementById('typedHeading');
        var paragraphElement = document.getElementById('typedParagraph');
        var wordElement = document.getElementById('typedWord');
        
        // Mots à afficher après "Hello"
        var words = ["World !", "Visiteur !", "Recruteur ?!"];
        var currentWordIndex = 0;
        
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
        
        // Fonction pour effacer le texte avec un léger délai
        function eraseText(element, callback) {
            var text = element.innerHTML;
            var i = text.length - 1;
            var speed = 60; // Vitesse d'effacement (en millisecondes)
            function erase() {
                if (i >= 0) {
                    element.innerHTML = text.substring(0, i);
                    i--;
                    setTimeout(erase, speed);
                } else {
                    callback(); // Appeler la fonction de rappel une fois que tout le texte a été effacé
                }
            }
            erase();
        }
        
        // Fonction pour alterner entre les mots après "Hello"
        function rotateWords() {
            var word = words[currentWordIndex];
            typeWriter(word, wordElement, 90, function() {
                setTimeout(function() {
                    eraseText(wordElement, function() {
                        setTimeout(function() {
                            currentWordIndex = (currentWordIndex + 1) % words.length; // Passer au mot suivant
                            rotateWords(); // Appeler récursivement pour afficher le prochain mot
                            document.getElementById('scroll').classList.remove('desactive');
                            document.getElementById('scroll').classList.add('scroll');
                        }, 1500); // Attendre 2 secondes avant de commencer à effacer le mot
                    });
                }, 1500); // Attendre 2 secondes avant de commencer à effacer le mot
            });
        }
        
        // Commencer à taper le texte pour le titre (h1) et le paragraphe (p)
        typeWriter(headingText, headingElement, 60, function() {
            setTimeout(function() {
                typeWriter(paragraphText, paragraphElement, 35, function() {
                    rotateWords(); // Commencer la rotation des mots après "Hello"
                });
            }, headingText.length * 50); // Démarrer le paragraphe après avoir terminé le titre
        });
    });
</script>

