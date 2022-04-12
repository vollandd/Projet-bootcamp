<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php

        require 'stock.php';

        require 'function-import-data-stock-specific-id.php';

        $id = $_GET['id'];

        $stock = import_data_stock_specific_id($id);
    ?>

    <div class="d-flex">
    <div>
        <?php
        require 'menu-admin.php'; 
        ?>
    </div>

    <div class="col-8">
        <h1 class="text-center mt-4">Suppression stock</h1>

            <div class="mt-5 mb-4">

                <div class="col-4 offset-4 mt-5 text-center border border-dark p-3">
                    <div class="mt-3">
                        <p>Etes vous sur de vouloir supprimer le <span class="text-danger"><?php echo $stock->getName(); ?></span> du stock ?</p>
                    </div>
                    <div class="row">
                        <div class="col-5 mb-4 offset-2">
                            <a class="text-white text-decoration-none"href="stock_visualization.php"><button type="submit" class="form-control btn btn-secondary border-dark" name="annuler">ANNULER</button></a>
                        </div>

                    
                        <div class="col-5 mb-4">
                            <form action="action-delete-stock.php?id=<?php echo $id ?>" method="post">
                                <button type="submit" class="form-control btn btn-danger border-dark" name="supprimer">SUPPRIMER</button>
                            </form>
                        </div>
                    </div>
                    
                </div>

            
            </div>
        </div>
</div>
</body>
</html>