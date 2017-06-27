<?php

require './conn.php';

$search=$_REQUEST["search"];
$str=$_REQUEST["name"];
echo $search;
 if($search =='Product_Name')    
 {
     header("location:productsearch.php?str=$str&& search=$search");
 }
 else if($search=='Shop_Code')
 { 
          $query="select * from shop where shop_code='$str'";
            $res= mysqli_query($conn, $query);
          $row= mysqli_fetch_assoc($res);
          $bb=$row["shopkeeper_name"];
          header("location:single.php?aa=$str && bb=$bb");
          
 }
 else if($search=='landmark' || $search='Shop_Name')
{
       
         header("location:shopsearch.php?str=$str&& search=$search");
     
 }



  


