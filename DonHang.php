<?php
			include("ketnoi.php");
			include("thuvien.php");
			include("menu.php");
?>
                         
 <section class="welcome_bakery_area">
        	<div class="container">
        		<div class="cake_feature_inner">
       
        <section class="billing_details_area p_100">
            <div class="container">
                <div class="row">
                	<div class="col-lg-12">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Your Order</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
                                <h2>Prodcut <span>Total</span></h2>
                                <br>
                                <?php

            if(isset( $_SESSION['username']))
            {
                $total = 0;
              $user =$_SESSION['username'];
                $sql3="SELECT sanpham.tenSP,sanpham.Gia,giohang.sl, giohang.id_banh from sanpham,giohang where giohang.username='$user' and giohang.id_banh=sanpham.id ";  
                $result3 = mysqli_query($conn, $sql3);
                    if($result3->num_rows > 0)
                        {
                             while ( $data3 = $result3->fetch_assoc() ) 
                                 { 
                                   
                                    $total += (int)$data3["Gia"] *  (int)$data3["sl"];
                                     ?>
								
									<h5>  <p class="text-primary"><?php echo $data3['tenSP'] ;?> x <?php echo $data3['sl'];?> <span><?php echo  '$'.(int)$data3["Gia"] *  (int)$data3["sl"]; ?></span></h5>
                    
                                    
                                 <p>-------------------------------------------------------------------------------------------------------------------</p>
                                   <?php
                                 }
                                }
                            }?>
                                        <h5>Total <span><?php echo '$'.$total;?></span><h5>
                                            <?php 
                                            $moneny=0;
                                            if($total<20)
                                            {
                                                $moneny=12;
                                            }
                                            elseif($total<50 && $total>20)
                                            {
                                                $moneny=7;
                                            }
                                            elseif($total<100 && $total >50)
                                            {
                                                $moneny=5;
                                            }
                                            elseif($total>100)
                                            {
                                                $moneny=3;
                                            }
                                          
                                            ?>
                                        <h5>SHIPPING AND HANDLING<span><?php echo '$'. $moneny;?></span></h5>
                                        <p>_______________________________________________________________________________________</p>
                                        
                                        <h5>Into money<span><h2><p class="text-danger"><?php echo "$" ;?><?php echo(int)$moneny+(int)$total;?></p></h2></span><h5>
                                        
                                    
								</div>
							
								
                                <button type="submit" id="submit" value="submit"  class="btn pest_btn">Place Order</button>
                                
							</div>
						</div>
                	</div>
                </div>
            </div>
        </section>
         
    </div>
                                        </div>
                                        </section>
 <input type="hidden" name="toal" id="toal" value="<?php echo(int)$moneny+(int)$total;?>"/> 
 <input type="hidden" name="ship" id="ship" value="<?php echo(int)$moneny;?>"/>       

   <script src="https://code.jquery.com/jquery-1.4.2.js"></script>   
 <script type="text/javascript">
 $(document).ready(function()
 {
 $("#submit").click(function()
 {
    var toal= $("[name=toal]").val();
    var ship= $("[name=ship]").val();
      $.post("TaoDonHang.php",
      {toal:toal, ship:ship},
                function(data,status)
                {
                    if(status=="success" )
                  
				   location.replace('TheoDoi.php'); 
                    else
                    console.log("loi");
				
		        });
  });
}); 
</script>                   
   
      <?php include("menu-cuoi.php");?>