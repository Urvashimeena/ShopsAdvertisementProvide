<html>
<head>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
        </style>
        </head>
        <body>

        <?php
      
        $p = $_REQUEST["q"];
       $ty=$_GET["type"];
        require './conn.php';
         $q= strtolower($p);
         $type=strtolower($ty);
        $query="select * from shop where Lower(shop_type)='$type'";
        $res1= mysqli_query($conn, $query);
         $row2= mysqli_fetch_assoc($res1);
         $shop_code=$row2["shop_code"];
       
        
      $sql="SELECT * FROM shop_add WHERE shop_code='$shop_code' and Lower(product_name) LIKE '%{$q}%' ";
     
        $result = mysqli_query($conn,$sql); 

                       while ($row1 = mysqli_fetch_assoc($result)) 
                       {
                       ?>

				
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							
                                                        <?php    
                                                                    $query1="select * from shop where shop_code='$shop_code'";
                                                                   $res= mysqli_query($conn, $query1);
                                                                   $row= mysqli_fetch_assoc($res);
                                                                    $name = $row["shopkeeper_name"];
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
						     <img src="<?php echo "uploadimages/".$name."/".$image1;?>" id ="img" class="img-responsive" alt="img">
                                                        <?php if($p==1) 
                                                        {?>
							<div class="agile-product-text">              
								
                                                                <?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
                                                            
								<h6><del><?php echo "RS ".$shop_rs."<br>" ?></del> <?php echo "RS ".$get_rs ?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									
								</form> 
							</div>
                                                       <?php }  else if($p==2) 
                                                           { ?>
                                                           
                                                           <div class="agile-product-text">              
								<?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
								<h6><del><?php echo "RS ".$marked_price."<br>"  ?></del> <?php echo "RS ".$selling_price ?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									
								</form> 
							</div>
                                                           
                                                     <?php } else if($p == 3)
                                                     { ?>
                                                     
                                                            <div class="agile-product-text">              
								<?php echo '<h5><a href="single.php?aa='.$shop_code.'&& bb='.$name.'">'?><?php echo $product_name ?><?php echo '</a></h5>' ?>
								<h6><?php echo "BUY ".$buy_n."<br> Get" .$get_n." FREE" ?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									
								</form> 
							    </div>
                                                     <?php } ?> 
						</div> 
					</div>
					<?php } 
                                        ?>
					
				
                           
</body>
</html>