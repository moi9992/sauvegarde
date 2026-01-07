<?php 
require 'db.php';

// Recuperer les filtre
$theme = isset($_GET['theme']) ? $_GET['theme'] : '';
$difficulte = isset($_GET['difficulte']) ? $_GET['difficulte'] : '';

// Construire la requete avec filtree
$sql = "SELECT * FROM questions WHERE 1=1";
$params = [];

if (!empty($theme)) {
    $sql .= " AND theme = :theme";
    $params[':theme'] = $theme;
}

if (!empty($difficulte)) {
    $sql .= " AND difficulty = :difficulte";
    $params[':difficulte'] = $difficulte;
}

$sql .= " ORDER BY RAND() LIMIT 1";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$question = $stmt->fetch(PDO::FETCH_ASSOC);

if ($question) {
    $reponses = [
        ['texte' => $question['bonne_reponse'], 'correcte' => true],
        ['texte' => $question['mauvaise_reponse1'], 'correcte' => false],
        ['texte' => $question['mauvaise_reponse2'], 'correcte' => false],
        ['texte' => $question['mauvaise_reponse3'], 'correcte' => false]
    ];
    shuffle($reponses); //shuffle = melange le tableau des reponses 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exoMerde</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="quiz-container">
        <h1>Quiz exoMerde</h1>
        
        <div class="filtres">
            <select id="theme" name="theme">
                <option value="">Tous les thèmes</option>
                <option value="jeux video" <?php echo $theme === 'jeux video' ? 'selected' : ''; ?>>Jeux vidéo</option> 
                <option value="culture general" <?php echo $theme === 'culture general' ? 'selected' : ''; ?>>Culture générale</option>
                <option value="tv et cinema" <?php echo $theme === 'tv et cinema' ? 'selected' : ''; ?>>TV et cinéma</option>
            </select>
            
            <select id="difficulte" name="difficulte">
                <option value="">Toutes difficultés</option>
                <option value="facile" <?php echo $difficulte === 'facile' ? 'selected' : ''; ?>>Facile</option>
                <option value="normal" <?php echo $difficulte === 'normal' ? 'selected' : ''; ?>>Normal</option>
                <option value="difficile" <?php echo $difficulte === 'difficile' ? 'selected' : ''; ?>>Difficile</option>
            </select>
            
            <button type="button" class="btn" id="nouvelle-question">Nouvelle question</button>
        </div>

        <?php if ($question): ?>
            <div class="question-box">                
                <h2 class="question"><?php echo htmlspecialchars($question['question']); ?></h2>
                
                <div class="reponses">
                    <?php foreach ($reponses as $reponse): ?>
                        <button class="btn-reponse" data-correcte="<?php echo $reponse['correcte'] ? '1' : '0'; ?>">
                            <?php echo htmlspecialchars($reponse['texte']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                
                <div id="resultat"></div>
            </div>
        <?php else: ?>
            <p>Aucune question disponible dans la base de données.</p>
        <?php endif; ?>
    </div>

    <script src="Js/script.js"></script>
</body>
</html>