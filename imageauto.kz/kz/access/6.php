<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Шаңғыға арналған салғыш</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/lizhybagazhnik1.jpg" alt=""/></li>
				<li><img src="files/lizhybagazhnik2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>Спорттың денсаулыққа пайдалы екенін бәріміз білеміз. Қазіргі кезде адамдар шаңғы тебу үшін қыс мезгілінде қарлы табиғатқа ұмтылып жатады. Сондай маңызды жағдайда сыртқы жолға шығу үшін толықтандырылған шаңғыға арналған салғыштың керемет пайдасы тиюі мүмкін.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Аты-жөні"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Жіберу</button>
		<input type="hidden" name="product" value="Багажник для лыж "/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>