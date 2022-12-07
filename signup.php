<?php include 'includes/session.php'; ?>

<?php
if(isset($_SESSION['user'])){
    header('location:index.php');
}
?>

<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="register.php" method="POST">
        <h2>Sign Up</h2>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" style="font-family: roboto, sans-serif" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repassword" style="font-family: roboto, sans-serif" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup" id="signup"><i class="fa fa-pencil"></i> Sign Up</button>
          <p>By clicking the sign up button you agree to the terms of privacy policy described <a href="https://oneclicksociallogin.devcloudsoftware.com/privacy/policy/">here</a>.</p><br>
      <a href="login.php">I already have an account</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
     </form>
     <style>
body {
	background: #D4ECF5;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	font-size: 18px;
	padding: 10px;
}

a {
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .5;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>
</body>
</html>