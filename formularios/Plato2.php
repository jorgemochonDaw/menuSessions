<?php
session_start();
$error = [];
if (isset($_POST['enviarPlato1'])) {
    error_reporting(0);
    $_SESSION['plato1']  =
        array(
            $_POST['plato1'],
        );

    if (!$_POST['plato1']) {
        $error[] = "No has seleccionado ningún plato 1";
    }
}
?>
<section>
    <?php
    if (!empty($error)) {
        foreach ($error as $e) {
    ?>
            <p><?php echo $e; ?></p>
        <?php
        }
    } else {
        ?>
        <p>Plato1: <?php echo $_SESSION['plato1'][0] ?></p>
    <?php
    }
    ?>
</section>
<section>
    <form action="Postre.php" method="post">
        <label for="plato2">Plato 2: </label>
        <input type="text" name="plato2">
        <input type="submit" name="enviarPlato2" value="Enviar"> <br> <br>
    </form>
</section>
