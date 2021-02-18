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

    <?php
        include_once("mysql_connection.php");
        $sql = "select * from user";
        $result = $conn->query($sql) or die($conn->error);
    ?>

    <div style="margin-left:320px;margin-top:50px;">
        <span style="font-family: 'Courgette', cursive;font-size:80px;">Welcome To User Zone</span><br><br>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="displayusermenu.php" method="POST">
				<table class="table table-striped" align="center">
					<tr>
						<td>First Name</td>
						<td>Last Name</td>
						<td>DOB</td>
						<td>City</td>
                        <td>Mobile Number</td>
					</tr>
					<?php while($row = $result->fetch_assoc()){
						?><tr>
							<td><?php echo $row["fname"]?></td>
							<td><?php echo $row["lname"]?></td>
							<td><?php echo $row["dob"]?></td>
							<td><?php echo $row["city"]?></td>
                            <td><?php echo $row["mob"]?></td>
                            <td>
                                <a class="btn btn-info" href="edituser.php?id=<?php echo $row["userid"]; ?>">Edit</a> &nbsp;&nbsp;
                                <a class="btn btn-info" href="deleteuser.php?id=<?php echo $row["userid"]; ?>">Delete</a>
                            </td>
						</tr>
					<?php } ?>
				</table>
			</form>
            <a href="adduser.php" class="btn btn-lg btn-success" style="align-content: center;margin-left: 450px">Add User</a>
			</div>
		</div>
	</div>

</body>

</html>