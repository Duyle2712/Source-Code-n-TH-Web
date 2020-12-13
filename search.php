<?php 
	 include 'inc/header.php';
 ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
			<?php 
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $tukhoa = $_POST['tukhoa'];
            
                    $searchbook = $b->search_book($tukhoa);
                }
           ?>
    		<div class="heading">
    		<h3>Từ khóa tìm kiếm: <?php echo $tukhoa?></h3>
			</div>
			
    		<div class="clear"></div>
    	</div>
	      <div class="section group new-book-cart">
				<?php 
					if($searchbook) {
						while($result = $searchbook->fetch_assoc()) {	
				?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?bk_id=<?php echo $result['book_id']?>"><img src="admin/upload/<?php echo $result['img']?>" alt="" /></a>
					 <h2><?php echo $result['book_name']?></h2>
					 <p><?php echo $fm->textShorten($result['description'], 200)?></p>
					 <p><span class="price"><?php echo $result['price'].' '.'VND'?></span></p>
				     <div class="button"><span><a href="details.php?bk_id=<?php echo $result['book_id']?>" class="details">Details</a></span></div>
				</div>
				<?php 
						}
					} else {
						echo 'Không tìm thấy sách có tên chứa từ khóa '.$tukhoa.' '.'này';
					}
				?>
			</div>

	
	
    </div>
 </div>

<?php 
 	include 'inc/footer.php';
 ?>