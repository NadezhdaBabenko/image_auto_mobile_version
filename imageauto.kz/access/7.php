<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Багажник для велосипеда </h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/velobagazhnik1.jpg" alt=""/></li>
				<li><img src="files/velobagazhnik2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>По дороге или без нее. Если вы путешествуете в одиночку, с семьей, с друзьями, куда бы вы ни направлялись, вам пригодится безопасный, надежный и простой в использовании багажник для велосипедов</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Отправить</button>
		<input type="hidden" name="product" value="Багажник для велосипеда"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>