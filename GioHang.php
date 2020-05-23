<?php



session_start();
include("ketnoi.php");


           
                
            $error = '';
            $quantity = '';
           $id='';
        
            if(isset($_SESSION['username']))
            {
                $user=$_SESSION['username'];
                
                if(empty($_POST['quantity']) )
                {
                    $error .= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> Không được bỏ trống.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                $data = array('error'  => $error);



                }
                else
                {
                    $quantity = $_POST['quantity'];
                    $id=$_POST['idsp'];  
                }

            }
            else
            {
                $error .='
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>ERROR!</strong>Vui lòng đăng nhập.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    $data = array('error'  => $error);

            }

            


if($error=='')
{
  
  if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM giohang where username='$user' and id_banh='$id'")) > 0)
  {
      $conn->query("UPDATE giohang SET sl= $quantity WHERE id_banh='$id'");
      $error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Notification!</strong>Cập nhật thành công.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    $data = array('error'  => $error);
  }
  
  else
  {
  $conn->query("INSERT INTO giohang (username,id_banh,sl)VALUE ('$user','$id','$quantity' )");
  
  $error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Notification!</strong>Thêm sản phẩm thành công.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$data = array('error'  => $error);

  }
}
echo json_encode($data);




