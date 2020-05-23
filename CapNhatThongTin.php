<?php
session_start(); 
include("ketnoi.php");

if(isset( $_SESSION['username']))
{
    $first=$_POST['first'];
    echo $first;
    $address=$_POST['address'];
    echo $address;
    $user =$_SESSION['username'];
    echo $user;
    $phone=$_POST['phone'];
    echo $phone;

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM thanhvien where username='$user' ")) > 0)
    {
        $conn->query("UPDATE thanhvien SET fullname='$first' ,  diachi='$address' , sdt='$phone' WHERE username='$user'");
    }
}
else
{
    echo "vui long dang nhap";
}
 ?>


