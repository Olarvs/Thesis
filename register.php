<?php
require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;

		if(!isset($_SESSION['email'])){
			// require('recaptcha/src/autoload.php');		
			// $recaptcha = new \ReCaptcha\ReCaptcha('6LevO1IUAAAAAFCCiOHERRXjh3VrHa5oywciMKcw', new \ReCaptcha\RequestMethod\SocketPost());
			// $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

			// if (!$resp->isSuccess()){
		  	// 	$_SESSION['error'] = 'Please answer recaptcha correctly';
		  	// 	header('location: signup.php');	
		  	// 	exit();	
		  	// }	
		  	// else{
		  	// 	$_SESSION['captcha'] = time() + (10*60);
		  	// }

		}

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: signup.php');
		}
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: signup.php');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{

					$stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, activate_code, created_on) VALUES (:email, :password, :firstname, :lastname, :code, :now)");
					$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'code'=>$code, 'now'=>$now]);
					$userid = $conn->lastInsertId();

					// $mail= new PHPMailer();
					// $mail->isSMTP();
					// $mail->Host = "smtp.gmail.com";
					// $mail->SMTPAuth="true";
					// $mail->Port="587";
					// $mail->smtpClose();
					// $otp = mt_rand(100000,999999);
					// $mail->SMTPSecure = "tls";
					// $mail->Username = 'margauxcsc@gmail.com';
					// $mail->Password ="qjptjlezzvfrxiuz";
					// $mail->Subject="Email Verification";
					// $mail->setFrom("margauxcsc@gmail.com");
					// $mail->Body="Thank you for registering to Margaux Cacti & Succulents Corner";

					$message = "
						<h2>Thank you for Registering your account</h2>
						<p>Your Account:</p>
						<p>Email: ".$email."</p>
						<p>Please click the link below to activate your account.</p>
						<a href='http://localhost/Margaux/activate.php?code=".$code."&user=".$userid."'>Activate Account</a>";
					// $mail->addAddress($email);
					// $mail->Send();

					// Load "phpmailer"
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    try {
				        // Server settings
				        $mail->isSMTP();                                     
				        $mail->Host = 'smtp.gmail.com';                      
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'margauxcsc@gmail.com';     
				        $mail->Password = 'qjptjlezzvfrxiuz';                    
				        $mail->SMTPOptions = array(
				            'tls' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'tls';                           
				        $mail->Port = 587;                                   

				        $mail->setFrom('margauxcsc@gmail.com');
				        
				        //Recipients
				        $mail->addAddress($email);              
				        $mail->addReplyTo('margauxcsc@gmail.com');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Margaux Cacti & Succulents';
				        $mail->Body    = $message;

				        $mail->send();

				        unset($_SESSION['firstname']);
				        unset($_SESSION['lastname']);
				        unset($_SESSION['email']);

				        $_SESSION['success'] = "Account created. Check your email to activate.";
				        header('location: signup.php');

				    } 
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location: signup.php');
				    }


				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: register.php');
				}

				$pdo->close();

			}

		}

	}
	else{
		$_SESSION['error'] = 'Fill up signup form first';
		header('location: signup.php');
	}

?>