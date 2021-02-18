<?php 
    include_once("mysql_connection.php");
    $id = $_REQUEST["id"];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $city = $_REQUEST['city'];
    $mob = $_REQUEST['mob'];

    $update = "update user set fname='" . $fname . "',lname='" . $lname . "', dob='" . $dob . "',city='" . $city . "' , mob='" . $mob . "' where userid='" . $id . "'";

    mysqli_query($conn, $update) or die($conn->error);
    $status = "Record Updated Successfully. </br></br><a href='viewuser.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">' . $status . '</p>';
?>