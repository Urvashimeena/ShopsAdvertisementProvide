<?php

session_start();
$email=$_SESSION["email"];
$s_name=$_SESSION["name"];
require 'conn.php';

      
        $product_name = $_REQUEST["product_name"];
        $description  = $_REQUEST["description"];
       $buy_n  = $_REQUEST["buy_n"];
        $get_n  = $_REQUEST["get_n"];
        $product_img  =  $_FILES["productimage"]["name"];

        $temp_product_img=$_FILES["productimage"]["tmp_name"];
      

        $query="select * from shop where e_mail='$email'";

        $res=mysqli_query($conn,$query);
      
        $row= mysqli_fetch_array($res);
        
        $shop_name=$row["shop_name"];
        $shop_code=$row["shop_code"];
        $discount=($get_n/($buy_n+$get_n))*100;
      
       $p=3;
        $queryl="insert into shop_add(p,shop_code,shop_name,product_name,product_discription,buy_n,get_n,product_image,discount)
        values('$p','$shop_code','$shop_name','$product_name','$description','$buy_n','$get_n','$product_img','$discount')";
         $rs1 =  mysqli_query($conn,$queryl);
         move_uploaded_file($temp_product_img,"uploadimages/$s_name/$product_img");
         
         
       
            if($rs1!=false)
            {
                
             "successfull insert";
              $_SESSION["shopcode"]= $row["shop_code"];
              $_SESSION["product_name"]=$product_name;
              $_SESSION["description"]=$description;
              $_SESSION["buy_n"]=$buy_n;
              $_SESSION["get_n"]=$get_n;
              $_SESSION["oo"]=false;
              $_SESSION["aa"]=$row1["p"];
     
              $_SESSION["no"]=$no;
             header('location:showadvertisement.php');
            }
            else if($rs1!=false)
            {
              $_SESSION["oo"]=true;
              header('location:showadvertisement.php');
            }
            else
            {
                   echo " Error:  ";
            }
            //$conn->close();



    

