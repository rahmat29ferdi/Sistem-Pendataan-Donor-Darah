<?php 
include "connect.php";

$id = $_POST['id'];
$jmlh_kantongdarah = $_POST['jmlh_kantongdarah'];

$sql = "UPDATE tabel_stokdarah_za 
SET stock_a = stock_a - $jmlh_kantongdarah";
if(mysqli_query($con, $sql)){
  header("Location:dashboard.php");
}else{
  print("gagal");
}

?>