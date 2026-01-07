document.addEventListener('DOMContentLoaded', function() {
    const btnReponses = document.querySelectorAll('.btn-reponse');
    const resultatDiv = document.getElementById('resultat');
    const btnNouvelle = document.getElementById('nouvelle-question');
    const selectTheme = document.getElementById('theme');
    const selectDifficulte = document.getElementById('difficulte');
    
    btnReponses.forEach(btn => {
        btn.addEventListener('click', function() {
            // Desactiver tous les boutons apres une reponse
            btnReponses.forEach(b => b.disabled = true);
            
            const estCorrecte = this.dataset.correcte === '1';
            
            // Afficher le resultat
            if (estCorrecte) {
                this.classList.add('correcte');
                resultatDiv.innerHTML = '<p class="succes">Gagner</p>';
            } else {
                this.classList.add('incorrecte');
                // Montrer la bonne reponse a la place d la mauvaise reponse selectionner 
                btnReponses.forEach(b => {
                    if (b.dataset.correcte === '1') {
                        b.classList.add('correcte');
                    }
                });
                resultatDiv.innerHTML = '<p class="erreur">Perdu</p>';
            }
        });
    });
    

    btnNouvelle.addEventListener('click', function() {
        const theme = selectTheme.value;
        const difficulte = selectDifficulte.value;
        
        let url = 'index.php?'; // '?' = j'vais mettre des paramettre 
        if (theme) url += 'theme=' + theme + '&'; // '&' permet de dire a l'url que y a encore un parametre apres a prendre
        if (difficulte) url += 'difficulte=' + difficulte;
        
        window.location.href = url;
    });
    
    // Recharger aussi quand on change les filtres
    selectTheme.addEventListener('change', function() {
        btnNouvelle.click();
    });
    
    selectDifficulte.addEventListener('change', function() {
        btnNouvelle.click();
    });
});