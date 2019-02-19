<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota RAV4</h2>
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
		<span class="name"><a href="">Toyota RAV4</a></span>
		<span>15 000</span>
		<span>14 000</span>
		<span>13 000</span>
		<span>12 000</span>
		<span>11 000</span>
		<span>10 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/Rav4/rav2.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav3.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav4.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav5.JPG" alt=""/></li>
				<!-- <li><img src="files/Rav4/rav6.JPG" alt=""/></li> -->
				<li><img src="files/Rav4/rav7.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav8.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav9.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav10.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav11.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav12.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav13.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav14.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav15.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav16.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav17.JPG" alt=""/></li>
				<li><img src="files/Rav4/rav18.JPG" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Год выпуска - 2017 года</p>
    <p>2. Объем - 2.0 л</p>
    <p>3. Цвет - белый</p>
    <p>4. Салон - ткань</p>
    <p>5. Камера заднего вида</p>
    <p>6. Адаптивный круиз-контроль</p>
    <p>7. MP3, AUX</p>
    <p>8. Подогрев сидений и руля</p>
    <p>9. Bluetooth</p>
    <p>10. Иммобилайзер</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Volkswagen Polo"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>