<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>BMW X6</h2>
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
		<span class="name"><a href="">BMW X6</a></span>
		<span>60 000</span>
		<span>58 000</span>
		<span>55 000</span>
		<span>52 000</span>
		<span>50 000</span>
		<span>45 000</span>
	</div>
	<div class="slider-images">
		<div class="inner">
			<ul>
				<li><img src="files/x6/001.jpg" alt=""/></li>
				<li><img src="files/x6/002.jpg" alt=""/></li>
                <li><img src="files/x6/003.jpg" alt=""/></li>
                <li><img src="files/x6/004.jpg" alt=""/></li>
                <li><img src="files/x6/005.jpg" alt=""/></li>
                <li><img src="files/x6/006.jpg" alt=""/></li>
                <li><img src="files/x6/007.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
    <p>1. Шыққан жылы  - 2011</p>
    <p>2. Көлем 3.0 л</p>
    <p>3. Түс - қара жауһары</p>
    <p>4. Салон – перфорацияланған былғары</p>
    <p>5. Люк</p>
    <p>6. Екі аймақты климат - бақылау</p>
    <p>7. CD - чейнджер, AUX, Bluetooth, Hands Free</p>
    <p>8. Корректор ауқымы, жаңбыр датчигі</p>
    <p>9. Жылыту және желдетілетін орындықтар</p>
    <p>10. Қалқыма алдыңғы және артқы орындықтар</p>
    <p>11. Климат бақылау 2х аймағы, Круиз бақылау</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөны"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Көлік брондау</button>
		<input type="hidden" name="product" value="BMW X6"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>