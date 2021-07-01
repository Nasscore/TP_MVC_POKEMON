<?php
   session_start();
?>




<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="app-header">
    <div class="container">
        <div class="row head">
            <div class="pokeball">
                <img src="../asset/pokeball.png" width="100px" height="auto" class="pokeball">
            </div>
            <h2><a href="pokedex.php"> Le super Pokédex</a></h2>
            <div class="pokeball">
                <img src="../asset/pokeball.png" width="100px" height="auto" class="pokeball">
            </div>
        </div>
    </div>
    <div class="connection">
        <?php if(!isset($_SESSION['user'])){

            echo '<a href="connect.php" class="btn btn-secondary">Se connecter</a>';
            echo '<a href="register.php" class="btn btn-secondary">S\'inscrire</a>';
        }else{
            echo '<a href="../controller/disconnectController.php" class="btn btn-danger">Se déconnecter</a>';
        }
       ?>
    </div>

</div>

</body>
<div class="container">