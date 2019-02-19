<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Mazda 6</h2>
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
		<span class="name"><a href="">Mazda 6</a></span>
		<span>18 000</span>
		<span>17 000</span>
		<span>16 000</span>
		<span>14 000</span>
		<span>12 500</span>
		<span>10 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Mazda6-1.jpg" alt=""/></li>
				<li><img src="files/Mazda6-2.jpg" alt=""/></li>
				<li><img src="files/Mazda6-3.jpg" alt=""/></li>
				<li><img src="files/Mazda6-4.jpg" alt=""/></li>
				
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2012</p>
	<p>2. Объем 2.5 л</p>
	<p>3. Цвет - темно серый металлик</p>
	<p>4. Салон - перфорированная черная кожа</p>
	<p>5. Подогрев сидений</p>
	<p>6. Камера заднего вида</p>
	<p>7. Климат - контроль</p>
	<p>8. Сигнализация с автозаводом</p>
	<p>9. Мультируль</p>
	<p>10. Мультимедиа MP3, AUX, USB</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Mazda 6"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>