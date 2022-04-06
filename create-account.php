<?php
    session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-4 offset-4 mt-5">
        <form action="action-create-account.php" method="post">

            <div class="col-12 mt-4 mb-4 text-center">
                <h1>CREER UN COMPTE</h1>
            </div>

            <div class="col-10 offset-1 mb-3">
            <?php 
            if(isset($_SESSION['keep_name'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_name'] ?>" name="name">
            <?php 
                unset($_SESSION['keep_name']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Nom" name="name">
            <?php
            }
            
                if(isset($_SESSION['name']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['name'] ?></div>
            <?php
                    unset($_SESSION['name']);
                }

                if(isset($_SESSION['no_name']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_name'] ?></div>
            <?php
                    unset($_SESSION['no_name']);
                }
            ?>
            </div>

            <div class="col-10 offset-1 mb-3">
            <?php 
            if(isset($_SESSION['keep_firstname'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_firstname'] ?>" name="firstname">
            <?php 
                unset($_SESSION['keep_firstname']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Prenom" name="firstname">
            <?php
            }
            
                if(isset($_SESSION['firstname']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['firstname'] ?></div>
            <?php
                    unset($_SESSION['firstname']);
                }

                if(isset($_SESSION['no_firstname']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_firstname'] ?></div>
            <?php
                    unset($_SESSION['no_firstname']);
                }
            ?>
            </div>

            <div class="col-10 offset-1 mb-3">
            <?php 
            if(isset($_SESSION['keep_email'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_email'] ?>" name="email">
            <?php 
                unset($_SESSION['keep_email']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Email" name="email">
            <?php
            }
            
                if(isset($_SESSION['email']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['email'] ?></div>
            <?php
                    unset($_SESSION['email']);
                }

                if(isset($_SESSION['no_email']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_email'] ?></div>
            <?php
                    unset($_SESSION['no_email']);
                }
            ?>
            </div>

            <div class="col-10 offset-1 mb-3">
                <input type="text" class="form-control border-dark text-center" placeholder="Mot de passe" name="password">
            <?php

                if(isset($_SESSION['no_password']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_password'] ?></div>
            <?php
                    unset($_SESSION['no_password']);
                }
            ?>
            </div>

            <div class="col-10 offset-1 mb-4">
                <button type="submit" class="form-control btn btn-primary border-dark text-center">CREER</button>
            </div>

        </form>
    </div>
    
</body>
</html>

<?php
    session_unset();
?>