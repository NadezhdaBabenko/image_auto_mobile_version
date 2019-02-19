<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Chevrolet Aveo</h2>
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
		<span class="name"><a href="">Chevrolet Aveo</a></span>
		<span>14 000</span>
		<span>13 500</span>
		<span>13 000</span>
		<span>11 000</span>
		<span>10 000</span>
		<span>9 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/aveo/001.jpg" alt=""/></li>
				<li><img src="files/aveo/002.jpg" alt=""/></li>
				<li><img src="files/aveo/003.jpg" alt=""/></li>
				<li><img src="files/aveo/004.jpg" alt=""/></li>
                <li><img src="files/aveo/005.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Год выпуска - 2014 года</p>
    <p>2. Объем - 1.6 л</p>
    <p>3. Цвет - черный</p>
    <p>4. Салон - ткань</p>
    <p>5. Камера заднего вида</p>
    <p>6. MP3, AUX</p>
    <p>7.Мультируль</p>
    <p>8. Подогрев сидений, датчик света, дождя, давления в шинах</p>
    <p>9. Bluetooth, USB</p>
    <p>10. Дневные ходовые огни LED</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Chevrolet Aveo"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>