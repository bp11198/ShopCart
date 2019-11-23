<?php 
session_start();
include_once("model/giay.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Free Adidas Website Template | Single :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function() {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function() {
				var text = $(this).html();
				$(".dropdown dt a span").html(text);
				$(".dropdown dd ul").hide();
				$("#result").html("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").html();
			}

			$(document).bind('click', function(e) {
				var $clicked = $(e.target);
				if (! $clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function() {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
	<!-- start menu -->     
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/megamenu.js"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<!-- end menu -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" id="sourcecode">
		$(function()
		{
			$('.scroll-pane').jScrollPane();
		});
	</script>
	<!----details-product-slider--->
	<!-- Include the Etalage files -->
	<link rel="stylesheet" href="css/etalage.css">
	<script src="js/jquery.etalage.min.js"></script>
	<!-- Include the Etalage files -->
	<script>
		jQuery(document).ready(function($){
			
			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,

				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

						});
					</script>
					<!----//details-product-slider--->	
					<!-- top scrolling -->
					<script type="text/javascript" src="js/move-top.js"></script>
					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});
					</script>					
				</head>
				<body>
					<?php 
					if (isset($_REQUEST['mg'])) {
						$mg   = $_REQUEST['mg'];
					}
					?>
					<?php 
					include_once("menu.php"); ?>
					<div class="single">
						<div class="wrap">
							<div class="rsidebar span_1_of_left">
								<section  class="sky-form">
									<h4>Occasion</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
										</div>
									</div>
									<h4>Category</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats (70)</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
										</div>
									</div>
									<h4>Styles</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
										</div>
									</div>
								</section>
								<section  class="sky-form">
									<h4>Brand</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
											<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
										</div>
									</div>
								</section>
								<section  class="sky-form">
									<h4>Heel Height</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>
										</div>
									</div>
								</section>
								<section  class="sky-form">
									<h4>Price</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
										</div>
									</div>
								</section>
								<section  class="sky-form">
									<h4>Colors</h4>
									<div class="row row1 scroll-pane">
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
										</div>
										<div class="col col-4">
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i></label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
										</div>
									</div>
								</section>
							</div>
							<?php $lsGiay = giay::getListDB(); 
							foreach ($lsGiay as $giay) {
								if($mg==$giay->IDGiay){
									?>
									<div class="cont span_2_of_3">
										<div class="labout span_1_of_a1">
											<!-- start product_slider -->

											<ul id="etalage">
												<?php $lsImg = giay::getListImg($mg);
												foreach ($lsImg as $value) {
													?>
													<li>
														<img class="etalage_thumb_image" src="img/<?php echo $value; ?>" />
														<img class="etalage_source_image" src="img/<?php echo $value; ?>" />
													</li>
													<?php 
												} ?>
											</ul>

											<!-- end product_slider -->
										</div>
										<div class="cont1 span_2_of_a1">
											<h3 class="m_3"><?php echo $giay->tenGIay; ?></h3>

											<div class="price_single">
												<span class="reducedfrom"><?php echo $giay->giaAo; ?></span>
												<span class="actual"><?php echo $giay->giaThuc; ?></span>
											</div>
											<div class="btn_form">
												<a href="checkout.php?mg=<?php echo $giay->IDGiay; ?>" title="">
												
													<input type="submit" value="buy now" title="">
												
												</a>
											</div>
											<p class="m_desc"><?php echo $giay->productDetails; ?></p>

											<div class="social_single">	
												<ul>	
													<li class="fb"><a href="#"><span> </span></a></li>
													<li class="tw"><a href="#"><span> </span></a></li>
													<li class="g_plus"><a href="#"><span> </span></a></li>
													<li class="rss"><a href="#"><span> </span></a></li>		
												</ul>
											</div>
										</div>
										<div class="clear"></div>
										<ul id="flexiselDemo3">
											<?php $lsGiay2 = giay::getListDB(); 
											foreach ($lsGiay2 as $giay2) { ?>
												<li><img src="img/<?php echo $giay2->anhDemo ?>" /><div class="grid-flex"><a href="single.php?mg=<?php  echo $giay2->IDGiay; ?>"><?php echo $giay2->tenGIay; ?></a><p><?php echo $giay2->giaThuc; ?></p></div></li>

											<?php } ?>
										</ul>
										<script type="text/javascript">
											$(window).load(function() {
												$("#flexiselDemo1").flexisel();
												$("#flexiselDemo2").flexisel({
													enableResponsiveBreakpoints: true,
													responsiveBreakpoints: { 
														portrait: { 
															changePoint:480,
															visibleItems: 1
														}, 
														landscape: { 
															changePoint:640,
															visibleItems: 2
														},
														tablet: { 
															changePoint:768,
															visibleItems: 3
														}
													}
												});

												$("#flexiselDemo3").flexisel({
													visibleItems: 5,
													animationSpeed: 1000,
													autoPlay: true,
													autoPlaySpeed: 3000,    		
													pauseOnHover: true,
													enableResponsiveBreakpoints: true,
													responsiveBreakpoints: { 
														portrait: { 
															changePoint:480,
															visibleItems: 1
														}, 
														landscape: { 
															changePoint:640,
															visibleItems: 2
														},
														tablet: { 
															changePoint:768,
															visibleItems: 3
														}
													}
												});

											});
										</script>
										<script type="text/javascript" src="js/jquery.flexisel.js"></script>
										<div class="toogle">
											<h3 class="m_3">Product Details</h3>
											<p class="m_text"><?php echo $giay->productDetails; ?></p>
										</div>					

									</div>
								<?php } }?>
								<div class="clear"></div>
							</div>
						</div>
						<div class="footer">
							<div class="footer-top">
								<div class="wrap">
									<div class="col_1_of_footer-top span_1_of_footer-top">
										<ul class="f_list">
											<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
										</ul>
									</div>
									<div class="col_1_of_footer-top span_1_of_footer-top">
										<ul class="f_list">
											<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
										</ul>
									</div>
									<div class="col_1_of_footer-top span_1_of_footer-top">
										<ul class="f_list">
											<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
										</ul>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="footer-middle">
								<div class="wrap">
									<div class="section group">
										<div class="col_1_of_middle span_1_of_middle">
											<dl id="sample" class="dropdown">
												<dt><a href="#"><span>Please Select a Country</span></a></dt>
												<dd>
													<ul>
														<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
														<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
														<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
														<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
														<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
														<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
													</ul>
												</dd>
											</dl>
										</div>
										<div class="col_1_of_middle span_1_of_middle">
											<ul class="f_list1">
												<li><span class="m_8">Sign up for email and Get 15% off</span>
													<div class="search">	  
														<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
														<input type="submit" value="Subscribe" id="submit" name="submit">
														<div id="response"> </div>
													</div><div class="clear"></div>
												</li>
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="footer-bottom">
								<div class="wrap">
									<div class="section group">
										<div class="col_1_of_5 span_1_of_5">
											<h3 class="m_9">Shop</h3>
											<ul class="sub_list">
												<h4 class="m_10">Men</h4>
												<li><a href="shop.html">Men's Shoes</a></li>
												<li><a href="shop.html">Men's Clothing</a></li>
												<li><a href="shop.html">Men's Accessories</a></li>
											</ul>
											<ul class="sub_list">
												<h4 class="m_10">Women</h4>
												<li><a href="shop.html">Women's Shoes</a></li>
												<li><a href="shop.html">Women's Clothing</a></li>
												<li><a href="shop.html">Women's Accessories</a></li>
											</ul>
											<ul class="sub_list">
												<h4 class="m_10">Kids</h4>
												<li><a href="shop.html">Kids Shoes</a></li>
												<li><a href="shop.html">Kids Clothing</a></li>
												<li><a href="shop.html">Kids Accessories</a></li>
											</ul>
											<ul class="sub_list">
												<h4 class="m_10">style</h4>
												<li><a href="shop.html">Porsche Design Sport</a></li>
												<li><a href="shop.html">Porsche Design Shoes</a></li>
												<li><a href="shop.html">Porsche Design Clothing</a></li>
											</ul>
											<ul class="sub_list">
												<h4 class="m_10">Adidas Neo Label</h4>
												<li><a href="shop.html">Adidas NEO Shoes</a></li>
												<li><a href="shop.html">Adidas NEO Clothing</a></li>
											</ul>
											<ul class="sub_list1">
												<h4 class="m_10">Customise</h4>
												<li><a href="shop.html">mi adidas</a></li>
												<li><a href="shop.html">mi team</a></li>
												<li><a href="shop.html">new arrivals</a></li>
											</ul>
										</div>
										<div class="col_1_of_5 span_1_of_5">
											<h3 class="m_9">Sports</h3>
											<ul class="list1">
												<li><a href="shop.html">Basketball</a></li>
												<li><a href="shop.html">Football</a></li>
												<li><a href="shop.html">Football Boots</a></li>
												<li><a href="shop.html">Predator</a></li>
												<li><a href="shop.html">F50</a></li>
												<li><a href="shop.html">Football Clothing</a></li>
												<li><a href="shop.html">Golf</a></li>
												<li><a href="shop.html">Golf Shoes</a></li>
												<li><a href="shop.html">Golf Clothing</a></li>
												<li><a href="shop.html">Outdoor</a></li>
												<li><a href="shop.html">Outdoor Shoes</a></li>
												<li><a href="shop.html">Outdoor Clothing</a></li>
												<li><a href="shop.html">Rugby</a></li>
												<li><a href="shop.html">Running</a></li>
												<li><a href="shop.html">Running Shoes</a></li>
												<li><a href="shop.html">Boost</a></li>
												<li><a href="shop.html">Supernova</a></li>
												<li><a href="shop.html">Running Clothing</a></li>
												<li><a href="shop.html">Swimming</a></li>
												<li><a href="shop.html">Tennis</a></li>
												<li><a href="shop.html">Tennis Shoes</a></li>
												<li><a href="shop.html">Tennis Clothing</a></li>
												<li><a href="shop.html">Training</a></li>
												<li><a href="shop.html">Training Shoes</a></li>
												<li><a href="shop.html">Training Clothing</a></li>
												<li><a href="shop.html">Training Accessories</a></li>
												<li><a href="shop.html">miCoach</a></li>
												<li><a href="shop.html">All Sports</a></li>
											</ul>
										</div>
										<div class="col_1_of_5 span_1_of_5">
											<h3 class="m_9">Originals</h3>
											<ul class="list1">
												<li><a href="shop.html">Originals Shoes</a></li>
												<li><a href="shop.html">Gazelle</a></li>
												<li><a href="shop.html">Samba</a></li>
												<li><a href="shop.html">LA Trainer</a></li>
												<li><a href="shop.html">Superstar</a></li>
												<li><a href="shop.html">SL</a></li>
												<li><a href="shop.html">ZX</a></li>
												<li><a href="shop.html">Campus</a></li>
												<li><a href="shop.html">Spezial</a></li>
												<li><a href="shop.html">Dragon</a></li>
												<li><a href="shop.html">Originals Clothing</a></li>
												<li><a href="shop.html">Firebird</a></li>
												<li><a href="shop.html">Originals Accessories</a></li>
												<li><a href="shop.html">Men's Originals</a></li>
												<li><a href="shop.html">Women's Originals</a></li>
												<li><a href="shop.html">Kid's Originals</a></li>
												<li><a href="shop.html">All Originals</a></li>
											</ul>
										</div>
										<div class="col_1_of_5 span_1_of_5">
											<h3 class="m_9">Product Types</h3>
											<ul class="list1">
												<li><a href="shop.html">Shirts</a></li>
												<li><a href="shop.html">Pants & Tights</a></li>
												<li><a href="shop.html">Shirts</a></li>
												<li><a href="shop.html">Jerseys</a></li>
												<li><a href="shop.html">Hoodies & Track Tops</a></li>
												<li><a href="shop.html">Bags</a></li>
												<li><a href="shop.html">Jackets</a></li>
												<li><a href="shop.html">Hi Tops</a></li>
												<li><a href="shop.html">SweatShirts</a></li>
												<li><a href="shop.html">Socks</a></li>
												<li><a href="shop.html">Swimwear</a></li>
												<li><a href="shop.html">Tracksuits</a></li>
												<li><a href="shop.html">Hats</a></li>
												<li><a href="shop.html">Football Boots</a></li>
												<li><a href="shop.html">Other Accessories</a></li>
												<li><a href="shop.html">Sandals & Flip Flops</a></li>
												<li><a href="shop.html">Skirts & Dresseses</a></li>
												<li><a href="shop.html">Balls</a></li>
												<li><a href="shop.html">Watches</a></li>
												<li><a href="shop.html">Fitness Equipment</a></li>
												<li><a href="shop.html">Eyewear</a></li>
												<li><a href="shop.html">Gloves</a></li>
												<li><a href="shop.html">Sports Bras</a></li>
												<li><a href="shop.html">Scarves</a></li>
												<li><a href="shop.html">Shinguards</a></li>
												<li><a href="shop.html">Underwear</a></li>
											</ul>
										</div>
										<div class="col_1_of_5 span_1_of_5">
											<h3 class="m_9">Support</h3>
											<ul class="list1">
												<li><a href="shop.html">Store finder</a></li>
												<li><a href="shop.html">Customer Service</a></li>
												<li><a href="shop.html">FAQ</a></li>
												<li><a href="shop.html">Online Shop Contact Us</a></li>
												<li><a href="shop.html">about adidas Products</a></li>
												<li><a href="shop.html">Size Charts </a></li>
												<li><a href="shop.html">Ordering </a></li>
												<li><a href="shop.html">Payment </a></li>
												<li><a href="shop.html">Shipping </a></li>
												<li><a href="shop.html">Returning</a></li>
												<li><a href="shop.html">Using out Site</a></li>
												<li><a href="shop.html">Delivery Terms</a></li>
												<li><a href="shop.html">Site Map</a></li>
												<li><a href="shop.html">Gift Card</a></li>

											</ul>
											<ul class="sub_list2">
												<h4 class="m_10">Company Info</h4>
												<li><a href="shop.html">About Us</a></li>
												<li><a href="shop.html">Careers</a></li>
												<li><a href="shop.html">Press</a></li>
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="copy">
								<div class="wrap">
									<p>© All rights reserved &nbsp;<a href="http://w3layouts.com/"> BinhPhuong</a></p>
								</div>
							</div>
						</div>
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
		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	</body>
	</html>