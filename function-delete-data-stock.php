<?php 

function delete_data_stock($id)
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $stmt = $pdo->prepare("DELETE FROM stock WHERE id = $id");

    $stmt->execute();
}

?>