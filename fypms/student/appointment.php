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
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left: 150px; letter-spacing:2px;">
					<li><h3 style="color:white; font-style:italic; font-weight:bold; font-family:'lato',sans-serif; margin-top:15px;">FYPMS</h3></li>&emsp;	
					<li ><img src="logo2.png" alt="buk logo" width="50px" height="50px">&emsp;&emsp;</li>
					<li class="active"><a class ="navbar-brand" href="appointment.php">Appointment</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="upload_chapters.php">Upload Document</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="#">clearance</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="#">Notice</a>&emsp;&emsp;</li>
						<li><form action="appointment.php" method="POST"><button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:2px;">LOGOUT</button></form></li>
				
					
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		
	
<div class="container "> 
			<form class="form-group" method="POST" action="" style="width:700px; margin-left: 220px;">
				
				<h2 class="caption text-center" style="margin-top: 60px;">Request Appointment  </h2>
				
				<div class="row jumbotron" style="border-radius:20px; box-shadow:3px 3px 3px 3px grey; margin-top: 10px;">
					<div class="col-md-4">
						<label for="apDate">Project Supervisor</label>
						<input type="text"class="form-control"  name="pSupervisor">
						
					</div>
					<div class="col-md-4">
						<label for="apDate">Appointment Date*</label>
						<input type="Date"class="form-control"  name="apDate">
						
					</div>
					<div class="col-md-4">
						<label for="apTime">Appointment Time*</label>
						<input type="time"class="form-control"  name="apTime">
					</div>
					
					
					<div class="col-md-12">
						
						<button  class="form-control btn btn-primary "type="submit" value="Request" name="request">Request</button>
						
					</div>
				</div>
			</form>
		</div>
</body>
</html>