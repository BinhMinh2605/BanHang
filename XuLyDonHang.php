<?php
session_start(); 
include("ketnoi.php");

if(isset( $_SESSION['username']))
{
    $maDH=1;
    $toal=$_POST['toal'];
$id=$_POST['id'];
    $user =$_SESSION['username'];
    
    if (mysqli_num_rows(mysqli_query($conn, "SELECT maDH FROM donhang ")) > 0) //da ton tai
    {
        $maDH=$maDH+1;
    $conn->query("INSERT INTO donhang (maDH,username,id_sp,ngaymua,tinhtrang,tongtien)VALUE ('$maDH,'$user','$id',now(),'1','$toal' )");
    }
    else
    {
        $conn->query("INSERT INTO donhang (maDH,username,id_sp,ngaymua,tinhtrang,tongtien)VALUE ('$maDH,'$user','$id',now(),'1','$toal' )");
    }
}
else
{
    echo "vui long dang nhap";
}
 


