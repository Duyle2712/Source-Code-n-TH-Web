<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/publisher.php';?>

<?php 
	$pub = new publisher();
	if (isset($_GET['del_id'])) {
		$del_id = $_GET['del_id'];
		$deletePublisher =$pub->del_publisher($del_id);

    }
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Publisher List</h2>
                <div class="block">    
					<?php 
                        if(isset($deletePublisher)){
                            echo $deletePublisher;
                        }
                    ?>    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Publisher ID</th>
							<th>Publisher Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$show_pub = $pub->show_publisher();
						if($show_pub) {
							$i =0;
							while($result = $show_pub->fetch_assoc()){
								$i++;
						
					?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['pub_id']?></td>
							<td><?php echo $result['pub_name']?></td>
							<td><a href="pubedit.php?pub_id=<?php echo $result['pub_id']?>">Edit</a> || 
							<a href="?del_id=<?php echo $result['pub_id']?>" onclick="return confirm('Bạn có muốn xóa Nhà xuất bản này ?')">Delete</a>
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

