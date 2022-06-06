const activeCat = {

    /**
     * La fonction init lance les écoute des éléments
     */
    init: () => {
        /* pointe les éléments de la liste des catégories */
        const categorieListElmt = document.querySelectorAll('.categories__link');
        
        /* Écoute des clic sur l'élément */
        for (const categorieItem of categorieListElmt) {
            categorieItem.addEventListener('click', activeCat.handleAddActiveCategorie);
        }
    },
    
    /**
     * La fonction handleActiveCategorie permet d'ajouter la class "active" au lien de la catégorie cliquée ainsi qu'au titre du contenu correspondant
     * @param {*} event
     */
    handleAddActiveCategorie: (event) => {  // utilisation de la notation fléchée pour déclarer une fonction
        /* 1. désactive la précédante categorie active */
        if (sessionStorage.getItem('activeCat')) {  // utilisation de la comparaison "truthy => presque vrai"
            document.querySelector(`a[data-categorie="${sessionStorage.getItem('activeCat')}"]`).classList.remove('active');  // sur le menu des catégories
            document.querySelector(`#${sessionStorage.getItem('activeCat')}`).classList.remove('active');  // sur le titre dans la zone de contenu
        }
    
        /* 2. stock le nom de la catégorie actve en sessionStorage */
        sessionStorage.setItem('activeCat', `${event.currentTarget.innerHTML}`);
    
        /* 3. ajoute la classe "active" à la categorie target */
        document.querySelector(`a[data-categorie="${event.currentTarget.innerHTML}"]`).classList.add('active');  // sur le menu des catégories
        document.querySelector(`#${event.currentTarget.innerHTML}`).classList.add('active');  // sur le titre dans la zone de contenu
    },

}
