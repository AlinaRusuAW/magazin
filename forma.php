<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widht=divice-width, initial-scale=1.0">
  <meta http-eqiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Magazin online</title>
</head>
<body> 
<?php require "blok/header.php" ?>
<div class="container mt-5">  
<form action="check.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Formă de înregistrare </h1>
   <input type="text" name="login" id="login" class="form-control" placeholder="Introduceţi login">
  <input type="text" name="name" id="name" class="form-control" placeholder="Introduceţi nume">
  <input type="password" name="pass" id="pass" class="form-control" placeholder="Introduceţi parola">
  <button class="btn btn-lg btn-success btn-block" type="submit">Înregistrare</button> 
</form>
</div>
<?php require "blok/footer.php" ?>
</body>
</html>