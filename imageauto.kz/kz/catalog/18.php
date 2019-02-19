<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Camry 55 (2013)</h2>
	<div class="topic">
		<span class="name">Көлік аркасы</span>
		<span>1 тәулік</span>
		<span>3 тәулік </span>
		<span>5 тәулік</span>
		<span>10 тәулік</span>
		<span>20 тәулік</span>
		<span>30 тәулік</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Camry 55</a></span>
		<span>25 000</span>
		<span>24 000</span>
		<span>23 000</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/55Camry1.jpg" alt=""/></li>
				<li><img src="files/55Camry2.jpg" alt=""/></li>
				<li><img src="files/55Camry3.jpg" alt=""/></li>
				<li><img src="files/55Camry4.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2013 жыл</p>
	<p>2. Көлемі - 2.5 л</p>
	<p>3. Түсі - ақ</p>
	<p>4. Салон - қара былғары</p>
	<p>5. Орындық жылытқыштар</p>
	<p>6. Ксенононды және тұманға қарсы фарлары</p>
	<p>7. Айналар мен әйнектердің электрооткізгіштігі</p>
	<p>8. Артқы бейне камерасы</p>
	<p>9. Артқы айна пердесі</p>
	<p>10. Орындықтардың электроөткізгіші</p>
	<p>11. DVD ойнатқыш</p>
	<p>12. Навигацлық жүйе</p>
		<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлікті брондау</button>
		<input type="hidden" name="product" value="Chrysler Town & Country5"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>