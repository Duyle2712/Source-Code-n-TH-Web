<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/publisher.php';?>
<?php include '../classes/book.php';?>
<?php 
    $b = new book();
    if (!isset($_GET['book_id']) || $_GET['book_id'] == NULL) {
        echo "<script>window.location = 'booklist.php'</script>";
    } else {
        $id = $_GET['book_id'];

    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $updateBook = $b->update_book($_POST, $_FILES, $id);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Book</h2>
        <div class="block"> 
            <?php 
                    if(isset($updateBook)){
                        echo $updateBook;
                    }
            ?>    
            
            <?php 
                $get_book_by_id = $b->getbookbyId($id); 
                if($get_book_by_id) {
                    while ($result_book = $get_book_by_id->fetch_assoc()) {
            ?>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>ID</label>
                    </td>
                    <td>
                        <input type="text" name="book_id" value="<?php echo $result_book['book_id']?>" class="medium" disabled/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="book_name" value="<?php echo $result_book['book_name']?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>-----Select Category-----</option>
                            <?php 
                                $cat = new category();
                                $catlist = $cat->show_category();
                                if($catlist){
                                    while($result = $catlist->fetch_assoc()){                                   
                            ?>
                            <option 
                                <?php 
                                    if($result['cat_id'] == $result_book['cat_id']) { echo 'selected'; }
                                ?>
                            value="<?php echo $result['cat_id']?>"><?php echo $result['cat_name']?>
                            </option>
                            <?php 
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Publisher</label>
                    </td>
                    <td>
                        <select id="select" name="publisher">
                            <option>-----Select Publisher-----</option>
                            <?php 
                                $pub = new publisher();
                                $publist = $pub->show_publisher();
                                if($publist){
                                    while($result = $publist->fetch_assoc()){                                   
                            ?>
                            <option 
                                <?php 
                                    if($result['pub_id'] == $result_book['pub_id']) { echo 'selected'; }
                                ?>
                            value="<?php echo $result['pub_id']?>"><?php echo $result['pub_name']?>
                            </option>
                            <?php 
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="description" class="tinymce"><?php echo $result_book['description']?></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $result_book['price']?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="upload/<?php echo $result_book['img'] ?>" width="90px" height="100px">
                        <input type="file" name="img"/>
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Book Status</label>
                    </td>
                    <td>
                        <select id="select" name="status">
                            <option>Select Type</option>
                            <?php 
                                if($result_book['status']==1){                            
                            ?>
                            <option selected value="1">Featured</option>
                            <option value="0">Non-Featured</option>
                            <?php 
                            } else {
                            ?>
                            <option  value="1">Featured</option>
                            <option selected value="0">Non-Featured</option>
                            <?php 
                             }
                            ?>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php 
                  }
                }
            ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


