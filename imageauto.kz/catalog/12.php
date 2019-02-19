<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Chrysler Town and Country</h2>
	<div class="topic">
		<span class="name">Chrysler T&C</span>
		<span>1 сутки</span>
		<span>3 суток</span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Chrysler T&C </a></span>
		<span>15 000</span>
		<span>14 000</span>
		<span>13 500</span>
		<span>12 000</span>
		<span>11 000</span>
		<span>10 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/cryaslertn1.jpg" alt=""/></li>
				<li><img src="files/cryaslertn2.jpg" alt=""/></li>
				<li><img src="files/cryaslertn3.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2008 год</p>
	<p>2. Объем - 3.3 л бензин/газ</p>
	<p>3. Цвет - серебристый металлик</p>
	<p>4. Салон - ткань</p>
	<p>5. 3-зонный климат контроль</p>
	<p>6. Автоматические двери</p>
	<p>7. CD, MP3</p>
	<p>8. Центральный замо</p>
	<p>9. Круиз контроль</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="минивэн крайслер"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>