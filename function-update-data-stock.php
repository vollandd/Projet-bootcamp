<?php

function update_data_stock($id, $stock)
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $serializedObject = serialize($stock);

    $stmt = $pdo->prepare("UPDATE stock SET data = ? WHERE id=$id");

    $stmt->execute(array($serializedObject));
}

?>