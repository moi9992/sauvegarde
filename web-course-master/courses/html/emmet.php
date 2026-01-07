<?php require '../../components/header.php'; ?>

<div class="course-container">
    <h1 class="course-title poppins-semibold">Emmet - Raccourcis HTML/CSS</h1>
    
    <div class="course-section">
        <h2 class="poppins-medium">Qu'est-ce qu'Emmet?</h2>
        <p class="poppins-light">
            Emmet est un outil qui permet d'écrire du HTML et CSS très rapidement avec des raccourcis.
            Il est intégré dans tous les éditeurs modernes comme VS Code.
        </p>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Créer des éléments</h2>
        <h3 class="poppins-medium">Élément simple</h3>
        <div class="code-block">
            <pre class="google-sans-code">div     →  &lt;div&gt;&lt;/div&gt;
p       →  &lt;p&gt;&lt;/p&gt;
span    →  &lt;span&gt;&lt;/span&gt;</pre>
        </div>

        <h3 class="poppins-medium">Avec une classe</h3>
        <div class="code-block">
            <pre class="google-sans-code">div.container     →  &lt;div class="container"&gt;&lt;/div&gt;
p.text           →  &lt;p class="text"&gt;&lt;/p&gt;
button.btn       →  &lt;button class="btn"&gt;&lt;/button&gt;</pre>
        </div>

        <h3 class="poppins-medium">Avec un ID</h3>
        <div class="code-block">
            <pre class="google-sans-code">div#header       →  &lt;div id="header"&gt;&lt;/div&gt;
section#main     →  &lt;section id="main"&gt;&lt;/section&gt;</pre>
        </div>

        <h3 class="poppins-medium">Classe ET ID</h3>
        <div class="code-block">
            <pre class="google-sans-code">div#container.main     →  &lt;div id="container" class="main"&gt;&lt;/div&gt;
div.card#card1         →  &lt;div class="card" id="card1"&gt;&lt;/div&gt;</pre>
        </div>

        <h3 class="poppins-medium">Plusieurs classes</h3>
        <div class="code-block">
            <pre class="google-sans-code">div.container.main.active     →  &lt;div class="container main active"&gt;&lt;/div&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Imbrication</h2>
        <h3 class="poppins-medium">Enfant direct avec ></h3>
        <div class="code-block">
            <pre class="google-sans-code">div>p     →  &lt;div&gt;
                 &lt;p&gt;&lt;/p&gt;
             &lt;/div&gt;

ul>li     →  &lt;ul&gt;
                 &lt;li&gt;&lt;/li&gt;
             &lt;/ul&gt;</pre>
        </div>

        <h3 class="poppins-medium">Frères avec +</h3>
        <div class="code-block">
            <pre class="google-sans-code">div+p     →  &lt;div&gt;&lt;/div&gt;
             &lt;p&gt;&lt;/p&gt;

h1+p+p    →  &lt;h1&gt;&lt;/h1&gt;
             &lt;p&gt;&lt;/p&gt;
             &lt;p&gt;&lt;/p&gt;</pre>
        </div>

        <h3 class="poppins-medium">Remonter avec ^</h3>
        <div class="code-block">
            <pre class="google-sans-code">div>p>span^button     →  &lt;div&gt;
                                &lt;p&gt;&lt;span&gt;&lt;/span&gt;&lt;/p&gt;
                                &lt;button&gt;&lt;/button&gt;
                            &lt;/div&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Multiplication</h2>
        <div class="code-block">
            <pre class="google-sans-code">ul>li*5     →  &lt;ul&gt;
                   &lt;li&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;/li&gt;
               &lt;/ul&gt;

div.card*3  →  &lt;div class="card"&gt;&lt;/div&gt;
               &lt;div class="card"&gt;&lt;/div&gt;
               &lt;div class="card"&gt;&lt;/div&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Numérotation avec $</h2>
        <div class="code-block">
            <pre class="google-sans-code">div.item$*3     →  &lt;div class="item1"&gt;&lt;/div&gt;
                    &lt;div class="item2"&gt;&lt;/div&gt;
                    &lt;div class="item3"&gt;&lt;/div&gt;

