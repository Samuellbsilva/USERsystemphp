<?php
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];



include "../components/bancodds/conection.php";

$sql = "insert into produtos(nome, categoria, preco)
    values ('$nome', '$categoria', '$preco')";

    $resultado = $connectionBD->query($sql);

    mysqli_close($connectionBD);

    header("location: index.php");

?>