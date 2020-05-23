<?php include("thuvien.php");?>
<?php include("menu.php");?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
 
 </head>
 <body>
</html>

      
   
        <section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row m0 product_task_bar"> 
							<div class="product_task_inner"> 
							
								<div class="float-right">
									<h4>Sort by :</h4>
									<select >
										<option data-display="Default">Default</option>
										<option value="Price descending">Price descending</option>
										<option value="Price increase">Price increase</option>
									
									</select>

<script>
$(document).ready(function(){
	  $('select').on('change', function() { // bắt sự kiện khi có tác động vào select
       	var value_category = $(this).find("option:selected").val();
	  	$.ajax({
			type:"POST", // phương thức gửi dữ liệu, có thể dùng GET
			url: "locSP.php",  // link tới file xử lý
			data:{value: value_category},// tham số truyền vào value là giá trị của select vừa lấy bên trên
			success: function(result)
            {
				$('#display_comment').html(result);
				//alert(result);
			}
		})
	 });
});
</script>	
								</div>
							</div>
						</div>	
						<div id="sp"> <div id="display_comment">		
        				<div class="row product_item_inner">
								<?php
								include("ketnoi.php");
								
						$soSPTrong1Trang=6;
						$trang=$_GET["trang"];
						settype($trang,"int");
						
						$from=($trang-1)*$soSPTrong1Trang;
						if(!empty($_GET['id_loai']))
						{
							$id_loai=$_GET['id_loai'];
						$tv="SELECT tenSP,Gia,HinhAnh, id FROM sanpham where thuoc_loai='$id_loai' ";
						$tv_1=mysqli_query($conn,$tv);
							if($tv_1->num_rows > 0)
						{
							while($tv_2=$tv_1->fetch_assoc() )
							{	?>			
													<div class="col-lg-4 col-md-4 col-6">
														<div class="cake_feature_item">
															
								<a href="ThongTinSP.php?products=<?php echo $tv_2['tenSP'];?>&id=<?php echo $tv_2['id'];?> "
								data-toggle="tooltip"  data-placement="right" title="<?php echo $tv_2['tenSP'];?>" >
							  <?php $link_anh="hinh_anh/".$tv_2['HinhAnh'];
							  echo "<img src='$link_anh' width='270px'height='270px' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0'       >";?>
									</a>						
															
			<h4><?php echo $tv_2['tenSP']; ?> </h4>
			<p style="font-size:20px"><b><h4><?php echo "$";?><?php echo $tv_2['Gia'] ?></h4></b></p>
														</div>
													</div>
													<?php
							}
						}
					}
					else
					{
						
						$tv="SELECT tenSP,Gia,HinhAnh, id FROM sanpham  LIMIT $from, $soSPTrong1Trang";
						$tv_1=mysqli_query($conn,$tv);
							if($tv_1->num_rows > 0)
						{
							while($tv_2=$tv_1->fetch_assoc() )
							{	?>			
													<div class="col-lg-4 col-md-4 col-6">
														<div class="cake_feature_item">
															
								<a href="ThongTinSP.php?products=<?php echo $tv_2['tenSP'];?>&id=<?php echo $tv_2['id'];?> "
								data-toggle="tooltip"  data-placement="right" title="<?php echo $tv_2['tenSP'];?>" >
							  <?php $link_anh="hinh_anh/".$tv_2['HinhAnh'];
							  echo "<img src='$link_anh' width='270px'height='270px' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0'       >";?>
									</a>						
															
			<h4><?php echo $tv_2['tenSP']; ?> </h4>
			<p style="font-size:20px"><b><h4><?php echo "$";?><?php echo $tv_2['Gia'] ?></h4></b></p>
														</div>
													</div>
					<?php
					}
					}
					}
						?> 
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
					</div>
					</div>	
        				</div>
        				<div class="product_pagination">
        					<div class="left_btn">
        						<a href="shop.php?trang=<?php echo $trang+1;?>"><i class="lnr lnr-arrow-left"></i> New posts</a>
        					</div>
        					<div class="middle_list">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
									<?php if($trang==1)
									{
										?>
										<li class="page-item active"><a class="page-link" href="shop.php?trang=1">1</a></li>
									<li class="page-item"><a class="page-link" href="shop.php?trang=2">2</a></li>
									<li class="page-item"><a class="page-link" href="shop.php?trang=3">3</a></li>
									<?php
									}
									elseif($trang==2)
									{?>
									<li class="page-item"><a class="page-link" href="shop.php?trang=1">1</a></li>
									<li class="page-item active"><a class="page-link" href="shop.php?trang=2">2</a></li>
									<li class="page-item"><a class="page-link" href="shop.php?trang=3">3</a></li>
									<?php
									}
									elseif($trang==3)
									{
										?>
										<li class="page-item"><a class="page-link" href="shop.php?trang=1">1</a></li>
										<li class="page-item"><a class="page-link" href="shop.php?trang=2">2</a></li>
										<li class="page-item active"><a class="page-link" href="shop.php?trang=3">3</a></li>
									<?php
									}
									?>
									</ul>
								</nav>
        					</div>
        					<div class="right_btn"><a href="shop.php?trang=<?php echo $trang-1;?>">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar search_widget">
        						<div class="input-group">
								
									<input type="text" class="form-control" data-provide="typeahead"  name="tensp" id="tensp" placeholder="Enter Search Keywords" autocomplete="off">
									<div class="input-group-append">
										<button class="btn" id="serch"  type="button"><i class="icon icon-Search"></i></button>
									</div>
								</div>
        					</aside>
        				
	

						
