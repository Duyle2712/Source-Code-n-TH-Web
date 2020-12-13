<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>

<?php 
	$cat = new category();
	if (isset($_GET['del_id'])) {
		$del_id = $_GET['del_id'];
		$deleteCategory =$cat->del_category($del_id);

    }
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">    
					<?php 
                        if(isset($deleteCategory)){
                            echo $deleteCategory;
                        }
                    ?>    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category ID</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$show_cat = $cat->show_category();
						if($show_cat) {
							$i =0;
							while($result = $show_cat->fetch_assoc()){
								$i++;
						
					?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['cat_id']?></td>
							<td><?php echo $result['cat_name']?></td>
							<td><a href="catedit.php?cat_id=<?php echo $result['cat_id']?>">Edit</a> || 
							<a href="?del_id=<?php echo $result['cat_id']?>" onclick="return confirm('Bạn có muốn xóa loại sách này ?')">Delete</a>
							</td>
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

