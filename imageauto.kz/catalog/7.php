<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Hyundai Accent</h2>
	<div class="topic">
		<span class="name">Марка авто</span>
		<span>1 сутки</span>
		<span>3 суток</span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Hynday Accent </a></span>
		<span>15 000</span>
		<span>13 500</span>
		<span>12 800</span>
		<span>12 000</span>
		<span>10 500</span>
		<span>9 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/Accent2015-1.jpg" alt=""/></li>
				<li><img src="files/Accent2015-2.jpg" alt=""/></li>
				<li><img src="files/Accent2015-3.jpg" alt=""/></li>
				<li><img src="files/Accent2015-4.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2014 года</p>
	<p>2. Объем - 1.6 л</p>
	<p>3. Цвет -  черный металлик</p>
	<p>4. Салон - черная кожа</p>
	<p>5. Камера заднего вида</p>
	<p>6. MP3</p>
	<p>7. AUX</p>
	<p>8. Подогрев сидений</p>
	<p>9. Bluetooth</p>
	<p>10. Иммобилайзер</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Hynday Accent"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>