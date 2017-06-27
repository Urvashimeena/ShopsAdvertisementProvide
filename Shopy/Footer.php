
<html>
    <head>
        
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
                            .address-right {
    position: relative;
    padding-bottom: 40px;
    padding-left: 200;
    /* padding-right: 100; */
}

.address-right:before {
    content: '';
    
    background-size: 100%;
    display: block;
    position: absolute;
    bottom: -189px;
    left: -36px;
    width: 500px;
    height: 155px;
    z-index: 0;
    margin-left: 150;
}


*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


	</style>
	

        
    </head>
    <body>
<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>S</span>hopY</a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 246,Harsh nagar Colony</li>
						<li><i class="fa fa-mobile"></i> +919785753886 </li>
						<li><i class="fa fa-phone"></i> +917791942858 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> dhhrruvkhatri@gmail.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
						<!--	<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  -->
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
						<!--	<li><a href="login.html">Returns</a></li> 
							
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li> -->
						</ul> 
					</div>
					<!--<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>-->
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
        <div class="copy-right"> 
		<div class="container">
			<p>© 2017 Smart bazaar . All rights reserved | Design by <a href="http://ankush.com"> ABHIMANYU , ANKUSH & AVINASH.</a></p>
		</div>
	</div> 
        </body>
    </html>

