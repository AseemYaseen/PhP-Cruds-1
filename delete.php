<?php
require_once('db.php');
if(isset($_GET['DeId'])){

    $id=$_GET['DeId']

    $sql =" UPDATE `employees` set id=$id, Name='$Name',
    Address='$Address', Salary='$Salary'
    WHERE id=$id";
}

?>