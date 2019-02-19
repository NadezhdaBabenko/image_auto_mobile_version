<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Mercedes Benz S55 AMG</h2>
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
		<span class="name"><a href="">Mercedes Benz S55 AMG</a></span>
		<span>50 000</span>
		<span>49 000</span>
		<span>46 000</span>
		<span>44 000</span>
		<span>42 000</span>
		<span>40 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Mbenz1.jpg" alt=""/></li>
				<li><img src="files/Mbenz2.jpg" alt=""/></li>
				<li><img src="files/Mbenz3.jpg" alt=""/></li>
				<li><img src="files/Mbenz4.jpg" alt=""/></li>
				<li><img src="files/Mbenz5.jpg" alt=""/></li>
				<li><img src="files/Mbenz6.jpg" alt=""/></li>
				<li><img src="files/Mbenz7.jpg" alt=""/></li>
				
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture- 2010</p>
	<p>2. volume 5.5 l</p>
	<p>3. Color - black brilliant</p>
	<p>4. Salon - Perforated black leather</p>
	<p>5. Luke</p>
	<p>6. Two zone separate climate control</p>
	<p>7. Headrest monitors</p>
	<p>8. CD - changer, AUX</p>
	<p>9. Fridge</p>
	<p>10. Restyling</p>
	<p>11. Parktronics</p>
	<p>12. Heated and ventilation seats</p>
	<p>13. Floating front and rear seats</p>
	<p>14. Curtains on the rear frontal and rear side windows</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Mercedes Benz S55 AMG"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>