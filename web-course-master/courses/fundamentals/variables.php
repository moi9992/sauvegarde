<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Variables, Boucles et Conditions</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Les Variables</h2>
        <p class="poppins-light">
            Une variable est une boîte qui stocke une information. On peut la réutiliser et la modifier.
        </p>
        <h3 class="poppins-medium">En JavaScript</h3>
        <div class="code-block">
            <pre class="google-sans-code">let age = 25;
const nom = "Jean";
var ancien = "éviter";

age = 26;</pre>
        </div>
        <ul class="poppins-light">
            <li>let : variable modifiable</li>
            <li>const : constante, ne peut pas être modifiée</li>
            <li>var : ancienne syntaxe, à éviter</li>
        </ul>

        <h3 class="poppins-medium">En PHP</h3>
        <div class="code-block">
            <pre class="google-sans-code">$age = 25;
$nom = "Jean";
$prix = 19.99;

$age = 26;</pre>
        </div>
        <p class="poppins-light">En PHP, toutes les variables commencent par $ et sont modifiables par défaut.</p>

        <h3 class="poppins-medium">Types de données</h3>
        <div class="code-block">
            <pre class="google-sans-code">let nombre = 42;
let texte = "Bonjour";
let decimal = 3.14;
let vrai = true;
let faux = false;
let tableau = [1, 2, 3];
let objet = {nom: "Jean", age: 25};</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les Conditions</h2>
        <p class="poppins-light">
            Les conditions permettent d'exécuter du code seulement si une condition est vraie.
        </p>
        <h3 class="poppins-medium">if / else</h3>
        <div class="code-block">
            <pre class="google-sans-code">let age = 18;

if (age >= 18) {
    console.log("Majeur");
} else {
    console.log("Mineur");
}</pre>
        </div>

        <h3 class="poppins-medium">else if</h3>
        <div class="code-block">
            <pre class="google-sans-code">let note = 15;

if (note >= 16) {
    console.log("Très bien");
} else if (note >= 14) {
    console.log("Bien");
} else if (note >= 10) {
    console.log("Passable");
} else {
    console.log("Insuffisant");
}</pre>
        </div>

        <h3 class="poppins-medium">Opérateurs de comparaison</h3>
        <div class="code-block">
            <pre class="google-sans-code">== égal à (valeur)
=== égal à (valeur et type)
!= différent de
!== différent de (valeur et type)
> supérieur à
< inférieur à
>= supérieur ou égal
<= inférieur ou égal</pre>
        </div>

        <h3 class="poppins-medium">Opérateurs logiques</h3>
        <div class="code-block">
            <pre class="google-sans-code">if (age >= 18 && hasLicense) {
    console.log("Peut conduire");
}

if (isAdmin || isModerator) {
    console.log("Accès autorisé");
}

if (!isBlocked) {
    console.log("Non bloqué");
}</pre>
        </div>
        <ul class="poppins-light">
            <li>&& : ET logique, les deux conditions doivent être vraies</li>
            <li>|| : OU logique, au moins une condition doit être vraie</li>
            <li>! : NON logique, inverse la condition</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Les Boucles</h2>
        <p class="poppins-light">
            Les boucles permettent de répéter du code plusieurs fois.
        </p>

        <h3 class="poppins-medium">Boucle for</h3>
        <div class="code-block">
            <pre class="google-sans-code">for (let i = 0; i < 5; i++) {
    console.log(i);
}</pre>
        </div>
        <p class="poppins-light">
            Affiche: 0, 1, 2, 3, 4
        </p>
        <ul class="poppins-light">
            <li>let i = 0 : initialisation du compteur</li>
            <li>i < 5 : condition pour continuer</li>
            <li>i++ : incrémentation après chaque tour</li>
        </ul>

        <h3 class="poppins-medium">Boucle while</h3>
        <div class="code-block">
            <pre class="google-sans-code">let i = 0;
while (i < 5) {
    console.log(i);
    i++;
}</pre>
        </div>
        <p class="poppins-light">
            La boucle continue tant que la condition est vraie.
        </p>

        <h3 class="poppins-medium">Boucle foreach (pour tableaux)</h3>
        <div class="code-block">
            <pre class="google-sans-code">let fruits = ["pomme", "banane", "orange"];

fruits.forEach(function(fruit) {
    console.log(fruit);
});</pre>
        </div>

        <h3 class="poppins-medium">For...of (JavaScript moderne)</h3>
        <div class="code-block">
            <pre class="google-sans-code">let nombres = [10, 20, 30];

for (let nombre of nombres) {
    console.log(nombre);
}</pre>
        </div>

        <h3 class="poppins-medium">En PHP</h3>
        <div class="code-block">
            <pre class="google-sans-code">for ($i = 0; $i < 5; $i++) {
    echo $i;
}

$fruits = ["pomme", "banane", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit;
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Exemples pratiques</h2>
        
        <h3 class="poppins-medium">Afficher les nombres pairs de 0 à 10</h3>
        <div class="code-block">
            <pre class="google-sans-code">for (let i = 0; i <= 10; i++) {
    if (i % 2 === 0) {
        console.log(i);
    }
}</pre>
        </div>

        <h3 class="poppins-medium">Calculer la somme de 1 à 100</h3>
        <div class="code-block">
            <pre class="google-sans-code">let somme = 0;
for (let i = 1; i <= 100; i++) {
    somme += i;
}
console.log(somme);</pre>
        </div>

        <h3 class="poppins-medium">Vérifier si un nombre est premier</h3>
        <div class="code-block">
            <pre class="google-sans-code">let nombre = 17;
let estPremier = true;

for (let i = 2; i < nombre; i++) {
    if (nombre % i === 0) {
        estPremier = false;
        break;
    }
}

if (estPremier) {
    console.log("Premier");
} else {
    console.log("Pas premier");
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>