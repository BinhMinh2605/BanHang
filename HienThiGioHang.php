
<?php
 
include("ketnoi.php");
include("thuvien.php");
include("menu.php");
?>


    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
 
    var div = $('#message');
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() 
	{
        var p = $(window).scrollTop();
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
    });
});
</script>     
      
        <section class="cart_table_area p_100">
        	<div class="container">
			<div id="message"></div>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col"></th>
							</tr>
						</thead>
				
        <?php 
$total = 0;
$user =$_SESSION['username'];
$tv="SELECT giohang.id,giohang.id_banh,tenSP,Gia,HinhAnh, id_banh, sl FROM sanpham,giohang WHERE sanpham.id=giohang.id_banh and giohang.username='$user' ";
$tv_1=mysqli_query($conn,$tv);
    if($tv_1->num_rows > 0)
{
    while($tv_2=$tv_1->fetch_assoc() )
    {?>
    		<tbody>
							<tr>
								<td>
        
        <a href="ThongTinSP.php?products=<?php echo $tv_2['tenSP'];?>&id=<?php echo $tv_2['id_banh'];?> "
        data-toggle="tooltip"  data-placement="right" title="<?php echo $tv_2['tenSP'];?>" />
      <?php $link_anh="hinh_anh/".$tv_2['HinhAnh'];
      echo "<img src='$link_anh' width='100px'height='100px'  >";?>
								</td>
								<td> <?php echo $tv_2['tenSP'];?></td>
								<td><?php echo "$";?><?php echo $tv_2['Gia']; ?></td>
								<td>
            <select id="<?php echo $tv_2['id_banh']; ?> ">
       <option <?php if($tv_2["sl"]==1) echo "selected";?>
       value="1">1</option>
       <option <?php if($tv_2["sl"]==2) echo "selected";?>
       value="2">2</option>
       <option <?php if($tv_2["sl"]==3) echo "selected";?>
       value="3">3</option>
       <option <?php if($tv_2["sl"]==4) echo "selected";?>
       value="4">4</option>
       <option <?php if($tv_2["sl"]==5) echo "selected";?>
       value="5">5</option>
        </select>
								</td>
								<td><?php echo "$";?><?php echo  (int)$tv_2["Gia"] *  (int)$tv_2["sl"];
        $total += (int)$tv_2["Gia"] *  (int)$tv_2["sl"];?>
                </td>
								<td> 
								<a href="XoaSP.php?id=<?php echo $tv_2["id_banh"] ;?>">X
		</td> 
          </tr>
		 	  
		  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function()
{
	  $('select').on('change', function() 
	  { 
       	var value_category = $(this).find("option:selected").val();
           var id = $(this).attr('id');
	  	$.ajax({
			type:"POST", 
			url: "cart_update.php", 
			dataType:"JSON", 
			data:{value: value_category, id:id},
			success: function(result)
            {
				if(result.error != '')
				{
					$("html, body").animate({ scrollTop: 0 }, "slow");
				$('#message').html(result.error);
				console.log(result);
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
              <?php
    }
  }
  ?>
</div>



              <tr>
								<td>
									<form class="form-inline"> 
										<div class="form-group"> 
                   <h4> Total:	<?php echo "$";?><?php echo $total;?></h4>
										</div>
									
									</form>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td> 
								<td>


								
									<a class="pest_btn" href="ThongTinGiaoHang.php" id="add" name="add">Add To Cart</a>
								
								</td>
							</tr>
              
              
						</tbody>
					</table>
				</div>
       	
        			</div>
        		</div>
        	</div>
        </section>
       
      <?php include("menu-cuoi.php");?>