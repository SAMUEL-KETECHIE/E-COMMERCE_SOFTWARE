<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SignUp</title>
		
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
						<li class="active" ><a href="index.php?home"><span class="glyphicon glyphicon-home"></span> Home</a></li>&nbsp;&nbsp;
					</ul>
				</div>
			</nav>
</div>

	<div class="container panel-heading" style="margin:50px;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="get_msg">
				<!--
				<div class="alert alert-danger alert-dismissable" style="position: fixed;z-index:10">
					dddd <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				
				</div>
				-->
			</div>
			<div class="col-md-2"></div>
			
		</div>
		<div class="row">
			<div class="col-md-4"></div>		
			<div class="col-md-4 panel panel-primary"  >
				<div class="panel-heading " style="text-align: center"><h3> Create An Account </h3></div>
				<div class="panel-body">
					<form class="form-group" id="signup" method="POST">
						<label for="username" class="label-info"><h4><span class="glyphicon glyphicon-user"></span> Username *&nbsp;</h4></label>
						<input class="form-control" type="text" id="username" name="username" autocomplete="off" required></input>
						<hr>
						<label for="email" class="label-info"><h4><span class="glyphicon glyphicon-envelope"></span> E-mail *&nbsp;</h4></label>
						<input class="form-control" type="email" id="email" name="email" autocomplete="off" placeholder="example@gmail.com" required></input>
						<hr>
						<label for="password" class="label-info"><h4><span class="glyphicon glyphicon-lock"></span> Password *&nbsp;</h4></label>
						<input class="form-control" type="password" id="password" name="password" autocomplete="off" required></input>
						<hr>
						<label for="c_password" class="label-info"><h4><span class="glyphicon glyphicon-lock"></span>Confirm Password *&nbsp;</h4></label>
						<input class="form-control" type="password" id="c_password" name="c_password" autocomplete="off" required></input>
						<hr>
						<label for="mobile" class="label-info"><h4><span class="glyphicon glyphicon-phone"></span> Mobile *&nbsp;</h4></label>
						<input class="form-control" type="text" id="mobile" name="mobile" autocomplete="off" required></input>
						<hr>
						<label for="address1" class="label-info"><h4><span class="glyphicon glyphicon-map-marker"></span> Address 1 *&nbsp;</h4></label>
						<input class="form-control" type="text" id="address1" name="address1" autocomplete="off" placeholder="Example: Airport,Accra." required></input>
						<hr>
						<label for="address2" class="label-info"><h4><span class="glyphicon glyphicon-map-marker"></span> Address 2 (optional)&nbsp;</h4></label>
						<input class="form-control" type="text" id="address2" name="address2" autocomplete="off" ></input>
						<hr>
						<p class="text text-danger"> * Means Required Fields</p>
						
						<button type="submit" class="btn btn-danger pull-right" id="signup_btn" name="signup_btn">Register</button>
					</form>
				</div>
			<p class="text text-info"> If you've already Register,please click on Login here</p>
			<div class="panel-footer "><a href="signin.php" target="_self" class="btn btn-xs btn-warning active"><h4>LogIn Here</h4></a></div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="navbar panel-footer">
			<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
		</div> <!-- end of footer -->
	</div>
</body>

</html>