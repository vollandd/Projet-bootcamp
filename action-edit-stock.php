<?php

session_start();

require 'stock.php';

$id = $_GET['id'];
$name = $_POST['name'];
$buying_price = $_POST['buying_price'];
$selling_price = $_POST['selling_price'];
$supplier = $_POST['supplier'];
$quantity_stock = $_POST['quantity_stock'];

$_SESSION['error'] = array();

if (!preg_match("/^[a-zA-Z0-9]*$/",$name))
{
    $_SESSION['name'] = "seulement les lettres minuscules, majuscules et les chiffres sont autorisé dans le champ : Libelle produit";
    $_SESSION['error'][0] = $_SESSION['name'];
}

if (!preg_match("/^[+-]?([0-9]*[.])?[0-9]*$/",$buying_price))
{
    $_SESSION['buying_price'] = "seulement les nombre entier ou a virgule sont autorisé dans le champ : Prix unitaire achat";
    $_SESSION['error'][1] = $_SESSION['buying_price'];
}

if (!preg_match("/^[+-]?([0-9]*[.])?[0-9]*$/",$selling_price))
{
    $_SESSION['selling_price'] = "seulement les nombre entier ou a virgule sont autorisé dans le champ : prix unitaire vente";
    $_SESSION['error'][2] = $_SESSION['selling_price'];
}

if (!preg_match("/^[a-zA-Z0-9]*$/",$supplier))
{
    $_SESSION['supplier'] = "seulement les lettres minuscules, majuscules et les chiffres sont autorisé dans le champ : Fournisseur";
    $_SESSION['error'][3] = $_SESSION['supplier'];
}

if (!preg_match("/^[0-9]*$/",$quantity_stock))
{
    $_SESSION['quantity_stock'] = "seulement les nombre entier sont autorisé dans le champ : Nombre de produit";
    $_SESSION['error'][4] = $_SESSION['quantity_stock'];
}

if (empty($name))
{
    $_SESSION['no_name'] = "vous ne pouvez pas laisser le champ : Libelle produit vide";
    $_SESSION['error'][5] = $_SESSION['no_name'];
}

if (empty($buying_price))
{
    $_SESSION['no_buying_price'] = "vous ne pouvez pas laisser le champ : Prix unitaire achat vide";
    $_SESSION['error'][6] = $_SESSION['no_buying_price'];
}

if (empty($selling_price))
{
    $_SESSION['no_selling_price'] = "vous ne pouvez pas laisser le champ : Prix unitaire vente vide";
    $_SESSION['error'][7] = $_SESSION['no_selling_price'];
}

if (empty($supplier))
{
    $_SESSION['no_supplier'] = "vous ne pouvez pas laisser le champ : Fournisseur vide";
    $_SESSION['error'][8] = $_SESSION['no_supplier'];
}

if (empty($quantity_stock))
{
    $_SESSION['no_quantity_stock'] = "vous ne pouvez pas laisser le champ : Nombre de produit vide";
    $_SESSION['error'][9] = $_SESSION['no_quantity_stock'];
}

if (empty($_SESSION['error']))
{
    $stock = New Stock("$name", "$supplier", "$buying_price", "$selling_price", "$quantity_stock");

    require 'function-update-data-stock.php';

    update_data_stock($id, $stock);

    header('Location: stock-visualization.php');
}

else 
{
    $_SESSION['keep_name'] = "$name";
    $_SESSION['keep_buying_price'] = "$buying_price";
    $_SESSION['keep_selling_price'] = "$selling_price";
    $_SESSION['keep_supplier'] = "$supplier";
    $_SESSION['keep_quantity_stock'] = "$quantity_stock";
    header('Location: edit-stock.php');
}

?>