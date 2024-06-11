<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"> </script>
    <title>Kart Control Analyse</title>

</head>

<body>
    <?php require("./layout/header.php"); ?>


    <h2>Analyse</h2>
    <div class="Analyse">
        <div>
            <h3>Analyse de vos compositions</h3>
            <pre class="Analyse">
                Ici vous pourrez analyser vos compositions de Mario Kart 8 Deluxe avec celles de vos amis.
                Pour cela, il vous suffit de renseigner les personnages, les karts, les roues et les ailes que vous avez utilisé.
                Vous pourrez ensuite comparer vos compositions avec celles de vos amis.
            </pre>


            <label for="driver">Personnage :</label>
            <select id="driver" name="driver">

                <option value="Mario">Mario</option>
                <option value="Luigi">Luigi</option>
                <option value="Toad">Toad</option>
                <option value="Maskass">Maskass</option>
                <option value="Bowser">Bowser</option>
                <option value="Metal Mario">Metal Mario</option>
            </select><br>



            <label for="bodies">Kart :</label>
            <select id="bodies" name="bodies">
                <option value="Kart Standard">Kart Standard</option>
                <option value="ParaCoccinnelle">ParaCoccinnelle</option>
                <option value="Moto Standard">Moto Standard</option>
                <option value="Yoshi Moto">Yoshi Moto</option>
                <option value="Quad Standard">Quad Standard</option>
                <option value="Metal Mario">Quad Nounours</option>
            </select><br>




            <label for="tires">Roues :</label>
            <select id="tires" name="tires">
                <option value="Pneu Standard">Pneu Standard</option>
                <option value="Mastodonte">Mastodonte</option>
                <option value="Roller">Roller</option>
                <option value="Hors Piste">Hors Piste</option>
                <option value="Quad Standard">Quad Standard</option>
                <option value="Metal Mario">Quad Nounours</option>
            </select><br>



            <label for="gliders">Planeur :</label>
            <select id="gliders" name="gliders">
                <option value="Super Glider">Super Glider</option>
                <option value="Nuages">Nuages</option>
                <option value="Ailes Wario">Ailes Wario</option>
                <option value="Ombrelle de Peach">Ombrelle de Peach</option>
                <option value="Dendinaile">Dendinaile</option>
                <option value="Parachute">Parachute</option>
            </select><br>


            <div id="tableContainer"></div>


            <div class="fav_create">
                <p>Favori</p>
                <form action="analyse.php" method="post">







                    <label for="driver">Personnage :</label>
                    <input type="text" id="driver" name="driver" required> <br>

                    <label for="bodies">Kart :</label>
                    <input type="text" id="bodies" name="bodies" required> <br>
                    <label for="tires">Roue :</label>
                    <input type="text" id="tires" name="tires" required> <br>
                    <label for="gliders">Aile :</label>
                    <input type="text" id="gliders" name="gliders" required> <br>
                    <button type="submit">Créer un favori</button>
                </form>
            </div>
        </div>
    </div>




    <?php
    try {
        $conn = new PDO("mysql:host=localhost;port=3306;dbname=kart_control", 'root', 'root');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>
    <br>

    <?php
    if ($_POST) {
        // Initialisation des variables
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; // Utilisez isset pour vérifier si la clé 'user_id' existe dans $_SESSION        $driver = isset($_POST['driver']) ? $_POST['driver'] : null;
        $driver = isset($_POST['driver']) ? $_POST['driver'] : null;
        $bodies = isset($_POST['bodies']) ? $_POST['bodies'] : null;
        $tires = isset($_POST['tires']) ? $_POST['tires'] : null;
        $gliders = isset($_POST['gliders']) ? $_POST['gliders'] : null;








        if ($user_id && $driver && $bodies && $tires && $gliders) {
            try {
                $conn = new PDO("mysql:host=localhost;port=3306;dbname=kart_control", 'root', 'root');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "INSERT INTO compo (user_id, driver, bodies, tires, gliders) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$user_id, $driver, $bodies, $tires, $gliders]);



                if ($stmt->rowCount() > 0) {
                    echo " Votre favori à été créé avec succès.";
                } else {
                    echo "Aucun favori trouvé.";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            $conn = null;
        } else {
            echo "Erreur : Les données nécessaires pour créer un favori ne sont pas complètes.";
        }
    } ?>
    <?php
    require("./layout/footer.php");
    ?>



</body>

</html>