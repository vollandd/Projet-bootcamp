<?php

session_start();

require 'stock.php';

$product_number = $_POST['product_number'];

$id = $_POST['id'];

$_SESSION['error'] = array();

if (!preg_match("/^[0-9]*$/",$product_number))
{
    $_SESSION['product_number'] = "seulement les nombre entier sont autorisé dans le champ : Nombre de produit";
    $_SESSION['error'][0] = $_SESSION['product_number'];
}

if (empty($product_number))
{
    $_SESSION['no_product_number'] = "vous ne pouvez pas laisser le champ : Nombre de produit vide";
    $_SESSION['error'][1] = $_SESSION['no_product_number'];
}

if ($id == 'empty')
{
    $_SESSION['no_product'] = "vous devez choisir un produit";
    $_SESSION['error'][2] = $_SESSION['no_product'];
}

if (empty($_SESSION['error']))
{
    require 'function-import-data-stock-specific-id.php';

    require 'function-update-data-stock.php';

    $stock = import_data_stock_specific_id($id);

    $stock->add_stock($product_number);

    update_data_stock($id, $stock);

    header('Location: stock-entry.php');
}

else
{
    $_SESSION['keep_product_number'] = "$product_number";
    header('Location: stock-entry.php');
}