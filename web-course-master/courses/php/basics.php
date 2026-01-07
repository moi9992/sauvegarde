<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Les Bases du PHP</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que PHP?</h2>
        <p class="poppins-light">
            PHP est un langage côté serveur qui permet de créer des pages web dynamiques.
            Contrairement au HTML qui affiche du contenu statique, PHP peut générer du contenu en fonction de données,
            d'utilisateurs connectés, de bases de données, etc.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Syntaxe de base</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
    echo "Bonjour";
    echo 'Monde';
?&gt;</pre>
        </div>
        <ul class="poppins-light">
            <li>Le code PHP commence par &lt;?php et finit par ?&gt;</li>
            <li>Chaque instruction se termine par un point-virgule ;</li>
            <li>echo affiche du contenu</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Variables</h2>
        <div class="code-block">
            <pre class="google-sans-code">$nom = "Jean";
$age = 25;
$prix = 19.99;
$estConnecte = true;

echo "Bonjour " . $nom;
echo "Vous avez $age ans";</pre>
        </div>
        <ul class="poppins-light">
            <li>Les variables commencent toujours par $</li>
            <li>On peut concaténer avec . ou directement dans les doubles quotes</li>
            <li>PHP est faiblement typé, pas besoin de déclarer le type</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Tableaux</h2>
        <h3 class="poppins-medium">Tableau simple</h3>
        <div class="code-block">
            <pre class="google-sans-code">$fruits = ["pomme", "banane", "orange"];

echo $fruits[0];
echo $fruits[1];

$fruits[] = "fraise";</pre>
        </div>

        <h3 class="poppins-medium">Tableau associatif</h3>
        <div class="code-block">
            <pre class="google-sans-code">$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 25
];

echo $personne["nom"];
echo $personne["age"];</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Conditions</h2>
        <div class="code-block">
            <pre class="google-sans-code">$age = 18;

if ($age >= 18) {
    echo "Majeur";
} elseif ($age >= 16) {
    echo "Presque majeur";
} else {
    echo "Mineur";
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Boucles</h2>
        <h3 class="poppins-medium">Boucle for</h3>
        <div class="code-block">
            <pre class="google-sans-code">for ($i = 0; $i < 5; $i++) {
    echo $i;
}</pre>
        </div>

        <h3 class="poppins-medium">Boucle foreach</h3>
        <div class="code-block">
            <pre class="google-sans-code">$fruits = ["pomme", "banane", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit;
}

$personne = ["nom" => "Jean", "age" => 25];

foreach ($personne as $cle => $valeur) {
    echo "$cle: $valeur";
}</pre>
        </div>

        <h3 class="poppins-medium">Boucle while</h3>
        <div class="code-block">
            <pre class="google-sans-code">$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Fonctions</h2>
        <div class="code-block">
            <pre class="google-sans-code">function direBonjour($nom) {
    return "Bonjour " . $nom;
}

echo direBonjour("Jean");

function additionner($a, $b) {
    return $a + $b;
}

$resultat = additionner(5, 3);</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Superglobales</h2>
        <h3 class="poppins-medium">$_GET</h3>
        <div class="code-block">
            <pre class="google-sans-code">$id = $_GET['id'];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}</pre>
        </div>
        <p class="poppins-light">Récupère les données de l'URL: page.php?id=5&page=2</p>

        <h3 class="poppins-medium">$_POST</h3>
        <div class="code-block">
            <pre class="google-sans-code">if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
}</pre>
        </div>
        <p class="poppins-light">Récupère les données d'un formulaire envoyé en POST</p>

        <h3 class="poppins-medium">$_SESSION</h3>
        <div class="code-block">
            <pre class="google-sans-code">session_start();

$_SESSION['user_id'] = 123;
$_SESSION['username'] = "Jean";

$userId = $_SESSION['user_id'];</pre>
        </div>
        <p class="poppins-light">Stocke des données pendant toute la session de l'utilisateur</p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Include et Require</h2>
        <div class="code-block">
            <pre class="google-sans-code">include 'header.php';
require 'config.php';

include_once 'functions.php';
require_once 'database.php';</pre>
        </div>
        <ul class="poppins-light">
            <li>include : inclut un fichier, warning si introuvable</li>
            <li>require : inclut un fichier, erreur fatale si introuvable</li>
            <li>_once : n'inclut qu'une seule fois même si appelé plusieurs fois</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Mélanger PHP et HTML</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
$utilisateurs = ["Jean", "Marie", "Paul"];
?&gt;

&lt;ul&gt;
    &lt;?php foreach ($utilisateurs as $user): ?&gt;
        &lt;li&gt;&lt;?= $user ?&gt;&lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;

&lt;?php if ($estConnecte): ?&gt;
    &lt;p&gt;Bienvenue&lt;/p&gt;
&lt;?php else: ?&gt;
    &lt;p&gt;Connectez-vous&lt;/p&gt;
&lt;?php endif; ?&gt;</pre>
        </div>
        <p class="poppins-light">&lt;?= est un raccourci pour &lt;?php echo</p>
    </div>
</div>

<?php require '../../components/footer.php'; ?>