<?php
include "db.php";

session_start();

if(isset($_POST['category'])){
	$category_query="SELECT * FROM categories";
	$run_query=mysqli_query($conn,$category_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row=mysqli_fetch_array($run_query)){
			$cat_id =$row["cat_id"];
			$cat_name =$row["cat_name"];
			
			echo "
				<li><a class='category' cid='$cat_id' href='#'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}

if(isset($_POST['nav_category'])){
	$category_query="SELECT * FROM categories";
	$run_query=mysqli_query($conn,$category_query);
	echo "
			<a href='#' class='dropdown-toggle' data-toggle='dropdown' id='catDrop'  aria-haspopup='true' aria-expanded='false'>
				Categories <span class='caret'></span>
			</a>
			<ul class='dropdown-menu' aria-labelledby='catDrop' id='drop'>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row=mysqli_fetch_array($run_query)){
			$cat_id =$row["cat_id"];
			$cat_name =$row["cat_name"];
			
			echo "
				
				<li><a class='category' cid='$cat_id' href='#'>$cat_name</a></li>
				<li class='divider'></li>
			";
		}
		echo "
			</ul>
		";
	}
}

if(isset($_POST['brand'])){
	$category_query="SELECT * FROM brands";
	$run_query=mysqli_query($conn,$category_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a  href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row=mysqli_fetch_array($run_query)){
			$brand_id =$row["brand_id"];
			$brand_name =$row["brand_name"];
			
			echo "
				<li><a class='brand' bid='$brand_id'  href='#'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}

if(isset($_POST['nav_brand'])){
	$category_query="SELECT * FROM brands";
	$run_query=mysqli_query($conn,$category_query);
	echo "
			<a href='#' class='dropdown-toggle' data-toggle='dropdown' id='catDrop'  aria-haspopup='true' aria-expanded='false'>
				Brands <span class='caret'></span>
			</a>
			<ul class='dropdown-menu' aria-labelledby='catDrop' id='drop'>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row=mysqli_fetch_array($run_query)){
			$brand_id =$row["brand_id"];
			$brand_name =$row["brand_name"];
			
			echo "
				
				<li><a class='brand' bid='$brand_id' href='#'>$brand_name</a></li>
				<li class='divider'></li>
			";
		}
		echo "
			</ul>
		";
	}
}

if(isset($_POST['page'])){
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	$pageNo = ceil($count/21);
	for($i=1; $i<=$pageNo; $i++){
		echo "
			<li ><a href='?page=$i' id='page' page='$i'>$i</a></li>
		";
	}
}

if(isset($_POST['product'])){
	$limit=21;
	if(isset($_POST['setPage'])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno*$limit)-$limit;
	}else{
		$start=0;
	}
	
	$product_query="SELECT * FROM products LIMIT $start,$limit ";
	$run_query=mysqli_query($conn,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row=mysqli_fetch_array($run_query)){
			$pid =$row["id"];
			$cat_id =$row["cat_id"];
			$brand_id =$row["brand_id"];
			$product_title =$row["product_title"];
			$product_desc =$row["product_desc"];
			$product_price =$row["product_price"];
			$product_image =$row["product_image"];
			
			
			echo "
				<div class='col-md-4'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$product_title</div>
							<div class='panel-body'>
								<img class='img img-responsive' src='product_img/$product_image' alt='Image Here' style='height:auto; width:160px'/>
							</div>
							<div class='panel-body desc'>
								$product_desc
							</div>
							
						<div class='panel-footer'>GHc $product_price
							<button id='product' name='addCart' pid=$pid class='btn btn-danger btn-xs' style='float: right' >AddToCart</button>
						</div>		
					</div>
				</div>
			";
		}
		
		$_SESSION['pid']= $pid;
	}
	
}

