 <?php
        session_start();
          if($_SESSION["isLogin"]!=true)
           {
                header("location:login.php");
           }
          else
            {
                if($_SESSION["itsok"]!=true)
                    {
                        header("location:showadvertisement.php");
                    }
                    else
                    {
                        
                    
?>
                        
                   
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        $('#modalPurchase').click(function {
            $('#modalProduct').die();
            $('#modalProduct').finish();
            
        });
        
        $('#modalProduct').click(function {
            $('#modalPurchase').finish();
            $('#modalPurchase').die();
            $('#modalFree').die();
            $('#modalFree').finish();
            
        });
    function showDiv(elem){
   if(elem.value == 1)
   {
                //document.getElementById('a1').;
                document.getElementById('a1').disabled;
                document.getElementById('a3').disabled;
   }
   else if(elem.value == 2)
   {	
		//document.getElementById('modalProduct').style.display = "block"; 
		document.getElementById('a1').disabled;
		document.getElementById('a3').disabled;
   }
   else if(elem.value == 3)
   {	
		//document.getElementById('modalFree').style.display = "block"; 
		document.getElementById('a1').disabled;
		document.getElementById('a2').disabled ;
   }
   
}
</script>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<style>
	.scrollable-menu {
    height: auto;
    max-height: 400px;
    overflow-x: hidden;
}

	.text
	
	{
	font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    background: #FFFFFF;
    margin: 0 0 1em 0;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
	
	}
	#co
	{
		color:white;
	}
	
	
           #none
           {
               display: none;
           }
		   
		   #form
            {
                width:500px;
                height: 50px;
                padding-left: 30px;
                margin-left: 60px;
                padding-bottom: 0px;
		        border: 1px solid #E2DCDC;
				border-top-color: rgb(226, 220, 220);
				border-top-style: solid;
				border-top-width: 1px;
				border-right-color: rgb(226, 220, 220);
				border-right-style: solid;
				border-right-width: 1px;
				border-bottom-color: rgb(226, 220, 220);
				border-bottom-style: solid;
				border-bottom-width: 1px;
				border-left-color: rgb(226, 220, 220);
				border-left-style: solid;
				border-left-width: 1px;
				border-image-source: initial;
				border-image-slice: initial;
				border-image-width: initial;
				border-image-outset: initial;
				border-image-repeat: initial;
               
            }
			
			 #form1
            {
                width:500px;
                height: 110px;
                padding-left: 30px;
                margin-left: 60px;
                padding-bottom: 0px;
		        border: 1px solid #E2DCDC;
				border-top-color: rgb(226, 220, 220);
				border-top-style: solid;
				border-top-width: 1px;
				border-right-color: rgb(226, 220, 220);
				border-right-style: solid;
				border-right-width: 1px;
				border-bottom-color: rgb(226, 220, 220);
				border-bottom-style: solid;
				border-bottom-width: 1px;
				border-left-color: rgb(226, 220, 220);
				border-left-style: solid;
				border-left-width: 1px;
				border-image-source: initial;
				border-image-slice: initial;
				border-image-width: initial;
				border-image-outset: initial;
				border-image-repeat: initial;
               
            }
          
           .button
           {
               width: 500px;
               height: 50px;
               background-color: #204d74;
               margin-left: 60px;
               color: white;
           }
           #none
           {
               display: none;
           }
           #submit
           {    
              width: 200px;
              height: 30px;
              background-color: #204d74;
              margin-left: 250px; 
              border-radius: 5px;
              border: none;
              color: white;
           }
		   .btn1 {
				display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;
				font-weight: normal;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				margin-left: 60px;
				width: 500px;
				height:50px;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				background-image: none;
				border: 1px solid transparent;
				border-radius: 4px;
           
		   }
                   .header-search {
                            font-family: cursive;
                            float: left;
                            width: 55%;
                            text-align: center;
                            margin: 1.6em 5em;
                        }
                        .btn2 {
                                display: inline-block;
                                width: 220px;
                                padding: 6px 12px;
                                margin-bottom: 0;
                                font-size: 14px;
                                font-weight: normal;
                                line-height: 1.42857143;
                                text-align: center;
                                white-space: nowrap;
                                vertical-align: middle;
                                -ms-touch-action: manipulation;
                                touch-action: manipulation;
                                cursor: pointer;
                                -webkit-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                                background-image: none;
                                border: 1px solid transparent;
                                border-radius: 4px;
                            }
                            
                            .dropdown-menu {
                                            position: absolute;
                                            top: 100%;
                                            left: 0;
                                            z-index: 1000;
                                            display: none;
                                            float: left;
                                            width: 220px;
                                            padding: 5px 0;
                                            margin: 2px 0 0;
                                            font-size: 14px;
                                            text-align: left;
                                            list-style: none;
                                            background-color: #fff;
                                            -webkit-background-clip: padding-box;
                                            background-clip: padding-box;
                                            border: 1px solid #ccc;
                                            border: 1px solid rgba(0, 0, 0, .15);
                                            border-radius: 4px;
                                            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
                                            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
                                            margin-left: 105px;
                            }
                            #logout
                            {
                                    float: right;
                                 
                                    margin-top: 0.6em;
                                  
                                    margin-left: 10px;
                                    padding-right: 60px;
                            }
                            #h7
                            {
                                font-size: 15px;
                                color: #0d1e3d;
                                font-family: fantasy;
                                
                            }
                            .modal-body.button{
                                width: 500px;
                                height: 50px;
                                background-color: #204d74;
                                margin-left: 60px;
                                color: white;
                                
                            }
	</style>
	
</head>
<body>
   
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul> 
					<li class="dropdown head-dpdn">
						<a href="contact.php" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Contact Us</a>
					</li> 
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
                                    <h1><a href="index.php"><span>S</span>hopY</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
				<font size="30px">Add Your Advertisement</font>
				
				</div>
				<div class="header-cart"> 
					<div class="my-account">
                                                <?php
                                               
                                                    echo "<p id='h7'>Welcome"."  "  .$_SESSION["name"]."</p>"
                                                       
                                                 ?>
                                           
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form id="logout" action="logoutprocess.php">
                                                <input type="submit" value="logout">
                                            </form> 
                                          
                                              
					</div>
					
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
                            	<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown"> 
							
							<ul class="cd-dropdown-content scrollable-menu"> 
								<li><a>Today's Offers</a></li>
								<li>
									<a href="electronics.php">Electronics</a> 
								
								</li> <!-- .has-children -->
                                                                <li>
                                                                    <a href="mobile.php">Mobile and Accessories</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="clothing.php">Clothing</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="restaurant.php">Restaurant</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Hotels.php">Hotels</a> 
								
								</li> 
                                                                <li>
									<a href="jewellery.php">Jewellery</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Hospital.php">Hospital</a> 
								
								</li>
                                                                <li >
									<a href="Bags.php">Bags</a> 
								
								</li> 
                                                                <li >
                                                                    <a href="Footwear.php">Footwear</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Watch.php">Watch</a> 
								
								</li> 
                                                                <li>
									<a href="Kirana.php">Kirana</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="stationary.php">Stationary</a> 
								
								</li> 
                                                                
								<!-- .has-children -->
								<li>
									<a href="Furniture.php">Furniture</a> 
	
								</li> <!-- .has-children --> 
								<li>
                                                                    <a href="home_decor.php">Home Decore</a> 
				
								</li> <!-- .has-children -->  
								<li>
									<a href="sports.php">Sports</a>
								
								</li> <!-- .has-children -->  
								<li>
                                                                    <a href="Groceries.php">Grocery store</a>
			
								</li> <!-- .has-children -->  
								<li >
									<a href="Games.php">Gifts</a>
							
								</li> 
								<li>
                                                                    <a href="medicalstore.php">Medical Store</a>
								
								</li>
								<li >
                                                                    <a href="Automobile.php">Automobile</a>
								
								</li>
								<li>
									<a href="book.php">Books and Music</a>
                                                                </li>
                                                                <li>
                                                                    <a href="others.php">Others</a> 
								
								</li> 
							
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				
				<div class="move-text">
					<div class="marquee"><a> Latest Offers And Discount Are Available Here...... <span>Find The Best Shop Near You!!</span> <span> For The Best Choice , Make Your First Choice - ShopY</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 	
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			
			<div class="login-body">
					<form action="" method="post">
					
						<div class="dropdown">
						  <button class="btn2 btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Add Your Offers
						  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu" onchange="showDiv(this)">
							<li><a href="#" value = "1" data-toggle="modal" data-target="#modalPurchase">Discount On Purchase</a></li>
							<li><a href="#" value = "2" data-toggle="modal" data-target="#modalProduct">Discount On product</a></li>
							<li><a href="#" value = "3" data-toggle="modal" data-target="#modalFree">Buy Something Get Something Free</a></li>
						  </ul>
						</div>
						
				     </form>
			</div>  
			
		</div>
	</div>
	<!--Mode for Discount On Purchase-->
	
	<div id="modalPurchase" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
                                    <form id="a1" action="purchaseprocess.php" method="post" enctype="multipart/form-data">
					<input type="text" id="form"  name="productname" placeholder="Name of Product" required=""><br><br>
					<input type="text" id="form" name="description"  placeholder="Description Of Your Product" required=""><br><br>
					<input type="number" id="form" name="shoprs" placeholder="Overall Price of shopping(like Rs1000)" required=""><br><br>
					<input type="number" id="form" name="getrs" placeholder="Price Discount on Overall Shopping(like Rs100)" required=""><br><br>
				
				   
                                             <button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload').click();"><font color="white">Upload Your Product Image</font></button>
                                             <div id="none">
                                            <input type="file"  id="upload" name="image" title="Product Image" required="">
                                            </div><br><br>
                                       
                                        <input type="submit" id="form">
                                        
				</form>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div id="modalProduct" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
                                    <form id = "a2" action="productprocess.php" method="post" enctype="multipart/form-data">
					<input type="text" id="form"  name="product_name" placeholder="Name of Product" required=""><br><br>
					<input type="text" id="form" name="description"  placeholder="Description Of Your Product" required=""><br><br>
					<input type="number" id="form" name="marked_price" placeholder="Marked Price of Product" required=""><br><br>
					<input type="number" id="form" name="selling_price" placeholder="Selling Price of Product" required=""><br><br>
					
					 <button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload1').click();"><font color="white">Upload Your Product Image</font></button>
                                             <div id="none">
                                    <input type="file"  id="upload1" name="productimage" title="Product Image" required="">
                                             </div><br><br>
					 <input type="submit" id="form">
                                         
				</form>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div id="modalFree" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
                                    <form id = "a3" action="buy_get.php" method="post" enctype="multipart/form-data">
					<input type="text" id="form"  name="product_name" placeholder="Name of Product" required=""><br><br>
					<input type="text" id="form" name="description"  placeholder="Description Of Your Product" required=""><br><br>
					<input type="number" id="form" name="buy_n" placeholder="Number of Product to Buy(like 3)" required=""><br><br>
					<input type="number" id="form" name="get_n" placeholder="Number of Product Get Free(like 1)" required=""><br><br>
					
                                         <button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload3').click();"><font color="white">Upload Your Product Image</font></button>
                                         <div id="none">
                                         <input type="file"  id="upload3" name="productimage" title="Product Image" required="">
                                         </div><br><br>
					 <input type="submit" id="form">
				</form>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- //sign up-page --> 
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
                                            <br>
                                            <h4>CORRECT SHOP <br> ADDRESS</h4>
						
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
                                    <div class="ftr-top-right"><br>
						<h4>CUSTOMER CARE</h4>
						
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
                                    <div class="ftr-top-right"><br>
						<h4>Ensurity For Good <br>Quality Of Product</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
                                            <h2><a href="index.php"><span>S</span>hopY</a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> Kalkamata Road Pahada Udaipur</li>
						<li><i class="fa fa-mobile"></i>+91 9785753886  </li>
						<li><i class="fa fa-phone"></i> +91 7791942858 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mabhimanyu712@gmail.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html" data-toggle="modal" data-target="#modalabout">About Us</a></li>
							<li><a href="privacy.html" data-toggle="modal" data-target="#modalprivacy">Privacy Policy</a></li>
						</ul>
					</div>
                                    
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.php">Contact Us</a></li>
							
						</ul> 
					</div>
					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
                    
                    
                    <div id="modalabout" class="modal fade" role="dialog">
		    <div class="modal-dialog">
			<!-- Modal content-->
		        <div class="modal-content">
                            <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">About Shops Advertisement Provider</h4>
                            </div>
                                    <div class="modal-body">
                                    <p>
                                     This website is an initiative to provide a platform to small businesses. 
                                     This website can also help people to get the best offers near their home
                                     which has not been developed yet. Through this website any shopkeeper 
                                     can place their advertisement to show their offers and discounts which
                                     they want to provide to the customers. Till now there is no any service
                                     or platform available for this kind of facility, so this website is 
                                     going to make a platform for small businesses and customers to connect
                                     directly to each other and get the best offers and discount near their home.  
   
                                        
                                    </p>
				    </div>
				
                                    <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
			</div>
		    </div>
	        </div>
                                    
                                    
                <div id="modalprivacy" class="modal fade" role="dialog">
		    <div class="modal-dialog">
			<!-- Modal content-->
		        <div class="modal-content">
                            <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Privacy Policy</h4>
                            </div>
                                    <div class="modal-body">
                                    <p>
                                    This privacy policy has been compiled to better serve 
                                    those who are concerned with how their 'Personally Identifiable 
                                    Information' (PII) is being used online. PII, as described 
                                    in US privacy law and information security, is information 
                                    that can be used on its own or with other information to identify,
                                    contact, or locate a single person, or to identify an individual
                                    in context. Please read our privacy policy carefully to get a 
                                    clear understanding of how we collect, use, protect or otherwise 
                                    handle your Personally Identifiable Information in accordance with
                                    our website.
                                    </p>
                                    
                                    <p>
                                    How do we use your information?
                                    </p>
                                    <p>
                                    We may use the information we collect from you when you register, 
                                    make a purchase, sign up for our newsletter, respond to a survey 
                                    or marketing communication, surf the website, or use certain other 
                                    site features in the following ways:

                                          • To allow us to better service you in responding to your customer 
                                          service requests.
                                    </p>
                                   
                                    <p>
                                    Do we use 'cookies'?

                                    Yes. Cookies are small files that a site or its service provider 
                                    transfers to your computer's hard drive through your Web browser 
                                    (if you allow) that enables the site's or service provider's systems
                                    to recognize your browser and capture and remember certain information.
                                    </p>

                                    <p>
                                    We use cookies to:
                                          • Understand and save user's preferences for future visits.

                                    You can choose to have your computer warn you each time a cookie is being sent,
                                    or you can choose to turn off all cookies. You do this through your browser settings.
                                    </p>
				    </div>
				
                                    <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
			</div>
		    </div>
                    
                    
		</div>
	</div>
    </div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Shopy . All rights reserved | Design by Urvashi</p>
		</div>
	</div> 
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 ShopY . All rights reserved | Design by Urvashi</p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>


<?php
}
            }
                                               
 ?>