ul>li.item$*3   →  &lt;ul&gt;
                       &lt;li class="item1"&gt;&lt;/li&gt;
                       &lt;li class="item2"&gt;&lt;/li&gt;
                       &lt;li class="item3"&gt;&lt;/li&gt;
                   &lt;/ul&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Texte avec {}</h2>
        <div class="code-block">
            <pre class="google-sans-code">p{Bonjour}            →  &lt;p&gt;Bonjour&lt;/p&gt;
a{Cliquez ici}        →  &lt;a href=""&gt;Cliquez ici&lt;/a&gt;
li{Item $}*3          →  &lt;li&gt;Item 1&lt;/li&gt;
                          &lt;li&gt;Item 2&lt;/li&gt;
                          &lt;li&gt;Item 3&lt;/li&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Groupement avec ()</h2>
        <div class="code-block">
            <pre class="google-sans-code">(header>nav>ul>li*3)+main+footer

→  &lt;header&gt;
       &lt;nav&gt;
           &lt;ul&gt;
               &lt;li&gt;&lt;/li&gt;
               &lt;li&gt;&lt;/li&gt;
               &lt;li&gt;&lt;/li&gt;
           &lt;/ul&gt;
       &lt;/nav&gt;
   &lt;/header&gt;
   &lt;main&gt;&lt;/main&gt;
   &lt;footer&gt;&lt;/footer&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Exemples complets</h2>
        
        <h3 class="poppins-medium">Structure de carte</h3>
        <div class="code-block">
            <pre class="google-sans-code">div.card>(div.card-header>h2{Titre})+(div.card-body>p{Contenu})

→  &lt;div class="card"&gt;
       &lt;div class="card-header"&gt;
           &lt;h2&gt;Titre&lt;/h2&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
           &lt;p&gt;Contenu&lt;/p&gt;
       &lt;/div&gt;
   &lt;/div&gt;</pre>
        </div>

        <h3 class="poppins-medium">Liste de navigation</h3>
        <div class="code-block">
            <pre class="google-sans-code">nav>ul.nav>li.nav-item*4>a.nav-link{Item $}

→  &lt;nav&gt;
       &lt;ul class="nav"&gt;
           &lt;li class="nav-item"&gt;&lt;a href="" class="nav-link"&gt;Item 1&lt;/a&gt;&lt;/li&gt;
           &lt;li class="nav-item"&gt;&lt;a href="" class="nav-link"&gt;Item 2&lt;/a&gt;&lt;/li&gt;
           &lt;li class="nav-item"&gt;&lt;a href="" class="nav-link"&gt;Item 3&lt;/a&gt;&lt;/li&gt;
           &lt;li class="nav-item"&gt;&lt;a href="" class="nav-link"&gt;Item 4&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
   &lt;/nav&gt;</pre>
        </div>

        <h3 class="poppins-medium">Grille de cartes</h3>
        <div class="code-block">
            <pre class="google-sans-code">div.container>div.row>div.card*6

→  &lt;div class="container"&gt;
       &lt;div class="row"&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
           &lt;div class="card"&gt;&lt;/div&gt;
       &lt;/div&gt;
   &lt;/div&gt;</pre>
        </div>
    </div>

    <div class="course-section">
        <h2 class="poppins-medium">Raccourcis CSS dans Emmet</h2>
        <div class="code-block">
            <pre class="google-sans-code">m10        →  margin: 10px;
p20        →  padding: 20px;
w100       →  width: 100px;
h50        →  height: 50px;
fz16       →  font-size: 16px;
c#fff      →  color: #fff;
bg#000     →  background: #000;
df         →  display: flex;
jc         →  justify-content: center;
ai         →  align-items: center;</pre>
        </div>
    </div>
</div>

<?php require '../../components/footer.php'; ?>