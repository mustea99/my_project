<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Admin Login</title>
	<style>
		body{
			background-image: url(cool.jpeg);
			font-family: 'lato',calibri;

		}
		form{

		}
	</style>

</head>
<body>
<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<h1 style="position: absolute; left:130px; top:150px; color:grey;"><img src="logo2.png" alt="buk logo" width="120px" height="120px"> <br>Bayero University, Kano<br><span style="color:white;letter-spacing:2px;">FINAL YEAR PROJECT<br> MANAGEMENT SYSTEM </span></h1>
	
<div class="container">
	<form action="login.php" method="POST" style=" width:400px; height:300px;margin-top:180px;background-color: #fff; padding:30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; float:right;">
		<div class="caption text-center" style="color:brown;"><h3 style="font-family:'Helvetica',calibri;">ADMIN LOGIN</h3></div>
		<div class="form-group">
			<span class="glyphicon glyphicon-user"  style="position: absolute;left:900px; top:275px;"></span><input type="text" name="Username" placeholder="username" style="font-size:20px; border-radius: 20px; padding-left:35px;" class="form-control">
		</div>
		<div class="form-group">
			<span class="glyphicon glyphicon-lock" style="position: absolute;left:900px; top:325px;"></span><input type="password" name="password" placeholder="password"  style="font-size:20px; border-radius: 20px; padding-left:35px;"class="form-control">

			<input type="submit" name="submit"  value="Login "class="btn btn-danger btn-block" style="font-size:20px; border-radius: 20px; margin-top: 15px;">
		
	</form>
</div>

</body>
</html>