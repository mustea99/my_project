<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Admin Dashboard</title>
	<style >
		body{background-color: ;}
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
					<li class="active"><a class ="navbar-brand" href="dashboard.php">Dashboard</a>&emsp;</li>
					<li><a class ="navbar-brand" href="upload_chapters.php"><span class="glyphicon glyphicon-book" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>Project</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>student</a>&emsp;</li>
					<li><a class ="navbar-brand" href="#"><span class="glyphicon glyphicon-user" style="color:;font-size:18px; position:absolute; left:-5px; top:18px;"></span>supervisor</a>&emsp;&nbsp;</li>
					<li><a class ="navbar-brand" href="notify_all.php"><span class="glyphicon glyphicon-envelope" style="color:;size:30px; position:absolute; left:-14px; top:18px;"></span>post notification</a>&emsp;</li>
						<li><form action="appointment.php" method="POST"><button class="btn btn-primary" type="submit" name="logout" style="margin-top: 8px; font-size:15px;letter-spacing:2px;">LOGOUT</button></form></li>
				
					
					
				</ul>
				</div>
			</div>
			</nav>
		</div>

		<div style="margin-top: 50px;">
			<h3 class="caption col-md-6" style="margin-left: 62px;">Recent Project Allocations</h3>
			<table style="margin-top:; margin-left:80px; width:1200px;" class="table table-dark table-bordered table-hover">
				<tr>
					<th>ID</th>
					<th>Student Name</th>
					<th>Registration Number</th>
					<th>Department</th>
					<th>Project Title</th>
					<th>Case Study</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Mustea</td>
					<td>CST/16/COM/00000</td>
					<td>Computer Science</td>
					<td>Final Year Project Management System</td>
					<td>FCSIT</td>
					<td class="float-right">
						<button class="btn btn-primary badge-pill">EDIT</button>
						<button class="btn btn-danger ">DELETE</button>

					</td>
				</tr>

			</table>
		</div>
		
	

</body>
</html>