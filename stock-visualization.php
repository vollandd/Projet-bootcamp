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
    <h1 class="text-center mt-4">Le stock</h1>

    <?php

    require 'stock.php';

    require 'function-import-data-stock.php';

    $stmt = import_data_stock();

    ?>

    <div class="col-10 offset-1 mt-5">
        <table class="table table-bordered">
            <tr>
                <th class="text-center">Libelle</th>
                <th class="text-center">Fournisseur</th>
                <th class="text-center">Prix achat en €</th>
                <th class="text-center">Prix vente en €</th>
                <th class="text-center">Quantité</th>
                <th class="text-center">supprimer</th>
                <th class="text-center">modifier</th>
            </tr>
            <?php
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $stock = unserialize($row['data']);
            ?>
                        <tr>
                            <td class="text-center"><?php echo $stock->getName();?></td>
                            <td class="text-center"><?php echo $stock->getSupplier();?></td>
                            <td class="text-center"><?php echo $stock->getBuying_price();?>€</td>
                            <td class="text-center"><?php echo $stock->getSelling_price();?>€</td>
                            <td class="text-center"><?php echo $stock->getQuantity_stock();?></td>
                            <td><div class="offset-3 col-6"><a class="text-white"href="delete_stock.php?id=<?php echo $row['id'] ?>"><button type="submit" class="form-control btn btn-danger border-dark" name="supprimer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></a></div></td>
                            <td><div class="offset-3 col-6"><a class="text-white"href="edit_stock.php?id=<?php echo $row['id'] ?>"><button type="submit" class="form-control btn btn-warning border-dark" name="editer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></button></a></div></td>
                        </tr>
            <?php
                    }
                    
            ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>