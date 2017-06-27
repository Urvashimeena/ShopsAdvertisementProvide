
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | SinglePage :: w3layouts</title>
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
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
<!-- //scroll to fixed--> 
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
  
      table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
#norecord{
    
}
th, td {
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 30px;
    padding-left: 30px;
    font-size: 20px;
    color: black;
}
.header-search {
    font-family: cursive;
    float: left;
    width: 55%;
    text-align: center;
    /* margin: 1.6em 5em; */
    margin-left: 80px;
    margin-top: 20px;
}

#hhh {
   
    color: #e4543a;
    font-family: Elephant;
    font-size:45px;
    
}
.glry-w3agile-grids .view-caption h4 {
    border-bottom: 1px solid #ccc;
    font-size: 1.7em;
    color: #98b0da;
    font-weight: normal;
    margin-bottom: 10px;
    padding-bottom: 10px;
    font-family: 'Offside', cursive;
    font-weight: 600;
    text-transform: capitalize;
}
#a1
{
    font-size: 20px;
   
    color:tomato;
}
img:hover { -moz-box-shadow: 0 0 100px #ccc; -webkit-box-shadow: 0 0 100px #ccc; box-shadow: 0 0 100px #ccc; }
table:hover { -moz-box-shadow: 0 0 100px #ccc; -webkit-box-shadow: 0 0 100px #ccc; box-shadow: 0 0 100px #ccc; }

h3.w3ls-title {
    text-align: left;
    font-size: 3em;
    color: #000;
    /* margin: 1em 0; */
    font-family: cursive;
    margin-left: 560px;
    font-weight: bold;
    /* margin-bottom: 20px; */
    padding-bottom: -30px;
    margin-bottom: -30px;
}
#img1
{
    width:300px;
    height:300px;
}
#img
{
    width:220px;
    height: 220px;
}
.glry-w3agile-grids .view-caption {
    background-color: rgba(0, 0, 0, 0.85);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    /* padding: 7% 5% 5% 35%; */
    width: 400px;
    text-align: left;
    top: 0;
    z-index: 99;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    -webkit-transform: translate3d(-110%, 0px, 0px);
    -moz-transform: translate3d(-110%, 0px, 0px);
    -o-transform: translate3d(-110%, 0px, 0px);
    -ms-transform: translate3d(-110%, 0px, 0px);
    transform: translate3d(-110%, 0px, 0px);
    padding-right: 0px;
    padding-left: 125px;
    padding-top: 20px;
}
</style>
<!-- //smooth-scrolling-of-move-up -->  
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Login </a></li> 
							<li><a href="signup.html">Sign Up</a></li> 
							
						</ul> 
					</li> 
					 
					<li class="dropdown head-dpdn">
						<a href="contact.php" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i>Contact Us</a>
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
					 <p id="hhh">Shop Details</p>
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
					<div class="marquee"><a > New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	
	<div class="products">	 
		<div class="container">  
                   <?php
                    require './conn.php';
                     $shop_code=$_GET["aa"];
                     $name=$_GET["bb"];
                    if($name!='')
                    {?>
                         <div class="single-page">
                           
				<div class="single-page-row" id="detail-21">
                                    
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
						<?php
                                                   
                                                    
                                                    $query="select * from shop where shop_code='$shop_code'";
                                                    $rs= mysqli_query($conn, $query);
                                                    $row= mysqli_fetch_assoc($rs);
                                                    $image=$row["shop_image"];
                                                    $shop_name=$row["shop_name"];
                                                    $shop_address=$row["shop_address"];
                                                    $landmark=$row["landmark"];
                                                    $opn_tm=$row["opening_time"];
                                                    $cls_tm=$row["closing_time"];
                                                    $shop_type=$row["shop_type"];
                                                    $number=$row["mobile_number"];
                                                    
                                                    
                                                ?>    <img src="<?php echo "uploadimages/".$name."/".$image;?>" class="img-responsive" id="img1" alt="img">
                                               
					</div>
                                        </div>
					<div class="col-md-6 single-top-right">
						
                                                <table>
                                                     <tr>
                                                        <td>
                                                            Shop Code
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $shop_code;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Shop Name
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $shop_name;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Shopkeeper Name
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $name;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Shop Address
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $shop_address;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Landmark
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $landmark;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                           Mobile Number
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $number;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Opening Time
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $opn_tm;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            CLosing Time
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $cls_tm;
                                                      ?>
                                                        </td>
                                                    </tr>
                                                  
                                                </table>
						
					</div>
                                   
                                </div>
				   <div class="clearfix"> </div>  
				</div>
				
			</div> 
                               
                        	<h3 class="w3ls-title">Our Products </h3> 
			<!-- recommendations -->
			<div class="recommend">
			
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  //autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel">
					
							<?php
                                                           $query1="SELECT * from shop_add where shop_code='$shop_code' order by cast(discount as decimal(30,1)) desc";
                                                            $result= mysqli_query($conn, $query1);
                                                            while($row1= mysqli_fetch_assoc($result))
                                                            {
                                                                ?>
                                                                    <div class="item">
						                    <div class="glry-w3agile-grids agileits">
                                                                    
                                                                    <?php
                                                                    $image1=$row1["product_image"];
                                                                    $product_name=$row1["product_name"];
                                                                    $shop_rs=$row1["shop_rs"];
                                                                    $get_rs=$row1["get_rs"];
                                                                    $marked_price=$row1["marked_price"];
                                                                    $selling_price=$row1["selling_price"];
                                                                    $buy_n=$row1["buy_n"];
                                                                    $get_n=$row1["get_n"];
                                                                    $discount=$row1["discount"];
                                                                    $des=$row1["discription"];
                                                                    $p=$row1["p"];
                                                                            ?>
                                                            <img src="<?php echo "uploadimages/".$name."/".$image1;?>" class="img-responsive" id="img" alt="img">
                                                    
                                                            <?php
                                                            if($p==1)
                                                            {?>
                                                                <div class="view-caption agileits-w3layouts">           
								<h4><?php echo $product_name;?></h4>
								<p id="a1"><?php echo $des ;?></p>
                                                                <p id="a1"><?php echo "ON SHOPPING OF RS ".$shop_rs ;?></p>
                                                                <p id="a1"><?php echo "GET RS ".$get_rs." OFF " ;?></p>
                                                                
								<h5><?php echo $discount."% OFF";?></h5>
								
							    </div>  
                                                            
                                                         <?php   }
                                                            else if($p==2)
                                                            {?>
                                                                <div class="view-caption agileits-w3layouts">           
								<h4><?php echo $product_name;?></h4>
								<p id="a1"><?php echo $des ;?></p>
                                                                <p id="a1"><?php echo "MARKED PRICE= RS".$marked_price ;?></p>
                                                                <p id="a1"><?php echo "SELLING PRICE= RS".$selling_price ;?></p>
								<h5><?php echo $discount."% OFF";?></h5>
								
							    </div>  
                                                          <?php  }
                                                            else if($p==3)
                                                            {?>
                                                               <div class="view-caption agileits-w3layouts">           
                                                                        <h4><?php echo $product_name;?></h4>
                                                                        <p id="a1"><?php echo $des ;?></p>
                                                                        <p id="a1"> <?php echo "ON BUYING ".$buy_n." NUMBER OF PRODUCTS" ;?></p>
                                                                        <p id="a1"><?php echo "GET ".$get_n." NUMBER OF PRODUCTS FREE " ;?></p>
                                                                        <h5><?php echo $discount."% OFF";?></h5>
								
							    </div>   
                                                          <?php  }
                                                            ?>
                                                            
                                                                  
						</div> 
					</div>
                                                            <?php
                                                            }
                                                            ?>
						
							
					
			</div>
                  <?php  }
                  
                  else
                  {
                     ?>
			 <div class="single-page">
                           
				<div class="single-page-row" id="detail-21">
                                    
					<div class="col-md-9 single-top-left">	
						<div class="flexslider">
                     <?php  echo 'NO RECORD FOUND';	?>
                                                </div>
                                            </div>
                                    </div>
                             </div>
                                                
                                
               <?php   }
                                                    
                     ?>
                              
                                
                           
                                 
                     
		</div>
	</div>
	<!--//products-->  
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
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
			<p>© 2017 Shopy . All rights reserved | Design by ANKUSH , AVINASH & ABHIMANYU</p>
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
</body>
</html>