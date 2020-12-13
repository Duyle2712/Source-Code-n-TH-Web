<?php 
	 include 'inc/header.php';
 ?>
<?php 
	$login_check = Session::get('user_login');
	if($login_check) {
		header('Location:order.php');
	} 
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $insertUser = $usr->insert_user($_POST);
    }
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
        $loginUser = $usr->login_user($_POST);
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="" method="POST" >
                	<input name="email" type="text" value="" class="field" placeholder="Enter Your Email . . .">
                    <input name="password" type="password" value="" class="field" placeholder="Enter Your Password . . .">
                 
                 <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="buttons"><input type="submit"  name="login" class="btn_submit" value="Sign In"></div>
			</form>
			<?php 
				if(isset($loginUser)){
					echo $loginUser;
				}
			?>		
				
		</div>
					

    	<div class="register_account">
			<h3>Register New Account</h3>
			<?php 
				if(isset($insertUser)){
					echo $insertUser;
				}
			?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
								<input type="text" name="email" value="" placeholder="Enter Email . . .">
							</div>

							<div>
							<input type="text" name="name" value="" placeholder="Enter Name . . ." >
							</div>

							

							<div>
								<input type="password" name="password" value="" placeholder="Enter Password . . .">
							</div>

							<div>
								<input type="password" name="re-pasword" value="" placeholder="Repeat Password . . .">
							</div>

							
							
							
							
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" value="" placeholder="Enter Address . . .">
						</div>
						<div>
							   <input type="text" name="city" value="" placeholder="Enter City . . .">
						</div>
						<div>
							   <input type="text" name="country" value="" placeholder="Enter Country . . .">
						</div>
		    				        
	
		           		<div>
		          			<input type="text" name="phone" value="" placeholder="Enter Phone . . .">
		         		</div>
				  
				  
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><input type="submit" name="submit" class="btn_submit" value="Create Account"></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php 
 	include 'inc/footer.php';
 ?>