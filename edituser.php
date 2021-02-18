<?php
include_once("mysql_connection.php");
$id = $_REQUEST['id'];
$query = "SELECT * from user where userid='" . $id . "'";
$result = mysqli_query($conn, $query) or die($conn->error);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To User Management System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-image: url(bck.jpg);background-repeat: none;background-size: cover;">
    <div style="margin-left:320px;margin-top:50px;">
        <span style="font-family: 'Courgette', cursive;font-size:80px;">Welcome To User Zone</span><br><br>
    </div>

    <div class="container">
        <form action="updateuser.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="id" id="fname" value="<?php echo $row['userid']; ?>">
            </div>
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['fname']; ?>">
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname']; ?>">
            </div>
            <div class="form-group">
                <label>Dob:</label>
                <input type="text" class="form-control" name="dob" id="fname" value="<?php echo $row['dob']; ?>">
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control" name="city" id="fname" value="<?php echo $row['city']; ?>">
            </div>
            <div class="form-group">
                <label>Mobile Number:</label>
                <input type="text" class="form-control" name="mob" id="fname" value="<?php echo $row['mob']; ?>">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


</body>

</html>