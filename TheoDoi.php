<?php
include("ketnoi.php");
include("thuvien.php");
include("menu.php");?>

	   <?php 
	   
	   $sql4="DELETE FROM giohang WHERE username='$user' ";
            if ($conn->query($sql4) === TRUE) 
            {
               
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
			} ?>
			
	
        
        
        
        
     



      
        <section class="cart_table_area p_100">
        	<div class="container">
		
				<div class="table-responsive">
					<table class="table">
						
								<th scope="col">Mã Đơn Hàng</th>
								<th scope="col">Ngày Mua</th>
								<th scope="col">Tổng Tiền</th>
								<th scope="col">Tình Trạng</th>
	
				
        <?php 

$sql3="SELECT DISTINCT donhang.id,donhang.tinhtrang,donhang.tongtien,donhang.ngaymua FROM sp_da_mua,donhang
where donhang.username='$user' and sp_da_mua.id_donhang=donhang.id";  
$tv_1=mysqli_query($conn,$sql3);
    if($tv_1->num_rows > 0)
{
    while($tv_2=$tv_1->fetch_assoc() )
    {?>
    		<tbody>
							<tr>

								<td>
                <a href="ChiTietDonHang.php?id=<?php echo $tv_2['id'];?>"><?php echo $tv_2['id'];?></a>
								</td>

            
								<td><?php echo $tv_2['ngaymua']; ?></td>

								<td>
                <?php echo "$";?> <?php echo $tv_2['tongtien'];?>
								</td>

                <td><?php if($tv_2['tinhtrang']==1)
	  {
		  echo "Đã nhận";
	  }
	  elseif($tv_2['tinhtrang']==2)
	  {
		echo "Đã giao thành công";
	  }
	  else
	  {
		echo "Đã hủy";
	  };
	?>
	
	  </td>

							
          </tr>
		 	  
          <?php
    }
  }
  ?>

</div>
						</tbody>
					</table>
				</div>
       	
        			</div>
        		</div>
        	</div>
        </section>
       
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>
