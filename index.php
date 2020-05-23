
<?php include("thuvien.php");?>
  <?php include("menu.php");?>


 <div class="container">
  <div class="row">
    <div class="col-sm-8">
        

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/home-slider/bakery-3.jpg" width="100px" height="500px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home-slider/banner_pg.jpg" width="100px" height="500px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home-slider/banner3.jpg" width="100px" height="500px"alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

        
<div class="col-sm-4">


 <br>
	<p><h3>Our Featured Cakes</h3>	</p>			

 		<div class="row latest_news_inner">
       					<div class="l_news_item">

						   <div class="container">
								<div class="row">
									<div class="col">

       						<div class="l_news_img">
       							<img class="img-fluid" src="img/comming-bg.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2019</h5></a>
       							<a href="#"><h4>TheCupcake Blog</h4></a>
       							
							</div>
							</div>

									<div class="col">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/welcome-right.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2020</h5></a>
       							<a href="#"><h4>The Cupcakes Blog</h4></a>	
							</div>
							</div>

							<div class="col">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/blog-c-2.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2019</h5></a>
       							<a href="#"><h4>The Cupcakes Blog </h4></a>	
							</div>
							</div>

									<div class="col">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/comming-bg.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>May 15, 2016</h5></a>
       							<a href="#"><h4>The Cupcakes Blog</h4></a>					
							</div>
							</div>

</div>
</div>

       					</div>
        		</div>

        
</div>
  </div>
</div>       
       
      
        		
	<!-------------------------------------giao dien xuat banh loai 1-------------------->
	<section class="welcome_bakery_area">
        	<div class="container">
        		<div class="cake_feature_inner">
        			<div class="main_title">
						<h2>Our Featured Cakes</h2>
						<h5> Hot Products</h5>
					</div>
       				<div class="cake_feature_slider owl-carousel">
<?php
 include("ketnoi.php");
	$sql="SELECT  id,tenSP,Gia,HinhAnh from sanpham  ORDER BY RAND () LIMIT 8";
    $sp=mysqli_query($conn,$sql);
    if($sp->num_rows > 0)
	{
    while($data=$sp->fetch_assoc() )
    {
	 ?>	
<div class="item">
       	<div class="cake_feature_item">
       						
       		<a href="ThongTinSP.php?products=<?php echo $data['tenSP']?>&id=<?php echo $data['id']?> "
        data-toggle="tooltip"  data-placement="right" title="<?php echo $data['tenSP']?>">
		<?php $link_anh="hinh_anh/".$data['HinhAnh']; 
		echo "<img src='$link_anh' width='270px'height='270px' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0'       >";?>
		</a>
					
			<h4><?php echo $data['tenSP']; ?> </h4>
			<p style="font-size:20px"><b><h4><?php echo "$";?><?php echo $data['Gia'] ?></h4></b></p>
								  
       	</div>
</div>
	
<?php
	}
}
?> 
 </div>


<script>
function bigImg(x) {
  x.style.height = "290px";
  x.style.width = "290px";
}

function normalImg(x) {
  x.style.height = "270px";
  x.style.width = "270px";
}
</script>
<br>

        		</div>
        	</div>
		</section>
		
<!----================ket thuc giao dien xuat banh loai 1 =================-->
	  

<div class="single_pest_title">
	  <section class="new_arivals_area p_100">
        	<div class="container">
        		<div class="row arivals_inner">
        			
				<div class="container">
					<div class="row">
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">

      <img src="hinh_anh/bn_1.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bánh ngọt</h5>
        <p class="card-text">Những chiếc bánh giòn tan với hương vị ngọt ngào, tuyệt vời cho những tính đồ hảo ngọt.</p>
        <a href="shop.php?trang=1&id_loai=1" class="btn btn-primary">Go somewhere</a>
     
    </div>
  </div>
</div>
						
						</div>
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <img src="hinh_anh/bm_1.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bánh mặn</h5>
        <p class="card-text">Đa dạng chủng loại từ truyền thống đến sáng tạo, luôn sẵn sàng cho sự lựa chọn của bạn</p>
		<a href="shop.php?trang=1&id_loai=2" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>
</div>
						</div>
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <img src="hinh_anh/bc_3.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bánh cưới</h5>
        <p class="card-text">Với nhiều thiết kế sáng tạo và mới lạ, mỗi chiếc bánh cưới là một kiệt tác trong ngày trọng đại</p>
		<a href="shop.php?trang=1&id_loai=3" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>
</div>
						</div>
						<div class="w-100"></div>
						<br>
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <img src="hinh_anh/cupcakes_1.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cupcakes</h5>
        <p class="card-text">Mềm mịn, béo ngọt và tươi mới, chính là những chiếc cupcakes mini của chúng tôi.</p>
		<a href="shop.php?trang=1&id_loai=4" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>
</div>
						</div>
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <img src="hinh_anh/sw_1.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sandwich</h5>
        <p class="card-text">Đa dạng từ các loại từ truyền thống đến sáng tạo, luôn sẵn sàng cho sự lựa chọn của bạn.</p>
		<a href="shop.php?trang=1&id_loai=5" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>
</div>
						</div>
						<div class="col">
						<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <img src="hinh_anh/tonghop_1.jpg" height='200px' width='200px' class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tổng hợp</h5>
        <p class="card-text">Sản phẩm gồm nhiều loại khác nhau, có nhiều lựa chọn cho mọi người.</p>
		<a href="shop.php?trang=1&id_loai=6" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>
</div>
						</div>
					</div>
				</div>

        		</div>
        	</div>
        </section>
</div>		
       

  
        
      
      
        
      
       
        
       
        
      
		 <section class="newsletter_area">
        	<div class="container">
        		<div class="row newsletter_inner">
        			<div class="col-lg-6">
        				<div class="news_left_text">
        					<h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="newsletter_form">
							<div class="input-group">
								<input type="text" class="form-control" id="email" placeholder="Enter your email address">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" id="submit" type="button">Subscribe Now</button>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Newsletter Area =================-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript">
 $(document).ready(function()
 {
 $("#submit").click(function()
 {
    var email=$("#email").val();
      $.post("sendEmail.php",
      {email:email},
                function(data)
                {
					
	$(document).ready(function()
	{
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
      
    });
alert(data);
		        });
  });
}); 
</script>

      
        <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="img/logo-new.png" alt="" width="220px" heigh="220px">
        						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Your Account</a></li>
        							<li><a href="#">View Order</a></li>
        							<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>0123456789</h4>
        						<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
        						<h5>abc@abc.com</h5>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
            
        
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

	  <form id="dangnhap" method='POST'>
	  <span id="message"></span>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">UserName:</label>
            <input type="text" class="form-control" id="txtUsername"  name="txtUsername" placeholder="UserName">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="txtPassword" name="txtPassword"  placeholder="Password">
          </div>

      
      </div>
      <div class="modal-footer">
        <a href="dangky.php"><button type="button" class="btn btn-secondary"  >Đăng Ký</button></a>
        <button type="submit"  value="submit"  id="dangnhap" name="dangnhap" class="btn btn-primary">Đăng Nhập</button>
      </div>
	  </form>
	  
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function()
{
 $('#dangnhap').on('submit', function(event)
 {
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"DangNhap.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
	{
		if(data.error != '')
		{
			
		$('#dangnhap')[0].reset();
		$('#message').html(data.error);
		
		}
		else
		{
			location.reload();
		}
		
	}
  })
 });

});
</script>

</div>


