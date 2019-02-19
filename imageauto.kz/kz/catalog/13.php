<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Nissan Terrano</h2>
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
		<span class="name"><a href="">Nissan Terrano</a></span>
		<span>18 000</span>
		<span>16 500</span>
		<span>15 600</span>
		<span>14 500</span>
		<span>13 000</span>
		<span>11 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/terrano1.jpg" alt=""/></li>
				<li><img src="files/terrano2.jpg" alt=""/></li>
				<li><img src="files/terrano3.jpg" alt=""/></li>
				<li><img src="files/terrano4.jpg" alt=""/></li>
				<li><img src="files/terrano5.jpg" alt=""/></li>
				<li><img src="files/terrano6.jpg" alt=""/></li>
			
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2015 жыл</p>
	<p>2. Көлем - 2.0 л</p>
	<p>3. Түс  - ақ</p>
	<p>4. Салон - Қара былғары</p>
	<p>5. Алдыңғы электр терезелер</p>
	<p>6. Жылыту алдыңғы орындықтары</p>
	<p>7. Артқы камера</p>
	<p>8. Климат - бақылау</p>
	<p>9. Сымсыз байланыс жүйесі</p>
	<p>10. Bluetooth, USB, AUX</p>
	<p>11. Корректті фарлар</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Nissan Terrano"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>