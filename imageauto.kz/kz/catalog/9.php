<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Corolla</h2>
	<div class="topic">
		<span class="name">Toyota Corolla</span>
		<span>1 сутки</span>
		<span>3 суток </span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Corolla </a></span>
		<span>14 000</span>
		<span>13 000</span>
		<span>12 000</span>
		<span>11 000</span>
		<span>9 000</span>
		<span>8 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Toyota1.jpg" alt=""/></li>
				<li><img src="files/Toyota2.jpg" alt=""/></li>
				<li><img src="files/Toyota3.jpg" alt=""/></li>
				<li><img src="files/Toyota4.jpg" alt=""/></li>
				<li><img src="files/Toyota5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Объем 1.6 л</p>
	<p>2. Цвет - Серебристый металлик</p>
	<p>3. Салон - велюр</p>
	<p>4. Камера заднего вида</p>
	<p>5. Ксенон</p>
	<p>6. CD, MP3, AUX, USB</p>
	<p>7. Подогрев сидений</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Toyota Corolla"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>