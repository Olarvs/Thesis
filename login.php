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

     <form action="login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Privacy Policy</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button><br><br>
        <a href="#">Create new Account</a><br>
        <a href="#">Go back to Homepage</a>
        
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
     </style>

<!-- <?php include 'includes/scripts.php' ?> -->
</body>
</html>