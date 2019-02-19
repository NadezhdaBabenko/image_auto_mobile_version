<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Land Cruiser Prado</h2>
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
		<span class="name"><a href="">Toyota Land Cruiser Prado</a></span>
		<span>40 000</span>
		<span>38 000</span>
		<span>35 000</span>
		<span>32 000</span>
		<span>30 000</span>
		<span>27 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/LPrado/LPrado1.jpg" alt=""/></li>
				<li><img src="files/LPrado/LPrado2.jpg" alt=""/></li>
				<li><img src="files/LPrado/LPrado3.jpg" alt=""/></li>
				<li><img src="files/LPrado/LPrado4.jpg" alt=""/></li>
				<li><img src="files/LPrado/LPrado5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2015</p>
	<p>2. Цвет - белый жемчуг</p>
	<p>3. Салон - черная кожа</p>
	<p>4. Сигнализация с автозаводом</p>
	<p>5. Автодоводчик стекол</p>
	<p>6. Камера заднего и переднего вида</p>
	<p>7. Подогрев сидений</p>
	<p>8. Трех зонный климат - контроль</p>
	<p>9. AUX, USB, microSD, CD, DVD</p>
	<p>10. Холодильник</p>
	<p>11. Противотуманки</p>
    <p>12. Омыватель фар</p>
    <p>13. Третий ряд сидений</p>
    <p>14. Мониторы в подголовниках</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Toyota Land Cruiser Prado"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>