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
			<div class="panel panel-success">
				<div class="panel-heading"></div>
				<div class="panel-body">
					<p> 
						<?php echo "Hello". $_SESSION["name"] . ","; ?>
						<br>
						Thank you for shopping from Us and have a blessed day.<br><br>
						
						Your Order Reference is <b># <?php //echo $_SESSION['order_ref'];?> </b>
						
						<a href="index.php" class="btn btn-warning btn-lg" id="con_shopping"> Continue Shopping </a>
					</p>
					
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>

	
</div>
<div class="navbar navbar-fixed-bottom  panel-footer">
	<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
</div> <!-- end of footer -->	
</div>
</body>

</html>