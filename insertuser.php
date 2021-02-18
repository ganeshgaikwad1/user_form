<?php 
    include_once("mysql_connection.php");
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $city = $_REQUEST['city'];
    $mob = $_REQUEST['mob'];

    <?= console_log($fname,$lname,$dob,$city,$mob); ?>

    $insert = "insert into user
    (`fname`,`lname`,`dob`,`city`,`mob`)values
    ('$fname','$lname','$dob','$city',$mob)";

    mysqli_query($conn, $insert) or die($conn->error);
    $status = "Record Inserted Successfully. </br></br><a href='viewuser.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">' . $status . '</p>';
?>