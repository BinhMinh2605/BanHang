<?php
			include("ketnoi.php");
			include("thuvien.php");
			include("menu.php");
?>

    
   

        <?php
            if(isset( $_SESSION['username']))
            {
              $user =$_SESSION['username'];
                $sql3="SELECT fullname,sdt,diachi FROM thanhvien where username='$user' ";  
                $result3 = mysqli_query($conn, $sql3);
                    if($result3->num_rows > 0)
                        {
                             while ( $data3 = $result3->fetch_assoc() ) 
                                 { ?>
                               
                 
                               
 <section class="welcome_bakery_area">
        	<div class="container">
        		<div class="cake_feature_inner">
       
        <section class="billing_details_area p_100">
            <div class="container">
                <div class="row">

                	<div class="col-lg-10">
                    <div class="order_box_price">
               	    	<div class="main_title">
               	    		<h2>Information</h2>
                        </div>
           
                		<div class="billing_form_area">
                            <div class="payment_list">
                                        <h2> <?php echo $data3['fullname'];?></h2>
                                        <p>Địa Chỉ: <?php echo $data3['diachi'];?> <br>
                                        Số điện thoại: <?php echo $data3['sdt'];?> </p>    
                                 </p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Edit</button>
                                        <button class="btn btn-primary" type="button" id="dongy">Giao Đến Địa Chỉ Này</button>
                                    </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
        <div class="billing_form_area">
			<div class="form-group col-md-12">
				<label for="first">Full Name *</label>
				    <input type="text" class="form-control" id="first" name="name" placeholder="Full Name" value="<?php echo $data3['fullname'];?>">
            </div>
            
            <div class="form-group col-md-12">
            <label for="address">Address *</label>
					<input type="text" class="form-control" id="address" name="address" placeholder="Street Address" value="<?php echo $data3['diachi']; ?>">
            </div>

            <div class="form-group col-md-12">
			<label for="phone">Phone *</label>
					<input type="text" class="form-control" id="phone" name="phone" placeholder="Select an option" value="<?php echo $data3['sdt']; ?>">
            </div>
            <button class="btn btn-primary" type="button" id="update" >Update</button>
            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">cancel</button> 
        </div>
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
                    </div>
                    </section>
                   
                                <?php
                                 }
                                }
                            }?>
  <script src="https://code.jquery.com/jquery-1.4.2.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
 $("#update").click(function()
 {
   
    var first=$("#first").val();
   var  address=$("#address").val();
   var  phone=$("#phone").val();
      $.post("CapNhatThongTin.php",
      {first:first, address:address,phone:phone},
                function(data,status)
                {
                    if(status=="success" )
                    location.reload();
                    else
                    console.log("loi");
				
		        });
  });
}); 
</script>

<script src="https://code.jquery.com/jquery-1.4.2.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
 $("#dongy").click(function()
 {
   
    var first=$("#first").val();
   var  address=$("#address").val();
   var  phone=$("#phone").val();
      $.post("TaoDonHang.php",
      {first:first, address:address,phone:phone},
                function(data,status)
                {
                    if(status=="success" )
                    location.replace('DonHang.php'); 
                    else
                    console.log("loi");
				
		        });
  });
}); 
</script>


                
        
     
       <?php include("menu-cuoi.php");?>