<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Structure PHP: header.php, footer.php et index.php</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Pourquoi séparer header et footer?</h2>
        <p class="poppins-light">
            En PHP, on sépare le header et le footer pour éviter de répéter le même code sur chaque page.
            Imaginez avoir 50 pages avec le même menu : si vous devez changer un lien, il faudrait modifier 50 fichiers.
            Avec header.php et footer.php, vous ne modifiez qu'un seul fichier.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Structure du header.php</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;html lang="fr"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;base href="http://localhost/web-cours/"&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
    &lt;title&gt;Dev course&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;nav&gt;
            &lt;!-- Votre navigation --&gt;
        &lt;/nav&gt;
    &lt;/header&gt;</pre>
        </div>
        <p class="poppins-light">
            Le header contient tout ce qui se trouve avant le contenu principal : les balises HTML d'ouverture,
            le head avec les liens CSS, et la navigation du site.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Structure du footer.php</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;/body&gt;
&lt;script src="script.js"&gt;&lt;/script&gt;
&lt;/html&gt;</pre>
        </div>
        <p class="poppins-light">
            Le footer ferme les balises body et html, et charge les fichiers JavaScript.
            On place le JS à la fin pour que la page s'affiche plus rapidement.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Utilisation dans index.php</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php require 'components/header.php'; ?&gt;

&lt;div class="container"&gt;
    &lt;h1&gt;Contenu de votre page&lt;/h1&gt;
    &lt;p&gt;Votre contenu ici&lt;/p&gt;
&lt;/div&gt;

&lt;?php require 'components/footer.php'; ?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Éviter les problèmes de redirection</h2>
        <p class="poppins-light">
            La balise &lt;base href=""&gt; dans le header définit l'URL de base de votre site.
            Tous les liens relatifs partiront de cette URL.
        </p>
        <div class="code-block">
            <pre class="google-sans-code">&lt;base href="http://localhost/web-cours/"&gt;</pre>
        </div>
        <p class="poppins-light">
            Avec cette balise, un lien comme href="style.css" pointera toujours vers http://localhost/web-cours/style.css,
            peu importe dans quel sous-dossier vous vous trouvez.
        </p>
        <h3 class="poppins-medium">Chemins relatifs vs absolus</h3>
        <p class="poppins-light">
            Sans balise base, utilisez des chemins corrects selon votre emplacement:
        </p>
        <ul class="poppins-light">
            <li>Depuis index.php: href="style.css"</li>
            <li>Depuis courses/html/basics.php: href="../../style.css"</li>
        </ul>
        <p class="poppins-light">
            Le ../ remonte d'un dossier. Deux ../ remontent de deux dossiers.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">require vs include</h2>
        <p class="poppins-light">
            require : Si le fichier n'existe pas, le script s'arrête complètement.
            À utiliser pour les fichiers essentiels comme header.php et footer.php.
        </p>
        <p class="poppins-light">
            include : Si le fichier n'existe pas, le script continue avec un warning.
            À utiliser pour des éléments optionnels.
        </p>
    </div>
</div>

<?php require '../../components/footer.php'; ?>