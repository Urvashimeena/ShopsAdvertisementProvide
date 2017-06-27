<?php


 require './conn.php';  
 $image=$_POST["image"];
 $shop_code=$_POST["shopcode"];
$query="UPDATE shop set adhar_image='$image' WHERE  shop_code='$shop_code'";
$rs=mysqli_query($conn, $query) ;
        if($rs==true)
        {
             header("location:Editprofile.php");
             
        }
  
?>

