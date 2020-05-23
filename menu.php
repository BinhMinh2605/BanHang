<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+123456789"><i class="fa fa-phone" aria-hidden="true"></i>0123456789</a>
						<a href="mainto:abc@cabc.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> abc@abc.com</a>
					</div>
					
					
					<div class="float-right">
						<ul class="h_social list_style">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												
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
								 
								 <li><a href="dangxuat.php"><i class="fa fa-user" ></i><?php echo $user;?></a></li>
                                   <ul class="h_search list_style">
								<li class=""><div id="display"><a href="HienThiGioHang.php"><i class="lnr lnr-cart"></i><span> <?php  echo $data3['TONG'];  ?></a></div></li>
								   </ul> 
                                    <?php
                                 }
                        }
            }
            else 
            {
				?>
 <li >
	
	<li><a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-user" ></i></a></li>
									
</li>


			 <?php
               
            }
       ?>
					</div>
				</div>
			</div>
			<header class="box_header_four">
			<div class="box_menu_four">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php"><img src="img/logo-new.png" alt="" width="320px" heigh="320px"></a></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav justify-content-end">
								<li><a href="index.php">Home</a></li>
								
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.php?trang=1">Main shop</a></li>
										<li><a href="shop.php?trang=1&id_loai=1">Bánh ngọt</a></li>
										<li><a href="shop.php?trang=1&id_loai=2">Bánh mặn</a></li>
										<li><a href="shop.php?trang=1&id_loai=3">Bánh cưới</a></li>
										<li><a href="shop.php?trang=1&id_loai=4">Cupcakes</a></li>
										<li><a href="shop.php?trang=1&id_loai=5">Sandwich</a></li>
										<li><a href="shop.php?trang=1&id_loai=6">Tổng hợp</a></li>
									</ul>
								</li>

								<?php
										if(isset( $_SESSION['username']))
										{
											?>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Oder</a>
									<ul class="dropdown-menu">
											<li><a href="HienThiGioHang.php">Cart Page</a></li>
											<li><a href="TheoDoi.php">Oder</a></li>
									</ul>
								</li>
								<?php
										}
										?>
								<li><a href="">Contact Us</a></li>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

</header>
     
<br>
	   <br>
	   <br>
	   <br>
	   <br>
	   <br>
	   <br>