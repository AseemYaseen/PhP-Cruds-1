<?php
$dsn = 'mysql:host=localhost;dbname=employeesserver'; 
$user = 'root'; 
$pass = ''; 
$option = [];

try {
   
$connection = new PDO($dsn, $user, $pass, $option); // Start a New connection with PDO class
    echo 'You are Connected to the Server';
    

    
    // $TheEmployees= "INSERT INTO products(Name,Price) VALUES('Product 1','150')";
    
    // $db ->exec($TheEmployees); 
    
    }

    catch(PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
