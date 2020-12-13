<?php 
	 include 'inc/header.php';
 ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>All Book</h3>
    		</div>
    		<div class="clear"></div>
		</div>
		
	      	<div class="section group feature-book-cart">
				<?php 
					$getbooknew = $b->getBookNew();
					if($getbooknew) {
						while($result = $getbooknew->fetch_assoc()){
				?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?bk_id=<?php echo $result['book_id']?>"><img src="admin/upload/<?php echo $result['img']?>" alt="" /></a>
					 <h2><?php echo $result['book_name']?></h2>
					 <p><?php echo $fm->textShorten($result['description'], 50)?></p>
					 <p><span class="price"><?php echo $result['price'].' '.'VND'?></span></p>
				     <div class="button"><span><a href="details.php?bk_id=<?php echo $result['book_id']?>" class="details">Details</a></span></div>
				</div>
				<?php 
						}
					}
				?>
			</div>
		
			
			<div>
					<?php
						echo '<p>Trang </p>';
						$book_all = $b->get_all_book();
						$book_count = mysqli_num_rows($book_all);
						$book_button = ceil($book_count /4);
						for($i =1; $i <$book_button ; $i++){
							echo '<a style="margin: 0 5px;" href="books.php?trang='.$i.'">'.$i.'</a>';
						}

					?>

			</div>
	</div>
	
 </div>
 <?php 
 	include 'inc/footer.php';
 ?>