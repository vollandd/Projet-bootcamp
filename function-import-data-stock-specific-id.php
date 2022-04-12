<?php

function import_data_stock_specific_id($id)
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $stmt = $pdo->prepare("SELECT * FROM stock WHERE id = $id");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $stock = unserialize($row['data']);

    return $stock;
}

?>