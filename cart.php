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
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
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
	<div class="col-md-8" id="del_update_msg"><!-- Dont forget here please -->
	<!--
		<div class="alert alert-danger alert-dismissable" style="position: fixed;z-index:10">
			<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		</div>
	-->
	</div>
	<div class="col-md-2"></div>
			
</div>
	<div class="row">
		<div class="col-md-1"></div>	
		<div class="col-md-10">
			<div class="label-info" style="text-align: center;"><h3><b>Cart</b></h3></div>
			
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row" >
						<div class="col-md-2"><b>Action<br>(Delete/Update)</b></div>
						<div class="col-md-2"><b>Product Image</b></div>
						<div class="col-md-2"><b>Product Name</b></div>
						<div class="col-md-2"><b>Quantity</b></div>
						<div class="col-md-2"><b>Price (Gh¢)</b></div>
						<div class="col-md-2"><b>Total Amount(GH¢)</b></div>
					</div>
				</div>
				<div class="panel-body ">
					<div id="cart_check">
						<!--
						<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									<button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle"></span></button>
								</div>
							</div>
							<div class="col-md-2"><img src="product_img/galaxy_s7.jpg" alt="product image" class="img img-responsive" style="width:100px;height:100px;"/></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input class="form-control" type="text"></input></div>
							<div class="col-md-2"><input class="form-control" type="text" value="100" disabled /></div>
							<div class="col-md-2"><input class="form-control" type="text" value="100" disabled /></div>
						</div>
						-->
					</div>
					<!--
					<div>
						<p class="label-info pull-right" style="font-size:16px;"><b>Total Due(Gh¢) <input class="form-control" id="f-total" type="text" value="" disabled /></b></p>
					</div>
				
					<br>
					<hr>
					<div class="pull-right">
						<h3><a class="btn btn-warning btn-lg" href="checkout.php">Continue To CheckOut</a></h3>
					</div>
					-->
				</div>
				
				
				<div class="panel-footer"></div>
			</div>
			
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="navbar navbar-fixed-bottom panel-footer">
		<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
	</div> <!-- end of footer -->
</div>
</body>

</html>
