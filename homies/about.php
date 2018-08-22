
<?php
		$link=mysqli_connect("localhost","root","","demo");
		if(mysqli_connect_error())
		{
			echo "connection error ".mysqli_connect_error();
			exit();
		}
		
		$query1= "select * from about where id='1'";
		$query2= "select * from about where id='2'";
		$query3= "select * from about where id='3'";
		$query4= "select * from about where id='3'";
		$result1=mysqli_query($link,$query1);
		$result2=mysqli_query($link,$query2);
		$result3=mysqli_query($link,$query3);
		$result4=mysqli_query($link,$query4);
		
		
		if(mysqli_error($link))
		{
			echo "Can't fatch page description ".mysqli_error($link);
			exit();
		}
		
		$row1=mysqli_fetch_assoc($result1);
		$row2=mysqli_fetch_assoc($result2);
		$row3=mysqli_fetch_assoc($result3);
		$row4=mysqli_fetch_assoc($result4);
		
		mysqli_close($link);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us|homies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/about.css" type="text/css" media="all" />
  </head>
  <body>
  <!--************************************************header***********************************-->
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
					<li><a href="website.php">About us</a></li>
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
	<!--****************************************MAIN CONTENT******************************-->
		

		<div class="container-fluid back_img banner-height" >
	  
		<center>
			<div class="col-sm-12 col-md-12 col-xs-12">
				<p class="banner-title">ABOUT US</p>		
			</div>	
		</center>
		</div>
		
			<div class="container-fluid main_height">
		<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			<center>
				<h2>What We Do ?</h2>

			</center>
			<p class="para-style">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum vestibulum consectetur. Nulla massa erat, bibendum non dictum nec, posuere non nisi. Nullam convallis facilisis scelerisque. Sed tempor rhoncus lorem, eu interdum dolor aliquam vel. Nunc sit amet turpis condimentum, mollis massa sit amet, interdum quam. Nulla ipsum nibh, vulputate sit amet dignissim nec, facilisis nec urna. Fusce pharetra suscipit porta. Proin arcu sem, aliquam in congue a, viverra vel ex. Morbi sodales feugiat tincidunt. Sed venenatis consectetur nunc, in tempor dolor commodo ac. Nunc faucibus lectus eu nunc tempor, tempor tristique est elementum. Pellentesque molestie et tortor tristique rhoncus. Pellentesque condimentum nisi leo, in pellentesque erat cursus vel. Curabitur ultrices, turpis vel mattis faucibus, ligula mi dictum nunc, quis dignissim leo nisl vitae sem. Mauris at ligula non leo iaculis consectetur non a purus.Pellentesque eget tempus elit, nec aliquet arcu. Morbi bibendum dapibus purus, sit amet faucibus diam consequat quis. 
			</p>
		</div>


		<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			<center>
				<h2>Who We Are?</h2>
			</center>

			<p class="para-style">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum vestibulum consectetur. Nulla massa erat, bibendum non dictum nec, posuere non nisi. Nullam convallis facilisis scelerisque. Sed tempor rhoncus lorem, eu interdum dolor aliquam vel. Nunc sit amet turpis condimentum, mollis massa sit amet, interdum quam. Nulla ipsum nibh, vulputate sit amet dignissim nec, facilisis nec urna. Fusce pharetra suscipit porta. Proin arcu sem, aliquam in congue a, viverra vel ex. Morbi sodales feugiat tincidunt. Sed venenatis consectetur nunc, in tempor dolor commodo ac. Nunc faucibus lectus eu nunc tempor, tempor tristique est elementum. Pellentesque molestie et tortor tristique rhoncus. Pellentesque condimentum nisi leo, in pellentesque erat cursus vel. Curabitur ultrices, turpis vel mattis faucibus, ligula mi dictum nunc, quis dignissim leo nisl vitae sem. Mauris at ligula non leo iaculis consectetur non a purus.Pellentesque eget tempus elit, nec aliquet arcu. Morbi bibendum dapibus purus, sit amet faucibus diam consequat quis. 
			</p>
		</div>
	</div>
	
	<div class="container-fluid center-banner">
	  <center>
	  	<div class="col-sm-12 col-lg-4 col-xs-12 col-md-4" id="first_service">
	  		<img src="images/icons/laptop.svg" class="img-responsive banner-imgs" id="first_service">
	  		<h3 id="first_service">Find Buyer and Seller</h3>
	  		<p id="first_service_text" class="display_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum vestibulum consectetur. Nulla massa erat, bibendum non dictum nec, posuere non nisi. Nullam convallis facilisis scelerisque. Sed tempor rhoncus lorem, eu interdum dolor aliquam vel. Nunc sit amet turpis condimentum, mollis massa sit amet, interdum quam.</p>
	  	</div>

	    <div class="col-sm-12 col-lg-4 col-xs-12 col-md-4" id="first_service">
	  		<img src="images/icons/office.svg" class="img-responsive banner-imgs" id="first_service">
	  		<h3 id="first_service">Be a Dealer</h3>
	  		<p id="first_service_text" class="display_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum vestibulum consectetur. Nulla massa erat, bibendum non dictum nec, posuere non nisi. Nullam convallis facilisis scelerisque. Sed tempor rhoncus lorem, eu interdum dolor aliquam vel. Nunc sit amet turpis condimentum, mollis massa sit amet, interdum quam.</p>
	  	</div>
		
		<div class="col-sm-12 col-lg-4 col-xs-12 col-md-4" id="first_service">
	  		<img src="images/icons/earn.svg" class="img-responsive banner-imgs" id="first_service">
	  		<h3 id="first_service">Earn Money</h3>
	  		<p id="first_service_text" class="display_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum vestibulum consectetur. Nulla massa erat, bibendum non dictum nec, posuere non nisi. Nullam convallis facilisis scelerisque. Sed tempor rhoncus lorem, eu interdum dolor aliquam vel. Nunc sit amet turpis condimentum, mollis massa sit amet, interdum quam.</p>
	  	</div>	
	  </center>
	</div>
	
	<div class="container-fluid">
		<div class="center-team">
			<center>
			<h2>MEET THE TEAM</h2>
		</center>
		</div>
		<div class="col-sm-12 col-lg-3 col-xs-12 col-md-3">
			<center>	
				<img src="<?php echo $row1['imageurl'];?>"   class="img-responsive img-circle img-size">
				<h3 ><?php echo $row1['name'];?></h3>
				<p class="post"><?php echo $row1['skill'];?></p>
			</center>
		</div>


		<div class="col-sm-12 col-lg-3 col-xs-12 col-md-3">
			<center>
				<img src="<?php echo $row2['imageurl'];?>" class="img-responsive img-circle img-size">
				<h3><?php echo $row2['name'];?></h3>
				<p class="post"><?php echo $row2['skill'];?></p>
			</center>
		</div>


		<div class="col-sm-12 col-lg-3 col-xs-12 col-md-3">
			<center>
				<img src="<?php echo $row3['imageurl'];?>" class="img-responsive img-circle img-size">
				<h3><?php echo $row3['name'];?></h3>
				<p class="post"><?php echo $row3['skill'];?></p>	
			</center>
			
		</div>


		<div class="col-sm-12 col-lg-3 col-xs-12 col-md-3">
			<center>
				<img src="<?php echo $row4['imageurl'];?>" class="img-responsive img-circle img-size">	
				<h3><?php echo $row4['name'];?></h3>
				<p class="post"><?php echo $row4['skill'];?></p>
			</center>
			
		</div>
	</div>
	
	

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

	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>