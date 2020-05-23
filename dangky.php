<?php
include("thuvien.php");
include("menu.php");?>
     
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
            
                <div class="row">
                	<div class="col-lg-12">
               	    	<div class="main_title">
               	    		<h2>Billing Details</h2>
               	    	</div>
                		<div class="billing_form_area">
						<form action="XuLi.php" method="POST">
								<div class="form-group col-md-6">
								    <label for="first">User Name *</label>
									<input type="text" class="form-control" id="UserName" name="UserName" placeholder="User Name">
								</div>
								<div class="form-group col-md-6">
								    <label for="last">Password *</label>
									<input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
								</div>
								<div class="form-group col-md-6">
								    <label for="company">Full Name</label>
									<input type="text" class="form-control" id="FullName" name="FullName" placeholder="FullName">
								</div>
								<div class="form-group col-md-6">
								    <label for="address">Address *</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
								</div>
								
							
								
                                
								<div class="form-group col-md-6">
								    <label for="phone">Phone *</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Select an option">
								</div>
                            
                                <div class="form-group col-md-6">
									
									<button class="btn btn-primary" type="submit">Đăng ký</button>
                                </div>
                                
							</form>
                		</div>
                	</div>
                </div>
            </div>
        </section>

	<?php include("menu-cuoi.php");?>


