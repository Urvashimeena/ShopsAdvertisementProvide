<?php

session_start();

require 'conn.php';


$aa=$_GET['aa'];

$query="DELETE FROM shop_add WHERE aa = '$aa'";

$result= mysqli_query($conn, $query);

if($result==true)
{

 header('location:showadvertisement.php');
}
    
?>
