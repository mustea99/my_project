<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Notification</title>
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
					<ul class="nav navbar-nav" style="text-transform: uppercase;margin-left: 50px; letter-spacing:2px;">
					<li><h3 style="color:white; font-style:italic; font-weight:bold; font-family:'lato',sans-serif; margin-top:15px;">FYPMS</h3></li>&emsp;	
					<li ><img src="logo2.png" alt="buk logo" width="50px" height="50px">&emsp;</li>
					<li ><a class ="navbar-brand" href="dashboard.php">Dashboard</a>&emsp;</li>
					<li><a class ="navbar-brand" href="upload_chapters.php"><span class="glyphicon glyphicon-book" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>Project</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>student</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>supervisor</a>&emsp;&nbsp;</li>
					<li class="active"><a class ="navbar-brand" href="notify_all.php"><span class="glyphicon glyphicon-envelope" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>post notification</a>&emsp;</li>
						<li><form action="appointment.php" method="POST"><button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:2px;">LOGOUT</button></form></li>
				
					
					
				</ul>
				</div>
			</div>
			</nav>
		</div>
		
	

		<div class="container "> 
			<form class="form-group" method="POST" action="" style="width:700px; margin-left: 220px;">
				<div class="row jumbotron" style="border-radius:20px; box-shadow:3px 3px 3px 3px grey; margin-top: 100px;">
						<div class="row">
					<div class="col-md-2" >	<label for="receiver" style="margin-top: 25px;" >Receiver</label>
					</div>
					<div class="col-md-7">
						<select class="form-control">
							<option>Please Select</option>
								<option>select</option>
									<option>select</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2" >	<label for="receiver" style="margin-top: 25px;" >Message</label>
					</div>
					<div class="col-md-7">
						<textarea cols="40" rows="4"class="form-control"></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" style="margin-left: 110px; margin-top: 10px;">Post</button>
			</div>

			</form>
		</div>
		
	

</body>
</html>