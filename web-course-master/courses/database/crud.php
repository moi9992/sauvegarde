<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">CRUD Complet</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce que CRUD?</h2>
        <p class="poppins-light">
            CRUD signifie Create, Read, Update, Delete. Ce sont les 4 opérations de base pour gérer des données.
        </p>
        <ul class="poppins-light">
            <li>Create : Créer une nouvelle entrée</li>
            <li>Read : Lire/Afficher les données</li>
            <li>Update : Modifier une entrée existante</li>
            <li>Delete : Supprimer une entrée</li>
        </ul>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Structure du projet</h2>
        <div class="code-block">
            <pre class="google-sans-code">projet/
  config/
    database.php
  index.php
  create.php
  edit.php
  delete.php
  components/
    header.php
    footer.php</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">config/database.php</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
$host = "localhost";
$dbname = "web_cours";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">READ : Afficher les données (index.php)</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
require 'config/database.php';
require 'components/header.php';

$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
$users = $stmt->fetchAll();
?&gt;

&lt;div class="container"&gt;
    &lt;h1&gt;Liste des utilisateurs&lt;/h1&gt;
    &lt;a href="create.php" class="btn-primary"&gt;Ajouter un utilisateur&lt;/a&gt;
    
    &lt;table&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;ID&lt;/th&gt;
                &lt;th&gt;Nom&lt;/th&gt;
                &lt;th&gt;Email&lt;/th&gt;
                &lt;th&gt;Age&lt;/th&gt;
                &lt;th&gt;Actions&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;?php foreach ($users as $user): ?&gt;
                &lt;tr&gt;
                    &lt;td&gt;&lt;?= $user['id'] ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= htmlspecialchars($user['nom']) ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= htmlspecialchars($user['email']) ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= $user['age'] ?&gt;&lt;/td&gt;
                    &lt;td&gt;
                        &lt;a href="edit.php?id=&lt;?= $user['id'] ?&gt;"&gt;Modifier&lt;/a&gt;
                        &lt;a href="delete.php?id=&lt;?= $user['id'] ?&gt;"&gt;Supprimer&lt;/a&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;?php endforeach; ?&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;

&lt;?php require 'components/footer.php'; ?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">CREATE : Ajouter des données (create.php)</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
require 'config/database.php';
require 'components/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $stmt = $pdo->prepare("INSERT INTO users (nom, email, age) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $age]);
    
    header('Location: index.php');
    exit;
}
?&gt;

&lt;div class="container"&gt;
    &lt;h1&gt;Ajouter un utilisateur&lt;/h1&gt;
    
    &lt;form method="POST"&gt;
        &lt;div&gt;
            &lt;label&gt;Nom:&lt;/label&gt;
            &lt;input type="text" name="nom" required&gt;
        &lt;/div&gt;
        
        &lt;div&gt;
            &lt;label&gt;Email:&lt;/label&gt;
            &lt;input type="email" name="email" required&gt;
        &lt;/div&gt;
        
        &lt;div&gt;
            &lt;label&gt;Age:&lt;/label&gt;
            &lt;input type="number" name="age" required&gt;
        &lt;/div&gt;
        
        &lt;button type="submit" class="btn-primary"&gt;Ajouter&lt;/button&gt;
        &lt;a href="index.php"&gt;Annuler&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;

&lt;?php require 'components/footer.php'; ?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">UPDATE : Modifier des données (edit.php)</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
require 'config/database.php';
require 'components/header.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $stmt = $pdo->prepare("UPDATE users SET nom = ?, email = ?, age = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $age, $id]);
    
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    die("Utilisateur introuvable");
}
?&gt;

&lt;div class="container"&gt;
    &lt;h1&gt;Modifier un utilisateur&lt;/h1&gt;
    
    &lt;form method="POST"&gt;
        &lt;div&gt;
            &lt;label&gt;Nom:&lt;/label&gt;
            &lt;input type="text" name="nom" value="&lt;?= htmlspecialchars($user['nom']) ?&gt;" required&gt;
        &lt;/div&gt;
        
        &lt;div&gt;
            &lt;label&gt;Email:&lt;/label&gt;
            &lt;input type="email" name="email" value="&lt;?= htmlspecialchars($user['email']) ?&gt;" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label&gt;Age:&lt;/label&gt;
            &lt;input type="number" name="age" value="&lt;?= $user['age'] ?&gt;" required&gt;
        &lt;/div&gt;
        
        &lt;button type="submit" class="btn-primary"&gt;Modifier&lt;/button&gt;
        &lt;a href="index.php"&gt;Annuler&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;

&lt;?php require 'components/footer.php'; ?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">DELETE : Supprimer des données (delete.php)</h2>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
require 'config/database.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$id]);

header('Location: index.php');
exit;
?&gt;</pre>
        </div>
        <p class="poppins-light">
            Version avec confirmation:
        </p>
        <div class="code-block">
            <pre class="google-sans-code">&lt;?php
require 'config/database.php';
require 'components/header.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    die("Utilisateur introuvable");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
    
    header('Location: index.php');
    exit;
}
?&gt;

&lt;div class="container"&gt;
    &lt;h1&gt;Supprimer un utilisateur&lt;/h1&gt;
    
    &lt;p&gt;Voulez-vous vraiment supprimer &lt;?= htmlspecialchars($user['nom']) ?&gt; ?&lt;/p&gt;
    
    &lt;form method="POST"&gt;
        &lt;button type="submit" class="btn-danger"&gt;Confirmer&lt;/button&gt;
        &lt;a href="index.php"&gt;Annuler&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;

&lt;?php require 'components/footer.php'; ?&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Sécurité importante</h2>
        <ul class="poppins-light">
            <li>Utilisez toujours des requêtes préparées avec prepare() et execute()</li>
            <li>Ne jamais concatener directement les variables dans les requêtes SQL</li>
            <li>Utilisez htmlspecialchars() pour afficher les données utilisateur</li>
            <li>Validez toujours les données côté serveur</li>
            <li>Vérifiez que l'utilisateur a le droit de modifier/supprimer</li>
        </ul>
        <h3 class="poppins-medium">Mauvaise pratique</h3>
        <div class="code-block">
            <pre class="google-sans-code">$stmt = $pdo->query("SELECT * FROM users WHERE id = $id");</pre>
        </div>
        <h3 class="poppins-medium">Bonne pratique</h3>
        <div class="code-block">
            <pre class="google-sans-code">$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>