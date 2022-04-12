
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
          ['ordannance', 'number'],
          ['avec ordonnance', ],
          ['sans ordonnance', ]
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

    require 'stock.php';

    require 'function-import-data-stock.php';

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