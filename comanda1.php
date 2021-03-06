<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Magazin online</title>
</head>
<body>
<?php require "blok/header.php"?>
<div class="container mt-5">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Buchet dulce în cutie "Imperial"</span></h2>
        <p class="lead">
         <ul class="list-unstyled mt-3 mb-4">
              <li>-Flori din hîrtie creponată</li>
              <li>-Culoarea: roșu și alb (sau la alegerea dvs.)</li>
              <li>-Bomboane: Raffaello (sau la alegerea dvs.)</li>
              <li>-Categoria: Pentru femei</li>
              <li>-Preț: 470 lei</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-success"><a href="comanda1.php">Adaugă în coș</a></button><br>     
        </p>
      </div>
       <div class="col-md-5">
       <img src="img/1.jpg" class="img-thumbnail">
      </div>
    </div>
</div>
<div class="container mt-5">
   <h2 class="text-center">Comentarii:</h2>
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"></span><span class="date text-black-50"> </span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text"> </p>
                    </div>
                </div>
                <div class="bg-light p-2">
                    <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Publică</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Anulare</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "blok/footer.php"?>
</body>
</html>