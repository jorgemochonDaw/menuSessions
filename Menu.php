<?php
session_start();
$error = [];
if (isset($_POST['enviarPostre'])) {
    error_reporting(0);
    $_SESSION['postre']  =
        array(
            $_POST['postre'],
        );

    if (!$_POST['postre']) {
        $error[] = "No has seleccionado ningún postre";
    }
}
?>
<section>
    <?php
    if ($_SESSION['plato1'][0] == "" ) {
        echo  "No has seleccionado ningún plato 1";
        echo "<br>";
    } else {
    ?>
        <p>Plato1: <?php echo $_SESSION['plato1'][0] ?></p>
        <?php
    }

    if ($_SESSION['plato2'][0] == "" ) {
        echo  "No has seleccionado ningún plato 2";
    } else {
    ?>
        <p>Plato1: <?php echo $_SESSION['plato2'][0] ?></p>
        <?php
    }

    if (!empty($error)) {
        foreach ($error as $e) {
        ?>
            <p><?php echo $e; ?></p>
        <?php
        }
    } else {
        ?>
        <p>Postre: <?php echo $_SESSION['postre'][0] ?></p>
    <?php
    }
    ?>
</section>