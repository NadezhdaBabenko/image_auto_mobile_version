<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>BMW 630</h2>
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
		<span class="name"><a href="">BMW 630 </a></span>
		<span>40 000</span>
		<span>38 000</span>
		<span>35 000</span>
		<span>32 000</span>
		<span>30 000</span>
		<span>27 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/image-985587b5e6e86d8c8543c38835c877f6c295b6ba773fbc7cb34faf8a33294079-V.jpg" alt=""/></li>
				<li><img src="files/image-8644432c43212c1f70ee8d447ce65af834e73cf0974552976521fd9d5edafe64-V.jpg" alt=""/></li>
				<li><img src="files/images (9).jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0062.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0063.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0065.jpg" alt=""/></li>
				<li><img src="files/IMG-20150505-WA0066.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска 2008 год</p>
	<p>2. Объем 3.0 л</p>
	<p>3. Цвет - белый</p>
	<p>4. Салон черная кожа</p>
	<p>5. Кузов - купе</p>
	<p>6. Иммобилайзер</p>
	<p>7. Центральный замок</p>
	<p>8. Круиз - контроль</p>
	<p>9. Датчик дождя</p>
	<p>10. Ксеноновые фары</p>
	<p>11. Парктроники </p>
	<p>12. Омыватели фар</p>
	<p>13. AUX</p>
	<p>14. Аудиосистема Individual</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="BMW 630"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>