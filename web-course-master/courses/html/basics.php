<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Les Bases du HTML</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que le HTML?</h2>
        <p class="poppins-light">
            HTML signifie HyperText Markup Language. C'est le langage qui structure les pages web.
            Il utilise des balises pour définir les différents éléments: titres, paragraphes, liens, images, etc.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Structure de base</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Ma page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Bonjour&lt;/h1&gt;
    &lt;p&gt;Mon premier site&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>&lt;!DOCTYPE html&gt; : déclare que c'est du HTML5</li>
            <li>&lt;html&gt; : balise racine</li>
            <li>&lt;head&gt; : informations sur la page</li>
            <li>&lt;body&gt; : contenu visible de la page</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les titres</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;h1&gt;Titre principal&lt;/h1&gt;
&lt;h2&gt;Sous-titre&lt;/h2&gt;
&lt;h3&gt;Titre niveau 3&lt;/h3&gt;
&lt;h4&gt;Titre niveau 4&lt;/h4&gt;
&lt;h5&gt;Titre niveau 5&lt;/h5&gt;
&lt;h6&gt;Titre niveau 6&lt;/h6&gt;</pre>
        </div>
        <p class="poppins-light">
            h1 est le plus important, h6 le moins important. Utilisez h1 une seule fois par page.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les paragraphes et le texte</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;

&lt;p&gt;Texte en &lt;strong&gt;gras&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;Texte en &lt;em&gt;italique&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;Texte &lt;u&gt;souligné&lt;/u&gt;&lt;/p&gt;

&lt;br&gt;

&lt;hr&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>&lt;p&gt; : paragraphe</li>
            <li>&lt;strong&gt; : texte important (gras)</li>
            <li>&lt;em&gt; : texte accentué (italique)</li>
            <li>&lt;br&gt; : retour à la ligne</li>
            <li>&lt;hr&gt; : ligne horizontale</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les liens</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;a href="https://google.com"&gt;Vers Google&lt;/a&gt;

&lt;a href="page2.html"&gt;Vers page 2&lt;/a&gt;

&lt;a href="https://google.com" target="_blank"&gt;Nouvel onglet&lt;/a&gt;

&lt;a href="mailto:contact@site.com"&gt;Envoyer un email&lt;/a&gt;

&lt;a href="#section1"&gt;Aller à la section&lt;/a&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>href : destination du lien</li>
            <li>target="_blank" : ouvre dans un nouvel onglet</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les images</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;img src="image.jpg" alt="Description de l'image"&gt;

&lt;img src="images/photo.png" alt="Photo" width="300"&gt;

&lt;img src="https://site.com/image.jpg" alt="Image externe"&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>src : chemin vers l'image</li>
            <li>alt : texte alternatif si l'image ne charge pas</li>
            <li>width/height : dimensions</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les listes</h2>
        <h3 class="poppins-medium">Liste non ordonnée</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;ul&gt;
    &lt;li&gt;Élément 1&lt;/li&gt;
    &lt;li&gt;Élément 2&lt;/li&gt;
    &lt;li&gt;Élément 3&lt;/li&gt;
&lt;/ul&gt;</pre>
        </div>

        <h3 class="poppins-medium">Liste ordonnée</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;ol&gt;
    &lt;li&gt;Premier&lt;/li&gt;
    &lt;li&gt;Deuxième&lt;/li&gt;
    &lt;li&gt;Troisième&lt;/li&gt;
&lt;/ol&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les divs et spans</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;div&gt;
    &lt;h2&gt;Conteneur&lt;/h2&gt;
    &lt;p&gt;Du contenu&lt;/p&gt;
&lt;/div&gt;

&lt;p&gt;Texte avec un &lt;span&gt;mot&lt;/span&gt; en span&lt;/p&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>&lt;div&gt; : conteneur de bloc</li>
            <li>&lt;span&gt; : conteneur en ligne</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les formulaires</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;form action="traitement.php" method="POST"&gt;
    &lt;label for="nom"&gt;Nom:&lt;/label&gt;
    &lt;input type="text" id="nom" name="nom" required&gt;
    
    &lt;label for="email"&gt;Email:&lt;/label&gt;
    &lt;input type="email" id="email" name="email" required&gt;
    
    &lt;label for="password"&gt;Mot de passe:&lt;/label&gt;
    &lt;input type="password" id="password" name="password"&gt;
    
    &lt;label for="age"&gt;Age:&lt;/label&gt;
    &lt;input type="number" id="age" name="age" min="0" max="120"&gt;
    
    &lt;label for="message"&gt;Message:&lt;/label&gt;
    &lt;textarea id="message" name="message" rows="5"&gt;&lt;/textarea&gt;
    
    &lt;button type="submit"&gt;Envoyer&lt;/button&gt;
&lt;/form&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Balises sémantiques</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;header&gt;En-tête du site&lt;/header&gt;

&lt;nav&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#"&gt;Accueil&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;main&gt;
    &lt;section&gt;
        &lt;h2&gt;Section 1&lt;/h2&gt;
        &lt;article&gt;
            &lt;h3&gt;Article&lt;/h3&gt;
            &lt;p&gt;Contenu&lt;/p&gt;
        &lt;/article&gt;
    &lt;/section&gt;
    
    &lt;aside&gt;Barre latérale&lt;/aside&gt;
&lt;/main&gt;

&lt;footer&gt;Pied de page&lt;/footer&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les tableaux</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;table&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Nom&lt;/th&gt;
            &lt;th&gt;Age&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Jean&lt;/td&gt;
            &lt;td&gt;25&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Marie&lt;/td&gt;
            &lt;td&gt;30&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>