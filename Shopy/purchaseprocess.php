<?php

session_start();
$email=$_SESSION["email"];
$s_name=$_SESSION["name"];
require 'conn.php';

       $p=1;
        $product_name=$_REQUEST["productname"];
        $description=$_REQUEST["description"];
        $shop_rs=$_REQUEST["shoprs"];
        $get_rs=$_REQUEST["getrs"];
        $product_img = $_FILES["image"]["name"];

        $temp_product_img=$_FILES["image"]["tmp_name"];
        $discount=($get_rs/$shop_rs)*100;

        $query="select * from shop where e_mail='$email'";

        $res=mysqli_query($conn,$query);
      
        $row= mysqli_fetch_array($res);
        
        $shop_name=$row["shop_name"];
        $shop_code=$row["shop_code"];
       
       echo  $queryl="insert into shop_add(p,shop_code,shop_name,product_name,product_discription,shop_rs,get_rs,discount,product_image)
          values('$p','$shop_code','$shop_name','$product_name','$description','$shop_rs','$get_rs','$discount','$product_img')";
        
          
             

              $rs1 =  mysqli_query($conn,$queryl);
              var_dump($rs1);
              move_uploaded_file($temp_product_img,"uploadimages/$s_name/$product_img");
              
          
       
         
       
       
            if($rs1!=false)
            {
                
              echo "successfull insert";
              $_SESSION["shopcode"]= $row["shop_code"];
              $_SESSION["product_name"]=$product_name;
              $_SESSION["description"]=$description;
              $_SESSION["shprs"]=$shop_rs;
              $_SESSION["getrs"]=$get_rs;
              $_SESSION["discount"]=$discount;
              $_SESSION["oo"]=false;
              $_SESSION["aa"]=$row1["p"];
              //$_SESSION["no"]=$no;
            
            header('location:showadvertisement.php');
            }
            else if($rs1!=false && $no>5)
            {
              $_SESSION["oo"]=true;
               header('location:showadvertisement.php');
            }
            else
            {
                   echo " Error:  ";
            }
            
      

           // $conn->close();


    

