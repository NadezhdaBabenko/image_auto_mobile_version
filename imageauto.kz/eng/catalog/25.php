<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Chevrolet Aveo</h2>
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
		<span class="name"><a href="">Chevrolet Aveo</a></span>
		<span>14 000</span>
		<span>13 500</span>
		<span>13 000</span>
		<span>11 000</span>
		<span>10 000</span>
		<span>9 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/aveo/001.jpg" alt=""/></li>
				<li><img src="files/aveo/002.jpg" alt=""/></li>
				<li><img src="files/aveo/003.jpg" alt=""/></li>
				<li><img src="files/aveo/004.jpg" alt=""/></li>
                <li><img src="files/aveo/005.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Year of manufacture
 - 2014 year</p>
    <p>2. Volume - 1.6 l</p>
    <p>3. Color - черный</p>
    <p>4. Salon - ткань</p>
    <p>5. Rear View Camera
</p>
    <p>6. MP3, AUX</p>
    <p>7.Multi-wheel</p>
    <p>8. Heated seats, sensor light, rain, tire pressure</p>
    <p>9. Bluetooth, USB</p>
    <p>10. Daytime running lights LED</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Chevrolet Aveo"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>