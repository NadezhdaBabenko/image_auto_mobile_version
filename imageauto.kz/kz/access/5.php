<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Көлікті жеткізу</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/dostavka0.jpg" alt=""/></li>
				<li><img src="files/dostavka1.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>Бізге тек дәл уақыт пен орныңызды айтыңыз, ал көлік сізді тиісті жерде күтіп тұратын болады.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Жіберу</button>
		<input type="hidden" name="product" value="Доставка авто "/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>