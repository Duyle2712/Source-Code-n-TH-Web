<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/publisher.php';?>
<?php include '../classes/book.php';?>
<?php include_once '../helpers/format.php';?>
<?php 
	$b = new book();
	$fm = new Format();
	if (isset($_GET['book_id'])) {
		$id = $_GET['book_id'];
		$deleteBook =$b->del_book($id);

    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Book List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Book ID</th>
					<th>Book Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Images</th>
					<th>Status</th>
					<th>Publisher</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if(isset($deleteBook)){
						echo $deleteBook;
					}
                ?>    
				<?php 
					$b_list = $b->show_book();
					if($b_list){
						$i=0;
						while($result = $b_list->fetch_assoc()) {
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i?></td>
					<td><?php echo $result['book_id']?></td>
					<td><?php echo $fm->textShorten($result['book_name'], 30)?></td>
					<td><?php echo $fm->textShorten($result['description'], 15);?></td>
					<td><?php echo $result['price']?></td>
					<td><img src="upload/<?php echo $result['img']?>" width="50px"></td>					
					<td>
						<?php 
						if($result['status']==1){
							echo 'Feathered';
						} else {
							echo 'Non-Feathered';
						}
						?>					
					</td>
					<td><?php echo $result['cat_name']?></td>
					<td><?php echo $result['pub_name']?></td>
					<td><a href="bookedit.php?book_id=<?php echo $result['book_id']?>">Edit</a> 
					|| <a href="?book_id=<?php echo $result['book_id']?>">Delete</a></td>
				</tr>
				<?php 
						}
					}
				?>	
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
