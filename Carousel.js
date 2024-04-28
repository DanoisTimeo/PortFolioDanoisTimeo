const carousel = document.querySelector('.Carousel-Conteneur');
const listeProjets = document.querySelector('.Liste_Projets');
const cartesProjets = document.querySelectorAll('.Carte_Projet');
const prevBtn = document.getElementById('btnSliderPrev');
const nextBtn = document.getElementById('btnSliderNext');

let isDragging = false;
let startPosition = 0;
let deltaX = 0;

let index = 0;  


// Fonction pour déterminer le nombre d'éléments à déplacer en fonction de la largeur de l'écran
function getNumberOfCardsToMove() {
    return window.innerWidth < 1500 ? cartesProjets.length - 1 : cartesProjets.length - 2;
}

function getProjetWidth() {
    return cartesProjets[0].offsetWidth + 20;
}


// Fonction de démarrage du glissement
function startDragging(event) {
    isDragging = true;
    startPosition = event.clientX || event.touches[0].clientX;
    deltaX = 0;
}

// Fonction de glissement
function handleDragging(event) {
    if (isDragging) {
        const currentPosition = event.clientX || event.touches[0].clientX;
        deltaX = startPosition - currentPosition;
        listeProjets.style.transition = 'none';
        listeProjets.style.transform = `translateX(-${getProjetWidth() * index + deltaX}px)`;
    }
}

// Fonction de fin du glissement
function stopDragging() {
    if (isDragging) {
        isDragging = false;
        listeProjets.style.transition = 'transform 0.3s ease';
        if (Math.abs(deltaX) > getProjetWidth() / 2) {
            if (deltaX > 0) {
                slideRight();
            } else {
                slideLeft();
            }
        } else {
            translateCarousel();
        }
    }
}

// Défilement vers la gauche
function slideLeft() {
    if (index > 0) {
        index--;
        translateCarousel();
    }
    else {
        index = getNumberOfCardsToMove();
        translateCarousel();
    }
}

// Défilement vers la droite
function slideRight() {
    if (index < getNumberOfCardsToMove()) {
        index++;
        translateCarousel();
    }
    else {
        index = 0;
        translateCarousel();
    }
}

// Translate le carousel en fonction de l'index
function translateCarousel() {
    listeProjets.style.transition = 'transform 0.3s ease';
    listeProjets.style.transform = `translateX(-${getProjetWidth() * index}px)`;
}

// Écouteurs d'événements pour les boutons de défilement
prevBtn.addEventListener('click', slideLeft);
nextBtn.addEventListener('click', slideRight);

// Écouteurs d'événements pour le glissement avec la souris
carousel.addEventListener('mousedown', startDragging);
carousel.addEventListener('mousemove', handleDragging);
document.addEventListener('mouseup', stopDragging);

// Écouteurs d'événements pour le glissement avec le doigt (pour les appareils tactiles)
carousel.addEventListener('touchstart', startDragging);
carousel.addEventListener('touchmove', handleDragging);
document.addEventListener('touchend', stopDragging);
