<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Camry 55</h2>
	<div class="topic">
		<span class="name">Көлік маркасы</span>
		<span>1 тәулік</span>
		<span>3 тәулік </span>
		<span>5 тәулік</span>
		<span>10 тәулік</span>
		<span>20 тәулік</span>
		<span>30 тәулік</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Camry 55</a></span>
		<span>30 000</span>
		<span>29 000</span>
		<span>27 000</span>
		<span>25 000</span>
		<span>23 000</span>
		<span>21 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Camry551.jpg" alt=""/></li>
				<li><img src="files/Camry552.jpg" alt=""/></li>
				<li><img src="files/Camry553.jpg" alt=""/></li>
				<li><img src="files/Camry554.jpg" alt=""/></li>
				
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2015 год</p>
	<p>2. Көлем - 2.5 л</p>
	<p>3. Түс - қара металл</p>
	<p>4. Салон - қара былғары</p>
	<p>5. Орындық жылытқышы</p>
	<p>6. Ксендік фарлар және туманға қарсы жарықшалар</p>
	<p>7. Электрөткізгіш айналар және терезе</p>
	<p>8. Артқы камера</p>
	<p>9. Шторка на заднем стекле с электроприводом</p>
	<p>10. Электрөткізгіш орындықтар</p>
	<p>11. DVD ойнатқыш</p>
	<p>12. Навигация жүйесі</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Toyota Camry 55"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>