<?php

function insert_data_stock($stock)
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $serializedObject = serialize($stock);

    $stmt = $pdo->prepare("INSERT INTO stock (data) VALUES (?)");

    $stmt->execute(array($serializedObject));
}

?>