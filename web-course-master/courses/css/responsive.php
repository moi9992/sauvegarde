<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Responsive Design</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que le Responsive?</h2>
        <p class="poppins-light">
            Le responsive design permet à un site de s'adapter automatiquement à toutes les tailles d'écran:
            ordinateur, tablette, smartphone. Un seul code HTML/CSS fonctionne partout.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">La balise viewport</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</pre>
        </div>
        <p class="poppins-light">
            Cette balise dans le head est obligatoire pour le responsive.
            Elle indique au navigateur d'adapter la largeur à l'écran de l'appareil.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Media Queries</h2>
        <p class="poppins-light">
            Les media queries permettent d'appliquer des styles CSS différents selon la taille de l'écran.
        </p>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    width: 1200px;
    padding: 20px;
}

@media (max-width: 768px) {
    .container {
        width: 100%;
        padding: 10px;
    }
}</pre>
        </div>
        <p class="poppins-light">
            max-width: 768px signifie "pour les écrans de 768px de large ou moins".
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Breakpoints standards</h2>
        <div class="code-block">
            <pre class="google-sans-code">Mobile: jusqu'à 576px
Tablette: 577px à 768px
Desktop petit: 769px à 992px
Desktop moyen: 993px à 1200px
Desktop large: 1201px et plus

@media (max-width: 576px) {
    /* Styles mobile */
}

@media (min-width: 577px) and (max-width: 768px) {
    /* Styles tablette */
}

@media (min-width: 769px) {
    /* Styles desktop */
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Approche Mobile First</h2>
        <p class="poppins-light">
            Mobile First signifie écrire d'abord les styles pour mobile, puis ajouter les styles pour écrans plus grands.
        </p>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    width: 100%;
    padding: 10px;
}

@media (min-width: 768px) {
    .container {
        width: 750px;
        padding: 20px;
    }
}

@media (min-width: 1200px) {
    .container {
        width: 1170px;
    }
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Unités relatives</h2>
        <h3 class="poppins-medium">%</h3>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    width: 90%;
}</pre>
        </div>
        <p class="poppins-light">Relatif à la taille du parent</p>

        <h3 class="poppins-medium">vw et vh</h3>
        <div class="code-block">
            <pre class="google-sans-code">.section {
    width: 100vw;
    height: 100vh;
}

1vw = 1% de la largeur du viewport
1vh = 1% de la hauteur du viewport</pre>
        </div>

        <h3 class="poppins-medium">rem et em</h3>
        <div class="code-block">
            <pre class="google-sans-code">html {
    font-size: 16px;
}

h1 {
    font-size: 2rem;
}

1rem = taille de police de l'élément html
1em = taille de police de l'élément parent</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Images responsives</h2>
        <div class="code-block">
            <pre class="google-sans-code">img {
    max-width: 100%;
    height: auto;
}</pre>
        </div>
        <p class="poppins-light">
            max-width: 100% empêche l'image de dépasser son conteneur.
            height: auto garde les proportions de l'image.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Flexbox responsive</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    flex: 1 1 300px;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }
    
    .card {
        flex: 1 1 100%;
    }
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Grid responsive</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}</pre>
        </div>
        <p class="poppins-light">
            auto-fit crée autant de colonnes que possible.
            minmax(300px, 1fr) dit que chaque colonne fait minimum 300px.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Cacher des éléments</h2>
        <div class="code-block">
            <pre class="google-sans-code">.desktop-only {
    display: block;
}

.mobile-only {
    display: none;
}

@media (max-width: 768px) {
    .desktop-only {
        display: none;
    }
    
    .mobile-only {
        display: block;
    }
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Menu responsive</h2>
        <div class="code-block">
            <pre class="google-sans-code">nav {
    display: flex;
    justify-content: space-between;
}

.menu {
    display: flex;
    gap: 20px;
}

.burger {
    display: none;
}

@media (max-width: 768px) {
    .menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: white;
    }
    
    .menu.active {
        display: flex;
    }
    
    .burger {
        display: block;
    }
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Exemple complet de page responsive</h2>
        <div class="code-block">
            <pre class="google-sans-code">body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background: #333;
    color: white;
    padding: 20px;
}

.nav-menu {
    display: flex;
    gap: 30px;
    list-style: none;
}

.hero {
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url('hero.jpg');
    background-size: cover;
}

.cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin: 40px 0;
}

.card {
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

@media (max-width: 992px) {
    .cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    
    .nav-menu {
        flex-direction: column;
        gap: 10px;
    }
    
    .hero {
        height: 60vh;
    }
    
    .cards {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

@media (max-width: 576px) {
    header {
        padding: 10px;
    }
    
    .hero {
        height: 50vh;
    }
    
    .card {
        padding: 20px;
    }
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Bonnes pratiques</h2>
        <ul class="poppins-light">
            <li>Toujours inclure la balise viewport dans le head</li>
            <li>Tester sur de vrais appareils ou avec les outils de développement du navigateur</li>
            <li>Utiliser des unités relatives plutôt que des pixels fixes</li>
            <li>Penser mobile first: commencer par le design mobile</li>
            <li>Ne pas oublier les tailles intermédiaires comme les tablettes</li>
            <li>Optimiser les images pour le web</li>
            <li>Tester la lisibilité du texte sur petit écran</li>
            <li>Rendre les boutons assez grands pour être cliquables sur mobile</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Outils de test</h2>
        <ul class="poppins-light">
            <li>Chrome DevTools: F12 puis cliquer sur l'icône mobile/tablette</li>
            <li>Firefox Responsive Design Mode: Ctrl + Shift + M</li>
            <li>Tester sur BrowserStack ou Sauce Labs pour de vrais appareils</li>
            <li>Utiliser Am I Responsive pour voir le site sur plusieurs écrans</li>
        </ul>
    </div>
</div>

<?php require '../../components/footer.php'; ?>