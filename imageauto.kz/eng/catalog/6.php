<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lada Vesta</h2>
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
		<span class="name"><a href="">Lada Vesta</a></span>
		<span>12 000</span>
		<span>11 000</span>
		<span>10 800</span>
		<span>9 600</span>
		<span>8 400</span>
		<span>7 200</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Lada_Vesta_1.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_2.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_3.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_4.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_5.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_6.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Year of manufacture
 - 2016</p>
	<p>2. Volume 1.6 l</p>
	<p>3. Color - белый</p>
	<p>4. Salon - ткань</p>
	<p>5. Rear View Camera
</p>
	<p>6. Heated seats</p>
	<p>7. AUX, USB, Bluetooth, Hands Free</p>
	<p>8. Front electric lifts</p>
	<p>9. Alloy wheels

</p>
	<p>10. Immobilizer</p>
	<p>11. Headlights corrector</p>
	<p>12. Electric power steering</p>
	<p>13. On-board computer
</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Book a car</button>
		<input type="hidden" name="product" value="Mazda 6"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>