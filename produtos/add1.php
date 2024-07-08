<?php
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preço = $_POST['preço'];



include "../components/bancodds/conection.php";

$sql = "insert into produtos(nome, categoria, preço)
    values ('$nome', '$categoria', '$preço')";

    $resultado = $connectionBD->query($sql);

    mysqli_close($connectionBD);

    header("location: index.php");

?>