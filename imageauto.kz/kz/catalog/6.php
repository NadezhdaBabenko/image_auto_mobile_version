<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lada Vesta</h2>
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
		<span class="name"><a href="">Lada Vesta</a></span>
		<span>12 000</span>
		<span>11 000</span>
		<span>10 800</span>
		<span>9 600</span>
		<span>8 400</span>
		<span>7 200</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Lada_Vesta_1.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_2.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_3.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_4.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_5.jpg" alt=""/></li>
				<li><img src="files/Lada_Vesta_6.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы  - 2016</p>
	<p>2. Көлем 1.6 л</p>
	<p>3. Түс - ақ</p>
	<p>4. Салон - мата</p>
	<p>5. Артқы камера</p>
	<p>6. Жылытқыш орындық</p>
	<p>7. AUX, USB, Bluetooth, Hands Free</p>
	<p>8. Алдынғы электркөтергіштер</p>
	<p>9. Литті дискі</p>
	<p>10. Иммобилайзер</p>
	<p>11. Корректор фары</p>
	<p>12. Электрқуаты руль</p>
	<p>13. Борттық компьютер</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Mazda 6"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>