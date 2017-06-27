<?php

session_start();
$email=$_SESSION["email"];
$s_name=$_SESSION["name"];
require 'conn.php';

      
        $product_name=$_REQUEST["product_name"];
        $description=$_REQUEST["description"];
        $marked_price=$_REQUEST["marked_price"];
        $selling_price=$_REQUEST["selling_price"];
        $product_img = $_FILES["productimage"]["name"];

        $temp_product_img=$_FILES["productimage"]["tmp_name"];
        $discount=(($marked_price-$selling_price)/$marked_price)*100;

        $query="select * from shop where e_mail='$email'";

        $res=mysqli_query($conn,$query);
      
        $row= mysqli_fetch_array($res);
        
        $shop_name=$row["shop_name"];
        $shop_code=$row["shop_code"];

         $p=2;
       
         echo $queryl="insert into shop_add(p,shop_code,shop_name,product_name,product_discription,marked_price,selling_price,discount,product_image)
         values($p,'$shop_code','$shop_name','$product_name','$description','$marked_price','$selling_price','$discount','$product_img')";
         $rs1 =  mysqli_query($conn,$queryl);
         move_uploaded_file($temp_product_img,"uploadimages/$s_name/$product_img");
      
         
       
             if($rs1!=false)
            
             {
                        echo "successfull insert";
                        $_SESSION["shopcode"]= $row["shop_code"];
                        $_SESSION["product_name"]=$product_name;
                        $_SESSION["description"]=$description;
                        $_SESSION["mrkprice"]=$marked_price;
                        $_SESSION["sprice"]=$selling_price;
                        $_SESSION["discount"]=$discount;
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



    

