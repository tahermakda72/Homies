<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homies</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
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
					<button type="button" class="btn btn-default navbar-btn"><a href="login.php">Sign in</a></button>
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

<!------------------------------------------- Scrollerbar ------------------------------------------------------>   

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="images\home.jpg" alt="image1"/>
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		<div class="item">
		  <img src="images\home2.jpg" alt="image2"/>
		  <div class="carousel-caption">
			
		  </div>
		</div>
		<div class="item">
		  <img src="images\home3.jpg" alt="image3"/>
		  <div class="carousel-caption">
			
		  </div>
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>  
	</div>
<!------------------------------------------- Information ------------------------------------------------------>
	<h1 id="I1">in the spotlight</h1>
	<p id="I2">explore featured projects that may interest you</p>
	<div class="infor"><img  src="images\6712121.jpeg"/></div>
	<div class="I3">
		<div>
			<span class="P1">aarohi</span><span class="P6"> by arihant</span>
			<span class="P2">55.11L74.16L</span>
		</div>
		<div>
			<span class="P3">sil phata,mumbai</span>
			<span class="P4">1,2,3 BHK Apartment</span>
			<span class="P5">know more</span>
		</div>
	</div>
	
	
<!------------------------------------------- Footer ------------------------------------------------------>	
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
	</nav>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

  </body>
</html>