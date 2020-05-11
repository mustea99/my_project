<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Appointment</title>
	<style >
		body{background-color: skyblue;}
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
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left:50px; letter-spacing:2px;">
					<li><h3 style="color:white; font-style:italic; font-weight:bold; font-family:'lato',corsiva; margin-top:15px;">FYPMS</h3></li>&emsp;	
					<li ><img src="logo2.png" alt="buk logo" width="50px" height="50px">&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="appointment.php">Appointment</a>&emsp;</li>
					<li class="active"><a class ="navbar-brand" href="generate_supervisor.php">generate supervisor</a>&emsp;</li>
					<li><a class ="navbar-brand" href="upload_chapters.php">Upload Document</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#">clearance</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#">Notice</a>&emsp;</li>
						<li><form action="appointment.php" method="POST"><button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:2px;">LOGOUT</button></form></li>
				
					
					
				</ul>
				</div>
			</div>
			</nav>
		</div>

		
	

<fieldset style="margin-top:70px;border: 1px solid brown; box-shadow: 2px 2px 2px #000; margin-left: 15px;border-radius: 8px;"><legend><h3 class="caption" style="font-style: italic; font-weight: bold; margin-left: 25px; font-family:'lato',corsiva; font-size: 25px;"> >>> Auto Generate Supervisor</h3></legend>
	<button type="submit" name="generate" class="btn btn-primary" style="; margin-bottom: 10px; width:200px;font-size:18px; margin-left:1120px;">Generate</button>
</fieldset>
</body>
</html>