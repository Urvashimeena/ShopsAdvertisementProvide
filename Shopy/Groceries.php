<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
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
<!-- //smooth-scrolling-of-move-up -->  
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<style>
    #img{
        width: 200px;
        height: 150px;
        
        
    }
    .scrollable-menu {
    height: auto;
    max-height: 450px;
    overflow-x: hidden;
}
    
    
    
</style>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
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
					
						<input type="search" Onkeyup="showUser(this.value)" name="Search" placeholder="Search for a Product..." required="">
						
				
                              <script> 
                                  function showUser(str)
                                  {
                                          if (str == "") 
                                          {
                                                  document.getElementById("txtHint").innerHTML = "";
                                                  return;
                                              } else { 
                                                  if (window.XMLHttpRequest) {

                                                      xmlhttp = new XMLHttpRequest();
                                                  } else {

                                                      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                  }
                                                  xmlhttp.onreadystatechange = function() {
                                                      if (this.readyState == 4 && this.status == 200) {
                                                          document.getElementById("txt").innerHTML = this.responseText;
                                                      }
                                                  };
                                                  xmlhttp.open("GET","product.php?q="+str+"&& type=Groceries",true);
                                                  xmlhttp.send();
                                              }
                                          }
                                </script>
				
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
	<!-- //header --> 	
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Groceries</h4>
					
					<div class="clearfix"> </div>
				</div>
                                
                                <div class="products-row" id="txt">
                                <?php
                                require './conn.php';
                                $query = "select * from shop where shop_type = 'Groceries'";
                                $res = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($res);
                                $shop_code = $row["shop_code"];
                                
                               $query1 = "select * from shop_add where shop_code = '$shop_code'";
                                $res1 = mysqli_query($conn, $query1);
                               
                                while ($row1 = mysqli_fetch_assoc($res1)) 
                                {
                                ?>

				
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							
                                                        <?php
                                                                    $query2="select shopkeeper_name from shop where shop_code=$shop_code";
                                                                    $res2= mysqli_query($conn, $query2);
                                                                    $row3= mysqli_fetch_assoc($res2);
                                                                    $name = $row3["shopkeeper_name"];
                                                                    $image1=$row1["product_image"];
                                                                    $product_name=$row1["product_name"];
                                                                    $shop_rs=$row1["shop_rs"];
                                                                    $get_rs=$row1["get_rs"];
                                                                    $marked_price=$row1["marked_price"];
                                                                    $selling_price=$row1["selling_price"];
                                                                    $buy_n=$row1["buy_n"];
                                                                    $get_n=$row1["get_n"];
                                                                    $discount=$row1["discount"];
                                                                  //  $des=$row1["discription"];
                                                                    $p=$row1["p"];
                                                        ?>
                                                     <div class="new-tag"><h6><?php echo $discount."%" ?><br>Off</h6></div>
						    <img src="<?php echo "uploadimages/".$name."/".$image1;?>" id = "img" class="img-responsive" alt="img">
                                                        <?php if($p==1) 
                                                        {?>
							<div class="agile-product-text">              
								<?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
								<h6><del><?php echo "RS ".$shop_rs."<br>" ?></del> <?php echo "RS ".$get_rs ?></h6> 
								
							</div>
                                                       <?php }  else if($p==2) 
                                                           { ?>
                                                           
                                                           <div class="agile-product-text">              
								<?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
								<h6><del><?php echo "RS ".$marked_price."<br>"  ?></del> <?php echo "RS ".$selling_price ?></h6> 
								 
							</div>
                                                           
                                                     <?php } else if($p == 3)
                                                     { ?>
                                                     
                                                            <div class="agile-product-text">              
								<?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
								<h6><?php echo "BUY ".$buy_n."<br> Get" .$get_n." FREE" ?></h6> 
								
							    </div>
                                                     <?php } ?>
						</div> 
					</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
                                <?php
                                  
                                ?>
				<!-- add-products --> 
				
				<!-- //add-products -->
			</div>
			<!--<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label> 
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Electronics</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Mobile phones<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Smart phones</a></li>										
									<li class="subitem1"><a href="#">Accessories</a></li>										
									<li class="subitem1"><a href="#">Tabs</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Large appliances<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Refrigerators </a></li>										
									<li class="subitem1"><a href="#">Washing Machine </a></li>										
									<li class="subitem1"><a href="#">Kitchen Appliances </a></li>										
									<li class="subitem1"><a href="#">Air Conditioner</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Entertainment<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#"> Tv & Accessories</a></li>										
									<li class="subitem1"><a href="#">Digital Camera </a></li>										
									<li class="subitem1"><a href="#">Computer</a></li>										
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<!--<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label> 
						</div>
					</div>			 
				</div>
				<!--<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.html">Air conditioner </a></li>
						<li><a href="products.html">Gaming</a></li>
						<li><a href="products.html">Monitors</a></li>
						<li><a href="products.html">Pc </a></li>
						<li><a href="products.html">Food Processors</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Cleaners</a></li>
						<li><a href="products.html">Small devices</a></li>
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="single.html"><img src="images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.html">Audio speaker</a></h4> 
						<h5>$100</h5>       
					</div>
				</div>
			</div>-->
			<div class="clearfix"> </div>
			<!-- recommendations -->
			
			<!-- //recommendations -->
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
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul>
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4> 
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
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
