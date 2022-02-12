<?php  
session_start();  
$host = "localhost";  
$username = "root";  
$password = "";  
$database = "tdw";  
$message = "";  
try  
{  
	 $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
	 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
	 if(isset($_POST["login"]))  
	 {  
		  if(empty($_POST["username"]) || empty($_POST["password"]))  
		  {  
			   $message = '<label>All fields are required</label>';  
		  }  
		  else  
		  {  
			   $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
			   $statement = $connect->prepare($query);  
			   $statement->execute(  
					array(  
						 'username'     =>     $_POST["username"],  
						 'password'     =>     $_POST["password"]  
					)  
			   );  
			   $count = $statement->rowCount();  
			   if($count > 0)  
			   {  
					$_SESSION["username"] = $_POST["username"];  
					header("location:admin.php");  
			   }  
			   else  
			   {  
					$message = '<label>Wrong Data</label>';  
			   }  
		  }  
	 }  
}  
catch(PDOException $error)  
{  
	 $message = $error->getMessage();  
}  
?>  
<!DOCTYPE HTML>
<html>
<head>
<title>PIÈCE-AUTO- | Login</title>
<meta charset="utf-8">
<!-- Méta -->
<meta charset="utf-8">
<meta name="author" content="Réhioui Amir" />
<meta name="description" content="Vous pouvez acheter en ligne sans crainte les  pièces détachées 
pour les BMW, Audi, Volkswagen, Mercedes. Sur le site Piecesauto.dz vous trouverez plus 
de 200000 pièces détachées comme les disques de frein, le pot d’échappement, les pare-chocs" />
<meta name="keywords" content="Aceuill, video publicitaire" />
		  <title>Webslesson Tutorial | PHP Login Script using PDO</title>  
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		  <link rel="stylesheet" href="css/style-login.css">
<noscript>
        <link rel="stylesheet" href="css/5grid/core.css">
        <link rel="stylesheet" href="css/5grid/core-desktop.css">
        <link rel="stylesheet" href="css/5grid/core-1200px.css">
        <link rel="stylesheet" href="css/5grid/core-noscript.css">
        <link rel="stylesheet" href="css/style.css">
        </noscript>
        <link rel="stylesheet" href="css/style-login.css">
        
        <script src="css/5grid/jquery.js"></script>
        <script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
</head>  
<body>  
				<div id="header-wrapper">
					<header id="header" class="5grid-layout">
					<div class="row">
						<div class="12u">
						<!-- Logo -->
						<h1><a href="#" class="mobileUI-site-name">PIÈCE-AUTO</a></h1>
						<p style="margin-left: 40px" > قطع غيـــــــــار  </p>
						</div>
					</div>
					</header>
				</div>

				<div id="wrapper">
				<div class="5grid-layout">
				<div id="page">
				<div class="row">
				<div class="12u">
				<section id="content">
						<div class="login-page">
								<div class="form">
								<?php  
									if(isset($message))  
									{  
									echo '<label class="text-danger">'.$message.'</label>';  
									}  
									?>  
									<form class="login-form" method="post"  >
											<input type="text" placeholder="Nom d'utilisateur" name="username" required autofocus/>
											<input type="password" placeholder="Mot de passe" name="password" required/>
											<button name="login" type="submit" value="Login" >login</button>
									</form>
								</div>
						</div>
				</div>
				
				<div class="5grid-layout">
					<div id="copyright">
						<section>
						</section>
					</div>
				</div>
</body>
</html>  