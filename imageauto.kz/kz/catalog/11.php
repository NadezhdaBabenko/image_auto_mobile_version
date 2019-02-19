<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Lexus RX 300</h2>
	<div class="topic">
		<span class="name">Lexus RX 300</span>
		<span>1 тәулік</span>
		<span>3 тәулік </span>
		<span>5 тәулік</span>
		<span>10 тәулік</span>
		<span>20 тәулік</span>
		<span>30 тәулік</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Lexus RX 300 </a></span>
		<span>15 000</span>
		<span>13 500</span>
		<span>12 800</span>
		<span>12 000</span>
		<span>10 500</span>
		<span>9 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/Rx300-1.jpg" alt=""/></li>
				<li><img src="files/Rx300-2.jpg" alt=""/></li>
				<li><img src="files/Rx300-3.jpg" alt=""/></li>
				<li><img src="files/Rx300-4.jpg" alt=""/></li>
				<li><img src="files/Rx300-5.jpg" alt=""/></li>
				<li><img src="files/Rx300-6.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Шыққан жылы - 2000 жыл</p>
	<p>2. Қозғалтқыш көлемі - 3.0 л</p>
	<p>3. Түс - күміс металлик</p>
	<p>4. Салон - сұр былғары</p>
	<p>5. Иммобилайзер</p>
	<p>6. Жылытқыш орындық</p>
	<p>7. Артқы көрінісі</p>
	<p>8. Электроөткізгіштік орындық</p>
	<p>9. толық Электропакет</p>
	<p>10. Рейлинги</p>
	<p>11. Аудио жүйе Mark Levinson</p>
	<p>12. AUX</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөн"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="Lexus RX 300"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>