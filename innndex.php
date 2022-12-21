<?php
require_once("db.php");
$sql = 'SELECT * FROM employees';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $connection->query($sql);

?>
<table style="border:2px solid black">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <?php foreach($people as $person): ?>
        <tr>
            <td><?php echo $person['id']; ?></td>
            <td><?php echo $person['Name'];?></td>
            <td><?php echo $person['Address']; ?></td>
            <td><?php echo $person["Salary"]; ?></td>
            <td>
                <?php
                echo '<a href="edit.php?theid='.$person['id'].'">Edit</a>'."<br>";
                echo  '<a href="delete.php?DeId='.$person['id'].'">Delete</a>'
                ?>
            </td>
        </tr>
        <?php endforeach; ?>




</table>