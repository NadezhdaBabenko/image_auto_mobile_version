<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Nissan Terrano</h2>
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
		<span class="name"><a href="">Nissan Terrano</a></span>
		<span>18 000</span>
		<span>16 500</span>
		<span>15 600</span>
		<span>14 500</span>
		<span>13 000</span>
		<span>11 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/terrano1.jpg" alt=""/></li>
				<li><img src="files/terrano2.jpg" alt=""/></li>
				<li><img src="files/terrano3.jpg" alt=""/></li>
				<li><img src="files/terrano4.jpg" alt=""/></li>
				<li><img src="files/terrano5.jpg" alt=""/></li>
				<li><img src="files/terrano6.jpg" alt=""/></li>
			
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2015</p>
	<p>2. Объем - 2.0 л</p>
	<p>3. Цвет - белый</p>
	<p>4. Салон - черная кожа</p>
	<p>5. Передние электростеклоподъемники</p>
	<p>6. Подогрев передних сидений</p>
	<p>7. Камера заднего вида</p>
	<p>8. Климат - контроль</p>
	<p>9. Система беспроводной связи</p>
	<p>10. Bluetooth, USB, AUX</p>
	<p>11. Корректор фар</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Nissan Terrano"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>