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
    <form action="insertuser.php">
        <div class="form-group">
            <label >First Name:</label>
            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label >Last Name:</label>
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label >Dob:</label>
            <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter Date of Birth in DD/MM/YYYY">
        </div>
        <div class="form-group">
            <label >City:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
        </div>
        <div class="form-group">
            <label >Mobile Number:</label>
            <input type="number" class="form-control" name="mob" id="mob" placeholder="Enter Mobile Number">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
    </div>

</body>

</html>