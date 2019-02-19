<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Toyota Corolla </h2>
	<div class="topic">
		<span class="name">Цена указана за одни сутки</span>
		<span>1 сутки</span>
		<span>3 суток</span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Toyota Corolla </a></span>
		<span>23 000</span>
		<span>20 000</span>
		<span>19 000</span>
		<span>18 000</span>
		<span>16 500</span>
		<span>15 000</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/TCorolla/Tcorolla1-1.JPG" alt=""/></li>
				<li><img src="files/TCorolla/TCorolla2.JPG" alt=""/></li>
				<li><img src="files/TCorolla/TCorolla3.JPG" alt=""/></li>
				<li><img src="files/TCorolla/TCorolla4.JPG" alt=""/></li>
							</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>1. Год выпуска - 2018</p>
	<p>2. Цвет - белый жемчуг</p>
	<p>3. Кожаный салон</p>
	<p>4. АКПП </p>
	<p>5. Расход топлива 9л/100км</p>
	<p>6. Камера заднего вида</p>
	<p>7. Подогрев сидений, подогрев руля</p>
	<p>8. Климат контроль</p>
	<p>9. Аудио система с Touch Screen экраном на ос Android </p>
	<p>10. Оптитронная панель </p>
	<p>11. Мультируль </p>
    <p>12. Крепление ISOFIX</p>
    <p>13. Система стабилизации EPS</p>
    <p>14. Передние противотуманные фары</p>
	
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Toyota Corolla"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>