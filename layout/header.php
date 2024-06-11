<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kart Control Register</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styleLayout.css">
</head>

<body>
    <?php
    function loadClass(string $class)
    {
        if (str_contains($class, "Manager")) {
            require("./managers/$class.php");
        } else {
            require("./models/$class.php");
        }
    }

    spl_autoload_register("loadClass");

    $usersManager = new UsersManager();
    session_start(); // Initialise la session pour donner accès à `$_SESSION`
    ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><h1>Kart Control</h1></a>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./analyse.php">Analyse</a>
                        </li>
                        <?php if ($_SESSION && $_SESSION["is_connected"]) : ?>
                        <?php endif ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">Créer un compte</a>
                        </li>
                        <?php if ($_SESSION && $_SESSION["is_connected"]) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./logout.php">Se déconnecter</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php">Se connecter</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">