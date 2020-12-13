<?php 
    include 'lib/session.php';
    Session::init();
?>

<?php 
    include_once 'lib/database.php';
	include_once 'helpers/format.php';
	
	spl_autoload_register(function($className) {
		include_once "classes/".$className.".php";
	}) ;
	$db = new Database();
	$fm = new Format();
	$crt = new cart();
	$usr = new user();
	$cat = new category();
	$pub = new publisher();
	$b = new book();
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form action="search.php" method="POST">
						<input type="text" placeholder="Search Books . . ." name="tukhoa">
						<input type="submit" name="searchbook" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">
									<?php 
										$check_cart = $crt->check_cart();
										if($check_cart){
											$sum = Session::get("sum");
											$qty = Session::get("qty");
											echo $sum.' '.'đ'.' '.' '.'('.$qty.')'; 
										} else {
											echo 'Empty';
										}
										
									?>
								</span>
							</a>
						</div>
				  </div>
				  <?php 
				  		if(isset($_GET['userId'])) {
							  $delCart = $crt->del_all_data_cart();
							  Session::destroy();
						}
				  ?>
		  	<div class="login">
			<?php 
				$login_check = Session::get('user_login');
				if($login_check == false) {
					echo '<a href="login.php">Login</a></div>';
				} else {
					echo '<a href="?userId='.Session::get("user_id").'">Logout</a></div>';
				}
			?>
		   	
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="books.php">Books</a> </li>
	  
	  <?php 
			$checkCart = $crt->check_cart();
			if($checkCart == false) {
				echo '';
			} else {
				echo '<li><a href="cart_book.php">Cart</a></li>';
			}
		?>
	  

	 	<?php 
			$login_check = Session::get('user_login');
			if($login_check == false) {
				echo '';
			} else {
				echo '<li><a href="profile.php">Profile</a></li>';
			}
		?>		
	  <li><a href="contact.php">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>