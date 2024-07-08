<?php



$id = $_GET['id'];

include '../components/bancodds/conection.php';

$sql = "delete from produtos where id='$id'";
      

$resultado = $connectionBD->query($sql);

mysqli_close($connectionBD);

header("location: index.php");