  <?php
    if (isset($_GET['nombre'])) { // Comme c'est une requete de type GET on vas chercher ça dans $_GET
        $nombre = $_GET['nombre'];

        echo "Voici la table de multiplication de  " . $nombre;
        echo "<br>";
        echo "<br>";
        for ($i = 0; $i < 11; $i++) {
            echo $nombre . " x " . $i . " =   " . $nombre * $i . "<br />";
            echo "<br>";
        }
        echo "Tu veut aller encore plus loin ?";
    }
    ?>
