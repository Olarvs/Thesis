<?php include 'includes/session.php'; ?>

<?php
if(isset($_SESSION['user'])){
    header('location:index.php');
}
?>

<?php include 'includes/header.php'; ?>
<html>


<body id="body">
<!-- main content starts here -->

     <form action="verify.php" method="post">

     <?php 
            if(isset($_SESSION['error'])){
                echo "
                <div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <p>".$_SESSION['error']."</p> 
                </div>";
                unset($_SESSION['error']);
              }
              if(isset($_SESSION['success'])){
                echo "
                  <div class='callout callout-success text-center'>
                    <p>".$_SESSION['success']."</p> 
                  </div>
                "; 
                unset($_SESSION['success']);
              }
        ?>
                <h2>Login</h2>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <a href="password_forgot.php">Forgot your password?</a><br><br>
      		<div class="row">
    			<div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" id="login"><i class="fa fa-sign-in"></i> Login</button><br>
        <a href="signup.php">Create new Account</a><br>
        <a href="index.php">Go back to Homepage</a>
        
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

<?php include 'includes/scripts.php' ?>
</body>
</html>