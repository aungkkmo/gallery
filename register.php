
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
					Register
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					
					<!-- New Task Form -->
					<form action="regprocess.php" method="POST" class="form-horizontal">
						

						<!-- Name -->
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Name</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="name" class="form-control" required>	
								<br>					
								<span id="username_availability_result" class="username_availability_result"></span>
							</div>
						</div>

						

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-6">
								<input type="password" id="password1" name="password" class="form-control" required>
							</div>
						</div>

						<!-- Confirm Password -->
						<div class="form-group">
							<label for="password_confirmation" class="col-sm-3 control-label" >Confirm Password</label>

							<div class="col-sm-6">
								<input type="password" id="password2" name="password_confirmation" class="form-control" required>
								<br>
								<span id="confirmMessage" class="confirmMessage"></span>
							</div>
						</div>

				
						
						<!-- Register Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default" disabled="disabled">
									<i class="fa fa-btn fa-sign-in"></i>Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/validate.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>	
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
 