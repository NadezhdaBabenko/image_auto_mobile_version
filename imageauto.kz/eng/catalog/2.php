<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Jaguar XF</h2>
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
		<span class="name"><a href="">Jaguar XF </a></span>
		<span>40 000</span>
		<span>39 000</span>
		<span>36 000</span>
		<span>34 000</span>
		<span>32 000</span>
		<span>30 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/jaguar1.jpg" alt=""/></li>
				<li><img src="files/jaguar2.jpg" alt=""/></li>
				<li><img src="files/jaguar3.jpg" alt=""/></li>
				<li><img src="files/jaguar4.jpg" alt=""/></li>
				<li><img src="files/jaguar5.jpg" alt=""/></li>
				<li><img src="files/jaguar6.jpg" alt=""/></li>
				<li><img src="files/jaguar7.jpg" alt=""/></li>
				<li><img src="files/jaguar8.jpg" alt=""/></li>
				<li><img src="files/jaguar9.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2012</p>
	<p>2. Объем 3.0 л</p>
	<p>3. Цвет - синий перламутр</p>
	<p>4. Салон - бежевая кожа</p>
	<p>5. Камера заднего вида</p>
	<p>6. Передние и задние парктроники</p>
	<p>7. Вентиляция сидений</p>
	<p>8. Подогрев сидений и руля</p>
	<p>9. PUSH Start (завод без ключа)</p>
	<p>10. Раздельный климат - контроль</p>
	<p>11. Умные поворотные фары</p>
	<p>12. Доступ без ключа</p>
	<p>13. Иммобилайзер</p>
	<p>14. Мультимедиа "BOSS", TV, DVD, MP3, CD-чейнджер на 6 дисков, AUX</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Jaguar XF"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>