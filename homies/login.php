<!DOCTYPE html>

<?php 
	require_once('serveropen.php');
				
	if(isset($_POST['onlogin']))
	{
	
		$uname=$_POST['username'];
		$upass =$_POST['password'];

		$query="select * from user where email='".$uname."'";
		$result=mysqli_query($link,$query) or die("Can not fetch user data.");
		$row=mysqli_fetch_assoc($result);
		
		if($upass==$row['password']) {
			session_start();
			$_SESSION['uid']=$row['id'];
			$_SESSION['uname']=$row['email'];
			header('Location:home6.php');
		}
		else {
			echo "Incorrect Username/Password.";
		}
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
		<link href="css/sign_up.css" rel="stylesheet">

		<!-- Website Font style -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	 <!------------------------------------------- header ------------------------------------------------------>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home5.php"><img src="images/houselogo.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="home5.php" style="font-size:30px">Homies</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="about.php">About us</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><button type="button" class="btn btn-default navbar-btn"><a href="signup.php">Sign up</a></button></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="font-size:20px">List of property</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="sellingDetail" style="font-size:20px">Buyer</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="sellingDetail" style="font-size:20px">Seller</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter the location">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!----------------------------------------------------- Login Form ----------------------------------------------->
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h2 align="center">Login</h2>
					<form class="" name="fv" method="post">
						
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control"  name="username" id="username"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control"  name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<input type="submit" id="button" name="onlogin" value="login" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	

	<?php
			require_once('serverclose.php');
	?>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>