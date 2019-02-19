<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Trunk for ski</h2>
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
	<p>Each of us understands perfectly well that sport is health. Today to go skiing on a ski slope is not a luxury, therefore more and more people with winter approach aspire to the snow-covered nature. In this case, the best addition to the trip to the countryside can serve as a boot for skiing.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Send</button>
		<input type="hidden" name="product" value="Trunk for ski"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>