<?php

session_start();

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['error'] = array();

if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
{
    $_SESSION['name'] = "seulement les tirets, les espaces, les apostrophe, les lettres minuscules et majuscules sont autorisé dans le champ : Nom";
    $_SESSION['error'][0] = $_SESSION['name'];
}

if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname))
{
    $_SESSION['firstname'] = "seulement les tirets, les espaces, les apostrophe, les lettres minuscules et majuscules sont autorisé dans le champ : Prenom";
    $_SESSION['error'][1] = $_SESSION['firstname'];
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['email'] = "seulement les adresse mail sont autorisé dans le champ : Email";
    $_SESSION['error'][2] = $_SESSION['email'];
}

if (empty($name))
{
    $_SESSION['no_name'] = "vous ne pouvez pas laisser le champ : Nom vide";
    $_SESSION['error'][3] = $_SESSION['no_name'];
}

if (empty($firstname))
{
    $_SESSION['no_firstname'] = "vous ne pouvez pas laisser le champ : Prenom vide";
    $_SESSION['error'][4] = $_SESSION['no_firstname'];
}

if (empty($email))
{
    $_SESSION['no_email'] = "vous ne pouvez pas laisser le champ : Email vide";
    $_SESSION['error'][5] = $_SESSION['no_email'];
}

if (empty($password))
{
    $_SESSION['no_password'] = "vous ne pouvez pas laisser le champ : Mot de passe vide";
    $_SESSION['error'][6] = $_SESSION['no_password'];
}

if (empty($_SESSION['error']))
{
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $request = "INSERT INTO user (name, firstname, email, password) VALUES (:name, :firstname, :email, :password)";
    $results = $pdo->prepare($request);
    $results->bindValue(":name", $name);
    $results->bindValue(":firstname", $firstname);
    $results->bindValue(":email", $email);
    $results->bindValue(":password", $password);
    $results->execute();

        header('Location: connect-account.php');
        exit();
}

else 
{
    $_SESSION['keep_name'] = "$name";
    $_SESSION['keep_firstname'] = "$firstname";
    $_SESSION['keep_email'] = "$email";
    header('Location: create-account.php');
}

?>