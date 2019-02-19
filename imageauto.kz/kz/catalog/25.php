<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Chevrolet Aveo</h2>
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
		<span class="name"><a href="">Chevrolet Aveo</a></span>
		<span>14 000</span>
		<span>13 500</span>
		<span>13 000</span>
		<span>11 000</span>
		<span>10 000</span>
		<span>9 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/aveo/001.jpg" alt=""/></li>
				<li><img src="files/aveo/002.jpg" alt=""/></li>
				<li><img src="files/aveo/003.jpg" alt=""/></li>
				<li><img src="files/aveo/004.jpg" alt=""/></li>
                <li><img src="files/aveo/005.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Шыққан жылы - 2014 жыл</p>
    <p>2. Көлемі - 1.6 л</p>
    <p>3. Түсі - қара</p>
    <p>4. Салон - мата</p>
    <p>5. Артқы бейне камерасы</p>
    <p>6. MP3, AUX</p>
    <p>7. Мультируль</p>
    <p>8. Орындық жылытқыштар, жарық датчигі, жаңбыр датчигі, доңғалақтардағы қысым</p>
    <p>9. Bluetooth, USB</p>
    <p>10. Күндізгі жүргіш LED жарықтары</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлікті брондау</button>
		<input type="hidden" name="product" value="Chevrolet Aveo"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>