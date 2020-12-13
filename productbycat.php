<?php 
	 include 'inc/header.php';
 ?>
<?php 
	 if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
		 echo "<script>window.location = '404.php'</script>";
	 } else {
		 $id = $_GET['catid'];
	 }
 
	//  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 	 $cat_name = $_POST['cat_name'];
 
	// 	 $updateCategory = $cat->update_category($cat_name, $cat_id);
	//  }
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
			<?php 
				$getcatname = $cat->get_cat_name($id);
				if($getcatname) {
					while($result_name = $getcatname->fetch_assoc()) {	
			?>
    		<div class="heading">
    		<h3><?php echo $result_name['cat_name']?></h3>
			</div>
			<?php 
					}
				}
			?>
    		<div class="clear"></div>
    	</div>
	      <div class="section group new-book-cart">
				<?php 
					$getbookbycat = $cat->get_book_by_cat($id);
					if($getbookbycat) {
						while($result = $getbookbycat->fetch_assoc()) {	
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
						echo 'Chưa có Sách thuộc loại này';
					}
				?>
			</div>

	
	
    </div>
 </div>

<?php 
 	include 'inc/footer.php';
 ?>