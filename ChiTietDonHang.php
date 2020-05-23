                               
<?php
 
 include("ketnoi.php");
 include("thuvien.php");
 include("menu.php");
 ?>
 
         <section class="cart_table_area p_100">
           <div class="container">
       <div id="message"></div>
         <div class="table-responsive">
           <table class="table">
             <thead>
               <tr>
                 <th scope="col"></th>
                 <th scope="col">Product</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">ship</th>
                 <th scope="col">Total</th>
                
               </tr>
             </thead>
         
         <?php 
$id=$_GET['id'];
$sql3="SELECT sanpham.tenSP,sanpham.HinhAnh, sp_da_mua.sl,donhang.tien_ship, donhang.tongtien,sp_da_mua.id_banh FROM sp_da_mua,donhang,sanpham
             where donhang.username='$user' and sp_da_mua.id_donhang=donhang.id and donhang.id='$id'
             and sp_da_mua.id_banh=sanpham.id";  
  $result3 = mysqli_query($conn, $sql3);
  if($result3->num_rows > 0)
      {
           while ( $data3 = $result3->fetch_assoc() ) 
               {?>
         <tbody>
               <tr>
                 <td>
         
         <a href="ThongTinSP.php?products=<?php echo $data3['tenSP'];?>&id=<?php echo $data3['id_banh'];?> "
         data-toggle="tooltip"  data-placement="right" title="<?php echo $data3['tenSP'];?>" />
       <?php $link_anh="hinh_anh/".$data3['HinhAnh'];
       echo "<img src='$link_anh' width='100px'height='100px'  >";?>
                 </td>
                 <td> <?php echo $data3['tenSP'];?></td>
                 <td><?php echo "$";?><?php echo $data3['sl']; ?></td>
                 <td><?php echo "$";?> <?php echo $data3['tien_ship'];?></td>
                  <td><?php echo "$";?> <?php echo $data3['tongtien'];?></td>
                
                
           </tr>
          
       

               <?php
     }
   }
   ?>
 </div>
 
 
 
              
               
             </tbody>
           </table>
         </div>
          
               </div>
             </div>
           </div>
         </section>
        
     