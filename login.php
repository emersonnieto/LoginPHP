<?php

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$db = new PDO("mysql:host=localhost;dbname=teste", "emer", "123qwe");

if (empty($usuario) || empty($senha))
    {
        echo "usuario ou senha vazios";
        exit;
    }

$query = "SELECT username FROM user WHERE username = :usuario AND senha = :senha";
$stmt = $db->prepare($query); 
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) <= 0){
    echo 0;   
}else{
    echo 1;
}


?>