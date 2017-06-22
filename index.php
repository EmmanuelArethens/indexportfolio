<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Manu Arethens "Lanikeu"</title>
</head>

<body>
<section id="entete">
<img src="images/logoEA.png" alt="logoEA"> 
<h1> Emmanuel Arethens </h1>
<img src="images/logo2.png" alt="logo">

</section>

<section id="aboutme">
<h2> About me </h2>
<p> Codageur de qualité allemande, j'adore codager toute la journée.</p>
<p> Joueur professionnel d'Overwatch a mes heures perdues je te PL diamant contre 150€</p>
</section>


<section id="projets">
<h2 id="proj"> Projets </h2>
<?php
$files = scandir(".");
echo '<ul id ="listeprojets">';
    foreach($files as $dossier) {
        if($dossier!=(".") && $dossier!=("..") && $dossier!=("images"))
        if (is_dir($dossier)) { 
        echo '<li><a href="'.$dossier.'">'.$dossier. '</a></li>';
        echo '<img class="screenshot" src="'.$dossier.'/screenshot.png" alt="screen">' ;
    }}
echo '</ul>';
?>
</section>


<section id="contact">
<h2> Contact </h2>

<h3> Telephone : 06.37.83.62.69 </h3> 
<h3> Mail : emmanuel.arethens1@gmail.com </h3> 
<a href="https://github.com/EmmanuelArethens"> <img src="images/github.png" alt="github" id="git"> </a>
</section>

</body>
</html>