<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../helpers/format.php');
	
	$fm_slider = new Format();
?>
<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php 
					$getLastestGD = $b->get_lastest_GD();
					if($getLastestGD){
						while($result_GD = $getLastestGD->fetch_assoc()){
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?bk_id=<?php echo $result_GD['book_id']?>"> <img src="admin/upload/<?php echo $result_GD['img']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>GIÁO DỤC</h2>
						<p><?php echo $fm_slider->textShorten($result_GD['book_name'], 30)?></p>
						<div class="button"><span><a href="details.php?bk_id=<?php echo $result_GD['book_id']?>">Details</a></span></div>
				   </div>
			   	</div>	
			   	<?php 
			 			}
					}  
				?>
				   
				<?php 
					$getLastestHCM = $b->get_lastest_HCM();
					if($getLastestHCM){
						while($result_HCM = $getLastestHCM->fetch_assoc()){
				?>   
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?bk_id=<?php echo $result_HCM['book_id']?>"><img src="admin/upload/<?php echo $result_HCM['img']?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>H C M</h2>
						  <p><?php echo $fm_slider->textShorten($result_HCM['book_name'], 30)?></p>
						  <div class="button"><span><a href="details.php?bk_id=<?php echo $result_HCM['book_id']?>">Details</a></span></div>
					</div>
				</div>
				<?php 
			 			}
					}  
				?>
			</div>
			<div class="section group">
				<?php 
					$getLastestVHTT = $b->get_lastest_VHTT();
					if($getLastestVHTT){
						while($result_VHTT = $getLastestVHTT->fetch_assoc()){
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?bk_id=<?php echo $result_VHTT['book_id']?>"> <img src="admin/upload/<?php echo $result_VHTT['img']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>VĂN HÓA TT</h2>
						<p><?php echo $fm_slider->textShorten($result_VHTT['book_name'], 30)?></p>
						<div class="button"><span><a href="details.php?bk_id=<?php echo $result_VHTT['book_id']?>">Details</a></span></div>
				   </div>
			   	</div>
				<?php 
			 			}
					}  
				?>
				
				<?php 
					$getLastestTN = $b->get_lastest_TN();
					if($getLastestTN){
						while($result_TN = $getLastestTN->fetch_assoc()){
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?bk_id=<?php echo $result_TN['book_id']?>"><img src="admin/upload/<?php echo $result_TN['img']?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>THANH NIÊN</h2>
						  <p><?php echo $fm_slider->textShorten($result_TN['book_name'], 30)?></p>
						  <div class="button"><span><a href="details.php?bk_id=<?php echo $result_TN['book_id']?>">Details</a></span></div>
					</div>
				</div>
				<?php 
			 			}
					}  
				?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/silde-right-1.jpg" alt=""/></li>
						<li><img src="images/slide-right-2.jpg" alt=""/></li>
						<li><img src="images/silde-right-3.jpg" alt=""/></li>
						<li><img src="images/slide-right-4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	