<?php 
include "connect.php";

$id = $_POST['id'];
$jmlh_kantongdarah = $_POST['jmlh_kantongdarah'];
$stokdarah = $_POST['stokdarah'];
$pakaidarah = $_POST['pakaidarah'];

$sql = "UPDATE tabel_stokdarah_za 
SET stock_b = stock_b - $stokdarah";

$sqls = "UPDATE tabel_stokdarah_za 
SET stock_b = stock_b + $jmlh_kantongdarah";

$sqlkw = "UPDATE tabel_stokdarah_za 
SET stock_b = stock_b - $pakaidarah";


mysqli_query($con, $sql);
mysqli_query($con, $sqls);
mysqli_query($con, $sqlkw);

header("Location:dashboard.php");

?>