if(isset($_POST['get_selected_cat']) || isset($_POST['get_selected_brand']) || isset($_POST['search'])){
	if(isset($_POST['get_selected_cat'])){
		$cat_id =$_POST["cat_id"];
		$query=" SELECT * FROM products where cat_id='$cat_id'";
	}else if(isset($_POST['get_selected_brand'])){
		$brand_id =$_POST["brand_id"];
		$query=" SELECT * FROM products where brand_id='$brand_id'";
	}else{
		$keyword = $_POST["keyword"];
		//$query=" SELECT * FROM products where product_keywords LIKE '%$keyword%'";
		$query=" SELECT * from products where product_title OR product_desc OR product_keywords LIKE '%$keyword%'";
	}
	
	$run_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($run_query)){
			$pid =$row["id"];
			$cat_id =$row["cat_id"];
			$brand_id =$row["brand_id"];
			$product_title =$row["product_title"];
			$product_desc =$row["product_desc"];
			$product_price =$row["product_price"];
			$product_image =$row["product_image"];
			$key =$row["product_keywords"];
			
			
			echo "
				<div class='col-md-4'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$product_title</div>
							<div class='panel-body'>
								<img class='img img-responsive' src='product_img/$product_image' alt='Image Here' style='height:auto; width:160px'/>
							</div>
							<div class='panel-body desc'>
								$product_desc
							</div>
							
						<div class='panel-footer'>GHc $product_price
							<button id='product' name='addCart' pid=$pid class='btn btn-danger btn-xs' style='float: right' >AddToCart</button>
						</div>		
					</div>
				</div>
			";
		}
}

if(isset($_POST['addToCart'])){
	if(isset($_SESSION['uid'])){
		$user_id=$_SESSION["uid"];
		$p_id=$_POST['product_id'];
		
		$sql="select * from cart where product_id='$p_id' AND user_id='$user_id'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		
		if($count > 0){
			echo "
				<div class='alert alert-danger alert-dismissable' style='position: fixed;z-index:10'>
					<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b> This item is already added to cart.
					Kindly ckeck the quantity at the <a href='cart.php' class='btn btn-warning btn-lg'>CheckOut</a> page. Continue shopping...!</b>
				</div>
			";
		}else{
			
			$query="SELECT * FROM products WHERE id='$p_id'";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($result);
				$id = $row['id'];
				$cat_id = $row['cat_id'];
				$b_id = $row['brand_id'];
				$pro_title = $row['product_title'];
				$pro_desc = $row['product_desc'];
				$pro_price = $row['product_price'];
				$pro_image = $row['product_image'];
				$pro_key = $row['product_keywords'];
			$cart_query = "INSERT INTO cart(product_id,ip_address,user_id,product_title,product_image,qty,price,total_amount) VALUES
			('$p_id','0','$user_id','$pro_title','$pro_image',1,'$pro_price','$pro_price')";
			$run = mysqli_query($conn,$cart_query);
			if($run){
				echo "
					<div class='alert alert-success alert-dismissable' style='position: fixed;z-index:10'>
						<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<b>Item was added to Your Cart successfully. 
						See it at <a href='cart.php' class='btn btn-warning btn-lg'>CheckOut</a> page. Continue shopping...!</b>
					</div>
				";
			}
			
		}
	$_SESSION['$product_id'] = $p_id;
	}else{
		echo "
			<div class='alert alert-warning alert-dismissable' style='position: fixed;z-index:10'>
				<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				
				<div class='panel panel-primary'>
					<div class='panel-heading'><h3><b>WANT TO MAKE PURCHASES ...?</b></h3></div>
					<div class='panel-body'>
						<p>
							Kindly <a class='btn btn-danger' href='signin.php'>LogIn</a> to make purchases...!
						</p>
					</div>
					<div class='panel-footer' style='text-align: center'>
						<button class='close btn btn-danger btn-xs' data-dismiss='alert' aria-hidden='true'>
							Close
						</button>
						<br>
					</div>
				</div>
			</div>
		";
	}
	
	
}


