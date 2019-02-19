<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Land Cruiser Prado</h2>
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
		<span class="name"><a href="">Toyota Land Cruiser Prado</a></span>
		<span>40 000</span>
		<span>38 000</span>
		<span>35 000</span>
		<span>32 000</span>
		<span>30 000</span>
		<span>27 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/LPrado1.jpg" alt=""/></li>
				<li><img src="files/LPrado2.jpg" alt=""/></li>
				<li><img src="files/LPrado3.jpg" alt=""/></li>
				<li><img src="files/LPrado4.jpg" alt=""/></li>
				<li><img src="files/LPrado5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture - 2015</p>
	<p>2. Color - white pearl</p>
	<p>3. Salon - black leather</p>
	<p>4. Car alarms</p>
	<p>5. Auto glass closers</p>
	<p>6. Rear and front camera</p>
	<p>7. Heated seats</p>
	<p>8. Three-zone climate control</p>
	<p>9. AUX, USB, microSD, CD, DVD</p>
	<p>10. Fridge</p>
	<p>11. Fog lights</p>
    <p>12. headlight washer</p>
    <p>13. Third row of seats</p>
    <p>14. Headrest monitors</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Toyota Land Cruiser Prado"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>