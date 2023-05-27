
<?php
    $nome=$_GET["txtNome"];
    if ($_GET["sexo"] == "op1") {
        echo("Olá $nome seja bem vindo!");
}
    if ($_GET["sexo"] == "op2") {
        echo("Olá $nome seja bem vinda!");
}
?>

