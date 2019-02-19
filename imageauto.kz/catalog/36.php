<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>MERCEDES VIANO</h2>
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
		<span class="name"><a href="">MERCEDES VIANO</a></span>
		<span>25 000</span>
		<span>24 000</span>
		<span>23 000</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/vianoImg/viano1.jpeg" alt=""/></li>
				<li><img src="files/vianoImg/viano2.jpg" alt=""/></li>
				<li><img src="files/vianoImg/viano3.jpg" alt=""/></li>
				<li><img src="files/CamryBlack70/camry70.4.jpeg" alt=""/></li>
				<li><img src="files/CamryBlack70/camry70.5.jpeg" alt=""/></li>
				<li><img src="files/CamryBlack70/camry70.6.jpeg" alt=""/></li>
				<li><img src="files/CamryBlack70/camry70.7.jpeg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2017 год</p>
	<p>2. Объем - 2.1 л</p>
	<p>3. Цвет - белый</p>
	<p>4. Салон - кожа</p>
	<p>5. Подогрев сидений</p>
	<p>6. Мультируль</p>
	<p>7. Электропривод зеркал и стекол</p>
	<p>8. Бортовой компьютер</p>
	<p>9. Датчики света, дождя, полный электропакет.</p>
	<p>10. Аудиосистема</p>
	<p>11. Навигационная система</p>
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