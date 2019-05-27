<?php
include('config.php');

$mysqli = new mysqli(IP, USUARIO, SENHA,BANCO);

if ($mysqli->connect_errno) {

    echo "Sorry, this website is experiencing problems.";

    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}


$query = "insert into cadastro (`email`, `senha`, `endereco`, `complemento`, `cidade`, `estado`, `cep`, `termo`, `radio`) values ('" . $_POST['email'] . "','" . $_POST['senha'] . "','" . $_POST['endereco'] . "','" . $_POST['complemento'] . "','" . $_POST['cidade'] . "','" . $_POST['estado'] . "'," . $_POST['cep'] . "," . 0 . ",'" . $_POST['gridRadios'] . "')";


if (!$mysqli->query($query, MYSQLI_USE_RESULT)) {
    var_dump($mysqli->error);
}
else {
    header('Location: ../front-end/sucesso.html');
}

$mysqli->close();
