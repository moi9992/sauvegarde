<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">CSS Flexbox</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Introduction à Flexbox</h2>
        <p class="poppins-light">
            Flexbox est un système de mise en page CSS qui facilite l'alignement et la distribution d'éléments.
            Il permet de créer des layouts responsive facilement.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Activer Flexbox</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
}</pre>
        </div>
        <p class="poppins-light">
            Dès qu'on ajoute display: flex sur un élément, il devient un conteneur flex
            et ses enfants directs deviennent des éléments flex.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Direction des éléments</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    flex-direction: row;
}

flex-direction: row;
flex-direction: row-reverse;
flex-direction: column;
flex-direction: column-reverse;</pre>
        </div>
        <ul class="poppins-light">
            <li>row : éléments en ligne (par défaut)</li>
            <li>row-reverse : éléments en ligne inversés</li>
            <li>column : éléments en colonne</li>
            <li>column-reverse : éléments en colonne inversés</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Justification (axe principal)</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    justify-content: center;
}

justify-content: flex-start;
justify-content: flex-end;
justify-content: center;
justify-content: space-between;
justify-content: space-around;
justify-content: space-evenly;</pre>
        </div>
        <ul class="poppins-light">
            <li>flex-start : alignés au début</li>
            <li>flex-end : alignés à la fin</li>
            <li>center : centrés</li>
            <li>space-between : espace entre les éléments</li>
            <li>space-around : espace autour de chaque élément</li>
            <li>space-evenly : espace égal partout</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Alignement (axe secondaire)</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    align-items: center;
}

align-items: flex-start;
align-items: flex-end;
align-items: center;
align-items: stretch;
align-items: baseline;</pre>
        </div>
        <ul class="poppins-light">
            <li>flex-start : alignés en haut</li>
            <li>flex-end : alignés en bas</li>
            <li>center : centrés verticalement</li>
            <li>stretch : étirés sur toute la hauteur</li>
            <li>baseline : alignés sur la ligne de base du texte</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Retour à la ligne</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    flex-wrap: wrap;
}

flex-wrap: nowrap;
flex-wrap: wrap;
flex-wrap: wrap-reverse;</pre>
        </div>
        <ul class="poppins-light">
            <li>nowrap : pas de retour à la ligne (par défaut)</li>
            <li>wrap : retour à la ligne si nécessaire</li>
            <li>wrap-reverse : retour à la ligne inversé</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Gap (espacement)</h2>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    gap: 20px;
}

gap: 10px;
gap: 20px 10px;
row-gap: 20px;
column-gap: 10px;</pre>
        </div>
        <p class="poppins-light">
            Gap crée un espacement entre les éléments flex sans avoir besoin de margin.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Propriétés sur les enfants</h2>
        <h3 class="poppins-medium">flex-grow</h3>
        <div class="code-block">
            <pre class="google-sans-code">.item {
    flex-grow: 1;
}</pre>
        </div>
        <p class="poppins-light">
            Définit comment l'élément grandit pour remplir l'espace disponible.
            0 = ne grandit pas, 1 = grandit proportionnellement.
        </p>

        <h3 class="poppins-medium">flex-shrink</h3>
        <div class="code-block">
            <pre class="google-sans-code">.item {
    flex-shrink: 1;
}</pre>
        </div>
        <p class="poppins-light">
            Définit comment l'élément rétrécit si l'espace manque.
        </p>

        <h3 class="poppins-medium">flex-basis</h3>
        <div class="code-block">
            <pre class="google-sans-code">.item {
    flex-basis: 200px;
}</pre>
        </div>
        <p class="poppins-light">
            Définit la taille de base de l'élément avant distribution de l'espace.
        </p>

        <h3 class="poppins-medium">Raccourci flex</h3>
        <div class="code-block">
            <pre class="google-sans-code">.item {
    flex: 1 1 200px;
}

flex: grow shrink basis;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Exemples pratiques</h2>
        
        <h3 class="poppins-medium">Centrer un élément</h3>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}</pre>
        </div>

        <h3 class="poppins-medium">Navigation horizontale</h3>
        <div class="code-block">
            <pre class="google-sans-code">.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}</pre>
        </div>

        <h3 class="poppins-medium">Grille de cartes</h3>
        <div class="code-block">
            <pre class="google-sans-code">.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    flex: 1 1 300px;
    min-width: 250px;
}</pre>
        </div>

        <h3 class="poppins-medium">Layout avec sidebar</h3>
        <div class="code-block">
            <pre class="google-sans-code">.container {
    display: flex;
}

.sidebar {
    flex: 0 0 250px;
}

.main-content {
    flex: 1;
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>