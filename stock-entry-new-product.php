<?php
    session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="d-flex">
  <div>
    <?php
      require 'menu-admin.php'; 
    ?>
  </div>

  <div class="col-8">
    <h1 class="text-center mt-4">Saisie stock nouveau produit</h1>

    <form action="action-stock-entry-new-product.php" method="post">

    <div class="col-2 offset-5 mt-5">
        <select class="form-select border-dark" aria-label="Default select example" name="type">
            <option value="empty" selected>Selectioner un type de produit</option>
            <option value="ski-alpin">Ski alpin</option>
            <option value="ski-de-fond">Ski de fond</option>
            <option value="ski-de-randonne">Ski de randonne</option>
            <option value="snowboard">Snowboard</option>
            <option value="splitboard">Splitboard</option>
            <option value="fixation-ski-alpin">Fixation ski alpin</option>
            <option value="fixation-ski-de-fond">Fixation ski de fond</option>
            <option value="fixation-ski-de-randonne">Fixation ski de randonne</option>
            <option value="fixation-snowboard">Fixation snowboard</option>
            <option value="chaussure-ski-alpin">Chaussure ski alpin</option>
            <option value="chaussure-ski-de-fond">Chaussure ski de fond</option>
            <option value="chaussure-ski-de-randonne">Chaussure ski de randonne</option>
            <option value="boots-snowboard">Boots snowboard</option>
            <option value="baton-ski-alpin">Baton ski alpin</option>
            <option value="baton-ski-de-fond">Baton ski de fond</option>
            <option value="baton-ski-de-randonne">Baton ski de randonne</option>
            <option value="vetement">Vetement</option>
            <option value="vetement-chauffant">Vetement chauffant</option>
            <option value="accessoire-textile">Accessoire textile</option>
            <option value="protection">Protection</option>
        </select>
    </div>

    <div class="col-2 offset-5 mt-3">
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
                <input type="text" class="form-control border-dark text-center" placeholder="Libelle produit" name="name">
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

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_buying_price'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_buying_price'] ?>" name="buying_price">
            <?php 
                unset($_SESSION['keep_buying_price']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Prix unitaire achat" name="buying_price">
            <?php
            }
            
                if(isset($_SESSION['buying_price']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['buying_price'] ?></div>
            <?php
                    unset($_SESSION['buying_price']);
                }

                if(isset($_SESSION['no_buying_price']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_buying_price'] ?></div>
            <?php
                    unset($_SESSION['no_buying_price']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_selling_price'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_selling_price'] ?>" name="selling_price">
            <?php 
                unset($_SESSION['keep_selling_price']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Prix unitaire vente" name="selling_price">
            <?php
            }
            
                if(isset($_SESSION['selling_price']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['selling_price'] ?></div>
            <?php
                    unset($_SESSION['selling_price']);
                }

                if(isset($_SESSION['no_selling_price']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_selling_price'] ?></div>
            <?php
                    unset($_SESSION['no_selling_price']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_supplier'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_supplier'] ?>" name="supplier">
            <?php 
                unset($_SESSION['keep_supplier']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Fournisseur" name="supplier">
            <?php
            }
            
                if(isset($_SESSION['supplier']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['supplier'] ?></div>
            <?php
                    unset($_SESSION['supplier']);
                }

                if(isset($_SESSION['no_supplier']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_supplier'] ?></div>
            <?php
                    unset($_SESSION['no_supplier']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_quantity_stock'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_quantity_stock'] ?>" name="quantity_stock">
            <?php 
                unset($_SESSION['keep_quantity_stock']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Nombre de produit" name="quantity_stock">
            <?php
            }
            
                if(isset($_SESSION['quantity_stock']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['quantity_stock'] ?></div>
            <?php
                    unset($_SESSION['quantity_stock']);
                }

                if(isset($_SESSION['no_quantity_stock']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_quantity_stock'] ?></div>
            <?php
                    unset($_SESSION['no_quantity_stock']);
                }
            ?>
        </div>

    <div class="col-2 offset-5 mt-3">
            <button type="submit" class="form-control btn btn-primary border-dark text-center">valider</button>
        </div>

    </form>
    </div>
</div>
</body>
</html>

<?php
    session_unset();
?>