if(isset($_POST["get_cart_item"]) || isset($_POST["cart_checkout"])){
	$uid = $_SESSION["uid"];
	
	$sql = "SELECT * FROM cart WHERE user_id='$uid'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count > 0){
		$no = 0;
		$total_amt = 0;
		while($row=mysqli_fetch_array($result)){
			$pro_id = $row['product_id'];
			$pro_name = $row['product_title'];
			$pro_img = $row['product_image'];
			$pro_qty = $row['qty'];
			$pro_price = $row['price'];
			$total = $row['total_amount'];
			
			$total_array = array($total);
			$total_sum= array_sum($total_array);
			$total_amt = $total_amt + $total_sum;
			
			if(isset($_POST["get_cart_item"])){
				$no = $no +1;
				echo "
					<div class='panel-body'>
						<div class='row'>
							<div class='col-md-2'>$no</div>
							<div class='col-md-5'>$pro_name</div>
							<div class='col-md-2'>$pro_qty</div>
							<div class='col-md-3'>$pro_price</div>
						</div>
						
					</div>	
				";
				
			}else{
				echo "
						<div class='row'>
							<div class='col-md-2'>
								<div class='btn-group'>
									<button del_id='$pro_id' class='btn btn-danger delete'><span class='glyphicon glyphicon-trash'></span></button>
									<button update_id='$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-circle'></span></button>
								</div>
							</div>
							<div class='col-md-2'><img src='product_img/$pro_img' alt='product image' class='img img-responsive' style='width:100px;height:100px;'/></div>
							<div class='col-md-2'>$pro_name</div>
							<div class='col-md-2'><input style='width:100px;text-align:center' class='form-control qty' type='text' value='$pro_qty' pid='$pro_id' id='qty-$pro_id'/></div>
							<div class='col-md-2'><input style='width:100px;text-align:center' type='text' value='$pro_price' pid='$pro_id' id='price-$pro_id' disabled /></div>
							<div class='col-md-2'><input style='width:150px;text-align:center' type='text' value='$total' pid='$pro_id' id='total-$pro_id' disabled /></div>
						</div>
				";
			
			}
			
			//$_SESSION['total'] = $total;

			
			
		}
		echo "
			<div>
				<p class='label-info pull-right' style='font-size:16px;'><b>Total Due(Gh¢) <input type='text' style='width:150px;text-align:center' value='$total_amt' disabled /></b></p>
			</div>
			<br>
			<hr>
			<div class='pull-right'>
				<h3><a class='btn btn-warning btn-lg' href='checkout.php'>Continue To CheckOut > </a></h3>
			</div>
		";
		$_SESSION['total_amt'] = $total_amt;
		
		
	}else{
		echo "
			<div style='text-align: center'><h4><b>Your Cart Is Empty</b></h4></div>
		";
	}
	
	
}

if(isset($_POST["cart_count"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id='$uid'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	echo $count;
}

if(isset($_POST["del_from_cart"])){
	$pid = $_POST["delete_id"];
	$uid = $_SESSION["uid"];
	$sql = "delete from cart where user_id='$uid' AND product_id='$pid'";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "
			<div class='alert alert-danger alert-dismissable' style='position: fixed;z-index:10'>
				<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<b>Item was successfully removed from cart. Continue shopping...!</b>
			</div>
		";
	}
}


if(isset($_POST["update_cart"])){
	$uid = $_SESSION["uid"];
	$pid = $_POST["item_id"];
	$qty = $_POST["qty"];
	$price = $_POST["price"];
	$total = $_POST["total"];
	
	$sql = "update cart set qty='$qty',price='$price',total_amount='$total' where user_id='$uid' AND product_id='$pid'";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "
			<div class='alert alert-success alert-dismissable' style='position: fixed;z-index:10'>
				<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<b>Quantity updated successfully. Continue shopping...!</b>
			</div>
		";
	}
}

