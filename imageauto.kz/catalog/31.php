<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Mercedes-Benz  221</h2>
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
		<span class="name"><a href="">Mercedes-Benz 221</a></span>
		<span>60 000</span>
		<span>58 000</span>
		<span>55 000</span>
		<span>52 000</span>
		<span>50 000</span>
		<span>45 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/MercS221/m1.JPG" alt=""/></li>
				<li><img src="files/MercS221/m2.JPG" alt=""/></li>
				<li><img src="files/MercS221/m3.JPG" alt=""/></li>
				<!-- <li><img src="files/MercS221/m4.JPG" alt=""/></li> -->
				<li><img src="files/MercS221/m5.JPG" alt=""/></li>
				<!-- <li><img src="files/MercS221/m6.JPG" alt=""/></li> -->
				<li><img src="files/MercS221/m7.JPG" alt=""/></li>
				<li><img src="files/MercS221/m8.JPG" alt=""/></li>
				<li><img src="files/MercS221/m9.JPG" alt=""/></li>
				<li><img src="files/MercS221/m10.JPG" alt=""/></li>
				<li><img src="files/MercS221/m11.JPG" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2008</p>
	<p>2. Объем 3.5 л</p>
	<p>3. Цвет - черный металлик</p>
	<p>4. Салон - перфорированная черная кожа</p>
	<p>5. Люк</p>
	<p>6. Двух зонный раздельный климат-контроль</p>
	<p>7. CD чейнджер</p>
	<p>8. AUX</p>
	<p>9. Парктроники</p>
	<p>10. Подогрев и вентиляция сидений</p>
	<p>11. Плавающие передние и задние сидения</p>
	<p>12. Шторка на заднем лобовом стекле</p>
	<p>13. Кузов Long</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Chrysler Town & Country5"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>