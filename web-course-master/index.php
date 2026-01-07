<?php require 'components/header.php'; ?>

<div class="container" id="container">
    <div class="welcome-container" id="welcome-container">
        <h1 class="welcome poppins-light" id="welcome">Bienvenue sur Web Course</h1>
        <p class="welcome-submessage poppins-light">Ce site a pour but d'apprendre les bases du développement Web.</p>
        <p class="welcome-submessage poppins-light">Prochainement, des langages seront ajoutés, tels que le C#, ainsi que la prise en charge de frameworks</p>
    </div>
    
    <div class="card-container" id="card-container">
        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">Fondamentaux</h2>
            </div>
            <div class="card-body">
                <a href="courses/fundamentals/variables.php" class="course-link poppins-light">Variables, Boucles & Conditions</a>
                <a href="courses/fundamentals/conventions.php" class="course-link poppins-light">Conventions de Code</a>
                <a href="courses/fundamentals/structure.php" class="course-link poppins-light">Structure PHP (header/footer)</a>
            </div>
        </div>

        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">HTML</h2>
            </div>
            <div class="card-body">
                <a href="courses/html/basics.php" class="course-link poppins-light">Les Bases HTML</a>
                <a href="courses/html/emmet.php" class="course-link poppins-light">Emmet Shortcuts</a>
            </div>
        </div>

        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">CSS</h2>
            </div>
            <div class="card-body">
                <a href="courses/css/basics.php" class="course-link poppins-light">Les Bases CSS</a>
                <a href="courses/css/flexbox.php" class="course-link poppins-light">Flexbox</a>
                <a href="courses/css/responsive.php" class="course-link poppins-light">Responsive Design</a>
            </div>
        </div>

        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">JavaScript</h2>
            </div>
            <div class="card-body">
                <a href="courses/js/basics.php" class="course-link poppins-light">Les Bases JavaScript</a>
                <a href="courses/js/conditions.php" class="course-link exercise poppins-light">Exercice: Conditions</a>
                <a href="courses/js/loops.php" class="course-link exercise poppins-light">Exercice: Boucles</a>
            </div>
        </div>

        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">PHP</h2>
            </div>
            <div class="card-body">
                <a href="courses/php/basics.php" class="course-link poppons-light">Les Bases PHP</a>
                <a href="courses/php/conditions.php" class="course-link exercise poppins-light">Exercice: Conditions</a>
                <a href="courses/php/loops.php" class="course-link exercise poppins-light">Exercice: Boucles</a>
            </div>
        </div>

        <div class="course-card">
            <div class="card-header">
                <h2 class="poppins-semibold">Base de données</h2>
            </div>
            <div class="card-body">
                <a href="courses/database/sql.php" class="course-link poppins-light">SQL & phpMyAdmin</a>
                <a href="courses/database/crud.php" class="course-link poppins-light">CRUD Complet</a>
            </div>
        </div>
    </div>
</div>

<?php require 'components/footer.php'; ?>