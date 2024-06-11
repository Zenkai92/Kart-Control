<link rel="stylesheet" href="styleLayout.css">
<footer>
<?php
if (isset($_SESSION["is_connected"]) && $_SESSION["is_connected"]) {?>
    
    <pre class = "login-message"> Vous êtes connecté </pre>
    <?php } else { ?>
    <pre class = "login-message"> Vous n'êtes pas connecté</pre>
<?php } ?>
        <a href="troll.php">
            <p>© Palpatine 2024</p>
        </a>
    </footer>