<?php

require_once('db.php');

$id=$_GET['theid'];

if(isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['Salary'])){
   
    $Name= $_POST['Name'];
    $Address= $_POST['Address'];
    $Salary= $_POST['Salary'];

    $sql =" UPDATE `employees` set id=$id, Name='$Name',
    Address='$Address', Salary='$Salary'
    WHERE id=$id";

    $statment = $connection->query($sql);

    // if($statment->execute([':Name'=>$Name,':Address'=>$Address,':Salary'=>$Salary])){

    //     $message = "Data inserted successfully";
    // }
    if($statment){
        echo 'Updated successfully';
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

        <button type="submit">Update</button>
    </form>
</body>
</html>