<!DOCTYPE html>
<?php 
	$page="signup";
	require_once('serveropen.php');
	if(isset($_POST['onsubmit']))
	{
		$uname=$_POST['unm'];
		$email =$_POST['email'];
		$pass=$_POST['pass'];
		$mobile =$_POST['number'];
		//$query="insert into user(name,email,mobile_no,password) values('h','g',4,'2a')";
		$query="insert into user(name,email,mobile_no,password) values('".$uname."','".$email."','".$mobile."','".$pass."')";
		mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));

		header('Location:login.php');
		
	}
	
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up|Homies</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signup.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/formvl.css">

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
					<button type="button" class="btn btn-default navbar-btn"><a href="login.php">Sign in</a></button>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="font-size:20px">List of property</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="font-size:20px">Buyer</a></li>
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

<!------------------------------------------- Sign Up ------------------------------------------------------>	
<div class="s">
<div class="s1">
	<div class="s2">
		<h3>SignUp</h3>
	</div>
	<div class="s3">
		<form name="fv" method="post">
			<b>Username</b><br/>
			<input class="s4" type="text" onBlur="validatefname()" placeholder="Username"  name="unm"/><div id="fname">Enter the first name</div><br/>
			<b>Email</b><br/>
			<input class="s4" type="text" onBlur="validateemail()" placeholder="Email" id="email" name="email"/><div id="email1">Enter the emailaddress</div><div id="email2">emailaddress is not valid</div><br/>
			<b>Mobile-Number</b><br/>
			<input class="s4" type="text" onBlur="validatePhone()" placeholder="Mobile-Number" id="number" name="number"/><div id="number1">Enter the mobile number</div><div id="number2">number is not valid</div><br/>
			<b>Password</b><br/>
			<input class="s4" type="password" onBlur="validatepass()" placeholder="Password"   name="pass"/><div id="pass1">Enter the Password</div><br/>
			<b>Retype-Password</b><br/>
			<input class="s4" type="password" onBlur="validaterepass()" placeholder="Re-Password" name="repass"/><div id="repass1">Password is not matched</div><div id="repass2">Enter the Re-Password</div><br/>
			<input type="checkbox" name="con"/><b>Accept the term and policy</b><br/>
			<!--<input class="s4" type="button" name="onsubmit" value="submit"/>-->
			<button class="s4" type="submit" id="onsubmit" name="onsubmit">submit</button>
		</form>
	</div>
</div>
</div>
        
<!------------------------------------------- Footer ------------------------------------------------------>	
<!--<nav class="navbar navbar-default navbar-bottom">-->
		<div class="navbar navbar-default navbar-bottom">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">call us at:1234567890</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-left">
					<li><p><a href="about.php">Contact us</a>| © All Copy Rights Are Reserved</p></li>
				</ul>
				
			</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
<!--</nav>-->

		<?php
			require_once('serverclose.php');
		?>
		<script src="js/formvl.js"></script>
  </body>
</html>