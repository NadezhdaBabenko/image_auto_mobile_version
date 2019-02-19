<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>BMW X6</h2>
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
		<span class="name"><a href="">BMW X6</a></span>
		<span>60 000</span>
		<span>58 000</span>
		<span>55 000</span>
		<span>52 000</span>
		<span>50 000</span>
		<span>45 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/x6/001.jpg" alt=""/></li>
				<li><img src="files/x6/002.jpg" alt=""/></li>
                <li><img src="files/x6/003.jpg" alt=""/></li>
                <li><img src="files/x6/004.jpg" alt=""/></li>
                <li><img src="files/x6/005.jpg" alt=""/></li>
                <li><img src="files/x6/006.jpg" alt=""/></li>
                <li><img src="files/x6/007.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Year of manufacture- 2011</p>
    <p>2. volume 3.0 л</p>
    <p>3. Color - черный бриллиант</p>
    <p>4. Salon – перфорированная кожа</p>
    <p>5. Luke</p>
    <p>6. Two zone separate climate control</p>
    <p>7. CD - changer, AUX, Bluetooth, Hands Free</p>
    <p>8. Headlight corrector, rain sensor, light</p>
    <p>9. Heated and ventilation seats</p>
    <p>10. Floating front and rear seats</p>
    <p>11. Climate control 2x zone, cruise control</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="BMW X6"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>