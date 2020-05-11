<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Authentication</title>
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
					<li class="active"><a class ="navbar-brand" href="authenticate.php">Authentication</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="about.php">About</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="guide.php">Guidelines</a>&emsp;&emsp;</li>
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		
		<div class="caption text-center" style="margin-top: 100px;">
			<a href="supervisor/sup_authenticate.php"><button class="btn btn-default" style="font-size:30px; border-radius: 25px; font-family:'lato',sans-serif; text-transform: capitalize; background-color:grey; color:white; font-style:italic;"><b>Project supervisor authentication </b></button></a><br><br><br>
			<a href="student/stud_authenticate.php"><button class="btn btn-default" style="font-size:30px; border-radius: 25px; font-family:'lato',sans-serif; text-transform: capitalize; background-color:white; color:black; font-style:italic;"><b>student authentication</b> </button></a>
		</div>
					


</body>
</html>