<?php 
	 include 'inc/header.php';
	 include 'inc/slider.php';
 ?>
 
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Books</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group feature-book-cart">
				<?php 
					$bookstatus = $b->getBookwithStatus();
					if($bookstatus){
						while($result = $bookstatus->fetch_assoc()){

						
				?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/upload/<?php echo $result['img']?>" alt="" /></a>
					 <h2><?php echo $result['book_name']?></h2>
					 <p><?php echo $fm->textShorten($result['description'], 50)?></p>
					 <p><span class="price"><?php echo $result['price']." "."VND"?></span></p>
				     <div class="button"><span><a href="details.php?bk_id=<?php echo $result['book_id']?>" class="details">Details</a></span></div>
				</div>
				<?php 
						}
					}
				?>	
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Books</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group new-book-cart">
				<?php 
					$booknew = $b->getBookNew();
					if($booknew){
						while($result_new = $booknew->fetch_assoc()){

						
				?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/upload/<?php echo $result_new['img']?>" alt="" /></a>
					 <h2><?php echo $result_new['book_name']?></h2>
					 <p><?php echo $fm->textShorten($result_new['description'], 50)?></p>
					 <p><span class="price"><?php echo $result_new['price']." "."VND"?></span></p>
				     <div class="button"><span><a href="details.php?bk_id=<?php echo $result_new['book_id']?>" class="details">Details</a></span></div>
				</div>
				<?php 
						}
					}
				?>	
			</div>
    </div>
 </div>

 <?php 
 	include 'inc/footer.php';
 ?>