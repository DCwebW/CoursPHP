<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Classe avec attribut statique</h1>
            <?php 
            require "Exo2(Correction).php";

            $m1 = new maison(2021,2,80);
            $m2 = new maison(2022,3,100);
            $m3 = new maison(2023,4,120);
            $m4 = new maison(2024,3,90);

            $maison=[$m1,$m2,$m3,$m4];
            ?>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Année</th>
      <th scope="col">Nombres de Chambres</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($maison as $m):?>
    <tr>
        <th scope="row"><?= $m -> getId();?></th>

        <td><?= $m->getdate();?></td>
        <td><?= $m->getNbchambre();?></td>
        <td><?= $m->getSurface();?></td>
    </tr>


<?php endforeach;?>
  </tbody>
</table>
        </div>
    </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>