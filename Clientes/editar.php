<?php 


$username = $_POST['TheID'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$date = $_POST['date'];
$about = $_POST['about'];


include '../components/bancodds/conection.php';

$sql = "insert into clientes(username,email,cpf,data,sexo,obs)
        value('$username','$email','$cpf','$date','$sexo','$about')";

$resultado = $connectionBD->query($sql);

mysqli_close($connectionBD);

header("location:index.php");