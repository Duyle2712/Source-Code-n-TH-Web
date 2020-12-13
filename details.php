<?php 
	 include 'inc/header.php';
 ?>
 <?php 
	if (!isset($_GET['bk_id']) || $_GET['bk_id'] == NULL) {
        echo "<script>window.location = '404.php'</script>";
    } else {
		$id = $_GET['bk_id'];
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
		$quantity = $_POST['quantity'];
		$addtoCart = $crt->add_to_Cart($quantity, $id);	
    }
 ?>

 <div class="main">
    <div class="content">
    	<div class="section group">
			<?php 
				$get_book_details = $b->getDetails($id);
				if($get_book_details) {
					while($result_details=$get_book_details->fetch_assoc()){
			?>
			<div class="cont-desc span_1_of_2">				
				<div class="grid images_3_of_2">
					<img src="admin/upload/<?php echo $result_details['img']?>" alt="">
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result_details['book_name']?></h2>
					<p><?php echo $fm->textShorten($result_details['description'],200)?></p>					
					<div class="price">
						<p>Category: <span><?php echo $result_details['cat_name']?></span></p>
						<p>Publisher: <span><?php echo $result_details['pub_name']?></span></p>
						<p>Price: <span><?php echo $result_details['price']." "."VND"?></span></p>
					</div>
					<div class="add-cart">
						<form action="" method="post">
							<input type="number" class="buyfield" name="quantity"  value="1" min="1" />
							<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>	
						</form>	
						<?php 
							if(isset($addtoCart)) {	
								echo '<span style="color:red; font-size:18px;">';
								echo $addtoCart;
								echo '</span>';						
								
							}
						?>		
					</div>
				</div>
				
				<div class="product-desc">
					<h2>Book Details</h2>
					<p><?php echo $result_details['description']?></p>	
				</div>	
				<div class="product-desc">
					<h2>Sách cùng loại</h2>
				
						
					<?php 
						
						$id_cungloai = $result_details['cat_id'];
						echo $id_cungloai;
						$get_book_cungloai = $b->getbookCungLoai($id_cungloai);
						if($get_book_cungloai) {
							while($result_cungloai=$get_book_cungloai->fetch_assoc()){
					?>	
					<p><?php echo $result_cungloai['book_name']?></p>
					
					<?php 
							}
						}
					?>
				</div>
				
			</div>
			<?php 
					}
				}
			
			?>	
			
			<div class="rightsidebar span_3_of_1">
				<h2>CATEGORIES</h2>
				<ul>
					<?php 
					 	$getall_cat = $cat->show_category_fontend();
						if($getall_cat) {
							while($result_allcat = $getall_cat->fetch_assoc()) {
					?>
					<li><a href="productbycat.php?catid=<?php echo $result_allcat['cat_id']?>"><?php echo $result_allcat['cat_name']?></a></li>
					<?php 
							}
						}
					?>
				</ul>
			</div>
 		</div>
	 </div>
	 
<?php 
 	include 'inc/footer.php';
 ?>