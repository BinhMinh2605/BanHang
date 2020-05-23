<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "banhang");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM sanpham WHERE tenSP LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["tenSP"];
 }
 echo json_encode($data);
}

?>


