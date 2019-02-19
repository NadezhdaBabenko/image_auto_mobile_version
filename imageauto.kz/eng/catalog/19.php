<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>BMW 630</h2>
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
		<span class="name"><a href="">BMW 630 </a></span>
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
				<li><img src="files/image-985587b5e6e86d8c8543c38835c877f6c295b6ba773fbc7cb34faf8a33294079-V.jpg" alt=""/></li>
				<li><img src="files/image-8644432c43212c1f70ee8d447ce65af834e73cf0974552976521fd9d5edafe64-V.jpg" alt=""/></li>
				<li><img src="files/images (9).jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0062.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0063.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0065.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0066.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture2008 year</p>
	<p>2. volume 3.0 l</p>
	<p>3. Color - white</p>
	<p>4. Salon black leather</p>
	<p>5. Coupe body</p>
	<p>6. Immobilizer</p>
	<p>7. central locking</p>
	<p>8. Cruise control</p>
	<p>9. Rain sensor</p>
	<p>10. Xenon headlights</p>
	<p>11. Parktronics </p>
	<p>12. Headlight cleaning system</p>
	<p>13. AUX</p>
	<p>14. Audio system Individual</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="BMW 630"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>