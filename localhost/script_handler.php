<?php
    include_once("connection.php");


    $username = $_POST['username'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];


    $data = [
        'username' => $username,
        'email' => $email,
        'password' => $pswd
    ];
        $STH = $DBH->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

        $STH->execute($data);
