
<?php

include('./database/config.php');


include('./Layout/login/header.php');


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
       <div class="col-sm-12 space_left">
	    <h5>Username <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="username">
	   </div>
	   <div class="col-sm-12 space_left">
	    <h5>Password <span class="col_1">*</span></h5>
		<input class="form-control" type="text" name="user_password">
	   </div>
	  </div>
	  <div class="checkout_1l clearfix">
		<p>Don’t have an account?
		 <a href="./registration.php"><small>Sign up here</small></a></p>
	   </div> 
      <div class="checkout_1l1 clearfix">
        <div class="col-sm-12 space_left">
         <h6><a href="index.html"><input type="submit" value="Login" class="button"></a></h6>
        </div>
       </div>
	</div>
   </div>
  </div>
 </div>
</section>
<br><br>

<?php

include('./Layout/login/footer.php');

?>

<?php
if(isset($_POST['user_login']))
{
	$username=$_POST['username'];
	$user_password=$_POST['user_password'];
	//Select User Query
	$select_query="Select * from user_login_tbl where username='$username'";
	$result_query=mysqli_query($connection,$select_query);
	$user_row=mysqli_num_rows($result_query);
	$row_data=mysqli_fetch_assoc($result_query);

	// $select_cart_query="Select * from add_to_cart_tbl where ip_address='$user_ip_address'"; //cart TABLE NAME IS cart_detail
	// $result_cart=mysqli_query($con,$select_cart_query);
	// $row_cart_count=mysqli_num_rows($result_cart);

	if($user_row>0)
	{
		$_SESSION['username']=$username;
		if(password_verify($user_password,$row_data['user_password']))
		{
		       echo "<script>alert('Login SuccessFully')</script>"; 
			   echo "<script>window.open('index.php','_self')</script>";
			// if($user_row==1 and $row_cart_count==0)
			// {
			// 	$_SESSION['username']=$username;
			// 	echo "<script>alert('Login SuccessFully')</script>";
			// 	echo "<script>window.open('profile.php','_self')</script>";
			// }
			// else
			// { 
			// 	$_SESSION['username']=$username;
			// 	echo "<script>alert('Login SuccessFully')</script>";
			// 	echo "<script>window.open('payment_method.php','_self')</script>";
			// }

		}else
		{
			echo "<script>alert('Invalid Credantial')</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid Credantial')</script>";
	}
}
?>