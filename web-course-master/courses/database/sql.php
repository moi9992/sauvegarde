<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">SQL et phpMyAdmin</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce qu'une base de données?</h2>
        <p class="poppins-light">
            Une base de données stocke des informations de manière organisée.
            Elle contient des tables qui fonctionnent comme des tableaux Excel avec des lignes et des colonnes.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">phpMyAdmin</h2>
        <p class="poppins-light">
            phpMyAdmin est une interface web qui permet de gérer facilement des bases de données MySQL.
            Avec XAMPP ou WAMP, accédez à phpMyAdmin via http://localhost/phpmyadmin
        </p>
        <h3 class="poppins-medium">Créer une base de données</h3>
        <ul class="poppins-light">
            <li>Cliquez sur "Nouvelle base de données"</li>
            <li>Donnez un nom: web_cours</li>
            <li>Choisissez l'interclassement: utf8mb4_general_ci</li>
            <li>Cliquez sur Créer</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Créer une table</h2>
        <div class="code-block">
            <pre class="google-sans-code">CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    age INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);</pre>
        </div>
        <ul class="poppins-light">
            <li>INT : nombre entier</li>
            <li>VARCHAR(n) : texte de maximum n caractères</li>
            <li>TEXT : texte long</li>
            <li>DATE, DATETIME, TIMESTAMP : dates</li>
            <li>PRIMARY KEY : identifiant unique</li>
            <li>AUTO_INCREMENT : s'incrémente automatiquement</li>
            <li>NOT NULL : ne peut pas être vide</li>
            <li>UNIQUE : valeur unique dans toute la table</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">SELECT : Lire des données</h2>
        <h3 class="poppins-medium">Tout sélectionner</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT * FROM users;</pre>
        </div>

        <h3 class="poppins-medium">Colonnes spécifiques</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT nom, email FROM users;</pre>
        </div>

        <h3 class="poppins-medium">Avec condition WHERE</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT * FROM users WHERE age >= 18;

SELECT * FROM users WHERE nom = "Dupont";

SELECT * FROM users WHERE age >= 18 AND nom LIKE "D%";</pre>
        </div>

        <h3 class="poppins-medium">Trier avec ORDER BY</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT * FROM users ORDER BY nom ASC;

SELECT * FROM users ORDER BY age DESC;</pre>
        </div>

        <h3 class="poppins-medium">Limiter avec LIMIT</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT * FROM users LIMIT 10;

SELECT * FROM users LIMIT 10 OFFSET 20;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">INSERT : Ajouter des données</h2>
        <div class="code-block">
            <pre class="google-sans-code">INSERT INTO users (nom, email, age) 
VALUES ("Dupont", "dupont@mail.com", 25);

INSERT INTO users (nom, email, age) 
VALUES 
    ("Martin", "martin@mail.com", 30),
    ("Durand", "durand@mail.com", 22);</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">UPDATE : Modifier des données</h2>
        <div class="code-block">
            <pre class="google-sans-code">UPDATE users 
SET age = 26 
WHERE id = 1;

UPDATE users 
SET nom = "Dupont", email = "nouveau@mail.com" 
WHERE id = 1;

UPDATE users 
SET age = age + 1 
WHERE age < 18;</pre>
        </div>
        <p class="poppins-light">
            Attention : sans WHERE, toutes les lignes seront modifiées.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">DELETE : Supprimer des données</h2>
        <div class="code-block">
            <pre class="google-sans-code">DELETE FROM users WHERE id = 1;

DELETE FROM users WHERE age < 18;

DELETE FROM users;</pre>
        </div>
        <p class="poppins-light">
            Attention : sans WHERE, toutes les lignes seront supprimées.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Jointures</h2>
        <h3 class="poppins-medium">INNER JOIN</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT users.nom, posts.title 
FROM users 
INNER JOIN posts ON users.id = posts.user_id;</pre>
        </div>

        <h3 class="poppins-medium">LEFT JOIN</h3>
        <div class="code-block">
            <pre class="google-sans-code">SELECT users.nom, posts.title 
FROM users 
LEFT JOIN posts ON users.id = posts.user_id;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Fonctions d'agrégation</h2>
        <div class="code-block">
            <pre class="google-sans-code">SELECT COUNT(*) FROM users;

SELECT AVG(age) FROM users;

SELECT MAX(age) FROM users;

SELECT MIN(age) FROM users;

SELECT SUM(prix) FROM commandes;

SELECT nom, COUNT(*) as nb_commandes 
FROM users 
GROUP BY nom 
HAVING nb_commandes > 5;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Connexion PHP à la base de données</h2>
        <div class="code-block">
            <pre class="google-sans-code">$host = "localhost";
$dbname = "web_cours";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>