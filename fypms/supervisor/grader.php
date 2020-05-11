<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>FYPMS| Grader</title>
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

<div class="container "> 
			<form class="form-group" method="POST" action="">
				<h2 class="caption text-center">Grader </h2>
				<div class="row jumbotron" style="border-radius:20px; box-shadow:3px 3px 3px 3px grey;">
					<div class="col-md-4">
						<label for="apDate">Grade</label>
						<input type="text"class="form-control"  name="pSupervisor" placeholder="Grade">
						
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