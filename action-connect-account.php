<?php 
    
    $email = $_POST['email'];
    $password = $_POST['password'];
     
    $pdo = new PDO("mysql:host=localhost;dbname=projet-bootcamp;port=3306", "root", "");

    $request = "SELECT * FROM admin WHERE email='$email'";
    $results = $pdo->query($request);
    $row = $results->fetch();
    $request2 = "SELECT * FROM user WHERE email='$email'";
    $results2 = $pdo->query($request2);
    $row2 = $results2->fetch();

    
        $login_valide_admin = $row['email'];
        $pwd_valide_admin = $row['password'];
        $login_valide = $row2['email'];
        $pwd_valide = $row2['password'];
        
        if (isset($_POST['email']) && isset($_POST['password'])) {
        
            if ($login_valide_admin == $_POST['email'] && $pwd_valide_admin == $_POST['password']) {
        
                session_start ();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                header('location: dashboard-admin.php');
            }
            elseif ($login_valide == $_POST['email'] && $pwd_valide == $_POST['password']) {
                
                session_start ();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['name'] = $row2['name'];
                $_SESSION['firstname'] = $row2['firstname'];
                header('location: index.php');
            }
            else {
                echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                echo '<meta http-equiv="refresh" content="0;URL=connect-account.php">';
            }
        }
        else {
            echo 'Les variables du formulaire ne sont pas déclarées.';
        }

?>