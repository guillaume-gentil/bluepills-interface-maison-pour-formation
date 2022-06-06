console.warn("Chargement JS : OK");  //DEBUG


// la fonction init contient tout le code qui doit etre exécuté au chargement de la page
function init() {
    
    // Au chargement de la page, on démarre le module activeCat
    activeCat.init();
    
}

// On attend le chargement complet du DOM par le navigateur avant de lancer le script
document.addEventListener('DOMContentLoaded', init);
