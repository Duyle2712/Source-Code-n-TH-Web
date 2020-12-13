<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/publisher.php';?>
<?php 
    $pub = new publisher();
    if (!isset($_GET['pub_id']) || $_GET['pub_id'] == NULL) {
        echo "<script>window.location = 'publist.php'</script>";
    } else {
        $pub_id = $_GET['pub_id'];

    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pub_name = $_POST['pub_name'];

        $updatePublisher = $pub->update_publisher($pub_name, $pub_id);
    }
    
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit Publisher</h2>
                
               <div class="block copyblock"> 
                    <?php 
                        $get_pub_name = $pub->getpubbyId($pub_id);
                        if($get_pub_name) {
                            while($result = $get_pub_name->fetch_assoc()){

                            
                    ?>
                    <form action="" method="post">
                        <table class="form" >
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo $result['pub_id']?>" name="pub_id" placeholder="Enter Publisher ID ..." class="medium" disabled/>
                                </td>
                            </tr>					
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo $result['pub_name']?>" name="pub_name" placeholder="Enter Publisher Name..." class="medium" />
                                </td>
                            </tr>
                            <tr> 
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
                    <?php 
                        if(isset($updatePublisher)){
                            echo $updatePublisher;
                        }
                    ?>
                </div>
            </div>
        </div>