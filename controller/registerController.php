<?php
if(isset($_POST['formEmail'])&& isset($_POST['formPassword'])&& isset($_POST['formFirstName'])&& isset($_POST['formLastName'])){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=exo_connection', 'root', '');
        $query = 'INSERT INTO `user` (`firstName`, `lastName`, `email`, `password`,`created_at`)  
            VALUES ('.$pdo->quote($_POST['formFirstName']).','.$pdo->quote($_POST['formLastName']).','.$pdo->quote($_POST['formEmail']).','.$pdo->quote(password_hash($_POST['formPassword'],PASSWORD_DEFAULT)).',' .$pdo->quote(date("Y/m/d")).')';
        $resultats = $pdo->query($query);
        header('location: ../view/pokedex.php');
    }
    catch(exception $e) {
    }
}