<script>
 $(document).ready(function()
 {
 $("#serch").click(function()
 {
    var tensp=$("#tensp").val();
      $.post("timSP.php",
      {tensp:tensp},
                function(data)
                {
					$('#sp').html(data);
					//console.log(data);
		        });
  });
});
</script>
<script>
$(document).ready(function(){
 
 $('#tensp').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"goiySP.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>
			
        					<aside class="left_sidebar p_sale_widget">
        						<div class="p_w_title">
        							<h3>Hot products</h3>
								</div>
	<?php 
	 $sql3="SELECT  DISTINCT max(binhluan_danhgia.rating) as'rating' ,sanpham.id, sanpham.tenSP, sanpham.Gia, sanpham.HinhAnh 
	 FROM sanpham,binhluan_danhgia where binhluan_danhgia.id_sp=sanpham.id group by(binhluan_danhgia.id_sp) ORDER BY rating DESC";  
	 $result3 = mysqli_query($conn, $sql3);
		 if($result3->num_rows > 0)
			 {
				  while ( $data3 = $result3->fetch_assoc() ) 
					  { 
	?>
        						<div class="media">
        							<div class="d-flex">
		<a href="ThongTinSP.php?products=<?php echo $data3['tenSP']?>&id=<?php echo $data3['id']?> "
        data-toggle="tooltip"  data-placement="right" title="<?php echo $data3['tenSP']?>">
		<?php $link_anh="hinh_anh/".$data3['HinhAnh']; echo "<img src='$link_anh' width='100px'height='100px'  >";?>
        							</div>
        							<div class="media-body">
        								<a href="ThongTinSP.php?products=<?php echo $data3['tenSP']?>&id=<?php echo $data3['id']?> "><h4><?php echo $data3['tenSP'];?></h4></a>
        								<ul class="list_style">
											<?php 
											if($data3['rating']==5)
											{
											?>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<?php
											}
											elseif ($data3['rating']==4)
											{
											?>
											
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											
											<?php
											}
											elseif ($data3['rating']==3)
											{
											?>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<?php
											}
											elseif ($data3['rating']==2)
											{
											?>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<?php
											}
											elseif ($data3['rating']==1)
											{
											?>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<?php
											}
													
											?>
											
        								
        								</ul>
        								<h5><?php echo '$';?><?php echo $data3['Gia'];?></h5>
        							</div>
        						</div>
		<?php
					  }
					}
					?>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
		</section>
		
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