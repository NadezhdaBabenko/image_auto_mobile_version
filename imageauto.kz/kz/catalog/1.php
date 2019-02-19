<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Land Cruiser Prado</h2>
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
		<span class="name"><a href="">Toyota Land Cruiser Prado</a></span>
		<span>40 000</span>
		<span>38 000</span>
		<span>35 000</span>
		<span>32 000</span>
		<span>30 000</span>
		<span>27 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/LPrado1.jpg" alt=""/></li>
				<li><img src="files/LPrado2.jpg" alt=""/></li>
				<li><img src="files/LPrado3.jpg" alt=""/></li>
				<li><img src="files/LPrado4.jpg" alt=""/></li>
				<li><img src="files/LPrado5.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2015 жыл</p>
	<p>2. Түс - ак жауһары</p>
	<p>3. Салон - қара былғары</p>
	<p>4. Дабыл автозауытпен</p>
	<p>5. Айна автожеткізгіші</p>
	<p>6. Алдынғы және артқы түсіру камерасы</p>
	<p>7. Орындық жылытқыш</p>
	<p>8. Үш аймақты климат - бақылау</p>
	<p>9. AUX, USB, microSD, CD, DVD</p>
	<p>10. Тоңазытқыш</p>
	<p>11. Туманға қарсы жарықшалар</p>
    <p>12. Фар жуғыштар</p>
    <p>13. Үшінщі қатарлы орындықтар</p>
    <p>14. Бастірегіш мониторы</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Toyota Land Cruiser Prado"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>