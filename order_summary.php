<?php
//include "db.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location: index.php");
}

?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Cart Items</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/wenstrap.css" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	
		
	</head>
<body class="panel panel-primary ">

<div class="container-fluid" style="margin-bottom:70px; text-align:center" >
	
			<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation" style="height:auto">
				<div class="navbar-header">
					<a class="navbar-brand" style="margin-right:50px" >WenMart
						<img class="img img-responsive slides" src="#" alt="LOGO" style="height:auto; width:auto;"/>
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>&nbsp;&nbsp;&nbsp;
				<button class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="index.php?home"><br><span class="glyphicon glyphicon-home"></span> Home</a></li>&nbsp;&nbsp;
						
						<li class="active navbar-right pull-right" style="margin-left:900px">
							<a href="#" class="dropdown-toggle" id="drop" data-toggle="dropdown"> <?php echo "Hello, <br>". $_SESSION["name"]; ?> <span class="caret"></span></a>
							
								<ul class="dropdown-menu" aria-labelledby="drop">
									<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
									<li class="divider"></li>
									<li><a href="#"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
								</ul>
							
						</li>
					</ul>
				</div>
			</nav>
</div>
<p><br></p>
<p><br></p>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading" style='text-align: center;'> <h5><b> Order Summary </b></h5></div>					
				<div class="panel-body" id="order_sum" >
					
					<!--	
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<br>
								<div>
									<p class="label-info pull-right" style="font-size:16px;"><b>Total Due(Gh¢) <input class="form-control" id="f-total" type="text" value="" readonly /></b></p>
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>
					-->
				</div>
				
			</div>
			
			<hr>
			<div class="pull-left">
				<h3><a class="btn btn-warning" href="checkout.php"> < Back </a></h3>
			</div>
			<div class="pull-right">
				<h3><a href="#" class="btn btn-warning btn-lg" id="confirm_order_btn"> <span class="glyphicon glyphicon-ok-sign"></span> Confirm Order </a></h3>
			</div>
			
		</div>
		<div class="col-md-2"></div>
	</div>

	
</div>
<br>
<br>
<br>
<div class="navbar navbar-fixed-bottom  panel-footer">
	<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
</div> <!-- end of footer -->	
</div>
</body>

</html>