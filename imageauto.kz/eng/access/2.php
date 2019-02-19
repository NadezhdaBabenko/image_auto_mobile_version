<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Navigator</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/navigator1.jpg" alt=""/></li>
				<li><img src="files/navigator2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>Gps navigator will help you to pave the shortest path. It does not matter where you are, in the city or on the road, the navigator is the right friend on the road.
With us you can rent a gps navigator along with a car.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Send</button>
		<input type="hidden" name="product" value="Navigator"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>