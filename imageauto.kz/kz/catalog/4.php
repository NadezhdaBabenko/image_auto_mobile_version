<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>MERCEDES G-КЛАСС (Бензин-газ), стайлинг 2007</h2>
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
		<span class="name"><a href="">MERCEDES G55</a></span>
		<span>50 000</span>
		<span>48 000</span>
		<span>46 000</span>
		<span>43 000</span>
		<span>40 000</span>
		<span>38 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/g55/001.jpg" alt=""/></li>
				<li><img src="files/g55/002.jpg" alt=""/></li>
				<li><img src="files/g55/003.jpg" alt=""/></li>
				<li><img src="files/g55/004.jpg" alt=""/></li>
				<li><img src="files/g55/005.jpg" alt=""/></li>
				<li><img src="files/g55/006.jpg" alt=""/></li>
                <li><img src="files/g55/007.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2000</p>
	<p>2. Түс - қара металл</p>
	<p>3. Салон - перфорацияланған жарық - қоңыр былғары</p>
	<p>4. Рестайлинг Mercedes Benz G 6.3 AMG 2014 жылғыға</p>
	<p>5. CD - чейнджер</p>
	<p>6. AUX</p>
	<p>7. Артқы камера</p>
	<p>8. Сабвуфер</p>
	<p>9. Бензин/газ</p>
	<p>10. Автозауыты бар дабыл</p>
	<p>11. Литті дискілер R20 түпнұсқа</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Гелендваген"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>