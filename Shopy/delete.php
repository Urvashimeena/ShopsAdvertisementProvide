<?php
session_start();

require 'conn.php';
$shop_code = $_SESSION["shopcode"];

$query="DELETE FROM shop_add WHERE shop_code = $shop_code";

$result= mysqli_query($conn, $query);
var_dump($result);
if($result==true)
{
   header('location:Advertisement.php');
}