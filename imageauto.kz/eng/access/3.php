<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Child seat</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/detskcid1.jpg" alt=""/></li>
				<li><img src="files/detskcid2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>Child car seat is today not only a convenient product for transporting children in the car, but also a mandatory item of the law. It allows the driver to fully concentrate on the road and improve the safety of the child in the event of an accident.</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Name"/>
		<input class="mask" type="text" name="phone" placeholder="Phone"/>
		<button type="submit">Send</button>
		<input type="hidden" name="product" value="Child seat"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>