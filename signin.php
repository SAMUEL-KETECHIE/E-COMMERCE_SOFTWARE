<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SignIn</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/wenstrap.css" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>
<body class="panel panel-warning ">	
	<div class="container-fluid" style="margin-bottom:70px; text-align:center">
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
				</div>
			</nav>
	</div>

	
	<div class="container-fluid panel-heading">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8" id="login_msg">
				<!--
				<div class="alert alert-danger alert-dismissable" style="position: fixed;z-index:10">
					<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				</div>
				-->
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>		
			<div class="col-md-4 panel panel-primary"  >
					<div class="panel-heading "><h3>LogIn Here</h3></div>
					<div class="panel-heading">
						
							<form class="form-group" method="POST" id="signin">
								<label for="username" class="label-primary"><h4><span class="glyphicon glyphicon-user"></span> Username</h4></label>
								<input class="form-control" type="text" id="username" name="username" autocomplete="off" placeholder="username" style="width: 300px" required></input>
								<hr>
								<label for="password" class="label-primary"><h4><span class="glyphicon glyphicon-lock"></span> Password</h4></label>
								<input class="form-control" type="password" id="password" name="password" autocomplete="off" placeholder="password" style="width: 300px" required></input>
								<hr>
								<button type="submit" class="btn btn-primary pull-right" id="signin_btn" name="signin_btn">LogIn</button>
								<button type="submit" class="btn btn-warning pull-left"><span class="glyphicon glyphicon-info-sign"></span>Forgotten Password</button>
							</form>
						
					</div>
					<div class="panel-footer "><br> 
						<p class="text text-danger"> If you are New here , kindly create an account. </p>
						<a href="signup.php" target="_self" class="btn btn-xs active"><h4>Create Account</h4></a>
					</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
		</div>
			<div class="navbar panel-footer navbar-fixed-bottom">
				<p class="text text-danger" >Copyright &copy; 2017,WenMart Gh. Alrights reserved Powered by WenSoft Inc. Gh.</p>
			</div><!-- end of footer -->
		
</div>

</body>
</html>