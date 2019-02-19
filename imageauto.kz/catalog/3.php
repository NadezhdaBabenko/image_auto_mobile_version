<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Mercedes Benz S55 AMG</h2>
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
		<span class="name"><a href="">Mercedes Benz S55 AMG</a></span>
		<span>50 000</span>
		<span>49 000</span>
		<span>46 000</span>
		<span>44 000</span>
		<span>42 000</span>
		<span>40 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/Mbenz1.jpg" alt=""/></li>
				<li><img src="files/Mbenz2.jpg" alt=""/></li>
				<li><img src="files/Mbenz3.jpg" alt=""/></li>
				<li><img src="files/Mbenz4.jpg" alt=""/></li>
				<li><img src="files/Mbenz5.jpg" alt=""/></li>
				<li><img src="files/Mbenz6.jpg" alt=""/></li>
				<li><img src="files/Mbenz7.jpg" alt=""/></li>
				
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2010</p>
	<p>2. Объем 5.5 л</p>
	<p>3. Цвет - черный бриллиант</p>
	<p>4. Салон - перфорированная черная кожа</p>
	<p>5. Люк</p>
	<p>6. Двух зонный раздельный климат контроль</p>
	<p>7. Мониторы в подголовниках</p>
	<p>8. CD - чейнджер, AUX</p>
	<p>9. Холодильник</p>
	<p>10. Рейсталинг</p>
	<p>11. Парктроники</p>
	<p>12. Подогрев и вентиляция сидений</p>
	<p>13. Плавающие передние и задние сидения</p>
	<p>14. Шторки на заднем лобовом и задних боковых стеклах</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Mercedes Benz S55 AMG"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>