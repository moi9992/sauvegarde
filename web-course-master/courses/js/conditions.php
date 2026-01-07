<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Exercice JavaScript : Conditions</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Documentation</h2>
        <p class="poppins-light">
            Les conditions permettent d'exécuter du code différent selon une situation.
        </p>
        <div class="code-block">
            <pre class="google-sans-code">if (condition) {
    // code si vrai
} else if (autreCondition) {
    // code si autreCondition vrai
} else {
    // code sinon
}

Opérateurs:
== égal
=== égal strict (valeur et type)
!= différent
!== différent strict
> supérieur
< inférieur
>= supérieur ou égal
<= inférieur ou égal
&& ET logique
|| OU logique
! NON logique</pre>
        </div>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 1 : Vérifier l'âge</h3>
        <p class="poppins-light">
            Créez une variable age avec une valeur.
            Si age est supérieur ou égal à 18, affichez "Majeur" dans la console.
            Sinon, affichez "Mineur".
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 2 : Notes</h3>
        <p class="poppins-light">
            Créez une variable note avec une valeur entre 0 et 20.
            Affichez dans la console:
        </p>
        <ul class="poppins-light">
            <li>"Très bien" si note >= 16</li>
            <li>"Bien" si note >= 14</li>
            <li>"Assez bien" si note >= 12</li>
            <li>"Passable" si note >= 10</li>
            <li>"Insuffisant" si note < 10</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 3 : Nombre pair ou impair</h3>
        <p class="poppins-light">
            Créez une variable nombre.
            Si le nombre est pair, affichez "Pair", sinon affichez "Impair".
            Indice: utilisez l'opérateur modulo %
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 4 : Permis de conduire</h3>
        <p class="poppins-light">
            Créez deux variables: age et hasLicense (true ou false).
            Si age >= 18 ET hasLicense est true, affichez "Peut conduire".
            Sinon, affichez "Ne peut pas conduire".
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 5 : Plus grand nombre</h3>
        <p class="poppins-light">
            Créez trois variables: a, b, c avec des nombres.
            Affichez le plus grand des trois nombres.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 6 : Accès au site</h3>
        <p class="poppins-light">
            Créez trois variables: isConnected, isAdmin, isBanned (true ou false).
            Règles d'accès:
        </p>
        <ul class="poppins-light">
            <li>Si isBanned est true, afficher "Accès refusé"</li>
            <li>Si isAdmin est true, afficher "Accès administrateur"</li>
            <li>Si isConnected est true, afficher "Accès membre"</li>
            <li>Sinon, afficher "Veuillez vous connecter"</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 1</h2>
        <div class="code-block">
            <pre class="google-sans-code">let age = 20;

if (age >= 18) {
    console.log("Majeur");
} else {
    console.log("Mineur");
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 3</h2>
        <div class="code-block">
            <pre class="google-sans-code">let nombre = 15;

if (nombre % 2 === 0) {
    console.log("Pair");
} else {
    console.log("Impair");
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>