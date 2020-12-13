<?php 
	 include 'inc/header.php';
 ?>
 <?php 

	if (isset($_GET['delcart_id'])) {
		$delcart_id = $_GET['delcart_id'];
		$deleteBookCart =$crt->del_book_cart($delcart_id);
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
		$quantity = $_POST['quantity'];
		$cart_id = $_POST['cart_id'];
		$updateQuantityCart = $crt->update_quantity_cart($quantity, $cart_id);
		if($quantity <= 0) {
			$deleteBookCart = $crt->del_book_cart($cart_id); 
		}
	}
 ?>
 <?php 
	if(!isset($_GET['id'])){
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
	}
 ?>

 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
					<h2>Your Cart</h2>
					<?php 
						if(isset($updateQuantityCart)) {
							echo '<span style="color:green; font-size:18px;">';
							echo $updateQuantityCart;
							echo '</span>';
						}
					?>
					<?php 
						if(isset($deleteBookCart)) {
							echo '<span style="color:green; font-size:18px;">';
							echo $deleteBookCart;
							echo '</span>';
						}
					?>
						<table class="tblone">
							<tr>
								<th width="20%">Book Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="25%">Quantity</th>
								<th width="20%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php 
								$get_book_cart = $crt->getBookCart();
								if($get_book_cart) {
									$sub_total = 0;
									$qty = 0;
									while($result = $get_book_cart->fetch_assoc()){

							?>
							<tr>
								<td><?php echo $result['book_name']?></td>
								<td><img src="admin/upload/<?php echo $result['img']?>" alt=""/></td>
								<td><?php echo $result['price']?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="cart_id"  value="<?php echo $result['cart_id']?>"/>
										<input type="number" name="quantity" min="0" value="<?php echo $result['quantity']?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>
									<?php 
										$total = $result['price'] * $result['quantity'];
										echo $total;
									?>
								</td>
								<td><a href="?delcart_id=<?php echo $result['cart_id']?>">Del</a></td>
							</tr>
							<?php 
							
										$sub_total += $total;
										$qty += $result['quantity'];
									}
								}
							?>
						</table>

						<?php 
							$check_cart = $crt->check_cart();
							if($check_cart){
						?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td><?php  
										echo $sub_total;
										Session::set('sum', $sub_total);
										Session::set('qty', $qty);
									?>
								</td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10 %</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td><?php 
								$vat = $sub_total * 0.1;
								$grand_total = $sub_total + $vat;
								echo $grand_total;
								?></td>
							</tr>
					   </table>
					   <?php 
					   		} else {
								echo 'Giỏ hàng của bạn trống ! Làm ơn mua sách';
							}
					   ?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

 <?php 
 	include 'inc/footer.php';
 ?>
