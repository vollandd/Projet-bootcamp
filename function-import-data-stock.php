<?php

function import_data_stock()
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");
      
    $stmt = $pdo->prepare("SELECT * FROM stock");

    $stmt->execute();

    return $stmt;
}

?>