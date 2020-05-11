<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Guideline</title>
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
			background-color: skyblue;
		}
		
		
	</style>
</head>
<body>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse bg-dark" role="navigation">
				<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left: 200px;">
						<li ><img src="logo2.png" alt="buk logo" width="50px" height="50px">&emsp;&emsp;</li>
					<li ><a class ="navbar-brand" href="index.php">Home</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="authenticate.php">Authentication</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="about.php">About</a>&emsp;&emsp;</li>
					<li class="active"><a class ="navbar-brand" href="guide.php">Guidelines</a>&emsp;&emsp;</li>
					
				</ul>
				</div>
			</div>
			</nav>
		</div>




		<div class="container mt-5 "> 
			<form class="form-group" method="POST" action="" style="width:900px;margin-left: 100px;">
				<h2 class="caption text-center">Create Your Account </h2>
				<div class="row jumbotron" style="border-radius:20px; box-shadow:3px 3px 3px 3px grey;">
					<div class="col-md-6">
						
						<input type="text"class="form-control" placeholder="Name" name="fname">
						
					</div>
					<div class="col-md-6">
						<select class="form-control" name="type">
							<option class="form-control">Select Type</option>
							<option class="form-control" value="student">Student</option>
							<option class="form-control" value="admin">Admin</option>
							<option class="form-control" value="supervisor">Supervisor</option>
						</select>
						
					</div>
					<div class="col-md-12">
						
						<input type="text"class="form-control" placeholder="University Email Address" name="email">
						
					</div>
					<div class="col-md-12">
						
						<input type="password"class="form-control" placeholder="Set A password" name="password">
						
					</div>
					<div class="col-md-12">
						
						<button  class="form-control btn btn-primary "type="submit" value="Submit" name="create">Submit</button>
						
					</div>
				</div>
			</form>
		</div>

					
<?php
require("include/footer.php");
?>

		
		
					


</body>
</html>