<?php 

$connectionBD = mysqli_connect("localhost", "root", "" , "user_create");





if (!$connectionBD) {
    
    echo " Houve um erro na conexão do banco de Dados !". PHP_EOL;
    echo "Erro nº:". mysqli_connect_errno() . PHP_EOL;
    echo "Erro:". mysqli_connect_error() . PHP_EOL;

}

///echo "Conexão realizada com sucesso !";