<?php
session_start();
$user =$_SESSION['username']; 
include("ketnoi.php");

if(!empty($_POST['toal']) || !empty($_POST['ship']))
                    {
                        $toal=$_POST['toal'];
                        $ship=$_POST['ship'];
                   
                    }

    if(empty($_POST['first']) || empty($_POST['address']) || empty($_POST['phone']))
    {
        $sql3="SELECT fullname,sdt,diachi FROM thanhvien where username='$user' ";  
        $result3 = mysqli_query($conn, $sql3);
            if($result3->num_rows > 0)
                {
                     while ( $data3 = $result3->fetch_assoc() ) 
                         {
                             $first=$data3['fullname'];
                             $address=$data3['diachi'];
                             $phone=$data3['sdt'];
                         }
                }
                $sql1="INSERT INTO donhang (username,nguoi_nhan,sdt,diachi,ngaymua,tien_ship,tongtien,tinhtrang)VALUE('$user','$first','$phone','$address',now(),'$ship','$toal','1')";  
        if ($conn->query($sql1) === TRUE) 
        {
            $id = $conn->insert_id;
            echo  $id;   
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }      
    }
else
{
    echo "e";
}
 
     

  
    $sql3="SELECT giohang.sl, giohang.id_banh from giohang where giohang.username='$user' ";  
    $result3 = mysqli_query($conn, $sql3);
        if($result3->num_rows > 0)
            {
                 while ( $data3 = $result3->fetch_assoc() ) 
                     { 
                         $id_banh=$data3["id_banh"];
                        $sl=$data3["sl"];
                        $conn->query("INSERT INTO sp_da_mua (id_donhang,id_banh,sl)VALUE('$id','$id_banh','$sl')"); 
                     }
            }
          
             
           
            
?>