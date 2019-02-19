<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Hyundai Grand Starex</h2>
	<div class="topic">
		<span class="name">Car brand</span>
		<span>1 day</span>
		<span>3 days </span>
		<span>5 days</span>
		<span>10 days</span>
		<span>20 days</span>
		<span>30 days</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Hyundai Grand Starex</a></span>
		<span>30 000</span>
		<span>28 500</span>
		<span>26 000</span>
		<span>24 000</span>
		<span>22 000</span>
		<span>20 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/starex1.jpg" alt=""/></li>
				<li><img src="files/starex2.jpg" alt=""/></li>
				<li><img src="files/starex3.jpg" alt=""/></li>
				<li><img src="files/starex4.jpg" alt=""/></li>
				<li><img src="files/starex5.jpg" alt=""/></li>
				<li><img src="files/starex6.jpg" alt=""/></li>
				<li><img src="files/starex7.jpg" alt=""/></li>
				<li><img src="files/starex8.jpg" alt=""/></li>
				<li><img src="files/starex9.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture
 - 2008 year</p>
	<p>2. Color - silver metallic</p>
	<p>3. Salon - silver leather</p>
	<p>4. Automatic doors</p>
	<p>5. Rear drive</p>
	<p>6. 2.5 automatic diesel</p>
	<p>7. 8 -11 place, Category В</p>
	<p>8. Salon transformer</p>
	
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Hyundai Grand Starex"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>