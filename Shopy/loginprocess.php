<?php
        
        session_start();
        
        require './conn.php';
      
        $u1=$_REQUEST["email"];
        $p1=$_REQUEST["password"];
        
        $un= strtolower($u1);
        $ps= strtolower($p1);
        
         $query="select * from shop where Lower(e_mail)='$un' and Lower(password)='$ps'";
        
        
         $rs=mysqli_query($conn,$query);
   
         $count= mysqli_num_rows($rs);
   
        $row= mysqli_fetch_assoc($rs);
          
         if(isset($_REQUEST["rm"]))
        {
            setcookie("un",$un,time()+60*60*24*30);
            setcookie("pw",$ps,time()+60*60*24*30);
            
        }
        else
        {
            setcookie("un",$un,time()-60*60*24*30);
            setcookie("pw",$ps,time()-60*60*24*30);
        } 
        if($count>0)
        {
           $_SESSION["isLogin"]=true;
          $_SESSION["name"]= $row["shopkeeper_name"];
          $_SESSION["email"]=$row["e_mail"];
          $_SESSION["shopcode"]=$row["shop_code"];
           header('Location:showadvertisement.php');
         
           
      
        }
        else
        {
            header('Location:login.php');
      
        }
       
         $conn->close();

