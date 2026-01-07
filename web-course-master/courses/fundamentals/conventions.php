<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Conventions de Code</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Pourquoi des conventions?</h2>
        <p class="poppins-light">
            Les conventions permettent de garder un code lisible et professionnel.
            Quand plusieurs développeurs travaillent sur le même projet, tout le monde doit suivre les mêmes règles.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">HTML</h2>
        <h3 class="poppins-medium">Nommage des IDs et Classes</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;div id="main-header" class="header-container"&gt;
    &lt;h1 class="page-title"&gt;Titre&lt;/h1&gt;
&lt;/div&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>Utilisez le <strong>kebab-case</strong> pour les classes et IDs</li>
            <li>Les classes décrivent le style: <code>.btn-primary</code>, <code>.card-header</code></li>
            <li>Les IDs identifient un élément unique: <code>#navbar</code>, <code>#footer</code></li>
            <li>Évitez les noms génériques comme <code>.div1</code> ou <code>#element</code></li>
        </ul>

        <h3 class="poppins-medium">Structure</h3>
        <div class="code-block">
            <pre class="google-sans-code">&lt;section class="about-section"&gt;
    &lt;h2 class="section-title"&gt;À propos&lt;/h2&gt;
    &lt;p&gt;Contenu...&lt;/p&gt;
&lt;/section&gt;</pre>
        </div>
        <p class="poppins-light">Structurez vos pages avec des balises sémantiques.</p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">CSS</h2>
        <h3 class="poppins-medium">Organisation</h3>
        <div class="code-block">
            <pre class="google-sans-code">.welcome-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    padding: 10px;
    background-color: #fff;
}</pre>
        </div>
        <ul class="poppins-light">
            <li>Une propriété par ligne</li>
            <li>Regroupez les propriétés similaires ensemble</li>
            <li>Utilisez des couleurs en hexadécimal: <code>#fff</code> au lieu de <code>white</code></li>
            <li>Ajoutez des commentaires pour les sections importantes</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">JavaScript</h2>
        <h3 class="poppins-medium">Nommage des variables</h3>
        <div class="code-block">
            <pre class="google-sans-code">let userName = "Jean";
const MAX_USERS = 100;
let isConnected = false;</pre>
        </div>
        <ul class="poppins-light">
            <li>camelCase pour les variables et fonctions</li>
            <li>UPPER_CASE pour les constantes</li>
            <li>Noms descriptifs comme <code>isConnected</code></li>
            <li>Évitez les abréviations inutiles</li>
        </ul>

        <h3 class="poppins-medium">Fonctions</h3>
        <div class="code-block">
            <pre class="google-sans-code">function calculateTotal(price, quantity) {
    return price * quantity;
}

const getUser = () => {
    return userData;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">PHP</h2>
        <h3 class="poppins-medium">Nommage</h3>
        <div class="code-block">
            <pre class="google-sans-code">$userName = "Jean";
$userAge = 25;

function getUserData($userId) {
    return [
        "id" =&gt; $userId,
        "name" =&gt; "Jean",
        "age" =&gt; 25
    ];
}</pre>
        </div>
        <ul class="poppins-light">
            <li>camelCase pour variables et fonctions</li>
            <li>PascalCase pour les classes: <code>class UserManager</code></li>
            <li>Respecter PSR-12 pour une meilleure cohérence</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Récapitulatif</h2>
        <table class="conventions-table">
            <tr>
                <th class="poppins-medium">Langage</th>
                <th class="poppins-medium">Variables</th>
                <th class="poppins-medium">Fonctions</th>
                <th class="poppins-medium">Spécificités</th>
            </tr>
            <tr>
                <td>HTML</td>
                <td>kebab-case</td>
                <td>-</td>
                <td>Balises sémantiques</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>kebab-case</td>
                <td>-</td>
                <td>Organisation par sections</td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>camelCase</td>
                <td>camelCase</td>
                <td>const pour constantes</td>
            </tr>
            <tr>
                <td>PHP</td>
                <td>$camelCase</td>
                <td>camelCase</td>
                <td>PSR-12</td>
            </tr>
        </table>
    </div>
</div>

<?php require '../../components/footer.php'; ?>
