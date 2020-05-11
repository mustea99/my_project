<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Home</title>
	<style>
		.navbar{
			text-transform: uppercase;
			font-weight: 700px;
			font-size: .9rem;
			letter-spacing: 3px;

		}
		.navbar-nav li{
			padding-right: .7rem;
		}
		body{
			background-image:url(cool.jpeg);

		}
		.main-section{
			margin: 0px auto;
			margin-top: 130px; 
			padding: 0;
		}
		.modal-content{
			background-color: #434e5a;
			padding: 0 18px; 
			border-radius: 10px;
		}
		.form-control{
			padding: 5px;
			margin-top: 20px;
			font-family:'lato',sans-serif;
		}
		h2{
			color:grey;
			font-weight: bold;
			font-family:'lato',sans-serif;
		}
		form{

		}

		
		
	</style>



</head>
<body>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
		<br><br>

<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse bg-dark" role="navigation">
				<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left: 200px;">
					<li class="active"><a class ="navbar-brand" href="index.php">Home</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="authenticate.php">Authentication</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="about.php">About</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="guide.php">Guidelines</a>&emsp;&emsp;</li>
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		

		<h1 style="position: absolute; left:130px; top:150px; color:grey;"><img src="logo2.png" alt="buk logo" width="120px" height="120px"> <br>Bayero University, Kano<br><span style="color:white;letter-spacing:2px;">FINAL YEAR PROJECT<br> MANAGEMENT SYSTEM </span></h1>
	
<div class="container">
	<form action="login.php" method="POST" style=" width:400px; height:300px;margin-top:180px;background-color: #fff; padding:30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; float:right;">
		<div class="caption text-center" style="color:brown;"><h3 style="font-family:'Helvetica',corsiva;">LOGIN</h3></div>
		<div class="form-group">
			<span class="glyphicon glyphicon-user"  style="position: absolute;left:900px; top:325px;"></span><input type="text" name="Username" placeholder="username" style="font-size:20px; border-radius: 20px; padding-left:35px;" class="form-control">
		</div>
		<div class="form-group">
			<span class="glyphicon glyphicon-lock" style="position: absolute;left:900px; top:380px;"></span><input type="password" name="password" placeholder="password"  style="font-size:20px; border-radius: 20px; padding-left:35px;"class="form-control">

			<input type="submit" name="submit"  value="Login "class="btn btn-danger btn-block" style="font-size:20px; border-radius: 20px; margin-top: 15px;">
		
		<div style="margin-top:10px; font-size:18px; margin-left:0px;" ><a href="#" style="text-decoration:none; color:green;" class="alert alert-primary">Not Registered?</a></div>
	</form>
</div>

		
		
</body>
</html>