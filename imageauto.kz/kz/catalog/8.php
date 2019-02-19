<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Corolla 2014 г.в.</h2>
	<div class="topic">
		<span class="name">Көлік маркасы</span>
		<span>1 тәулік</span>
		<span>3 тәулік </span>
		<span>5 тәулік</span>
		<span>10 тәулік</span>
		<span>20 тәулік</span>
		<span>30 тәулік</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Corolla 2014 г.в.</a></span>
		<span>20 000</span>
		<span>19 500</span>
		<span>17 000</span>
		<span>15 000</span>
		<span>14 000</span>
		<span>12 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/TCorolla1.jpg" alt=""/></li>
				<li><img src="files/TCorolla2.jpg" alt=""/></li>
				<li><img src="files/TCorolla3.jpg" alt=""/></li>
				<li><img src="files/TCorolla4.jpg" alt=""/></li>
				<li><img src="files/TCorolla5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы -2014</p>
	<p>2. Түс - қара металл</p>
	<p>3. Салон - қара былғары</p>
	<p>4. Навигация</p>
	<p>5. Дисплей Touchscreen</p>
	<p>6. CD, AUX, Bluetooth</p>
	<p>7. Артқы камера</p>
	<p>8. Жылытқыш орындық</p>
	<p>9. Мультируль</p>
	<p>10. Корректті фарлар</p>
	<p>11. Парктроник</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Toyota Corolla 2014 г.в."/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>