if(isset($_POST["checkout_final"])){
	$uid = $_SESSION["uid"];
	$sql = "select * from users where user_id='$uid'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	
		$username = $row['username'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address_1 = $row['address_1'];
		$address_2 = $row['address_2'];
		
		$t_amt = $_SESSION['total_amt'];
		echo "
			E-MAIL: <input class='form-control' style='width:500px' type='text' id='email' name='email' value='$email' placeholder='example@gmail.com' />
			<br>
			MOBILE: <input class='form-control' style='width:500px' type='text' id='mobile' name='mobile' value='$mobile' placeholder='02x xxx xxxx'  />
			<br>
			<textarea name='address'  id='address' rows='8' cols='40' placeholder='Location'>$address_1 , $address_2 </textarea>
		
			
			<br>
			<hr>
			<div class='label-info' style='text-align: center;'><h5><b>Select Delivery Mode</b></h5></div>
				
				
				<select id='delivery' name='delivery' class='form-control' style='width:500px'>
					<option> </option>
					<option> Deliver To My Door Step </option>
					<option> Pick-Up From A Shop Myself </option>
				</select>
			<br>
			<hr>
			<div class='label-info' style='text-align: center;'><h5><b>Select Payment Method</b></h5></div>
			
			
				<select id='payment' name='payment' class='form-control' style='width:500px'>
					<option id='cash'> </option>
					<option id='cash'> Cash On Delivery </option>
					<option id='m_money'> MTN Mobile Money </option>
					<option id='bank'> Bank </option>
				</select>
			<br>
			<hr>
		";
	
}



if(isset($_POST["confirm_address"])){
	$user_id = $_SESSION["uid"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$delivery = $_POST["delivery"];
	$payment = $_POST["payment"];
	
	if(empty($delivery) || empty($payment)){
		echo "
			<div class='alert alert-danger alert-dismissable' style='position: fixed;z-index:10'>
				<button class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<b> Please select a delivery mode and a payment method</b>
			</div>
		";
	}else{
		$order_ref = rand(1111111111,9999999999);
		$_SESSION['order_ref'] = $order_ref;
		
		$sql = "insert into confirm_address (user_id,cus_email,cus_mobile,cus_address,delivery_mode,payment_method,order_ref)
			values('$user_id','$email','$mobile','$address','$delivery','$payment','$order_ref')";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo "ok";
		}
		
		
			
		
	}

		
}


if(isset($_POST["order_sum"])){
	$user_id = $_SESSION["uid"];
	$total_amt = $_SESSION['total_amt'];
	
	$sql = "select * from cart where user_id='$user_id'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$product_title = $row['product_title'];
		$product_image = $row['product_image'];
		$product_qty = $row['qty'];
		$product_price = $row['price'];
		$product_total = $row['total_amount'];
	
		echo "
			<div class='row'>
				<div class='col-md-2'></div>
				<div class='col-md-2'><img src='product_img/$product_image' alt='product image' class='img img-responsive' style='width:100px;height:100px;'/></div>
				<div class='col-md-2'>$product_title</div>
				<div class='col-md-2'><input style='width:100px;text-align:center' class='form-control qty' type='text' value='$product_qty' readonly /> </div>
				<div class='col-md-2'><input style='width:100px;text-align:center' class='form-control' type='text' value='$product_price' readonly /></div>
				<div class='col-md-2'><input style='width:100px;text-align:center' class='form-control' type='text' value='$product_total' readonly /></div>
			</div>
		";
	}
		echo "
			<div class='row'>
				<div class='col-md-4'></div>
				<div class='col-md-4'>
					<br>
					<br>
					<div>
						<p class='label-info pull-right' style='font-size:16px;'><b>Total Due(Gh¢) <input class='form-control' id='f-total' type='text' value='$total_amt' readonly />  </b></p>
					</div>
				</div>
				<div class='col-md-4'></div>
			</div>
		";
	//$order_ref = rand(1111111111,9999999999);
	//$_SESSION['order_ref'] = $order_ref;
	
	
	
}




?>