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
    <h1 class="text-center mt-4">Saisie stock</h1>

    <?php

    require 'stock.php';

    require 'function-import-data-stock.php';

    $stmt = import_data_stock();

    ?>
    <div class="d-flex">
      <div class="col-2 offset-5 mt-5">
        <form action="action-stock-entry.php" method="post">
            <div>
                <select class="form-select border-dark" aria-label="Default select example" name="id">
                    <option value="empty" selected>Selectioner un produit</option>
                    <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                            $stock = unserialize($row['data']);
                    ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $stock->getName()?></option>
                    <?php
                        }
                    ?>
                </select>
                <?php
                if (isset($_SESSION['no_product']))
                  {
                ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_product'] ?></div>
                  <?php
                    unset($_SESSION['no_product']);  
                  }
                  ?>
            </div>            
          

          

          <div class="mt-3">
          <?php 
                if(isset($_SESSION['keep_product_number'])) 
                { 
                ?>
                    <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_product_number'] ?>" name="product_number">
                <?php 
                    unset($_SESSION['keep_product_number']);
                } 
                else 
                {
                ?>
            <input type="text" class="form-control border-dark text-center" placeholder="Nombre de produit" name="product_number">
            <?php
            }
                    if(isset($_SESSION['product_number']))
                    {
                ?>
                        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['product_number'] ?></div>
                <?php
                        unset($_SESSION['product_number']);
                    }

                    if(isset($_SESSION['no_product_number']))
                    {
                ?>
                        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_product_number'] ?></div>
                <?php
                        unset($_SESSION['no_product_number']);
                    }
                ?>
          </div>

          

            <div class="mt-3">
              <button type="submit" class="form-control btn btn-primary text-center">valider</button>
            </div>

          </form>
        </div>

        <div class="col-3 offset-1 mt-5">
          <a class="text-white text-decoration-none"href="stock-entry-new-product.php"><button class="form-control btn btn-primary border-dark text-center">Créer un nouveau produit</button></a>
        </div> 
      </div>
    </div>
</div>
</body>
</html>

<?php
    session_unset();
?>