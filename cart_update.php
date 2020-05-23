<?php

session_start(); 
include("ketnoi.php");


$error = '';
$value_category = '';
$id='';

if(isset($_SESSION['username']))
{
    $user=$_SESSION['username'];
    
    if(empty($_POST['value']) )
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
        $value_category = $_POST['value'];
        $id=$_POST['id'];  
    }

}
else
{
    $error .='
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>ERROR!</strong> Vui lòng đăng nhập.
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
        $conn->query("UPDATE giohang SET sl=$value_category  WHERE id_banh='$id'");
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
    
    }
}

echo json_encode($data);



