<?php 
include "connect.php";

$id = $_POST['id'];
$jmlh_kantongdarah = $_POST['jmlh_kantongdarah'];

$sql = "UPDATE tabel_stokdarah_za 
SET stock_b = stock_b - $jmlh_kantongdarah";
if(mysqli_query($con, $sql)){
  header("Location:dashboard.php");
}else{
  print("gagal");
}

?>