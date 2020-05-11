<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Project Chapters</title>
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
		form{

		
		
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
					<li><a class ="navbar-brand" href="appointment.php">Appointment</a>&emsp;&emsp;</li>
					<li class="active"><a class ="navbar-brand" href="upload_chapters.php">Upload Document</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="#">clearance</a>&emsp;&emsp;</li>
					<li><a class ="navbar-brand" href="#">Notice</a>&emsp;&emsp;</li>
					<button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:1.5px;">LOGOUT</button>
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		
	
	<div class="container "> 
			<form class="form-group" method="POST" action="" style="width:700px; margin-left: 220px;">
				<h2 class="caption text-center"  style="margin-top: 60px;">Upload Document </h2>
				<div class="row jumbotron" style="border-radius:20px; box-shadow:3px 3px 3px 3px grey;">
					<div class="col-md-6">
						<select class="form-control" name="chapter">
							<option class="form-control">Select Chapter</option>
							<option class="form-control" value="chapter 1">Chapter 1</option>
							<option class="form-control" value="chapter 2">Chapter 2</option>
							<option class="form-control" value="chapter 3">Chapter 3</option>
							<option class="form-control" value="chapter 4">Chapter 4</option>
							<option class="form-control" value="chapter 5">Chapter 5</option>
						</select>
						
					</div>
					<div class="col-md-6">
						
						<input type="text"class="form-control" placeholder="Prorject Supervisor" name="pSupervisor">
					</div>
					<div class="col-md-12">
						
						<input type="text"class="form-control" placeholder="Project Title " name="pTitle">
						
					</div>
					<div class="col-md-12">
						
						<input type="file"class="form-control" placeholder="Project Doc*" name="pDocument">
						
					</div>
					<div class="col-md-12">
						
						<button  class="form-control btn btn-primary "type="submit" value="Submit" name="upload" style="font-size: 20px; height:42px;"><span class="glyphicon glyphicon-upload" style="left:-8px; font-size:18px;"></span>Upload</button>
						
					</div>
				</div>
			</div>
			</form>
		</div>
		

		
</body>
</html>