<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lexus RX330</h2>
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
		<span class="name"><a href="">Lexus RX330</a></span>
		<span>25 000</span>
		<span>24 000</span>
		<span>22 000</span>
		<span>20 000</span>
		<span>18 000</span>
		<span>15 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/rx330/001.jpg" alt=""/></li>
				<li><img src="files/rx330/002.jpg" alt=""/></li>
                <li><img src="files/rx330/003.jpg" alt=""/></li>
                <li><img src="files/rx330/004.jpg" alt=""/></li>
                <li><img src="files/rx330/005.jpg" alt=""/></li>
                <li><img src="files/rx330/006.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Шыққан жылы - 2007 года</p>
    <p>2. Көлем – 3.3 л</p>
    <p>3. Түс – ақ гауһар</p>
    <p>4. Салон - былғары</p>
    <p>5. Артқы камера көрінісі</p>
    <p>6. AUX, USB, Bluetooth, Hands Free</p>
    <p>7. Орындық жылытқышы</p>
    <p>8. Корректор ауқымы, жаңбыр датчигі</p>
    <p>9. Электрондық жүктеу қақпағы, люк</p>
    <p>10. Климат бақылау 2х аймағы, Круиз бақылау</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Lexus RX330"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>