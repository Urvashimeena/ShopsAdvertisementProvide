
<?php
       require "conn.php";
        $mail=$_REQUEST['email']; //it will post email you have enter in forgot password where you want to send mail
    
  $qry="select * from shop where e_mail='".$mail."'";//check wheather your email exist on database or not OR you are registered member or not
   $res=mysqli_query($conn,$qry);//if your email match above query will execute
     $res=mysqli_fetch_array($res);//fetching data from databse
   $pass=$res['password'];//getting the password from database n putting its value in $pass variable
   
  echo $pass; 	
	
   
   
   
   if($res)
   {
	require_once 'class.phpmailer.php';
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "mabhimanyu721@gmail.com"; // GMAIL username
	$mail->Password = "ABHIman123"; // GMAIL password
	$mail->From = "mabhimanyu721@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "Abhimanyu Meena";  // set from Namesite
	$mail->Subject = "Change Password"; 
	$mail->Body = " Dear Member Your Password : $pass ";

	$mail->AddAddress($_REQUEST['email'], "Abhimanyu Meena"); // to Address
    
	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send();//if mail sent start alert box will show n it will redirect to index.php
	
	echo '<script>
     alert("Please check your mail for your password !!!");
     </script>';
	 
	header('location:index.html'); //if mail sent end
     }
	else //if mail not sent following alert box will show n it will redirect to
	{
	echo '<script>
     alert("Email not found in database or you are not registered member!!!");
     </script>';
         redirecturl('index.php');
	}
	
?>
