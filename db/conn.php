<?php
   /*Developement connection
    $host = '127.0.0.1';
    $db = 'sms';
    $user ='root';
    $pass = '';
    $charset = 'utf8mb4';*/

    //remote database connection
    $host = 'sql364.main-hosting.eu';
    $db = 'u534375228_sms_db';
    $user ='u534375228_ejohnson';
    $pass = '3N1gma1984';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        //echo 'DB Linked';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        echo "<h1 class='text-danger'>No Database Found</h>";
       // throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $users = new user($pdo);

    $users->insertUser("admin","@dministrat0r");
?>