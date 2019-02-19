<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Camry 55 (2013)</h2>
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
		<span class="name"><a href="">Toyota Camry 55</a></span>
		<span>25 000</span>
		<span>24 000</span>
		<span>23 000</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/55Camry1.jpg" alt=""/></li>
				<li><img src="files/55Camry2.jpg" alt=""/></li>
				<li><img src="files/55Camry3.jpg" alt=""/></li>
				<li><img src="files/55Camry4.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture
 - 2013 year
</p>
	<p>2. Volume - 2.5 l</p>
	<p>3. Color - белый</p>
	<p>4. Salon - black leather</p>
	<p>5. Heated seats</p>
	<p>6. Xenon headlights and fog lights</p>
	<p>7. The electric drive of mirrors and glasses</p>
	<p>8. Rear View Camera</p>
	<p>9. Curtains on the rear window with electric drive</p>
	<p>10. Power Seats</p>
	<p>11. DVD player</p>
	<p>12. Navigation system</p>
		<form action="product.php" class="product-form" method="post">
			<input type="text" name="name" placeholder="Name"/>
			<input class="mask" type="text" name="phone" placeholder="Phone"/>
			<button type="submit">Book a car</button>
			<input type="hidden" name="product" value="Chrysler Town & Country5"/>
			<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
			<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
			<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
			<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
			<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
		</form>
</div>