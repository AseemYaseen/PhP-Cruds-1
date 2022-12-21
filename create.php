<?php

require_once('db.php');

if(isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['Salary'])){
   
    $Name= $_POST['Name'];
    $Address= $_POST['Address'];
    $Salary= $_POST['Salary'];

    $sql = 'INSERT INTO employees(Name, Address, Salary) VALUE (:Name, :Address, :Salary)';

    $statment = $connection->prepare($sql);

    if($statment->execute([':Name'=>$Name,':Address'=>$Address,':Salary'=>$Salary ])){

        $message = "Data inserted successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <?php 
    if(!empty($message)){
        echo "Success";
    }
    ?>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" name="Name" id="">

        <label for="Address">Address</label>
        <input type="text" name="Address" id="">

        <label for="salary">salary</label>
        <input type="text" name="Salary" id="">

        <button type="submit">submit</button>
    </form>
</body>
</html>