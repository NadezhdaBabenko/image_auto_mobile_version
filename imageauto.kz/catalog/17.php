<?
header('Content-type: text/html; charset=Utf-8');
?>
<a class="close" onclick="$('#details').dialog('close'); return false;" href=""></a>
<div class="in">
	<h2>Mercedes-Benz 221(E280)</h2>
	<div class="topic">
		<span class="name">Марка авто</span>
		<span>1 сутки</span>
		<span>3 суток </span>
		<span>5 суток</span>
		<span>10 суток</span>
		<span>20 суток</span>
		<span>30 суток</span>
	</div>
	<div class="price">
		<span class="name"><a href="">Mercedes-Benz 221(E280) (2008)</a></span>
		<span>18 000</span>
		<span>17 000</span>
		<span>16 200</span>
		<span>14 400</span>
		<span>12 600</span>
		<span>10 800</span>
	</div>
	<div class="slider-images">
		<div class="inner sliderSuka">
			<ul>
				<li><img src="files/mercedese1.jpg" alt=""/></li>
				<li><img src="files/mercedese2.jpg" alt=""/></li>
				<li><img src="files/mercedese3.jpg" alt=""/></li>
			</ul>
		</div>
		<a class="arr-l" href=""></a>
		<a class="arr-r" href=""></a>
	</div>
	<p>Как ни крути, а внешний вид Mercedes-Benz E-classe не внушает уважения на дороге, так что приходится добирать положительные баллы 
	немного другими методами. В то время как мощный световой пучок ксеноновых ламп добавляет автомобилю значимости на дороге, мотор в подкапотном 
	пространстве готовится объяснить участникам дорожного движения, что Mercedes-Benz ускоряется ничуть не хуже своих основных конкурентов. 
	Модификация E350 4matic снабжается двигателем V6, обновленная мощность которого равняется 272 л.с. при 6000 об/мин, а значение крутящего момента 
	в 350 Нм достигается на промежутке с 2400 по 5000 об/мин. Этот агрегат с готовностью реагирует на педаль, правда, лишь в режиме “S”, так как комфорт 
	в режиме “C” не может быть разрушен даже резким нажатием на педаль акселератора. Безусловно, радует баланс управляемости и динамики, на которые можно 
	смотреть лишь через призму фирменного комфорта.</p>
	<form action="product.php" class="product-form" method="post">
		<input type="text" name="name" placeholder="Имя"/>
		<input class="mask" type="text" name="phone" placeholder="Телефон"/>
		<button type="submit">Забронировать авто</button>
		<input type="hidden" name="product" value="Chrysler Town & Country5"/>
		<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']?>" />
		<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']?>" />
		<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']?>" />
		<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']?>" />
		<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']?>" />
	</form>
</div>