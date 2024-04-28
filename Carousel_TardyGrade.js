document.addEventListener("DOMContentLoaded", function() {
    const btnPrev = document.getElementById('btnSliderPrev');
    const btnNext = document.getElementById('btnSliderNext');
    const cartes = document.querySelectorAll('.CartePartie5');

    let currentIndex = 1;

    // Fonction pour afficher la carte suivante
    function showNextCard() {
        if (currentIndex < cartes.length - 2) {
            cartes[currentIndex].style.display = 'none';
            currentIndex++;
        }
        else {
            cartes[currentIndex].style.display = 'none';
            currentIndex = 1;
        }
        cartes[currentIndex].style.display = 'block';
    }

    // Fonction pour afficher la carte précédente
    function showPrevCard() {
        if (currentIndex > 1) {
            cartes[currentIndex].style.display = 'none';
            currentIndex--;
        }
        else {
            cartes[currentIndex].style.display = 'none';
            currentIndex = cartes.length - 2;
        }
        
        cartes[currentIndex].style.display = 'block';
    }

    // Événement pour le bouton suivant
    btnNext.addEventListener('click', function() {
        showNextCard();
    });

    // Événement pour le bouton précédent
    btnPrev.addEventListener('click', function() {
        showPrevCard();
    });
});
