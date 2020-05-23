<?php include("ketnoi.php");
$tenSP=$_POST['tensp'];
$tv="SELECT tenSP,Gia,HinhAnh,id FROM sanpham WHERE tenSP like '$tenSP%' ";
$tv_1=mysqli_query($conn,$tv);

    if($tv_1->num_rows > 0)
{
    while($tv_2=$tv_1->fetch_assoc() )
    {	?>			
        					<div class="col-lg-4 col-md-4 col-6">
        						<div class="cake_feature_item">
									
                                <a href="ThongTinSP.php?products=<?php echo $tv_2['tenSP']?>&id=<?php echo $tv_2['id']?> "
        data-toggle="tooltip"  data-placement="right" title="<?php echo $tv_2['tenSP']?>">
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

?><script>
function bigImg(x) {
  x.style.height = "290px";
  x.style.width = "290px";
}

function normalImg(x) {
  x.style.height = "270px";
  x.style.width = "270px";
}
</script>