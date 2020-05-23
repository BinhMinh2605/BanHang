<?php 
session_start(); 
include("ketnoi.php");
$id=$_GET['id'];

if(isset( $_SESSION['username']))
{
    $user =$_SESSION['username'];
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM giohang where username='$user' and id_banh='$id'")) > 0)
    {
        $conn->query("DELETE FROM  giohang  WHERE id_banh='$id' AND username='$user' ");
        header('Location: HienThiGioHang.php');
       
    }
    else
    {
    
    }
}
else
{
    echo "dang nhap";
}
 


