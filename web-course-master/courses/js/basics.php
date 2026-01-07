<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Les Bases du JavaScript</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que JavaScript?</h2>
        <p class="poppins-light">
            JavaScript est un langage de programmation qui s'exécute dans le navigateur.
            Il permet de rendre les pages web interactives en réagissant aux actions des utilisateurs.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Variables</h2>
        <div class="code-block">
            <pre class="google-sans-code">let nom = "Jean";
const age = 25;
let prix = 19.99;

nom = "Marie";
age = 26;</pre>
        </div>
        <ul class="poppins-light">
            <li>let : variable modifiable</li>
            <li>const : constante non modifiable</li>
            <li>Évitez var, utilisez let et const</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Afficher dans la console</h2>
        <div class="code-block">
            <pre class="google-sans-code">console.log("Message");
console.log(nom);
console.log("Nom:", nom, "Age:", age);

console.error("Erreur!");
console.warn("Attention!");</pre>
        </div>
        <p class="poppins-light">
            Ouvrez la console du navigateur avec F12 pour voir les messages.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Tableaux</h2>
        <div class="code-block">
            <pre class="google-sans-code">let fruits = ["pomme", "banane", "orange"];

console.log(fruits[0]);
console.log(fruits.length);

fruits.push("fraise");
fruits.pop();

fruits.forEach(function(fruit) {
    console.log(fruit);
});</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Objets</h2>
        <div class="code-block">
            <pre class="google-sans-code">let personne = {
    nom: "Dupont",
    prenom: "Jean",
    age: 25,
    direBonjour: function() {
        console.log("Bonjour!");
    }
};

console.log(personne.nom);
console.log(personne["age"]);
personne.direBonjour();</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Fonctions</h2>
        <h3 class="poppins-medium">Fonction classique</h3>
        <div class="code-block">
            <pre class="google-sans-code">function direBonjour(nom) {
    return "Bonjour " + nom;
}

let message = direBonjour("Jean");
console.log(message);</pre>
        </div>

        <h3 class="poppins-medium">Fonction fléchée</h3>
        <div class="code-block">
            <pre class="google-sans-code">const additionner = (a, b) => {
    return a + b;
};

const multiplier = (a, b) => a * b;

const direBonjour = nom => "Bonjour " + nom;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Manipuler le DOM</h2>
        <h3 class="poppins-medium">Sélectionner des éléments</h3>
        <div class="code-block">
            <pre class="google-sans-code">let element = document.getElementById("monId");
let elements = document.getElementsByClassName("maClasse");
let element = document.querySelector(".maClasse");
let elements = document.querySelectorAll(".maClasse");</pre>
        </div>

        <h3 class="poppins-medium">Modifier le contenu</h3>
        <div class="code-block">
            <pre class="google-sans-code">element.textContent = "Nouveau texte";
element.innerHTML = "&lt;strong&gt;Texte en gras&lt;/strong&gt;";</pre>
        </div>

        <h3 class="poppins-medium">Modifier le style</h3>
        <div class="code-block">
            <pre class="google-sans-code">element.style.color = "red";
element.style.backgroundColor = "blue";
element.style.fontSize = "20px";</pre>
        </div>

        <h3 class="poppins-medium">Ajouter/Retirer des classes</h3>
        <div class="code-block">
            <pre class="google-sans-code">element.classList.add("active");
element.classList.remove("hidden");
element.classList.toggle("visible");</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Événements</h2>
        <div class="code-block">
            <pre class="google-sans-code">let bouton = document.querySelector("#monBouton");

bouton.addEventListener("click", function() {
    console.log("Bouton cliqué!");
});

bouton.addEventListener("click", () => {
    console.log("Autre syntaxe");
});

let input = document.querySelector("#monInput");
input.addEventListener("input", (e) => {
    console.log(e.target.value);
});</pre>
        </div>
        <p class="poppins-light">
            Événements courants: click, input, change, submit, mouseover, mouseout, keydown, keyup
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Conditions et opérateurs</h2>
        <div class="code-block">
            <pre class="google-sans-code">let age = 18;

if (age >= 18) {
    console.log("Majeur");
} else {
    console.log("Mineur");
}

let estMajeur = age >= 18 ? "Oui" : "Non";

if (age >= 18 && hasLicense) {
    console.log("Peut conduire");
}

if (isAdmin || isModerator) {
    console.log("Accès autorisé");
}</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Fetch API</h2>
        <div class="code-block">
            <pre class="google-sans-code">fetch("api/users.php")
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error("Erreur:", error);
    });

async function getData() {
    try {
        let response = await fetch("api/users.php");
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error("Erreur:", error);
    }
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>