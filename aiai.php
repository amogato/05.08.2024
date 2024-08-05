<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dpPassword = '';
    $dbName = 'meu_banco';

    $conexao = new mysqli($dbHost, $dbUsername, $dpPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "conexão efetuada com sucesso.";
    }

?>