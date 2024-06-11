<?php
session_start(); // Start the session

// Rest of your code
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kart Control</title>
</head>








<body>
    <header>
        
    <a href="troll.php"> <h1>Kart Control</h1></a>
        <nav>
        <ul>
            <li><a href="analyse.php">Analyse</a></li>
            <li><a href="login.php">Menu de Connexion/Déconnexion</a></li>
            <li><a href="register.php">S'inscrire</a></li>
        </ul>




    </header>


    <h2>Accueil</h2>
    
    <div class="welcome">
        <div>
            <h3>Bienvenue sur Kart Control</h3>
            <pre>
                Avant de commencer, bienvenue sur Kart Control.
                Ici vous pourrez effectuer des analyses de vos meilleurs compositions de Mario Kart 8 Deluxe
                 et les comparer avec celles de vos amis. 
                
                Les personnages DLC ne sont pas disponible pour les analyses et comparaison,
                cependant ils ont des statistiques qui sont les mêmes que celle d’autres personnages,
                 donc si voulez utiliser :
                - Pauline utilisez Harmonie/Link
                - Peachette utilisez Peach/Daisy
                - Flora Piranah utilisez Metal Mario/ Peach d’Or Rose
                - Wiggler utilisez Waluigi
                - Funky Kong utilisez Wario
                - Diddy Kong utilisez Fille Inkling
            </pre>
           <!--  <img src="./assets/mk8.jpg" alt="Image de Mario Kart 8 "> -->
        </div>
        
    </div>


    <?php
require("./layout/footer.php");
?>





</body>


</html>