<!DOCTYPE html>
<html>
<head>
	<title>Student Authentication </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
		
		fieldset{ border:3px solid brown ; 
				  width:410px;
				  height: 530px;
				  margin-left: 450px;
				  margin-top: ;
				  font-size: 25px;
				  font-weight: bold;
				  border-radius: 10px;
				  color:cyan;
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
		<div class="row">
			<div class="col-md-9">
	<form action="log.php" method="POST" style="margin-left:300px; margin-top:60px; background-color: #fff; padding:30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000;">
		<div class="caption text-center" style="font-style:italic; font-weight: bold; text-transform: uppercase;"><h2 style="font-style:italic; font-weight: bold; background:lightblue; border-radius: 10px; font-size: 25px;">Student Authentication</h2></div><br>
	
		<div class="form-group">
			<label for="fullname">Registration Number </label>
			<input type="text" name="reg_no" id="reg_no"class="form-control" placeholder="cst/16/com/00000" style="font-size:15px;">
		</div>
		<div class="form-group">
			<label for="cgpa">CGPA </label>
			<input type="text" name="cgpa" id="cgpa"class="form-control" placeholder="5.00" style="font-size:15px;">
		</div>
		<div class="form-group">
			<label for="password ">Password  </label>
			<input type="password" name="password" id="password"class="form-control" placeholder="Password" style="font-size:15px;">
		</div>
		<input type="submit" name="submit"  value="Submit"class="btn btn-success" style="font-size:20px; margin-left:288px;"> &emsp; <input type="submit" name="cancel"  value="Cancel"class="btn btn-danger " style="font-size:20px;">
		
		
	</form>
</body>
</html>