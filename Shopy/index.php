
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
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
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>	
<style>
  .scrollable-menu {
    height: auto;
    max-height: 450px;
    overflow-x: hidden;
}
    
    h3.w3ls-title {
    text-align: left;
    font-size: 2em;
    color: #141123;
    margin: 1em 0;
    margin-left: 360px;
    font-size: 40px;
    font-weight: bold;
    font-family: initial;
    box-shadow: black;
    text-shadow: 2px red;
}
#a1 {
    margin-left: 410px;
    font-family: "Elephant";
    text-shadow: 2px 2px;
    color: orange;
    margin-bottom: -50px;
}
#img
{
    width:300px;
    height: 250px;
    margin-bottom: 10px;
    border: #000 solid thin;
    padding: 10px;
}
 #q
 {
     color: white;
 }
    
 .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 300px;
  opacity: 0;
  transition: .5s ease;
  margin-left: 15px;
  background-color: black;
}

select option{
   background-color: black;
   color:white;
}
.col-md-4:hover .overlay {
  opacity: 0.8;
}
.header-search {
    font-family: cursive;
    float: left;
    width: 55%;
    text-align: center;
    margin-left: 250px;
    margin-top: 30px;
}
#abc {
    padding-left: 30px;
    /* margin-left: -00px; */
    margin-left: -140px;
    position: absolute;
    height: 50px;
    border: 1px solid;
    border-color: red;
    background-color: #f44336;
}
.text {
  color: white;
 
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
  



</style>
</head>
<body>
 
	
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
                                     
					<form action="search.php" method="post">
                                            <select class="decorated" id="abc" name="search">
                                                <option value="Shop_Name">Shop_Name</option>
                                                <option value="Product_Name">Product_Name</option>
                                                <option value="Shop_Code">Shop_Code</option>
                                                <option value="landmark">landmark</option>
                                               <!-- <option value="Shop_Type">Shop_Type</option>-->
                                            </select>
						<input type="search" name="name" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
                                       
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
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
                <div class="item active"><!-- First-Slide -->
                    <img src="images/5.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Hot Offers And Discount</h3>
                      
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="images/8.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                       
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="images/3.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">Season Sale</h3>
                       
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="js/custom.js"></script>
	</div>
	<!-- //banner -->  <br><br><br>
	<div id="a1">
		<font size="20px" color="DarkOrange" family="Elephant">
		Top Trending Offers
		</font> 
		
	</div>
	<br><br><br><br>
	<!-- add-products -->
	<div class="add-products"> 
		<div class="container"> 
		<?php
                    require './conn.php';
                 
                  $query="SELECT * from shop_add order by cast(discount as decimal(30,1)) desc limit 6";
                  $rs=mysqli_query($conn,$query);
                                    
                
                  
                  
                   
                 ?>
                     <div class="add-products-row">
                     <?php
                     while ($row = mysqli_fetch_assoc($rs)) 
                    {  
                        $shop_code=$row["shop_code"]; 
                        $query1="select shopkeeper_name from shop where shop_code=$shop_code";
                       
                        $rs1=mysqli_query($conn,$query1);
                        $row1= mysqli_fetch_array($rs1);
                         $image=$row["product_image"];
                         $name=$row1["shopkeeper_name"];
                         $p=$row["p"];
                         $buy=$row["buy_n"];
                         $get=$row["get_n"];
                         $discount=$row["discount"];
                         $pname=$row["product_name"];
                        
                            ?>  
			
			
                            <div class="col-md-4">
                              
                               
                           <img src="<?php echo "uploadimages/".$name."/".$image;?>" class="img-responsive" id="img" alt="img">
                                   <?php
                                  if($p==3)
                                  {?>
                            <?php   echo '<a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?>  
                                    <div class="overlay">
                                        <div class="text"><?php echo $pname."<br>";?>
                                            <p id="q">BUY <?php echo $buy."<br>"."GET&nbsp;".$get."&nbsp;FREE"; ?></p>
                                            
                                        </div>
                                     </div>
                             <?php echo '</a>'?>
                                <?php  }
                                  else
                                  {?>
                                <?php   echo '<a href="single.php?aa='.$shop_code.' && bb='.$name.'">'?>  
                                  <div class="overlay">
                                      <div class="text">
                                      
                                               <?php echo $pname."<br>";?>
                                          <p id="q">FLAT <?php echo $discount."% OFF" ?></p>
                                        
                                      </div>
                                  </div>
                             <?php echo '</a>'?>
                                <?php  }
                                   ?>
                                 
                            </div>
                       <?php }?>
                          
                         
			</div>  
                  
		</div>  	
	</div>
	<br><br><br>
	
	
	<div class="deals"> 
		<div class="container"> 
			<h3 class="w3ls-title">DEALS OF THE DAY </h3>
                                	<div class="deals-row">
				<div class="col-md-3 focus-grid"> 
					<a href="mobile.php" class="wthree-btn"> 
						<div class="focus-image"><i class="fa fa-mobile"></i></div>
						<h4 class="clrchg">Mobiles and Accessories</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
                                    <a href="electronics.php" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-laptop"></i></div>
						<h4 class="clrchg"> Electronics</h4> 
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="furniture.php" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
						<h4 class="clrchg">Furnitures</h4>
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="home_decor.php" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-home"></i></div>
						<h4 class="clrchg">Home Decor</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="book.php" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-book"></i></div>
						<h4 class="clrchg">Books & Music</h4> 
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="clothing.php" class="wthree-btn wthree4"> 
						<div class="focus-image"><i class="fa fa-asterisk"></i></div>
						<h4 class="clrchg">Clothing</h4>
					</a>
				</div>
				
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="Groceries.php" class="wthree-btn wthree"> 
						<div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
						<h4 class="clrchg">Groceries</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="medicalstore.php" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-medkit"></i></div>
						<h4 class="clrchg">Medical Store</h4> 
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="Automobile.php" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-car"></i></div>
						<h4 class="clrchg">Automobile</h4> 
					</a>
				</div>
				<div class="col-md-2 focus-grid"> 
					<a href="restaurant.php" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-cutlery"></i></div>
						<h4 class="clrchg">Restaurant</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="Sports.php" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-futbol-o"></i></div>
						<h4 class="clrchg">Sports</h4> 
					</a>
				</div> 
				
				<div class="col-md-3 focus-grid"> 
                                    <a href="Games.php" class="wthree-btn "> 
						<div class="focus-image"><i class="fa fa-gift"></i></div>
						<h4 class="clrchg">Gifts</h4> 
					</a>
				</div> 
                            
                                
                                <div class="col-md-3 focus-grid"> 
					<a href="Hotels.php" class="wthree-btn "> 
						<div class="focus-image"><i class="fa fa-header"></i></div>
						<h4 class="clrchg">Hotels</h4> 
					</a>
				</div> 
                            
                            
                               
                            
                            
                                <div class="col-md-3 focus-grid"> 
					<a href="Jewellery.php" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-diamond"></i></div>
						<h4 class="clrchg">Jewellery</h4> 
					</a>
				</div>
                            
                            
                                <div class="col-md-3 focus-grid"> 
					<a href="Hospital.php" class="wthree-btn wthree3 "> 
						<div class="focus-image"><i class="fa fa-medkit"></i></div>
						<h4 class="clrchg">Hospital</h4> 
					</a>
				</div> 
                            
                            
                                <div class="col-md-3 focus-grid"> 
					<a href="bags.php" class="wthree-btn wthree2 "> 
						<div class="focus-image"><i class="fa fa-suitcase"></i></div>
						<h4 class="clrchg">bags</h4> 
					</a>
				</div> 
                            
                            
                                <div class="col-md-3 focus-grid"> 
					<a href="Footwear.php" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-users"></i></div>
						<h4 class="clrchg">Footwear</h4> 
					</a>
				</div> 
                            
                            
                                <div class="col-md-3 focus-grid"> 
					<a href="Watch.php" class="wthree-btn wthree4"> 
						<div class="focus-image"><i class="fa fa-clock-o"></i></div>
						<h4 class="clrchg">Watch</h4> 
					</a>
				</div>
                             <div class="col-md-3 focus-grid"> 
					<a href="kirana.php" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
						<h4 class="clrchg">Kirana</h4> 
					</a>
				</div>
                             <div class="col-md-3 focus-grid"> 
					<a href="stationary.php" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-pencil-square-o"></i></div>
						<h4 class="clrchg">Stationary</h4> 
					</a>
				</div>
                             <div class="col-md-3 focus-grid"> 
					<a href="others.php" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-star"></i></div>
						<h4 class="clrchg">Others</h4> 
					</a>
				</div>
                            
				<div class="clearfix"> </div>
			</div>  
		</div>  	
	</div> 
	<!-- //deals --> 
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
	
	<!-- footer -->
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
	<!-- countdown.js -->	
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>