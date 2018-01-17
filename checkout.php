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
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8" id="confirm_msg">
					<!--
					<div class='alert alert-danger alert-dismissable' style='position: fixed;z-index:10'>
						<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					</div>
					-->
				</div>
				<div class="col-md-4"></div>
			</div>
				<div class="panel-heading" style="text-align: center;"><h4><b>CheckOut</b></h4></div>
				<div class="panel-body">
					<div id="checkout_final">
						<div class='label-info' style='text-align: center;'><h5><b>Address</b></h5></div>
						
						<!--
							E-MAIL: <input class='form-control' style='width:500px' type='text' id='email' name='email' value='' placeholder='example@gmail.com' />
							<br>
							MOBILE: <input class='form-control' style='width:500px' type='text' id='phone' name='phone' value='' placeholder='02x xxx xxxx'  />
							<br>
							<textarea name='address'  id='address' rows='8' cols='40' placeholder='Location'></textarea>
						
						
						
						<br>
						<hr>
						<div class='label-info' style='text-align: center;'><h5><b>Select Delivery Mode</b></h5></div>
							
							
							<select id='delivery' name='delivery' class="form-control" style='width:500px'>
								<option readonly>--- select your delivery mode --- </option>
								<option> Deliver To My Door Step </option>
								<option> Pick-Up From A Shop Myself </option>
							</select>
						<br>
						<hr>
						<div class='label-info' style='text-align: center;'><h5><b>Select Payment Method</b></h5></div>
						
						
							<select id='payment' name='payment' class='form-control' style='width:500px'>
								<option readonly class='active'>--- select your payment method --- </option>
								<option id='cash'> Cash On Delivery </option>
								<option id='m_money'> MTN Mobile Money </option>
								<option id='bank'> Bank </option>
							</select>
						<br>
						<hr>
					-->
					</div>
					<p class='text-danger'>NB: If You select any Payment method other than Cash On Delivery, Kindly follow the steps below to make your payment.</p>
					<div id='m_money_info' class='panel panel-info' style='width:500px'>
						<div class='panel-heading' > <img src='img/mtn_mm.jpg'/> MTN Mobile Money </div>
						<div class='panel-body' >
							<!-- Mobile Details here -->
							<ul>
								<li>Dial *170# </li>
								<li>Select Transfer Money </li>
								<li>Select Mobile Money User </li>
								<li>Select subscriber </li>
								<li>Enter the Number 0547218146 </li>
								<li>Enter Number  0547218146 Again </li>
								<li>Enter Amount ( Eg. 50 for Gh¢50 ) </li>
								<li>Enter Your reference number. NB:Check it on the next page... </li>
								<li>Enter Your Pin </li>
								<li>Press 'OK' to confirm payment </li>
								<li>You will receive SMS confirmation message for successful payment. </li>
								
							</ul>
						</div>
					</div>
					
					<div id='m_money_info' class='panel panel-info' style='width:500px'>
						<div class='panel-heading' > Bank </div>
						<div class='panel-body' >
							<!-- Bank Details here -->
						</div>
					</div>
					
					<br>
					<hr>
					
				
				</div>
				<div class="panel-footer"></div>
				
				
			</div>
			<hr>
			<div class="pull-left">
				<h3><a class="btn btn-warning" href="cart.php"> < Back </a></h3>
			</div>
			<div class="pull-right">
				<h3><a class="btn btn-warning btn-lg" href="#" id="confirm_address_btn"> Save and Continue > </a></h3>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>

	<div class="navbar panel-footer">
		<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
	</div> <!-- end of footer -->
</div>
	
</div>
</body>

</html>