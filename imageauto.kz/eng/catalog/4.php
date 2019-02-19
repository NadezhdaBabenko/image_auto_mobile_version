<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>MERCEDES G-КЛАСС (Petrol gas), styling 2007</h2>
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
		<span class="name"><a href="">MERCEDES G55</a></span>
		<span>50 000</span>
		<span>48 000</span>
		<span>46 000</span>
		<span>43 000</span>
		<span>40 000</span>
		<span>38 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/g55/001.jpg" alt=""/></li>
				<li><img src="files/g55/002.jpg" alt=""/></li>
				<li><img src="files/g55/003.jpg" alt=""/></li>
				<li><img src="files/g55/004.jpg" alt=""/></li>
				<li><img src="files/g55/005.jpg" alt=""/></li>
				<li><img src="files/g55/006.jpg" alt=""/></li>
                <li><img src="files/g55/007.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture- 2000</p>
	<p>2. Color - Black metallic</p>
	<p>3. Salon - Perforated light brown leather</p>
	<p>4. Restyling for Mercedes Benz G 6.3 AMG 2014 year</p>
	<p>5. CD - changer</p>
	<p>6. AUX</p>
	<p>7. Rear View Camera
</p>
	<p>8. Subwoofer</p>
	<p>9. Petrol / gas</p>
	<p>10. Car alarms</p>
	<p>11. Alloy wheels R20 original</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Гелендваген"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>