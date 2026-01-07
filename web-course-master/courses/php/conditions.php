<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Exercice PHP : Conditions</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Documentation</h2>
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

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 1 : Température</h3>
        <p class="poppins-light">
            Créez une variable $temperature.
            Affichez "Il fait chaud" si >= 25,
            "Il fait bon" si >= 15,
            "Il fait froid" si < 15.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 2 : Jour de la semaine</h3>
        <p class="poppins-light">
            Créez une variable $jour avec un nombre de 1 à 7.
            Affichez le nom du jour correspondant (1=Lundi, 2=Mardi, etc.).
            Utilisez if/elseif ou switch.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 3 : Année bissextile</h3>
        <p class="poppins-light">
            Une année est bissextile si elle est divisible par 4,
            sauf si elle est divisible par 100, sauf si elle est divisible par 400.
            Créez une variable $annee et affichez si elle est bissextile.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 1</h2>
        <div class="code-block">
            <pre class="google-sans-code">$temperature = 20;

if ($temperature >= 25) {
    echo "Il fait chaud";
} elseif ($temperature >= 15) {
    echo "Il fait bon";
} else {
    echo "Il fait froid";
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>