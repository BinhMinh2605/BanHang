<!DOCTYPE html>
<html>
<head>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php include("thuvien.php");?>
<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+123456789"><i class="fa fa-phone" aria-hidden="true"></i> 0123456789</a>
						<a href="mainto:abc@abc.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> abc@abc.com</a>
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
	
	<a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-user" ></i></a>
									
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
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
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
											<li><a href="TheoDoi.php">Checkout Page</a></li>
									</ul>
								</li>
								<?php
										}
										?>
											<li><a href="contact.html">Contact Us</a></li>
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

    
<style>
    .bs-example{
    	margin: 50px;
        position: relative;
	
		left: 0;
  max-width: 100%;
  overflow: visible;
  position: fixed !important;
  top: 0;
  width: 100%;
  z-index: 1000;
 
		
    }
</style>

<script>
$(document).ready(function() {
 
    var div = $('#comment_message');
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() 
	{
        var p = $(window).scrollTop();
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
    });
});
</script>



					



        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
        	<div class="container">
			<span id="comment_message"></span>
				<div id="sl_message"></div>
        		<div class="row product_d_price">
        			<div class="col-lg-6">
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

                    <?php
							include("ketnoi.php");
							$id=$_GET['id']; 
							$r="SELECT tenSP,Gia,HinhAnh,GioiThieu, thuoc_loai FROM sanpham WHERE id='$id' ";
							$sql3 = mysqli_query($conn,$r);
							if($sql3->num_rows > 0)
							{ 
								while ( $data= $sql3->fetch_assoc() ) 
								{
							$id_loai=$data['thuoc_loai'];	
							?>
								<br>
								<br>
								<br>
						
		<div class="product_img">
		<div class="thumbnail"><?php   $link_anh="hinh_anh/".$data['HinhAnh'];echo "<img src='$link_anh' width='350px'height='300px'  >";?></div></div>
        </div>
        			<div class="col-lg-6">
        				<div class="product_details_text">                        
                    <h4><?php echo  $data['tenSP']; ?></h4>
						<p><?php echo $data['GioiThieu']; ?></p>
						<h5>Price :<span><?php echo "$";?><?php echo $data['Gia']; ?></span></h5>	
        					<div class="quantity_box">
							<form method="POST" id="sl_form">
    							<div class="form-group">
        						<label for="quantity">Quantity :</label>
								<input type="text" placeholder="0" name="quantity" id="quantity">
								</div>
								</div>	
							
								<div class="form-group">
					<input type="hidden" name="idsp" id="idsp" value="<?php echo $id; ?>"placeholder="Name" /> 
                            <input type="submit"  class="pink_more" id="add_to_cart" name="add_to_cart" value="Đăng">
							</div>
							</form>
						
						</div>
        			</div>
				</div>

				<?php 			
						$r="SELECT count(*) 'sl' FROM binhluan_danhgia WHERE id_sp='$id' ";
							$sql3 = mysqli_query($conn,$r);
							if($sql3->num_rows > 0)
							{ 
								while ( $data= $sql3->fetch_assoc() ) 
								{
									?>
        		<div class="product_tab_area">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Review (<?php echo $data['sl'];?>)</a>
						</div>
					</nav>
					<?php
								}
							}
					?>
					<div class="tab-content" id="nav-tabContent">

						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						
        
								<h3 class="cm_title_br">Comments 4</h3>
								<div class="s_comment_list_inner">
						   
        		<div class="order_now_inner">
				<form method="POST" id="comment_form">
				<div class="form-group">
					<div id="star">
                    <input class="star star-5" type="radio" name="radio" id="5" value="5" > 
					<label class="star star-5" for="5"></label>

                    <input class="star star-4" type="radio" name="radio" id="4" value="4" > 
					<label class="star star-4" for="4"></label>

                    <input class="star star-3" type="radio" name="radio" id="3" value="3" > 
					<label class="star star-3" for="3"></label>

                    <input class="star star-2" type="radio" name="radio" id="2" value="2" > 
					<label class="star star-2" for="2"></label>

                    <input class="star star-1" type="radio" name="radio" id="1" value="1" >
					<label class="star star-1" for="1"></label>
					 </div>
								</div>
<style>
input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 20px;
  color: #444;

}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;

}
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
				</div>
				<div class="form-group">
					<input type='text' class="form-control" name="title" id="title" placeholder="Title">
</div>
<div class="form-group">
					<textarea class="form-control" name="content" id="content" rows="1" placeholder="Content"></textarea>
</div>
<div class="form-group">			
					<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"placeholder="Name" /> 
					<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
</div>
</div>
</form>

<br /><div id="display_comment"></div>
<!----------xuat comment-->
		
			</div>
			</div>

</div>
</dvi>
		</section>
		
	
       
        <?php
                                }
                            }
                            ?>


<style>
	.thumbnail {
    width: 500px;
    height: 300px;
    overflow: hidden;
    border: 1px solid #e5e5e5;
}

.thumbnail img {
    width: 100%;
    height: 100%;
    transition-duration: 0.3s;
}

.thumbnail img:hover {
    transform: scale(1.2);
}
</style>

<script type="text/javascript">
$(document).ready(function()
 {
$('#sl_form').on('submit', function(event){
  event.preventDefault();
  var data = $(this).serialize();
  $.ajax({
   url:"GioHang.php",
   method:"POST",
   data:data,
   dataType:"JSON",
   success:function(data)
	{
		if(data.error != '')
		{
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$('#idsp').val('<?php echo $id; ?>');
		$('#sl_message').html(data.error);
		console.log(data);
		load();
		}
	}
  })
 });

 load();

 function load()
 {
  $.ajax({
   url:"loadGioHang.php",
   method:"POST",
   success:function(data)
   {
    $('#display').html(data);
   }
  })
 }
});
</script>





<script type="text/javascript">
$(document).ready(function()
{
 $('#comment_form').on('submit', function(event)
 {
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"XuLyDanhGia.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
	{
		if(data.error != '')
		{
			$("html, body").animate({ scrollTop: 0 }, "slow");
		$('#comment_form')[0].reset();
		$('#comment_message').html(data.error);
		$('#id').val('<?php echo $id; ?>');
		load_comment();
		}
	}
  })
 });

 load_comment();

 function load_comment()
 {
	 var id= $('#id').val('<?php echo $id; ?>');
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
  data:id,
   success:function(data)
   {
	
    $('#display_comment').html(data);
   }
  })
 }
});
</script>







       
        <section class="similar_product_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Similar Products</h2>
        		</div>
        		<div class="row similar_product_inner">

				<?php
 include("ketnoi.php");
	$sql="SELECT  id,tenSP,Gia,HinhAnh from sanpham where thuoc_loai='$id_loai' ORDER BY RAND () LIMIT 8";
    $sp=mysqli_query($conn,$sql);
    if($sp->num_rows > 0)
	{
    while($data=$sp->fetch_assoc() )
    {
	 ?>	
	<div class="col-lg-3 col-md-4 col-6">
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
        	</div>
        </section>
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
      
     <?php include("menu-cuoi.php");?>




