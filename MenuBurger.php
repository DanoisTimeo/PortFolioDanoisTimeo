<link rel="stylesheet" href="CSS/MenuBurger.css">
<div class="burger-menu burger-menu--closed">
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
</div>

<div class="menu-links menu-links--hidden">
    <a href="home.php#accueil">Accueil</a>
    <a href="Projets.php">Projet</a>
    <a href="home.php#competences">Compétences</a>
    <a href="home.php#contact">Contact</a>
    <a href="BTS.php">BTS</a>
    <a download="Danois_Timeo_CV.pdf" href="Danois_Timeo_CV.pdf" class="cv">Télécharger mon CV</a>
    <a href="https://www.linkedin.com/in/tim%C3%A9o-danois/" target="_blank">Linkedin</a>
</div>

<script>
    $('.burger-menu').on('click', function() {
        $(this).toggleClass("burger-menu--opened");
        $(this).toggleClass("burger-menu--closed");
        $('.menu-links').toggleClass("menu-links--hidden");
    });

    // Fonction pour fermer le menu
    function closeMenu() {
    $('.burger-menu').removeClass("burger-menu--opened");
    $('.burger-menu').addClass("burger-menu--closed");
    $('.menu-links').addClass("menu-links--hidden");
    }

    // Fermer le menu lorsque l'utilisateur clique ailleurs que sur le menu ou les liens du menu
    $(document).on('click', function(event) {
    if (!$(event.target).closest('.burger-menu').length && !$(event.target).closest('.menu-links').length) {
        closeMenu();
    }
    });

    // Fermer le menu lorsque l'utilisateur fait défiler la page
    $(window).on('scroll', function() {
    closeMenu();
    });
</script>