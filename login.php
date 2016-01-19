<?php
 	$state=$_REQUEST['state'];
 	$errMsg="Wrong user name or Password! Please Try Again ";
 	$success="Registration Successful!Please Login to Continue";


 	if($state==1){
 		echo "<script type='text/javascript'>alert('$errMsg');</script>";
 	}
 	elseif ($state==2) {
 		echo "<script type='text/javascript'>alert('$success');</script>";
 	}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SEA Dream Company</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/fav.png">
	

	<style>
		body {
			font-family: 'Raleway';
			margin-top: 25px;
		}

		.fa-btn {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>

	<script>
		(function () {
			$('#task-name').focus();
		}());
	</script>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.php">SEA DREAM GALLERY</a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>

					<ul class="nav navbar-nav navbar-right">
							<li><a href="register.php"><i class="fa fa-btn fa-heart"></i>Register</a></li>
							<li><a href="login.php"><i class="fa fa-btn fa-sign-in"></i>Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<br><br>
		<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Login
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					
					<!-- New Task Form -->
					<form action="loginprocess.php" method="post" class="form-horizontal">
						

						<!-- E-Mail Address -->
						<div class="form-group">
							<label for="text" class="col-sm-3 control-label" >Username</label>

							<div class="col-sm-6">
								<input type="text" name="name" class="form-control" value="" required> 
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label" required>Password</label>

							<div class="col-sm-6">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>

						<!-- Login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i>Login
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
