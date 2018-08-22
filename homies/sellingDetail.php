<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homies</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sellingDetail.css" rel="stylesheet">
	
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
				<ul class="nav navbar-nav navbar-right">
					<li><a href="about.php">About us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><button type="button" class="btn btn-default navbar-btn"><a href="signup.php">Sign up</a></button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<button type="button" class="btn btn-default navbar-btn"><a href="login">Sign in</a></button>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="font-size:20px">List of property</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="font-size:20px">Buyer</a></li>
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

<!------------------------------------------- Selling Information ------------------------------------------------------>	
<div class="se1">
	<div class="se2">Selling Details</div>
	<div class="s">
		<div class="se3">
			<div class="topic">Basic Details</div>
			<div class="all">
				<form>
					<span class="all2">you are:</span><br/>
					<input type="radio" name="person1" value="owner"/>Owner
					<input type="radio" name="person2" value="dealer"/>Dealer
					<input type="radio" name="person3" value="builder"/>Builder<br/>
					<span class="all2">Property Type:</span><br/>
					<input type="radio" name="house1" value="RA"/>Residential Apartment
					<input type="radio" name="house2" value="IH"/>Independent House
				</form>
			</div>
			<!----------------------------->
			<div class="topic">Location</div>
			<div class="all">
				<form>
					<span class="all3">City*:</span>
					<select class="i" name="city" class="all3">
						<option selected value="rajkot">Rajkot</option>
						<option value="ahmadabad">Ahmedabad</option>
						<option value="gandhinagar">Gandhinagar</option>
						<option value="jamnagar">Jamanagar</option>
					</select><br/>
					<span class="all3">Project Name:</span>
					<input class="all3" type="text" name="project"/><br/>
					<span class="all3">Locality:*</span>
					<input type="text" name="locality"/><br/>
					<span class="all3">Address:</span>
					<input type="text" name="address"/>
				</form>
			</div>
			<!----------------------------->
			<div class="topic">Property Details</div>
			<div class="all">
				<form class="all3">
					Bedrooms*:
					<select class="i"  class="all3" name="bedroom">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select><br/>
					Bathrooms*:
					<select  class="i"  class="all3" name="bathroom">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select><br/>
					Balcony*:
					<select class="i"  class="all3" name="balcony">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select><br/>
					Total Floors*:
					<select class="i"  class="all3" name="Floor">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select><br/>
				</form>
			</div>
			<div class="topic">Price</div>
			<div class="all">
				<span class="all3">Excepted Price:</span>
				<input type="text" class="all3" name="price"/><input type="checkbox" name="tax"/>All inclusive Tax
				<span class="all3">Avalibility*:</span>
					<select class="i" name="available">
						<option selected value="UC">Under Construction</option>
						<option value="RM">Ready to Move</option>
					</select>
			</div>
			<div class="topic">Features</div>
			<div>
				<span class="all3">Add Photos of Property:</span>
				<div class="photo"><p class="photo2">+Add photos</p></div><br/>
				<input type="button" class="add" value="Add"/><br/>
				<span class="all3">Add Description about Property:</span><br/>
				<textarea id="2" rows="4" cols="50"></textarea>
			</div>
			<input type="submit" class="submit" value="submit"/>
		</div>
		
	</div>
	
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
					<li><a href="#">call us at:9722724552</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-left">
					<li><p><a href="#">Contact us</a>| © All Copy Rights Are Reserved</p></li>
				</ul>
				
			</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bspoke.js"></script>
	<script src="js/bspoke1.js"></script>
  </body>
</html>