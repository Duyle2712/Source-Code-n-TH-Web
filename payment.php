<?php 
	 include 'inc/header.php';
 ?>
 <?php 
    $login_check = Session::get('user_login');
    if($login_check == false) {
        header('Location:login.php');
    }
?>


<div class="main">
    <div class="content">
    	<div class="section group">
            <div class="content_top">
                <div class="heading">
                <h3>Payment Method</h3>
                </div>              
                <div class="clear">    </div>               
            </div>
            <div class="content_top">
                <div class="heading">
                <h5>Chọn phương thức thanh toán</h5>
                </div>              
                <div class="clear">    </div>               
            </div>
                <h3 class="payment">&nbsp;</h3>
                <hr>
                <a class="btn_submit payment" href="offlinepayment.php">Thanh toán khi nhận hàng</a>
                <h3 class="payment">&nbsp;</h3>
                <hr>
                <a class="btn_submit payment" href="onlinepayment.php">Thanh toán trực tuyến</a>
            
		</div>
    </div>
	 
<?php 
 	include 'inc/footer.php';
 ?>