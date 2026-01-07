<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Exercice JavaScript : Boucles</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Documentation</h2>
        <p class="poppins-light">
            Les boucles permettent de répéter du code plusieurs fois.
        </p>
        <div class="code-block">
            <pre class="google-sans-code">Boucle for:
for (let i = 0; i < 10; i++) {
    console.log(i);
}

Boucle while:
let i = 0;
while (i < 10) {
    console.log(i);
    i++;
}

Boucle forEach (pour tableaux):
let nombres = [1, 2, 3];
nombres.forEach(function(nombre) {
    console.log(nombre);
});</pre>
        </div>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 1 : Compter jusqu'à 10</h3>
        <p class="poppins-light">
            Utilisez une boucle for pour afficher les nombres de 1 à 10 dans la console.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 2 : Nombres pairs</h3>
        <p class="poppins-light">
            Affichez tous les nombres pairs de 0 à 20.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 3 : Compte à rebours</h3>
        <p class="poppins-light">
            Affichez les nombres de 10 à 0 en ordre décroissant.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 4 : Somme</h3>
        <p class="poppins-light">
            Calculez la somme de tous les nombres de 1 à 100 et affichez le résultat.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 5 : Table de multiplication</h3>
        <p class="poppins-light">
            Affichez la table de multiplication de 7 (de 7x1 à 7x10).
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 6 : Parcourir un tableau</h3>
        <p class="poppins-light">
            Créez un tableau avec 5 prénoms. Utilisez une boucle forEach pour afficher chaque prénom.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 7 : Nombres impairs</h3>
        <p class="poppins-light">
            Affichez tous les nombres impairs de 1 à 50.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 8 : Factorielle</h3>
        <p class="poppins-light">
            Calculez la factorielle de 5 (5! = 5 x 4 x 3 x 2 x 1 = 120).
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 1</h2>
        <div class="code-block">
            <pre class="google-sans-code">for (let i = 1; i <= 10; i++) {
    console.log(i);
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 4</h2>
        <div class="code-block">
            <pre class="google-sans-code">let somme = 0;
for (let i = 1; i <= 100; i++) {
    somme += i;
}
console.log("Somme:", somme);</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 6</h2>
        <div class="code-block">
            <pre class="google-sans-code">let prenoms = ["Jean", "Marie", "Paul", "Sophie", "Luc"];

prenoms.forEach(function(prenom) {
    console.log(prenom);
});</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>