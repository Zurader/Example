<?php

    include_once("config.php");
    try {  
        $DBH = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PSWD);
    }  
    catch(PDOException $e) {  
        echo $e->getMessage();  
    }   






    
     $STH = $DBH->query('SELECT username, email, passwrod from users');

     $STH->setFetchMode(PDO::FETCH_ASSOC); 

     while($row = $STH->fetch()) {  
         echo $row['username'] . "\n";  
         echo $row['email'] . "\n";  
         echo $row['password'] . "\n";  
     }