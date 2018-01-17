<?php
 
session_start();

if(isset($_SESSION["uid"])){
	header("location: user.php");
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WENDOLIN SUPERMARKET</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/wenstrap.css" />
		<link rel="stylesheet" href="css/slide.css" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		
		
		
	</head>
<body >
		<div class="container-fluid" style="margin-bottom:70px;" >
			<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation" >
				<div class="navbar-header">
					<a class="navbar-brand" style="margin-right:50px" >WenMart</a>
				</div>
				<button class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="index.php?home"><span class="glyphicon glyphicon-home"></span> Home</a></li>&nbsp;&nbsp;
						
						
						<li class="active dropdown"  id="get_nav_Category">
						</li>
						<!--
						<li class="active dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="catDrop"  aria-haspopup="true" aria-expanded="false">
								Categories <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="catDrop" id="drop">
								<li><a href="#">cat</a></li>
								<li class="divider"></li>
								<li><a href="#">cat</a></li>
								<li class="divider"></li>
								<li><a href="#">cat</a></li>
								<li class="divider"></li>
								<li><a href="#">cat</a></li>
								<li class="divider"></li>
								<li><a href="#">cat</a></li>
								<li class="divider"></li>
								<li><a href="#">cat</a></li>
							</ul>
						
						</li>
						-->
						
						
						<li class="active dropdown"    id="get_nav_brand">
						</li>
						<!--
						<li class="active dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="brandDrop"  aria-haspopup="true" aria-expanded="false">
								Brands <span class="caret"></span>
							</a>
							
							
						
							<ul class="dropdown-menu" aria-labelledby="brandDrop" id="drop">
								<li><a href="#">Samsung</a></li>
								<li class="divider"></li>
								<li><a href="#">Lenovo</a></li>
								<li class="divider"></li>
								<li><a href="#">Hewlett Packard (HP)</a></li>
								<li class="divider"></li>
								<li><a href="#">Dell</a></li>
								<li class="divider"></li>
								<li><a href="#">Toshiba</a></li>
								<li class="divider"></li>
								<li><a href="#">Nokia</a></li>
							</ul>
						</li>
						-->
						
						<li >
							<form class="navbar-form" role="search">
								<input class="form-control" type="text" id="txt_search" placeholder="Search..."></input>
								<button class="btn btn-info" type="submit" id="btn_search" ><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</li>

						<li class="active navbar-right pull-right"><a href="signup.php" target="_self"><span class="glyphicon glyphicon-log-out"></span> SignUp</a></li>
					
						<li class="active navbar-right pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-log-in"></span> SignIn</a>
							
								<div class="dropdown-menu panel panel-primary" id="signin-panel">
									<div class="panel-heading ">LogIn Here</div>
									<div class="panel-heading">
										<div>
											<form class="form-group">
												<label for="username" class="label-primary"><h4><span class="glyphicon glyphicon-user"></span> Username</h4></label>
												<input class="form-control" type="text" id="username" name="username" autocomplete="off" placeholder="username" required></input>
												<hr>
												<label for="password" class="label-primary"><h4><span class="glyphicon glyphicon-lock"></span> Password</h4></label>
												<input class="form-control" type="password" id="password" name="password" autocomplete="off" placeholder="password" required></input>
												<hr>
												<button type="submit" class="btn btn-primary pull-right" id="signin_btn" name="signin_btn">LogIn</button>
												<button type="submit" class="btn btn-warning pull-left"><span class="glyphicon glyphicon-info-sign"></span>Forgotten Password</button>
											</form>
										</div>
									</div>
									<div class="panel-footer "><a href="signup.php" target="_self" class="active btn btn-xs"><h4>Create Account</h4></a></div>
								</div>								
							
						</li>

						<li class="active dropdown navbar-right pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge"></span></a>
							<!--<div class="dropdown-menu" style="width:700px;">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-2">SI. No</div>
											<div class="col-md-4">Product Name</div>
											<div class="col-md-2">Quantity</div>
											<div class="col-md-2">Price(GH¢)</div>
											<div class="col-md-2">Total(GH¢)</div>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-2">1</div>
											<div class="col-md-4">Samsung Galaxy Tab 3 16g 10.1inch</div>
											<div class="col-md-2">2</div>
											<div class="col-md-2">1300</div>
											<div class="col-md-2">2600</div>
										</div>
									</div>
									
									<div class="panel-footer">Find out more about your Orders
										<p class="panel-heading pull-right">Total Due(GH¢)<span class="badge"> 2600 </span></p>
									</div>
								</div>								
							</div>-->
						</li>
					</ul>
					
				</div>
			</nav>
		</div><!-- END OF NAVIGATION BAR -->
<p><br></p>
<p><br></p>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="login_msg">
				<!-- LogIn Error message here -->
			</div>
			<div class="col-md-2"></div>
						
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
			
			<!--
				<div class="alert alert-danger alert-dismissable" style="position: fixed;z-index:10">
				dddd<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				
				</div>
				
			
				<div class="alert alert-warning alert-dismissable" style="position: fixed;z-index:10">
					<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
					
					<div class="panel panel-primary">
						<div class="panel-heading"><h3><b>WANT TO MAKE PURCHASES ...?</b></h3></div>
						<div class="panel-body">
							<p>
								Kindly <a class="btn btn-danger" href="signin.php">LogIn</a> to make purchases...!
							</p>
						</div>
						<div class="panel-footer" style="text-align: center">
							<button class="close btn btn-danger btn-xs" data-dismiss="alert" aria-hidden="true">
								Close
							</button>
							<br>
						</div>
					</div>
				</div>
			-->
			
			</div>
			<div class="col-md-2"></div>
			
		</div>
		
		
				
			<div class="carousel slide" id="slider"  style="margin:20px;">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img class="slides img img-responsive " src="img/men_fashion.jpg" alt="Men's Fashion" />
					</div>
					
				</div>
				
			</div>
			
		
		
		<div style="margin-bottom:100px">
			<div class="row">
				
				<div class="col-md-2">
				
					<div id="getCategory"> 					
					</div>
					<!--
					 <ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Categories</h4></a></li>
						
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						
					</ul> -->
					<div id="getBrand">	
					</div>
					<!--<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Brands</h4></a></li>
						
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						
					</ul> -->
				</div>
				<div class="col-md-9">
					
					
					<div class="panel panel-info">
						<div class="panel-heading"><h4><b>PRODUCTS</b></h4></div>
							<div class="panel-body ">
								<div id="get_product" >
								</div>
								<!--
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading">Product Title Here</div>
											<div class="panel-body">
												<img class="img img-responsive" src="product_img/dress.jpg" alt="Image Here" style="height:250px; width:200px"/>
											</div>
											<div class="panel-body desc">
												Description goes here!
											</div>
											
										<div class="panel-heading">GHc 0.00
											<button class="btn btn-danger btn-xs" style="float: right">AddToCart</button>
										</div>		
									</div>
								</div>
								-->
							
							</div>
					</div>
					
				</div>
				<div class="col-md-1"></div>
			</div>				
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<!-- <li ><a href="#" id="page">1</a></li> -->
					</ul>
				</center>
			</div>				
		</div>
	</div>
	<div class="navbar panel-footer navbar-bottom">
			Copyright &copy; 2017,WenMart Gh. Alrights reserved. Powered by WenSoft Inc. Gh.
		</div><!-- end of footer -->
</body>
<script>
var index=1;

autoSlide();

function autoSlide(){
	var i;
	var x=document.getElementsByClassName("slides");
	for(i=0;i<x.length;i++){
		x[i].style.display="none";
	}
	if(index>x.length){
		index=1;
	}
	x[index-1].style.display="block";
	index++;
	setTimeout(autoSlide,3000); //setting timeout to 3 seconds
	
}
</script>
</html>