<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Les Bases du CSS</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que le CSS?</h2>
        <p class="poppins-light">
            CSS signifie Cascading Style Sheets. C'est le langage qui permet de styliser les pages HTML:
            couleurs, tailles, positions, animations, etc.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Trois façons d'utiliser le CSS</h2>
        <h3 class="poppins-medium">CSS externe (recommandé)</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;head&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
&lt;/head&gt;</pre>
        </div>

        <h3 class="poppins-medium">CSS interne</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;head&gt;
    &lt;style&gt;
        p {
            color: blue;
        }
    &lt;/style&gt;
&lt;/head&gt;</pre>
        </div>

        <h3 class="poppins-medium">CSS inline</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;p style="color: blue;"&gt;Texte bleu&lt;/p&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Syntaxe CSS</h2>
        <div class="code-block">
            <pre class="google-sans-code">selecteur {
    propriete: valeur;
    autre-propriete: valeur;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les sélecteurs</h2>
        <h3 class="poppins-medium">Sélecteur d'élément</h3>
        <div class="code-block">
            <pre class="google-sans-code">p {
    color: blue;
}

h1 {
    font-size: 32px;
}</pre>
        </div>

        <h3 class="poppins-medium">Sélecteur de classe</h3>
        <div class="code-block">
            <pre class="google-sans-code">.ma-classe {
    color: red;
}

&lt;p class="ma-classe"&gt;Texte rouge&lt;/p&gt;</pre>
        </div>

        <h3 class="poppins-medium">Sélecteur d'ID</h3>
        <div class="code-block">
            <pre class="google-sans-code">#mon-id {
    background: yellow;
}

&lt;div id="mon-id"&gt;Fond jaune&lt;/div&gt;</pre>
        </div>

        <h3 class="poppins-medium">Sélecteurs combinés</h3>
        <div class="code-block">
            <pre class="google-sans-code">div p {
    color: green;
}

div > p {
    color: blue;
}

div.container {
    width: 100%;
}

p.important {
    font-weight: bold;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Couleurs</h2>
        <div class="code-block">
            <pre class="google-sans-code">.element {
    color: red;
    color: #ff0000;
    color: rgb(255, 0, 0);
    color: rgba(255, 0, 0, 0.5);
    
    background-color: blue;
    background-color: #0000ff;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Texte</h2>
        <div class="code-block">
            <pre class="google-sans-code">p {
    font-size: 16px;
    font-weight: bold;
    font-family: Arial, sans-serif;
    text-align: center;
    text-decoration: underline;
    line-height: 1.5;
    letter-spacing: 2px;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Dimensions</h2>
        <div class="code-block">
            <pre class="google-sans-code">.box {
    width: 300px;
    height: 200px;
    max-width: 100%;
    min-height: 100px;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Marges et espacement</h2>
        <div class="code-block">
            <pre class="google-sans-code">.element {
    margin: 20px;
    margin-top: 10px;
    margin-right: 15px;
    margin-bottom: 10px;
    margin-left: 15px;
    margin: 10px 20px;
    margin: 10px 20px 10px 20px;
    
    padding: 20px;
    padding-top: 10px;
    padding: 10px 20px;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Bordures</h2>
        <div class="code-block">
            <pre class="google-sans-code">.box {
    border: 2px solid black;
    border-top: 1px dashed red;
    border-radius: 10px;
    border-radius: 50%;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Affichage</h2>
        <div class="code-block">
            <pre class="google-sans-code">.element {
    display: block;
    display: inline;
    display: inline-block;
    display: flex;
    display: grid;
    display: none;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Position</h2>
        <div class="code-block">
            <pre class="google-sans-code">.element {
    position: static;
    position: relative;
    position: absolute;
    position: fixed;
    position: sticky;
    
    top: 10px;
    right: 20px;
    bottom: 10px;
    left: 20px;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Ombres</h2>
        <div class="code-block">
            <pre class="google-sans-code">.box {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.text {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Transitions et animations</h2>
        <div class="code-block">
            <pre class="google-sans-code">.button {
    background: blue;
    transition: background 0.3s;
}

.button:hover {
    background: red;
}

.element {
    transition: all 0.3s ease;
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>