<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Admin Dashboard</title>
	<style >
		body{background-color: white;}
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
	</style>
</head>
<body>
<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse bg-dark" role="navigation">
				<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left: 50px; letter-spacing:2px;">
					<li><h3 style="color:white; font-style:italic; font-weight:bold; font-family:'lato',sans-serif; margin-top:15px;">FYPMS</h3></li>&emsp;	
					<li ><img src="logo2.png" alt="buk logo" width="50px" height="50px">&emsp;</li>
					<li><a class ="navbar-brand" href="dashboard.php">Dashboard</a>&emsp;</li>
					<li class="active"><a class ="navbar-brand" href="project.php"><span class="glyphicon glyphicon-book" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>Project</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>student</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>supervisor</a>&emsp;&nbsp;</li>
					<li><a class ="navbar-brand" href="notify_all.php"><span class="glyphicon glyphicon-envelope" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>post notification</a>&emsp;</li>
						<li><form action="appointment.php" method="POST"><button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:2px;">LOGOUT</button></form></li>
				
					
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-4">
	<form action="log.php" method="POST" style=" margin-top:70px;">

		<div class="form-group">
			<label for="projectName">Project Name</label>
			<input type="text" name="name" id="fullname"class="form-control">
		</div>

		<div class="form-group">
			<label for="pcase">Project Case Study</label>
			<input type="text" name="pCase" class="form-control">
		</div>

		

			<input type="submit" name="add_project"  value="Add"class="btn btn-primary" style="font-size:15px;">
		
	</form>
</div>
</div>
</div>


</body>
</html>