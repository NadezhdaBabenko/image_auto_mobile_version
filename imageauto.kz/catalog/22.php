<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Hyundai Grand Starex</h2>
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
		<span class="name"><a href="">Hyundai Grand Starex</a></span>
		<span>30 000</span>
		<span>28 500</span>
		<span>26 000</span>
		<span>24 000</span>
		<span>22 000</span>
		<span>20 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/starex1.jpg" alt=""/></li>
				<li><img src="files/starex2.jpg" alt=""/></li>
				<li><img src="files/starex3.jpg" alt=""/></li>
				<li><img src="files/starex4.jpg" alt=""/></li>
				<li><img src="files/starex5.jpg" alt=""/></li>
				<li><img src="files/starex6.jpg" alt=""/></li>
				<li><img src="files/starex7.jpg" alt=""/></li>
				<li><img src="files/starex8.jpg" alt=""/></li>
				<li><img src="files/starex9.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2008 года</p>
	<p>2. Цвет - серебристый металлик</p>
	<p>3. Салон - серая кожа</p>
	<p>4. Автоматические двери</p>
	<p>5. Задний привод</p>
	<p>6. 2.5 Акпп дизель</p>
	<p>7. 8 -11 мест, Категория В</p>
	<p>8. Салон трансформер</p>
	
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Hyundai Grand Starex"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>