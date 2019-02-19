<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Volkswagen Caravelle</h2>
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
		<span class="name"><a href="">Volkswagen Caravelle</a></span>
		<span>25 000</span>
		<span>24 500</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
		<span>16 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/caravella1.jpg" alt=""/></li>
				<li><img src="files/caravella2.jpg" alt=""/></li>
				<li><img src="files/caravella3.jpg" alt=""/></li>
				<li><img src="files/caravella4.jpg" alt=""/></li>
				<li><img src="files/caravella5.jpg" alt=""/></li>
				<li><img src="files/caravella6.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2006 года</p>
	<p>2. Объем - 3.2 л, бензин/газ</p>
	<p>3. Цвет - золотистый металлик</p>
	<p>4. Салон - перфорированная кожа</p>
	<p>5. Коробка передач - механическая, 6 ступеней</p>
	<p>6. Газ/бензин</p>
	<p>7. Аудиосистема - Japan Victor Company (JVC)</p>
	<p>8. Сабвуфер</p>
	<p>9. Усилитель</p>
	<p>10. Авто акустика - SONY XS</p>
	<p>11. AUX, DVD, TV</p>
	<p>12. Камера заднего вида</p>
	<p>13. 8 мест, категория В</p>
	<p>14. Парктроники</p>
	<p>15. 2-х зонный климат - контроль</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Volkswagen Caravelle"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>