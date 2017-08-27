<?php
include("config.php");
if (isset($_POST["username"])) {
		$f_username = $_POST["username"];
		$f_email_id = $_POST["email"];
		$f_password = $_POST["password"];

		$sql = "SELECT * FROM login WHERE username='$f_username'";
		$result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0)
                   {    
		  $fmsg= "Username already exist!";  
		    }
	       else
                  {    
		  $h_password = md5($f_password);
		  $sql = "INSERT INTO login (id, username, email, password) VALUES ('','$f_username', '$f_email_id', '$h_password')";
            
            if (mysqli_query($conn, $sql)) {
                $smsg= "you are Registered Successfully!";
            } else {
                $fmsg= "Error: " . $sql . "<br>" . mysqli_error($conn);
            }	    
	}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
<title>register</title>
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
        <input type="text" id="inputname" class="form-control" placeholder="Name" name="username" required autofocus>
      <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
<body>
</html>