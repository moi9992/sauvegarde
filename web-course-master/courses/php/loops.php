<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Exercice PHP : Boucles</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Documentation</h2>
        <div class="code-block">
            <pre class="google-sans-code">For:
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

While:
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

Foreach:
$fruits = ["pomme", "banane"];
foreach ($fruits as $fruit) {
    echo $fruit;
}</pre>
        </div>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 1 : Liste HTML</h3>
        <p class="poppins-light">
            Créez un tableau de 5 fruits. Utilisez une boucle foreach pour générer une liste HTML ul/li.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 2 : Table de multiplication HTML</h3>
        <p class="poppins-light">
            Créez un tableau HTML qui affiche la table de multiplication de 5.
        </p>
    </div>

    <div class="exercise-container">
        <h3 class="poppins-medium">Exercice 3 : Utilisateurs</h3>
        <p class="poppins-light">
            Créez un tableau associatif de 3 utilisateurs avec nom, email, age.
            Affichez chaque utilisateur dans une carte HTML.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 1</h2>
        <div class="code-block">
            <pre class="google-sans-code">$fruits = ["Pomme", "Banane", "Orange", "Fraise", "Kiwi"];
?>

&lt;ul&gt;
    &lt;?php foreach ($fruits as $fruit): ?&gt;
        &lt;li&gt;&lt;?= $fruit ?&gt;&lt;/li&gt;
    &lt;?php endforeach; ?&gt;
&lt;/ul&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Solution Exercice 3</h2>
        <div class="code-block">
            <pre class="google-sans-code">$utilisateurs = [
    ["nom" => "Dupont", "email" => "dupont@mail.com", "age" => 25],
    ["nom" => "Martin", "email" => "martin@mail.com", "age" => 30],
    ["nom" => "Durand", "email" => "durand@mail.com", "age" => 22]
];
?>

&lt;div class="card-container"&gt;
    &lt;?php foreach ($utilisateurs as $user): ?&gt;
        &lt;div class="card"&gt;
            &lt;h3&gt;&lt;?= $user['nom'] ?&gt;&lt;/h3&gt;
            &lt;p&gt;&lt;?= $user['email'] ?&gt;&lt;/p&gt;
            &lt;p&gt;Age: &lt;?= $user['age'] ?&gt; ans&lt;/p&gt;
        &lt;/div&gt;
    &lt;?php endforeach; ?&gt;
&lt;/div&gt;</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>