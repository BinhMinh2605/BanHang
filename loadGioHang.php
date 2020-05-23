
<?php
			session_start();
            include("ketnoi.php");
            if(isset( $_SESSION['username']))
            {
              $user =$_SESSION['username'];
                $sql3="SELECT SUM(sl) AS 'TONG' FROM GioHang where username='$user' ";  
                $result3 = mysqli_query($conn, $sql3);
                    if($result3->num_rows > 0)
                        {
                             while ( $data3 = $result3->fetch_assoc() ) 
                                 {  ?>
                                    
                                    <ul class="h_search list_style">
									<li class=""><a href="HienThiGioHang.php">
                                    <i class="lnr lnr-cart"></i><span><?php  echo $data3['TONG'];?></span></a></li>
                                    </ul> 
                                 <?php
                                 }
                                }
                            }
                            ?>