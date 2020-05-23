<?php 
session_start();
include("ketnoi.php");


           
                
            $error = '';
            $title = '';
            $content = '';
            $rate='';

            if(isset($_SESSION['username']))
            {
                $user=$_SESSION['username'];
                
                if(empty($_POST['content']) || empty($_POST['radio']) || empty($_POST['title'] ))
                {
                    $error .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> Không được bỏ trống.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
                else
                {
                    $title = $_POST['title'];
                   
                    $content = $_POST['content'];
                   
                    $rate = $_POST['radio'];
                   
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
            }

           

            if($error == '')
            {

              $conn->query("INSERT INTO binhluan_danhgia (id_sp,username,tieude,noidung,rating,thoigian)  
              VALUE ('$id','$user','$title','$content','$rate',NOW())");
            $error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Notification!</strong> Thêm đánh giá thành công.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }

            $data = array('error'  => $error);

            echo json_encode($data);
