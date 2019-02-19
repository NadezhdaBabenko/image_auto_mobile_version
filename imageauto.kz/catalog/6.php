<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lada Vesta</h2>
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
		<span class="name"><a href="">Lada Vesta</a></span>
		<span>13 000</span>
		<span>12 000</span>
		<span>11 000</span>
		<span>10 000</span>
		<span>9 000</span>
		<span>8 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
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
	<p>1. Год Выпуска - 2016</p>
	<p>2. Объем 1.6 л</p>
	<p>3. Цвет - белый</p>
	<p>4. Салон - ткань</p>
	<p>5. Камера заднего вида</p>
	<p>6. Подогрев сидений</p>
	<p>7. AUX, USB, Bluetooth, Hands Free</p>
	<p>8. Передние электроподъемники</p>
	<p>9. Литые диски</p>
	<p>10. Иммобилайзер</p>
	<p>11. Корректор фар</p>
	<p>12. Электроусилитель руля</p>
	<p>13. Бортовой компьютер</p>
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