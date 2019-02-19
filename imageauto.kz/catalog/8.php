<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Corolla 2017 г.в.</h2>
	<div class="topic">
		<span class="name">Марка авто</span>
		<span>1 сутки</span>
		<span>3 суток </span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Corolla 2017 г.в.</a></span>
		<span>20 000</span>
		<span>19 000</span>
		<span>18 000</span>
		<span>17 000</span>
		<span>16 000</span>
		<span>15 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/toyotaC2017/toyotaC2017_1.JPG" alt=""/></li>
				<li><img src="files/toyotaC2017/toyotaC2017_2.JPG" alt=""/></li>
				<li><img src="files/toyotaC2017/toyotaC2017_3.JPG" alt=""/></li>
				<li><img src="files/toyotaC2017/toyotaC2017_4.JPG" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска -2014</p>
	<p>2. Цвет - черный металлик</p>
	<p>3. Салон - черная кожа</p>
	<p>4. Навигация</p>
	<p>5. Дисплей Touchscreen</p>
	<p>6. CD, AUX, Bluetooth</p>
	<p>7. Камера заднего вида</p>
	<p>8. Подогрев сидений</p>
	<p>9. Мультируль</p>
	<p>10. Корректор фар</p>
	<p>11. Парктроники</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Toyota Corolla 2014 г.в."/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>