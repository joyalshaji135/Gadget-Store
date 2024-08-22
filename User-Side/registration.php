<?php

include('./database/config.php');


include('./Layouts/basic/header.php');

?>

<section id="checkout" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="checkout_1 clearfix">
    <div class="col-sm-12">
	  <div class="checkout_1l clearfix">
	   <h3 class="mgt"></h3>
	   <p></p>
	  </div><br>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Username <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="username">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Full Name <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="full_name">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Email Address <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_email">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Phone Number <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_phone_number">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
		<div class="col-sm-6 space_left">
		 <h5>Password <span class="col_1">*</span></h5>
		 <input class="form-control" type="text" name="user_password">
		</div>
		<div class="col-sm-6 space_left">
		 <h5>Confirm Password <span class="col_1">*</span></h5>
		 <input class="form-control" type="text" name="user_confirm_password">
		</div>
	   </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Country <span class="col_1">*</span></h5>
		<select class="form-control" name="user_country">
				 <option>India</option>
				 <option>Paksitan</option>
				 <option>Russia</option>
				 <option>England</option>
				 <option>Nepal</option>
			 </select>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>State / Divition <span class="col_1">*</span></h5>
		<select class="form-control" name="user_state">
				 <option>UP</option>
				 <option>MP</option>
				 <option>Bihar</option>
				 <option>Delhi</option>
				 <option>Jharkhand</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Address Line 1 <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_address_1">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Address Line 2 <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_address_2">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-12 space_left">
	    <h5>Postal Code <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_postal_code">
	   </div>
	  </div>
	  <div class="checkout_1l clearfix">
	   <p>Do you have an account?
		<a href="./login.html"><small>Sign in here</small></a></p>
	  </div> 
      <div class="checkout_1l1 clearfix">
        <div class="col-sm-12 space_left">
         <h6><input type="submit" value="Register" class="button" name="user_register"></h6>
        </div>
       </div>
	</div>
   </div>
  </div>
 </div>
</section>


<?php

include('./Layouts/basic/footer.php');

?>




<!-- user_id,username,full_name,user_email,user_phone_number,user_country,user_state,user_address_1,user_address_2,user_postal_code,user_status -->

<?php

if (isset($_POST['user_register'])) {
	$username = $_POST['username'];
	$full_name = $_POST['full_name'];
	$user_email = $_POST['user_email'];
	$user_phone_number = $_POST['user_phone_number'];
	$user_country = $_POST['user_country'];
	$user_state = $_POST['user_state'];
	$user_password = $_POST['user_password'];
	$hash_password = password_hash($user_password, PASSWORD_DEFAULT);
	$confirm_user_password = $_POST['user_confirm_password'];
	$user_address_1 = $_POST['user_address_1'];
	$user_address_2 = $_POST['user_address_2'];
	$user_postal_code = $_POST['user_postal_code'];
	$user_status = "active";
	
	
	//Select Query
	$select_query = "Select * from `user_registration_tbl` where 
                    username='$username' or user_email='$user_email' or user_phone_number='$user_phone_number'";
	$result_query = mysqli_query($connection, $select_query);
	$num_row = mysqli_num_rows($result_query);

	if ($num_row > 0) 
	{
		echo "<script>alert('Username,Email and Phone Number are already exist')</script>";
	} 
	else if ($user_password != $confirm_user_password) 
	{
		echo "<script>alert('Password Don not Matching')</script>";
	} 
	else if (preg_match("/^([0-9]{10})$/", $user_phone_number)) 
	{
		$insert_query = "insert into `user_registration_tbl` 
                    (username,full_name,user_email,user_phone_number,user_country,user_state,user_address_1,user_address_2,user_postal_code,user_password,user_status) 
                    values ('$username','$full_name','$user_email','$user_phone_number','$user_country','$user_state','$user_address_1','$user_address_2','$user_postal_code',$hash_password,'$user_status')";
		$sql_execute = mysqli_query($connection, $insert_query);
		$insert_login_query = "insert into `user_login_tbl` 
                    (username,password) values ('$username','$hash_password')";
		$sql_login_execute = mysqli_query($connection, $insert_login_query);
		if ($sql_execute) 
		{
			echo "<script>alert('Registeration SucessFully')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		}
	} 
	else 
	{
		echo "<script>alert('Invalid Number')</script>";
	}

	//Select cart Items
	// $select_cart_items = "select * from add_to_cart_tbl where ip_address='$user_ip_address'";
	// $result_cart = mysqli_query($con, $select_cart_items);
	// $row_count = mysqli_num_rows($result_cart);
	// if ($row_count > 0) {
	// 	$_SESSION['username'] = $username;
	// 	echo "<script>alert('You Have Items In Your Cart')</script>";
	// 	echo "<script>window.open('checkout.php','_self')</script>";
	// } else {
	// 	echo "<script>window.open('index.php','_self')</script>";
	// }
}

?>