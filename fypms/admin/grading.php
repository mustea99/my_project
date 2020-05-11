<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Admin Grader</title>
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
			<h3 class="caption col-md-6" style="margin-left: 10px; font-size:22px;">Recent Student Grading</h3>
			<table style="margin-top:; margin-left:10px; width:1350px; font-size:15px;" class="table table-dark table-bordered table-hover">
				<tr>
					<th>ID</th>
					<th>Student Name</th>
					<th>Registration Number</th>
					<th>Chapter1(10%)</th>
					<th>Chapter2(15%)</th>
					<th>Chapter3(20%)</th>
					<th>Chapter4(15%)</th>
					<th>Chapter5(10%)</th>
					<th>Defense(30%)</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Mustea</td>
					<td>CST/16/COM/00000</td>
					<td>5</td>
					<td>10</td>
					<td>15</td>
					<td>8</td>
					<td>8</td>
					<td>20</td>
					<td class="float-right" >
						<button class="btn btn-primary badge-pill" style="font-size:11px;">Edit</button>
						<button class="btn btn-danger " style="font-size:11px;">Delete</button>

					</td>
				</tr>

			</table>
		</div>

		<input type="button" href="#mymodal" class="btn btn-primary"  value="Add"style="margin-left: 10px;">
		
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous">
</script>




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal fade" id="mymodal">
				<div class="modal-dialogue">
					<div class="modal-content">
						<div class="modal-header">
							<h2>Student grading </h2>
						</div>
						<div class="modal-body">
							<input type="text" class="form-control" name="fname" placeholder="first name">
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-toggle="modal" data-target="mymodal">save data</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>