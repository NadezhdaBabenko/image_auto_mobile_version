<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Recorders</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/regis1.jpg" alt=""/></li>
				<li><img src="files/regis2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>This compact device does not just add to the list of car features a video recording function, but also helps to cope with the consequences of unpredictable situations on the road.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Send</button>
		<input type="hidden" name="product" value="Регистраторы"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>