<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lexus RX330</h2>
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
		<span class="name"><a href="">Lexus RX330</a></span>
		<span>25 000</span>
		<span>24 000</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
		<span>15 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/rx330/001.jpg" alt=""/></li>
				<li><img src="files/rx330/002.jpg" alt=""/></li>
                <li><img src="files/rx330/003.jpg" alt=""/></li>
                <li><img src="files/rx330/004.jpg" alt=""/></li>
                <li><img src="files/rx330/005.jpg" alt=""/></li>
                <li><img src="files/rx330/006.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Year of manufacture
 - 2007 year</p>
    <p>2. Объем – 3.3 л</p>
    <p>3. Color – white pearl</p>
    <p>4. Salon - leather</p>
    <p>5. Rear View Camera
</p>
    <p>6. AUX, USB, Bluetooth, Hands Free</p>
    <p>7. Heated seats</p>
    <p>8. Headlights corrector, rain sensor, light</p>
    <p>9. Electronic trunk lid, sunroof</p>
    <p>10. Climate control 2x zone, cruise control</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Lexus RX330"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>