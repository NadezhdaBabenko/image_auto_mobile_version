<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>BMW 630</h2>
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
		<span class="name"><a href="">BMW 630 </a></span>
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
	<p>1. Шыққан жылы 2008 год</p>
	<p>2. Көлем 3.0 л</p>
	<p>3. Түс - ақ</p>
	<p>4. Салон - қара былғары</p>
	<p>5. Көлік денесі - бөлімше</p>
	<p>6. Иммобилайзер</p>
	<p>7. Орталық құлып</p>
	<p>8. Круиз - бақылау</p>
	<p>9. Жаңбыр датчигі</p>
	<p>10. Ксено фарлар</p>
	<p>11. Парктроника </p>
	<p>12. Жуғыш фарлар</p>
	<p>13. AUX</p>
	<p>14. Дыбыс жүйесі Individual</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="BMW 630"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>