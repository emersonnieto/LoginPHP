<?php

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$db = new PDO("mysql:host=localhost;dbname=teste", "emer", "123qwe");

if (empty($usuario) || empty($senha))
    {
        echo "Informe um usuario e senha";
        header('Location: cadastro.php');
        exit;
    }

$query = "INSERT INTO user(username, senha) VALUES('$usuario', '$senha');";
$stmt = $db->prepare($query); 
$stmt->execute();
return true;

?>