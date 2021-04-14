<?php
$dbHost = "localhost";
$dbUser = "id16594880_ccad";
$dbPass = ")OfP(Q+4#X_v$+58";
$dbName = "id16594880_ccaasda";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($conn){
    $setLang = mysqli_query($conn, "SET NAMES 'utf8'");
}else{
    die("Kiểm tra kết nối lại!!! kết nối thất bại!".mysqli_connect_error());
}
?>