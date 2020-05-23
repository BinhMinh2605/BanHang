<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</html>

<?php
  session_start(); 
 
     
    //Nhúng file kết nối với database
    include('KetNoi.php');
   
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['UserName']);
    $password   = addslashes($_POST['Password']);
    $fullname   = addslashes($_POST['FullName']);
    $sdt   = addslashes($_POST['phone']);
    $diachi        = addslashes($_POST['address']);
       
  
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password  || !$fullname || !$sdt || !$diachi)
    {
        ?>

<div class="container">
     <div class="row">
        <div class="col-md-12 login-sec" > 
            <div class="alert alert-success" role="alert">
            Vui lòng nhập đầy đủ thông tin với trang <a href="dangky.php" class="alert-link">đăng ký</a>. Mời bạn trở về!
        </div>
            </div>
          </div>
     </div>
</div>            
    <?php

        exit;
    }
      
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM thanhvien WHERE username = '$username' or password = '$password' ")) > 0)
    {
        

?>
      <div class="container">
     <div class="row">
        <div class="col-md-12 login-sec" > 
            <div class="alert alert-success" role="alert">
           Tên email đã tồn tại . Mời bạn đăng ký lại với một tên khác! <a href="dangky.php" class="alert-link">đăng ký</a>
        </div>
            </div>
          </div>
     </div>
</div>
       <?php  
        
        // Dừng chương trình
        die ();
    }
    else { 
    //Lưu thông tin thành viên vào bảng
    @$addmember =" INSERT INTO thanhvien (
            username,
            password,
            fullname,
            diachi,
            sdt
        )
        VALUE (
            '$username',
            '$password',
           
            '$fullname',
            '$diachi',
            '$sdt')";
                          
    //Thông báo quá trình lưu
    if ($conn->query($addmember) == TRUE)
    {
    
        header('Location: index.php');
    }
    else
    {
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='DangKy.php'>Thử lại</a>";
    }
}
?>

