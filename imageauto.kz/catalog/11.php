<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lexus RX 300</h2>
	<div class="topic">
		<span class="name">Lexus RX 300</span>
		<span>1 сутки</span>
		<span>3 суток </span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Lexus RX 300 </a></span>
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
				<li><img src="files/Rx300-1.jpg" alt=""/></li>
				<li><img src="files/Rx300-2.jpg" alt=""/></li>
				<li><img src="files/Rx300-3.jpg" alt=""/></li>
				<li><img src="files/Rx300-4.jpg" alt=""/></li>
				<li><img src="files/Rx300-5.jpg" alt=""/></li>
				<li><img src="files/Rx300-6.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2000 год</p>
	<p>2. Объем двигателя - 3.0 л</p>
	<p>3. Цвет - серебристый металлик</p>
	<p>4. Салон - серая кожа</p>
	<p>5. Иммобилайзер</p>
	<p>6. Подогрев cидений</p>
	<p>7. Камера заднего вида</p>
	<p>8. Электропривод сидений</p>
	<p>9. Полный электропакет</p>
	<p>10. Рейлинги</p>
	<p>11. Аудио система Mark Levinson</p>
	<p>12. AUX</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Lexus RX 300"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>