<?
header('Content-type: text/html; charset=Utf-8');
?>
<div class="in">
	<h2>Радар детектор</h2>
	<div class="slider-acc">
		<div class="inner">
			<ul>
				<li><img src="files/radar1.jpg" alt=""/></li>
				<li><img src="files/radar2.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>У вас есть возможность установить на арендуемый автомобиль Радар-детектор!
	Радар-детектор - специализированный радиоприемник, устанавливаемый в автомобиль и обнаруживающий работу полицейского радара (определителя скорости) 
	и предупреждающий водителя о том, что инспектор инструментально следит за соблюдением ПДД.
	</p>
	<form action="access_more.php" class="access_more-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Отправить</button>
		<input type="hidden" name="product" value="Радар детектор"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>