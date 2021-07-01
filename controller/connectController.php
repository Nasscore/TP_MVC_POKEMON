<?php
if (isset($_POST['submit'])) {

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=exo_connection', 'root', '');
        $query1 = 'SELECT * FROM `user` WHERE `email` ='. $pdo->quote($_POST['connectEmail']);
        $query1 = $pdo->prepare($query1);
        $query1->execute();
        $user= $query1->fetch(PDO::FETCH_OBJ);

    } catch (Exception $e) {

    }


    if($user!=false){
        if(password_verify($_POST['connectPassword'],$user->password)){
            session_start();
            $_SESSION['user']=$user;


            header('location: ../view/pokedex.php');
        }else{
            header('location: ../view/connect.php');
        }
    }else{
        header('location: ../view/connect.php');
    }
}
