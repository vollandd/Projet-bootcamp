<?php 

    $id = $_GET['id'];

    require 'function-delete-data-stock.php';

    delete_data_stock($id);
    
    header('Location: stock-visualization.php');
?>