<?php

      require 'stock.php';

      require 'function-import-data-stock.php';

      $ski_alpin = 0;
      $ski_de_fond = 0;
      $ski_de_randonne = 0;
      $snowboard = 0;
      $splitboard = 0;
      $fixation_ski_alpin = 0;
      $fixation_ski_de_fond = 0;
      $fixation_ski_de_randonne = 0;
      $fixation_snowboard = 0;
      $chaussure_ski_alpin = 0;
      $chaussure_ski_de_fond = 0;
      $chaussure_ski_de_randonne = 0;
      $boots_snowboard = 0;
      $baton_ski_alpin = 0;
      $baton_ski_de_fond = 0;
      $baton_ski_de_randonne = 0;
      $vetement = 0;
      $vetement_chauffant = 0;
      $accessoire_textile = 0;
      $protection = 0;

      $stmt2 = import_data_stock();

      while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
        {
            $stock2 = unserialize($row2['data']);
            if ($stock2->getType() == "ski-alpin")
            {
              $ski_alpin++;
            }
            elseif ($stock2->getType() == "ski-de-fond")
            {
              $ski_de_fond++;
            }
            elseif ($stock2->getType() == "ski-de-randonne")
            {
              $ski_de_randonne++;
            }
            elseif ($stock2->getType() == "snowboard")
            {
              $snowboard++;
            }
            elseif ($stock2->getType() == "splitboard")
            {
              $splitboard++;
            }
            elseif ($stock2->getType() == "fixation-ski-alpin")
            {
              $fixation_ski_alpin++;
            }
            elseif ($stock2->getType() == "fixation-ski-de-fond")
            {
              $fixation_ski_de_fond++;
            }
            elseif ($stock2->getType() == "fixation-ski-de-randonne")
            {
              $fixation_ski_de_randonne++;
            }
            elseif ($stock2->getType() == "fixation-snowboard")
            {
              $fixation_snowboard++;
            }
            elseif ($stock2->getType() == "chaussure-ski-alpin")
            {
              $chaussure_ski_alpin++;
            }
            elseif ($stock2->getType() == "chaussure-ski-de-fond")
            {
              $chaussure_ski_de_fond++;
            }
            elseif ($stock2->getType() == "chaussure-ski-de-randonne")
            {
              $chaussure_ski_de_randonne++;
            }
            elseif ($stock2->getType() == "boots-snowboard")
            {
              $boots_snowboard++;
            }
            elseif ($stock2->getType() == "baton-ski-alpin")
            {
              $baton_ski_alpin++;
            }
            elseif ($stock2->getType() == "baton-ski-de-fond")
            {
              $baton_ski_de_fond++;
            }
            elseif ($stock2->getType() == "baton-ski-de-randonne")
            {
              $baton_ski_de_randonne++;
            }
            elseif ($stock2->getType() == "vetement")
            {
              $vetement++;
            }
            elseif ($stock2->getType() == "vetement-chauffant")
            {
              $vetement_chauffant++;
            }
            elseif ($stock2->getType() == "accessoire-textile")
            {
              $accessoire_textile++;
            }
            elseif ($stock2->getType() == "protection")
            {
              $protection++;
            }
        }
      
      ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['type', 'number'],
          ['Ski alpin', <?php echo $ski_alpin ?>],
          ['Ski de fond', <?php echo $ski_de_fond ?>],
          ['Ski de randonne', <?php echo $ski_de_randonne ?>],
          ['Snowboard', <?php echo $snowboard ?>],
          ['Splitboard', <?php echo $splitboard ?>],
          ['Fixation ski alpin', <?php echo $fixation_ski_alpin ?>],
          ['Fixation ski de fond', <?php echo $fixation_ski_de_fond ?>],
          ['Fixation ski de randonne', <?php echo $fixation_ski_de_randonne ?>],
          ['Fixation snowboard', <?php echo $fixation_snowboard ?>],
          ['Chaussure ski alpin', <?php echo $chaussure_ski_alpin ?>],
          ['Chaussure ski de fond', <?php echo $chaussure_ski_de_fond ?>],
          ['Chaussure ski de randonne', <?php echo $chaussure_ski_de_randonne ?>],
          ['Boots snowboard', <?php echo $boots_snowboard ?>],
          ['Baton ski alpin', <?php echo $baton_ski_alpin ?>],
          ['Baton ski de fond', <?php echo $baton_ski_de_fond ?>],
          ['Baton ski de randonne', <?php echo $baton_ski_de_randonne ?>],
          ['Vetement', <?php echo $vetement ?>],
          ['Vetement chauffant', <?php echo $vetement_chauffant ?>],
          ['Accessoire textile', <?php echo $accessoire_textile ?>],
          ['Protection', <?php echo $protection ?>]
        ]);

        var options = {
          title: 'Repartition des ventes (sur ordonnance ou non)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>

<div class="d-flex">
  <div>
    <?php
      require 'menu-admin.php'; 
    ?>
  </div>

  <div class="col-8">
    <h1 class="text-center mt-4">Dashboard</h1>

    <?php

    $total_product_sale = 0;

    $total_product_stock = 0;

    $total_stock_value = 0;

    $stmt = import_data_stock();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $stock = unserialize($row['data']);
            $total_product_sale++;
            $total_product_stock = $total_product_stock + $stock->getQuantity_stock();
            $total_stock_value = $total_stock_value + ($stock->getQuantity_stock()*$stock->getSelling_price());
        }

    


    ?>
    <div class="d-flex">
      <div class="offset-1 mt-5">
        <p>Nombre de produit en vente : <?php echo $total_product_sale ?></p>

        <p>Nombre de produit en stock : <?php echo $total_product_stock ?></p>

        <p>Valeur du stock : <?php echo $total_stock_value ?>€</p>
      </div>
      <div class="offset-2 mt-5" id="piechart" style="width: 400px; height: 200px;"></div>
    </div>
  </div>
</div>

</body>
</html>