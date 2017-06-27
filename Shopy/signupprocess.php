 <?php
        require "conn.php";
        $s_name = $_REQUEST["name"];
        $shop_name = $_REQUEST["shopname"];
        $shop_type = $_POST["thenumbers"];
        $address = $_REQUEST["address"];
        $landmark = $_REQUEST["landmark"];
        $mob = $_REQUEST["number"];
        $shop_img =$_FILES["shopimage"]["name"];
        echo $shop_type;
        $adhar_img = $_FILES["identity"]["name"];
        $opn_tm = $_REQUEST["openingtime"];
        $cls_tm = $_REQUEST["closingtime"];
        $email = $_REQUEST["email"];
        $user_password = $_REQUEST["password"];
        $shopkeeper_image = $_FILES["image"]["name"];
        $gender = $_REQUEST["gender"];
        $date = $_REQUEST["date"];
        
        $temp_shop_img=$_FILES["shopimage"]["tmp_name"];
        $temp_shopkeeper_image=$_FILES["image"]["tmp_name"];
        $temp_adhar_img=$_FILES["identity"]["tmp_name"];
        
        
        
        
        
        
        $query="insert into shop(shopkeeper_name,gender,shopkeeper_image,shop_name,shop_type,shop_address,landmark,mobile_number,
            shop_image,adhar_image,opening_time,closing_time,e_mail,password,date)
        values('$s_name','$gender','$shopkeeper_image','$shop_name','$shop_type','$address','$landmark','$mob','$shop_img',"
                . "'$adhar_img','$opn_tm','$cls_tm','$email','$user_password','$date')";
        
            $rs=  mysqli_query($conn,$query);
            
            mkdir("uploadimages/$s_name");  
            move_uploaded_file($temp_shopkeeper_image,"uploadimages/$s_name/$shopkeeper_image");
         
            move_uploaded_file($temp_adhar_img,"uploadimages/$s_name/$adhar_img");
            
            move_uploaded_file($temp_shop_img,"uploadimages/$s_name/$shop_img");
            
           
            
            if($rs!=false)
            {
              echo "successfull insert";
              header('location:signup.html');
            }
            else
            {
                   echo " Error:  " . $mysql_qry . "<br>" .  $conn->error;
            }
            $conn->close();
        ?>