<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: text/html; charset=Utf-8');
?>
<!doctype html>
<html>
    <head>
        <meta charset=utf-8>
        <title>Прокат автомобилей в Алматы</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,400italic,700,900&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,400italic,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
        <script src="js/jquery.caroufredsel.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="top-bg">

            <div class="site-header">
                <div class="header-top">
                    <div class="wrapper">
                        <div class="menu">
                            <ul>
                                <li><a href="" data-id="1">Наш автопарк</a></li>
                                <li><a href="" data-id="2">Как мы работаем</a></li>
                                <li><a href="" data-id="3">Наши преимущества</a></li>
                                <li><a href="" data-id="4">Что вы получаете</a></li>
                                <li><a href="" data-id="5">Наши документы</a></li>
                                <li><a href="" data-id="6">Отзывы</a></li>
                            </ul>
                        </div>
                        <div class="phone">
                            <span>8 (778) 122 00 88 </span>
                            <a class="button" href="">Перезвоните мне!</a>
                        </div>
                        <div class="clear_fix"></div>
                    </div>
                </div><!-- .site-top -->

                <div class="center-header">
                    <div class="top wrap">
                        <div class="logo">
                            <img src="i/logo.png" alt=""/>
                        </div>
                        <div class="phone">
                            <span>8 (778) 122 00 88 </span>
                            <span>8 (777) 122 00 88</span>
                            <a class="button" href="">Перезвоните мне!</a>
                        </div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="menu">
                        <div class="wrap">
                            <div class="line"></div>
                            <ul>
                                <li><a href="" data-id="1"><i class="ic-1"></i><span><span>Наш автопарк</span></span></a></li>
                                <li><a href="" data-id="2"><i class="ic-2"></i><span><span>Как мы работаем</span></span></a></li>
                                <li><a href="" data-id="3"><i class="ic-3"></i><span><span>Наши<br/> преимущества</span></span></a></li>
                                <li><a href="" data-id="4"><i class="ic-4"></i><span><span>Что вы получаете</span></span></a></li>
                                <li><a href="" data-id="5"><i class="ic-5"></i><span><span>Наши <br/>документы</span></span></a></li>
                                <li><a href="" data-id="6"><i class="ic-6"></i><span><span>Отзывы</span></span></a></li>
                            </ul>
                            <div class="clear_fix"></div>
                            <div class="line rg"></div>
                        </div>
                    </div>
                </div><!-- .center-header -->

            </div><!-- .site-header -->

            <div class="promo">
                <h1>Прокат автомобилей в Алматы</h1>
                <span class="subhead">Новые автомобили от Эконом до Бизнес-класса от 6 000 тенге с оформлением за 15 минут</span>
                <div class="action wow fadeInLeft">
                    <div class="head">
                        <h3>Оставьте заявку на прокат<br/><span>авто и получите <span class="orange subtitle" style="font-size: 22px;">подарок!</span></span></h3>
                    </div>
                    <div class="counter" data-time="Feb,30,2016,00:00:00">
                        <div class="frame"></div>
                        <span class="title">До конца акции:</span><br/>
                        <span class="item">
                            <span class="h">00</span>часов
                        </span>
                        <span class="colon">:</span>
                        <span class="item">
                            <span class="m">00</span>минут
                        </span>
                        <span class="colon">:</span>
                        <span class="item">
                            <span class="s">00</span>секунд
                        </span>
                    </div>
                </div>
                <div class="form wow fadeInRight">
                    <div class="in">
                        <!--<h4>Заявка на прокат</h4>-->
                        <form action="action.php" class="action-form" method="post" style="margin-top:20px;">
                            <!--<input type="text" name="name" placeholder="Имя"/>-->
                            <input type="text" class="mask" name="phone" placeholder="Телефон"/>
                            <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                            <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                            <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                            <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                            <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                            <button type="submit">Взять авто напрокат</button>
                        </form>
                    </div>
                </div>
                <div class="clear_fix"></div>

                <ul class="vantage wrap wow fadeInUp">
                    <li>
                        <div class="icon ic-1"></div>
                        <span>3 года</span><br/>на рынке проката
                    </li>
                    <li class="wow fadeInUp">
                        <div class="icon ic-2"></div>
                        <span>100 %</span><br/>гарантия чистого исправного авто
                    </li>
                    <li>
                        <div class="icon ic-3"></div>
                        <span>36 % клиентов</span><br/>переходят в разряд постоянных
                    </li>
                    <li>
                        <div class="icon ic-4"></div>
                        <span>15 минут</span> занимает<br/>оформление авто
                    </li>
                    <li>
                        <div class="icon ic-5"></div>
                        <span>99,9% клиентов</span><br/>советуют нас друзьям
                    </li>
                </ul>

            </div>
        </div><!-- .top-bg -->
		
		<!-- блок  Как можно арендовать авто у нас?-->
		<div class="process" data-block="2">
            <h2>Как можно арендовать авто у нас?</h2>
            <div class="step wrap">
                <div class="item">
                    <span class="number">1</span>
                    <p>ЗВОНОК В ОФИС<br/><a class="call-back" href="">Оставьте заявку</a></p>
                </div>
                <div class="item">
                    <span class="number">2</span>
                    <p>Получение от вас<br/>документов онлайн</p>
                </div>
                <div class="item">
                    <span class="number">3</span>
                    <p>Встреча для<br/>подписания договора</p>
                </div>
                <div class="item">
                    <span class="number">4</span>
                    <p>Вы довольный<br/>клиент</p>
                </div>
                <div class="clear_fix"></div>
            </div>
        </div><!-- .process -->

        <div class="catalog" data-block="1">
            <div class="block-1">
                <h2>Наш автопарк</h2>
                <span class="subhead">Все автомобили на 100% прошли техобслуживание и готовы к эксплуатации</span>
                <div class="slider-fleet">
                    <div class="inner">
                        <ul>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Land Cruiser</span>
                                    <a class="img" href="" data-id="1"><img src="files/LPrado.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,7 л.</span>
                                        <span>Расход бензина - 12-15 л/100км</span>
                                    </div>
                                    <span class="price">От 30 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Land Cruiser</span></a>
                                    <a class="more" href="" data-id="1">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Jaguar XF <br>2013 г.в.</span>
                                    <a class="img" href="" data-id="2"><img src="files/Jaguar.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 3,0 л.</span>
                                        <span>Расход бензина - 15 л/100км</span>
                                    </div>
                                    <span class="price">От 30 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Jaguar XF</span></a>
                                    <a class="more" href="" data-id="2">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes Benz S55</span>
                                    <a class="img" href="" data-id="3"><img src="files/Mbenz.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 5,4 л.</span>
                                        <span>Расход бензина - 13,2 л/100км</span>
                                    </div>
                                    <span class="price">От 40 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mercedes Benz S55</span></a>
                                    <a class="more" href="" data-id="3">Подробнее</a>
                                </div>
                            </li>
							<li>
                                <div class="in">
                                    <span class="name">BMW 630 <br> 2008 г.в.</span>
                                    <a class="img" href="" data-id="19"><img src="files/BMW.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 3,0 л.</span>
                                        <span>Расход бензина - 16,8 л/100км</span>
                                    </div>
                                    <span class="price">От 22 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>BMW 630</span></a>
                                    <a class="more" href="" data-id="19">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes G55</span>
                                    <a class="img" href="" data-id="4"><img src="files/Gelin.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 5,5 л. (б/газ)</span>
                                        <span>Расход бензина - 20 л/100км</span>
                                    </div>
                                    <span class="price">От 30 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mercedes G55</span></a>
                                    <a class="more" href="" data-id="4">Подробнее</a>
                                </div>
                            </li>
							<li>
                                <div class="in">
                                    <span class="name">Mercedes-Benz 221 </span>
                                    <a class="img" href="" data-id="16"><img src="files/mercedes.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 3,5 л. Long</span>
                                        <span>Расход бензина - 12 л/100км</span>
                                    </div>
                                    <span class="price">От 30 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mercedes-Benz 221</span></a>
                                    <a class="more" href="" data-id="16">Подробнее</a>
                                </div>
                            </li>
							<li>
                                <div class="in">
                                    <span class="name">Toyota <br>Camry 55</span>
                                    <a class="img" href="" data-id="18"><img src="files/Camry552015.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,5 л.</span>
                                        <span>Расход бензина - 9 л/100км</span>
                                    </div>
                                    <span class="price">От 18 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Camry 55</span></a>
                                    <a class="more" href="" data-id="18">Подробнее</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="arr-l" href=""></a>
                    <a class="arr-r" href=""></a>
                </div>
            </div><!-- .block-1 -->

            <div class="block-2">
                <div class="slider-fleet-2">
                    <div class="inner">
                        <ul>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota <br>Camry 55</span>
                                    <a class="img" href="" data-id="5"><img src="files/Camry55.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,4 л.</span>
                                        <span>Расход бензина - 11 л/100км</span>
                                    </div>
                                    <span class="price">От 21 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Camry 55</span></a>
                                    <a class="more" href="" data-id="5">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mazda 6 <br>2007 г.в.</span>
                                    <a class="img" href="" data-id="6"><img src="files/Mazda.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,3 л.</span>
                                        <span>Расход бензина - 7 л/100км</span>
                                    </div>
                                    <span class="price">От 7 200 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mazda 6</span></a>
                                    <a class="more" href="" data-id="6">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">HYUNDAI ACCENT<br>2015 г.в.</span>
                                    <a class="img" href="" data-id="7"><img src="files/Accent2015.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 1,4 л.</span>
                                        <span>Расход бензина - 5 л/100км</span>
                                    </div>
                                    <span class="price">От 9 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>HYUNDAI ACCENT</span></a>
                                    <a class="more" href="" data-id="7">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Corolla<br> 2015 г.в.</span>
                                    <a class="img" href="" data-id="8"><img src="files/TCorolla.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 1,8 л.</span>
                                        <span>Расход бензина - 5,6 л/100км</span>
                                    </div>
                                    <span class="price">От 12 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Corolla 2014 г.в.</span></a>
                                    <a class="more" href="" data-id="8">Подробнее</a>
                                </div>
                            </li>
							 <li>
                                <div class="in">
                                    <span class="name">Chevrolet Cruze</span>
                                    <a class="img" href="" data-id="20"><img src="files/Chevrolet.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 1,8 л.</span>
                                        <span>Расход бензина - 7-7,3 л/100км</span>
                                    </div>
                                    <span class="price">От 9 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Chevrolet Cruze</span></a>
                                    <a class="more" href="" data-id="20">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Corolla<br> 2012 г.в.</span>
                                    <a class="img" href="" data-id="9"><img src="files/Toyota.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 1,6 л.</span>
                                        <span>Расход бензина - 10.2 л/100км</span>
                                    </div>
                                    <span class="price">От 8 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Corolla</span></a>
                                    <a class="more" href="" data-id="9">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mazda 6<br> 2012 г.в.</span>
                                    <a class="img" href="" data-id="10"><img src="files/Mazda6.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,5 л.</span>
                                        <span>Расход бензина - 6.5 л/100км</span>
                                    </div>
                                    <span class="price">От 9 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mazda 6</span></a>
                                    <a class="more" href="" data-id="10">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes-Benz 211</span>
                                    <a class="img" href="" data-id="17"><img src="files/mercedese.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 3,5 л.</span>
                                        <span>Расход бензина - 12 л/100км</span>
                                    </div>
                                    <span class="price">От 10 800 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Mercedes-Benz E280</span></a>
                                    <a class="more" href="" data-id="17">Подробнее</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="arr-l" href=""></a>
                    <a class="arr-r" href=""></a>
                </div>
            </div><!-- .block-2 -->

            <div class="block-3">
                <div class="slider-fleet-3">
                    <div class="inner">
                        <ul>
                            <li>
                                <div class="in">
                                    <span class="name">LEXUS RX 300 2000 г.в.</span>
                                    <a class="img" href="" data-id="11"><img src="files/lexus-rx.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 2,9 л.</span>
                                        <span>Расход бензина - 13-14 л/100км</span>
                                    </div>
                                    <span class="price">От 9 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>LEXUS RX 300</span></a>
                                    <a class="more" href="" data-id="11">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Chrysler Town & C</span>
                                    <a class="img" href="" data-id="12"><img src="files/miniven.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 3,7 л.</span>
                                        <span>Расход бензина - 10-11 л/100км</span>
                                    </div>
                                    <span class="price">От 10 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Chrysler T&C</span></a>
                                    <a class="more" href="" data-id="12">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Previa 2008 г.в.</span>
                                    <a class="img" href="" data-id="13"><img src="files/previa.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Коробка передач - автоматическая</span>
                                        <span>Объем двигателя - 1,9 л.</span>
                                        <span>Расход бензина - 7,2 л/100км</span>
                                    </div>
                                    <span class="price">От 6 000 тенге в сутки</span>
                                    <a class="button" href="">Забронировать авто<span>Toyota Previa</span></a>
                                    <a class="more" href="" data-id="13">Подробнее</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="arr-l" href=""></a>
                    <a class="arr-r" href=""></a>
                </div>
            </div><!-- .block-3 -->

        </div><!-- .catalog -->

        <div class="access">
            <h2>Дополнительные аксессуары</h2>
            <ul>
                <li>
                    <div class="img">
                        <a href="" data-id="1"><img src="files/access-1.png" alt=""/></a>
                    </div>
                    <span class="name">Регистраторы</span>
                    <span class="price">От 500 тенге</span>
                    <a class="order" href="">Заказать<span>Регистраторы</span></a>
                    <a class="more" href="" data-id="1">Подробнее</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="2"><img src="files/access-2.png" alt=""/></a>
                    </div>
                    <span class="name">Навигаторы</span>
                    <span class="price">От 500 тенге</span>
                    <a class="order" href="">Заказать<span>Навигаторы</span></a>
                    <a class="more" href="" data-id="2">Подробнее</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="3"><img src="files/access-3.png" alt=""/></a>
                    </div>
                    <span class="name">Детские сиденья</span>
                    <span class="price">От 500 тенге</span>
                    <a class="order" href="">Заказать<span>Детские сиденья</span></a>
                    <a class="more" href="" data-id="3">Подробнее</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="4"><img src="files/access-4.png" alt=""/></a>
                    </div>
                    <span class="name">Радар-детектор</span>
                    <span class="price">От 500 тенге</span>
                    <a class="order" href="">Заказать<span>Радар детектор</span></a>
                    <a class="more" href="" data-id="4">Подробнее</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="5"><img src="files/access-5.png" alt=""/></a>
                    </div>
                    <span class="name">Доставка авто </span>
                    <span class="price">От 2000 тенге</span>
                    <a class="order" href="">Заказать<span>Доставка авто </span></a>
                    <a class="more" href="" data-id="5">Подробнее</a>
                </li>
            </ul>
        </div><!-- .access -->

        <!-- <div class="process" data-block="2">
            <h2>Как можно арендовать авто у нас?</h2>
            <div class="step wrap">
                <div class="item">
                    <span class="number">1</span>
                    <p>ЗВОНОК В ОФИС<br/>или <a class="call-back" href="">Оставьте заявку</a></p>
                </div>
                <div class="item">
                    <span class="number">2</span>
                    <p>Получение от вас<br/>документов онлайн</p>
                </div>
                <div class="item">
                    <span class="number">3</span>
                    <p>Встреча для<br/>подписания договора</p>
                </div>
                <div class="item">
                    <span class="number">4</span>
                    <p>Вы довольный<br/>клиент</p>
                </div>
                <div class="clear_fix"></div>
            </div>
        </div> .process -->

        <div class="problems" data-block="3">
            <h2>Проблемы, с которыми сталкиваются, когда хотят арендовать авто</h2>
            <div class="box">
                <h3>Если в другой компании вы опасаетесь, что</h3>
                <ul>
                    <li>Вам не вернут залог вовремя</li>
                    <li>Заставят предъявлять пачку документов</li>
                    <li>Оформление займёт много времени</li>
                    <li>Договор окажется «филькиной грамотой»</li>
                    <li>Вам припишут несуществующие повреждения кузова</li>
                </ul>
            </div>
            <div class="box solution">
                <h3>С нами вы можете быть уверены, что</h3>
                <ul>
                    <li>Получите залог в день возврата автомобиля</li>
                    <li>Уедете на арендованном авто, предъявив всего 2 документа (удостоверение личности и права)</li>
                    <li>Потратите на оформление не более 15 минут</li>
                    <li>Подпишите простой и понятный договор, закреплённый печатью</li>
                    <li>Получите чистый исправный автомобиль без царапин и повреждений</li>
                </ul>
            </div>
            <div class="clear_fix"></div>
            <a class="button" href="">Забронировать авто</a>
        </div><!-- .problems -->

        <div class="action-box">
            <div class="wrap">
                <div class="counter" data-time="Feb,30,2016,00:00:00">
                    <span class="title">До конца акции:</span><br/>
                    <span class="item">
                        <span class="h">00</span>часов
                    </span>
                    <span class="colon">:</span>
                    <span class="item">
                        <span class="m">00</span>минут
                    </span>
                    <span class="colon">:</span>
                    <span class="item">
                        <span class="s">00</span>секунд
                    </span>
                </div>
                <div class="form">
                    <div class="in">
                        <h4><span>Акция</span></h4>
                        <p>Оставьте заявку на прокат машины<br/>MAZDA 6<br/>
                            и получите <span class="bold">скидку в 20%!</span></p>
                        <form action="action.php" class="action-form" method="post">
                            <input type="text" name="name" placeholder="Имя"/>
                            <input type="text" class="mask" name="phone" placeholder="Телефон"/>
                            <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                            <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                            <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                            <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                            <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                            <button type="submit">Взять авто на прокат</button>
                        </form>
                    </div>
                </div>
                <div class="clear_fix"></div>
            </div>
        </div><!-- .action-box -->

        <div class="you-get wrap" data-block="4">
            <h2>Что вы получаете арендуя авто у НАС</h2>
            <ul>
                <li class="wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-1"></i>
                    </div>
                    <div class="txt">
                        <h3>Автомобили на любой вкус и цвет</h3>
                        <p>В нашем автопарке 18 машин различных классов и комплектаций: от компактного седана Hyundai Accent до мощного Lexus 470GX.</p>
                    </div>
                </li>
                <li class="wow fadeInUp">
                    <div class="icon">
                        <i class="ic-2"></i>
                    </div>
                    <div class="txt">
                        <h3>Быстрое оформление документов</h3>
                        <p>На оформление аренды автомобиля уходит не более 15 минут.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-3"></i>
                    </div>
                    <div class="txt">
                        <h3>Доставка авто по вашему адресу</h3>
                        <p>Просто сообщите нам точное время и место — и автомобиль будет ждать вас там в указанный срок.</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="item-4 wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-4"></i>
                    </div>
                    <div class="txt">
                        <h3>Низкая стоимость аренды</h3>
                        <p>Стоимость наших услуг дешевле среднерыночных на 15 % (за счёт того, что у нас нет машин, взятых в лизинг). Плюс, для постоянных клиентов у нас предусмотрены скидки.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-5"></i>
                    </div>
                    <div class="txt">
                        <h3>КРУГЛОСУТОЧНЫЙ
                            СЕРВИС</h3>
                        <p>В любое время суток вы можете обратиться за помощью к одному из наших операторов. Сервис в режиме 24/7 включает в себя и бесплатную техническую помощь на дорогах.</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-6"></i>
                    </div>
                    <div class="txt">
                        <h3>ОТСУТСТВИЕ ОБЯЗАТЕЛЬНОГО ПОДТВЕРЖДЕНИЯ БРОНИРОВАНИЯ КРЕДИТНОЙ КАРТОЙ</h3>
                        <p>Уникальная опция, действующая только в нашей компании.</p>
                    </div>
                </li>
                <li class="wow fadeInUp">
                    <div class="icon">
                        <i class="ic-7"></i>
                    </div>
                    <div class="txt">
                        <h3>Любые варианты оплаты</h3>
                        <p>Оплата может производиться по наличному и безналичному расчету, в тенге либо в другой валюте.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-8"></i>
                    </div>
                    <div class="txt">
                        <h3>Прозрачные условия аренды и топливная политика</h3>
                        <p>Цена, озвученная нами в начале, не изменится ни на тенге к концу аренды. При необходимости, мы разъясним все непонятные для вас моменты.</p>
                    </div>
                </li>
            </ul>
        </div><!-- .you-get -->

        <div class="documents" data-block="5">
            <h2>Наши документы</h2>
            <div class="slider-doc">
                <div class="inner">
                    <ul>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docx-1.jpg"><img src="files/doc-1.jpg" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docx-2.jpg"><img src="files/doc-2.jpg" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docx-3.jpg"><img src="files/doc-3.jpg" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docx-1.jpg"><img src="files/doc-1.jpg" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docx-2.jpg"><img src="files/doc-2.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <a class="arr-l" href=""></a>
                <a class="arr-r" href=""></a>
            </div>
        </div><!-- .documents -->

        <div class="reviews" data-block="6">
            <h2>Отзывы наших довольных клиентов</h2>
            <ul>
                <li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/uh2_2i3_bUY?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">Владимир, 34 года. +7 777 543 32 23</span>
                </li>
                <li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/AeVOdLYMWyM?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">Сборная Казахстана по велогонкам</span>
                </li>
                <li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/3sYMtduSSYo?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">ТОО "ИМИДЖ АВТО"</span>
                </li>
            </ul>
        </div><!-- .reviews -->


        <div class="question">
            <h2>Остались вопросы?</h2>
            <span class="subhead">Оставьте заявку на консультацию по любому автомобилю</span>
            <form action="questions.php" class="questions-form" method="post">
                <input type="text" name="name" placeholder="Имя"/>
                <input type="text" class="mask" name="phone" placeholder="Телефон"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Проконсультироваться</button>
            </form>
        </div>

        <div class="contact" data-block="8">
            <!--<div class="map">
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=O6O7sqDjwB0SRMSqpMKkL-eohNiugneU&amp;width=100%&amp;height=375"></script>
            </div>-->
            <div class="wrap">
                <div class="info">
                    <div class="in">
                        <div class="adds">
                            <span>Адрес:</span>г.Алматы, ул. Розыбакиева, 289/1
                        </div>
                        <div class="mail">
                            <span>E-mail:</span>Imageauto@inbox.kz
                        </div>
                        <div class="number">
                            <span>Телефон:</span>8 (777) 122 00 88
                        </div>
                        <div class="number">
                            <span>Моб:</span>8 (778) 122 00 88
                        </div>
                        <!--<div class="number">
                            <span>Моб:</span>8 (771) 222 00 88
                        </div> -->
                        <div class="skype">
                            <span>Скайп:</span>imageauto.kz
                        </div>
                        <div class="arrow"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer wrap">
            <div class="logo">
                <img src="i/logo2.png" alt=""/>
            </div>
            <div class="copy">
                ТОО “ИМИДЖАВТО” все права защищены.<br/> Алматы 2015г.
            </div>
            <div class="phone">
                <span>8 (778) 122 00 88</span>
                <a class="button" href="">Перезвоните мне!</a>
            </div>
            <div class="clear_fix"></div>
        </div><!-- .site-footer -->

        <div id="access" class="popup">
            <div class="title">
                Заказать<br/>"<span></span>"
            </div>
            <form action="access.php" class="access-form" method="post">
                <input type="text" name="name" placeholder="Ваше имя"/>
                <input type="text" class="mask" name="phone" placeholder="Ваш телефон"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Отправить</button>
                <input type="hidden" name="title"/>
            </form>
        </div>

        <div id="booking_car" class="popup">
            <div class="title">
                Забронировать
            </div>
            <form action="booking_car.php" class="booking_car-form" method="post">
                <input type="text" name="name" placeholder="Ваше имя"/>
                <input type="text" class="mask" name="phone" placeholder="Ваш телефон"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Забронировать</button>
            </form>
        </div>

        <div id="reserve" class="popup">
            <div class="title">
                Забронировать<br/>"<span></span>"
            </div>
            <form action="reserve.php" class="reserve-form" method="post">
                <input type="text" name="name" placeholder="Ваше имя"/>
                <input type="text" class="mask" name="phone" placeholder="Ваш телефон"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Забронировать</button>
                <input type="hidden" name="title"/>
            </form>
        </div>

        <div id="callback" class="popup">
            <div class="title">
                Заказать звонoк
            </div>
            <form action="callback.php" class="callback" method="post">
                <input type="text" name="name" placeholder="Ваше имя"/>
                <input class="mask" type="text" name="phone" placeholder="Телефон"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Заказать</button>
            </form>
        </div>

        <div id="access_more" class="more-popup"></div>
        <div id="details" class="more-popup"></div>

        <div id="thank" class="popup">
            Спасибо, мы свяжемся с вами<br/> в течении 10 мин.
        </div>

        <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31174851 = new Ya.Metrika({
                    id:31174851,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31174851" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    </body>
</html>