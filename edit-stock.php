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
    $id = $_GET['id'];

      require 'menu-admin.php';
      
      require 'stock.php';

      require 'function-import-data-stock-specific-id.php';

      $stock = import_data_stock_specific_id($id);
    ?>
  </div>

  <div class="col-8">
    <h1 class="text-center mt-4">Modification stock</h1>

    <form action="action-edit-stock.php?id=<?php echo $id ?>" method="post">

    <div class="col-2 offset-5 mt-5">
        <label for="type">Libelle produit</label>
        <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getType() ?>" name="type">
    </div>

    <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_name'])) 
            { 
            ?>
                <label for="name">Libelle produit</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_name'] ?>" name="name">
            <?php 
                unset($_SESSION['keep_name']);
            } 
            else 
            {
            ?>
                <label for="name">Libelle produit</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getName() ?>" name="name">
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
                <label for="buying_price">Prix unitaire achat</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_buying_price'] ?>" name="buying_price">
            <?php 
                unset($_SESSION['keep_buying_price']);
            } 
            else 
            {
            ?>
                <label for="buying_price">Prix unitaire achat</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getBuying_price() ?>" name="buying_price">
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
                <label for="selling_price">Prix unitaire vente</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_selling_price'] ?>" name="selling_price">
            <?php 
                unset($_SESSION['keep_selling_price']);
            } 
            else 
            {
            ?>
                <label for="selling_price">Prix unitaire vente</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getSelling_price() ?>" name="selling_price">
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
                <label for="supplier">Fournisseur</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_supplier'] ?>" name="supplier">
            <?php 
                unset($_SESSION['keep_supplier']);
            } 
            else 
            {
            ?>
                <label for="supplier">Fournisseur</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getSupplier() ?>" name="supplier">
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
                <label for="quantity_stock">Nombre de produit</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_quantity_stock'] ?>" name="quantity_stock">
            <?php 
                unset($_SESSION['keep_quantity_stock']);
            } 
            else 
            {
            ?>
                <label for="quantity_stock">Nombre de produit</label>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $stock->getQuantity_stock() ?>" name="quantity_stock">
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