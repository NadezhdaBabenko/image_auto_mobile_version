<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>MERCEDES G-КЛАСС (Бензин-газ), стайлинг 2007</h2>
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
		<span class="name"><a href="">MERCEDES G55</a></span>
		<span>50 000</span>
		<span>48 000</span>
		<span>46 000</span>
		<span>43 000</span>
		<span>40 000</span>
		<span>38 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<!-- <li><img src="files/g55/001.jpg" alt=""/></li>
				<li><img src="files/g55/002.jpg" alt=""/></li>
				<li><img src="files/g55/003.jpg" alt=""/></li>
				<li><img src="files/g55/004.jpg" alt=""/></li>
				<li><img src="files/g55/005.jpg" alt=""/></li>
				<li><img src="files/g55/006.jpg" alt=""/></li>
				<li><img src="files/g55/007.jpg" alt=""/></li> -->
				
				<li><img src="files/GelikDenis/g1.jpg" alt=""/></li>
				<li><img src="files/GelikDenis/g2.jpg" alt=""/></li>
				<li><img src="files/GelikDenis/g3.jpg" alt=""/></li>
				<li><img src="files/GelikDenis/g4.jpg" alt=""/></li>
				<li><img src="files/GelikDenis2/g1.jpg" alt=""/></li>
				<li><img src="files/GelikDenis2/g2.jpg" alt=""/></li>
				<li><img src="files/GelikDenis2/g3.jpg" alt=""/></li>
				<li><img src="files/GelikDenis2/g4.jpg" alt=""/></li>
				<li><img src="files/GelikDenis2/g5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2010</p>
	<p>2. Цвет - черный бриллиант</p>
	<p>3. Салон - перфорированная кожа</p>
	<p>4. Люк</p>
	<p>5. Двухзонный раздельный климат контроль</p>
	<p>6. Мониторы в подголовниках</p>
	<p>7. CD-чейнджер</p>
	<p>8. AUX</p>
	<p>9. Холодильник</p>
	<p>10. Рестайлинг</p>
	<p>11. Парктроники</p>
	<p>12. Подогрев и вентиляция сидений</p>
	<p>13. Плавающие передние и задние сиденья</p>
	<p>14. Шторки на задних стёклах</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Гелендваген"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>