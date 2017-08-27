<?php
session_start();
include("config.php");
if (isset($_GET["logout"]))
     {
		session_unset(); 
		session_destroy();
	    $fmsg= "You have logged Out !";
     }
if (isset($_POST["username"])) {
		$f_username = $_POST["username"];
		$f_password = $_POST["password"];
		$sql = "SELECT * FROM login WHERE username='$f_username'";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		        $db_username = $row["username"];
		        $db_password = $row["password"];
		    }
		} else {
		    $fmsg="No Records Found";
		}
        $h_password = md5($f_password);
		if ($h_password == $db_password) {
				$_SESSION['username'] = $db_username;
				$_SESSION['password'] = $db_password;
				header("location: profile.php");
			}

		
		else{
			$fmsg= "Username or Password Incorrect !, Retry";
		}

}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
 </head>
 <body>
    <div class="container">
     <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
      <?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Welcome!!</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" href="profile.php">login</button>
        <a class="btn btn-lg btn-primary btn-block" href="index.php">Register</a>
      </form>
</div>
<body>
</html>