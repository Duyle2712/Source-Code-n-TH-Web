<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/publisher.php';?>
<?php 
    $pub = new publisher();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pub_id = $_POST['pub_id'];
        $pub_name = $_POST['pub_name'];

        $insertPublisher = $pub->insert_publisher($pub_id, $pub_name);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Publisher</h2>
                
               <div class="block copyblock"> 
                 <form action="pubadd.php" method="post">
                    <table class="form" >
                        <tr>
                            <td>
                                <input type="text" name="pub_id" placeholder="Enter Publisher ID ..." class="medium" />
                            </td>
                        </tr>					
                        <tr>
                            <td>
                                <input type="text" name="pub_name" placeholder="Enter Publisher Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php 
                    if(isset($insertPublisher)){
                        echo $insertPublisher;
                    }
                    ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>