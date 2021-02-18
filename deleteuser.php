<?php
    include_once("mysql_connection.php");
    $id=$_REQUEST['id'];
    $query = "DELETE * FROM user WHERE userid=$id"; 
    $result = mysqli_query($conn,$query) or die($conn->error);
    header("Location: index.php"); 
?>