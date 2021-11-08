<?php
session_start();
$error = [];
if (isset($_POST['enviarPlato2'])) {
    error_reporting(0);
    $_SESSION['plato2']  =
        array(
            $_POST['plato2'],
        );

    if (!$_POST['plato2']) {
        $error[] = "No has seleccionado ningún plato 2";
    }
}
?>
<section>
    <?php
    if ($_SESSION['plato1'][0] == "" ) {
        echo  "No has seleccionado ningún plato 1";
    } else {
    ?>
        <p>Plato1: <?php echo $_SESSION['plato1'][0] ?></p>
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
        <p>Plato2: <?php echo $_SESSION['plato2'][0] ?></p>
    <?php
    }
    ?>
</section>
<section>
    <form action="./../Menu.php" method="post">
        <label for="postre">Postre: </label>
        <input type="text" name="postre">
        <input type="submit" name="enviarPostre" value="Enviar"> <br> <br>
    </form>
</section>
