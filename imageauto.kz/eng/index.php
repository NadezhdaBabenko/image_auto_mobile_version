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
        <meta name="viewport" content="width=1200">
        <title>Car rental in Almaty</title>
		<meta name="description" content="Car rental service in Almaty and find the cheapest prices. Book online today with the online car rental service" />
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
                                <li><a href="" data-id="1">Our car park</a></li>
                                <li><a href="" data-id="2">How we are working</a></li>
                                <li><a href="" data-id="3">Our advantages</a></li>
                                <li><a href="" data-id="4">What are you getting</a></li>
                                <li><a href="" data-id="5">Our documents</a></li>
                                <li><a href="" data-id="6">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="phone">
                            <span>8 (778) 122 00 88 </span>
                            <a class="button" href="">Call me back!</a>
                        </div>
                        <div class="lang-block">
                            <a href="../kz/">қаз /</a>
                            <a href="../">рус /</a>
                            <a href=""><b>eng</b></a>
                        </div>
                        <div class="clear_fix"></div>
                    </div>
                </div><!-- .site-top -->

                <div class="center-header">
                    <div class="top wrap">
                        <div class="logo">
                            <img src="i/logo.png" alt=""/>
                        </div>

                        <div class="social">
                            <a href="https://vk.com/autorentcentr" class="vk" target="blank"></a>
                            <a href="https://www.instagram.com/auto_prokat_almaty" class="in" target="blank"></a>
                            <a href="http://ok.ru/profile/584827733040" class="ok" target="blank"></a>
                            <a href="https://www.facebook.com/autorentcentr" class="fb" target="blank"></a>
                        </div>

                        <div class="phone">
                            <span>8 (778) 122 00 88 </span>
                            <span>8 (777) 122 00 88</span>
                            <a class="button" href="">Call me back!</a>
                        </div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="menu">
                        <div class="wrap">
                            <div class="line"></div>
                            <ul>
                                <li><a href="" data-id="1"><i class="ic-1"></i><span><span>Our car park</span></span></a></li>
                                <li><a href="" data-id="2"><i class="ic-2"></i><span><span>How we are working</span></span></a></li>
                                <li><a href="" data-id="3"><i class="ic-3"></i><span><span>Our<br/>advantages</span></span></a></li>
                                <li><a href="" data-id="4"><i class="ic-4"></i><span><span>What are you getting</span></span></a></li>
                                <li><a href="" data-id="5"><i class="ic-5"></i><span><span>Our<br/>documents</span></span></a></li>
                                <li><a href="" data-id="6"><i class="ic-6"></i><span><span>Reviews</span></span></a></li>
                            </ul>
                            <div class="clear_fix"></div>
                            <div class="line rg"></div>
                        </div>
                    </div>
                    <div class="lang-block">
                        <a href="../kz/">қаз /</a>
                        <a href="../">рус /</a>
                        <a href=""><b>eng</b></a>
                    </div>
                </div><!-- .center-header -->

            </div><!-- .site-header -->

            <div class="promo">
                <h1>Car rental in Almaty</h1>
                <span class="subhead">New cars from Economy to Business class from 7 200 tenge with registration for 15 minutes</span>
                <div class="action wow fadeInLeft">
                    <div class="head">
                        <h3>Leave a request to rent<br/><span> a car and get <span class="orange subtitle" style="font-size: 22px;">present!</span></span></h3>
                    </div>
                    <div class="counter" data-time="Jul,30,2016,00:00:00">
                        <div class="frame"></div>
                        <span class="title">To promotion end last:</span><br/>
                        <span class="item">
                            <span class="h">00</span>hours
                        </span>
                        <span class="colon">:</span>
                        <span class="item">
                            <span class="m">00</span>minutes
                        </span>
                        <span class="colon">:</span>
                        <span class="item">
                            <span class="s">00</span>seconds
                        </span>
                    </div>
                </div>
                <div class="form wow fadeInRight">
                    <div class="in">
                        <!--<h4>Заявка на прокат</h4>-->
                        <form action="action.php" class="action-form" method="post" style="margin-top:20px;">
                            <!--<input type="text" name="name" placeholder="Name"/>-->
                            <input type="text" class="mask" name="phone" placeholder="Phone"/>
                            <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                            <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                            <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                            <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                            <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                            <button type="submit">Rent a car</button>
                        </form>
                    </div>
                </div>
                <div class="clear_fix"></div>

                <ul class="vantage wrap wow fadeInUp">
                    <li>
                        <div class="icon ic-1"></div>
                        <span>3 years</span><br/>on the rental market
                    </li>
                    <li class="wow fadeInUp">
                        <div class="icon ic-2"></div>
                        <span>100 %</span><br/>warranty of a clean serviceable car
                    </li>
                    <li>
                        <div class="icon ic-3"></div>
                        <span>36 % of clients</span><br/>proceed to the category of permanent
                    </li>
                    <li>
                        <div class="icon ic-4"></div>
                        <span>15 minutes</span> for registration<br/> documents cars
                    </li>
                    <li>
                        <div class="icon ic-5"></div>
                        <span>99,9% of clients</span><br/>advised us to thier friends
                    </li>
                </ul>

            </div>
        </div><!-- .top-bg -->

        <!-- блок  Как можно арендовать авто у нас?-->
        <div class="process" data-block="2">
            <h2>How to rent a car at us?</h2>
            <div class="step wrap">
                <div class="item">
                    <span class="number">1</span>
                    <p>CALL TO OFFICE<br/><a class="call-back" href="">Leave request</a></p>
                </div>
                <div class="item">
                    <span class="number">2</span>
                    <p>Receiving from you<br/>documents online</p>
                </div>
                <div class="item">
                    <span class="number">3</span>
                    <p>Meeting for<br/>signing the contract</p>
                </div>
                <div class="item">
                    <span class="number">4</span>
                    <p>You are a satisfied<br/>customer</p>
                </div>
                <div class="clear_fix"></div>
            </div>
        </div><!-- .process -->

        <div class="catalog" data-block="1">
            <div class="block-1">
                <h2>Our car park</h2>
                <span class="subhead">All cars are 100% serviced and ready for operation</span>
                <div class="slider-fleet">
                    <div class="inner">
                        <ul>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Land Cruiser</span>
                                    <a class="img" href="" data-id="1"><img src="files/LPrado.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,7 l.</span>
                                        <span>Gasoline consumption - 12-15 l/100km</span>
                                    </div>
                                    <span class="price">From 27 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Toyota Land Cruiser</span></a>
                                    <a class="more" href="" data-id="1">Learn More</a>
                                </div>
                            </li>
                            <!--
                            <li>
                                <div class="in">
                                    <span class="name">Jaguar XF <br>2013 г.в.</span>
                                    <a class="img" href="" data-id="2"><img src="files/Jaguar.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 3,0 l.</span>
                                        <span>Gasoline consumption - 15 l/100km</span>
                                    </div>
                                    <span class="price">От 30 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Jaguar XF</span></a>
                                    <a class="more" href="" data-id="2">Learn More</a>
                                </div>
                            </li>
                            -->
                            <li>
                                <div class="in">
                                    <span class="name">BMW<br> X6</span>
                                    <a class="img" href="" data-id="24"><img src="files/x6/preview.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>&nbsp;</span>
                                        <span>Engine capacity - 3,0 l.</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <span class="price">From 45 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>BMW X6</span></a>
                                    <a class="more" href="" data-id="24">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes Benz S55</span>
                                    <a class="img" href="" data-id="3"><img src="files/Mbenz.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 5,4 l.</span>
                                        <span>Gasoline consumption - 13,2 l/100km</span>
                                    </div>
                                    <span class="price">From 40 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Mercedes Benz S55</span></a>
                                    <a class="more" href="" data-id="3">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">BMW 630 <br> 2008 г.в.</span>
                                    <a class="img" href="" data-id="19"><img src="files/BMW.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 3,0 l.</span>
                                        <span>Gasoline consumption - 16,8 l/100km</span>
                                    </div>
                                    <span class="price">From 27 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>BMW 630</span></a>
                                    <a class="more" href="" data-id="19">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes <br>G55</span>
                                    <a class="img" href="" data-id="4"><img src="files/g55/preview.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 5,5 l. (b/gas)</span>
                                        <span>Gasoline consumption - 20 l/100km</span>
                                    </div>
                                    <span class="price">From 40 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Mercedes G55</span></a>
                                    <a class="more" href="" data-id="4">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Lexus<br> RX330</span>
                                    <a class="img" href="" data-id="23"><img src="files/rx330/preview.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>&nbsp;</span>
                                        <span>Engine capacity - 3,3 l.</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <span class="price">From 15 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Lexus RX330</span></a>
                                    <a class="more" href="" data-id="23">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mercedes-Benz 221 </span>
                                    <a class="img" href="" data-id="16"><img src="files/mercedes.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 3,5 l. Long</span>
                                        <span>Gasoline consumption - 12 l/100km</span>
                                    </div>
                                    <span class="price">From 45 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Mercedes-Benz 221</span></a>
                                    <a class="more" href="" data-id="16">Learn More</a>
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
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,5 l.</span>
                                        <span>Gasoline consumption - 9 l/100km</span>
                                    </div>
                                    <span class="price">From 21 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Toyota Camry 55</span></a>
                                    <a class="more" href="" data-id="5">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Lada<br>Vesta</span>
                                    <a class="img" href="" data-id="6"><img src="files/Lada_Vesta.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 1.6 l.</span>
                                        <span>Gasoline consumption - 5 l/100km</span>
                                    </div>
                                    <span class="price">From 7 200 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Lada Vesta</span></a>
                                    <a class="more" href="" data-id="6">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">HYUNDAI ACCENT</span>
                                    <a class="img" href="" data-id="7"><img src="files/Accent2015.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 1,4 l.</span>
                                        <span>Gasoline consumption - 5 l/100km</span>
                                    </div>
                                    <span class="price">From 9 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>HYUNDAI ACCENT</span></a>
                                    <a class="more" href="" data-id="7">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Corolla</span>
                                    <a class="img" href="" data-id="8"><img src="files/TCorolla.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 1,8 l.</span>
                                        <span>Gasoline consumption - 5,6 l/100km</span>
                                    </div>
                                    <span class="price">From 12 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Toyota Corolla 2014 г.в.</span></a>
                                    <a class="more" href="" data-id="8">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Chevrolet Aveo</span>
                                    <a class="img" href="" data-id="25"><img src="files/aveo/preview.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>&nbsp;</span>
                                        <span>Engine capacity - 1,6 l.</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <span class="price">From 9 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Chevrolet Cruze</span></a>
                                    <a class="more" href="" data-id="25">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Volkswagen Polo</span>
                                    <a class="img" href="" data-id="26"><img src="files/polo/preview.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>&nbsp;</span>
                                        <span>Engine capacity - 1,6 l.</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <span class="price">From 8 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Volkswagen Polo</span></a>
                                    <a class="more" href="" data-id="26">Learn More</a>
                                </div>
                            </li>
                            <!--
                            <li>
                                <div class="in">
                                    <span class="name">Chevrolet Cruze</span>
                                    <a class="img" href="" data-id="20"><img src="files/Chevrolet.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 1,8 l.</span>
                                        <span>Gasoline consumption - 7-7,3 l/100km</span>
                                    </div>
                                    <span class="price">From 9 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Chevrolet Cruze</span></a>
                                    <a class="more" href="" data-id="20">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Toyota Corolla</span>
                                    <a class="img" href="" data-id="9"><img src="files/Toyota.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 1,6 l.</span>
                                        <span>Gasoline consumption - 10.2 l/100km</span>
                                    </div>
                                    <span class="price">From 8 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Toyota Corolla</span></a>
                                    <a class="more" href="" data-id="9">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Mazda 6<br> 2012 г.в.</span>
                                    <a class="img" href="" data-id="10"><img src="files/Mazda6.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,5 l.</span>
                                        <span>Gasoline consumption - 6.5 l/100km</span>
                                    </div>
                                    <span class="price">From 10 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Mazda 6</span></a>
                                    <a class="more" href="" data-id="10">Learn More</a>
                                </div>
                            </li>
                            -->
                            <li>
                                <div class="in">
                                    <span class="name">Toyota <br>Camry 55</span>
                                    <a class="img" href="" data-id="18"><img src="files/Camry552015.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,5 l.</span>
                                        <span>Gasoline consumption - 9 l/100km</span>
                                    </div>
                                    <span class="price">From 18 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Toyota Camry 55</span></a>
                                    <a class="more" href="" data-id="18">Learn More</a>
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
                                    <a class="img" href="" data-id="11"><img src="files/lexus-rx-1.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,9 l.</span>
                                        <span>Gasoline consumption - 13-14 l/100km</span>
                                    </div>
                                    <span class="price">From 9 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>LEXUS RX 300</span></a>
                                    <a class="more" href="" data-id="11">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Chrysler Town & C</span>
                                    <a class="img" href="" data-id="12"><img src="files/miniven.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 3,7 l.</span>
                                        <span>Gasoline consumption - 10-11 l/100km</span>
                                    </div>
                                    <span class="price">From 10 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Chrysler T&C</span></a>
                                    <a class="more" href="" data-id="12">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Nissan Terrano</span>
                                    <a class="img" href="" data-id="13"><img src="files/terrano.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,0 l.</span>
                                        <span>Gasoline consumption - 11,0 l/100km</span>
                                    </div>
                                    <span class="price">From 11 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Nissan Terrano</span></a>
                                    <a class="more" href="" data-id="13">Learn More</a>
                                </div>
                            </li>
                            <!--
                            <li>
                                <div class="in">
                                    <span class="name">Volkswagen Caravelle</span>
                                    <a class="img" href="" data-id="21"><img src="files/caravella.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - механическая</span>
                                        <span>Engine capacity - 3.2 l, b/gas</span>
                                        <span>Gasoline consumption - 10,6 l/100km</span>
                                    </div>
                                    <span class="price">From 16 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Volkswagen Caravelle</span></a>
                                    <a class="more" href="" data-id="21">Learn More</a>
                                </div>
                            </li>
                            -->
                            <li>
                                <div class="in">
                                    <span class="name">Hyundai Grand Starex</span>
                                    <a class="img" href="" data-id="22"><img src="files/starex.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - 
Mechanical</span>
                                        <span>Engine capacity - 2,5 l.</span>
                                        <span>Gasoline consumption - 11,0 l/100km</span>
                                    </div>
                                    <span class="price">From 20 000 tenge every day</span>
                                    <a class="button" href="">Reservation a car<span>Hyundai Grand Starex</span></a>
                                    <a class="more" href="" data-id="22">Learn More</a>
                                </div>
                            </li>
                            <!-- новые машинки
                                                        <li>
                                <div class="in">
                                    <span class="name">Nissan Terrano</span>
                                    <a class="img" href="" data-id="13"><img src="files/terrano.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,0 l.</span>
                                        <span>Gasoline consumption - 11,0 l/100km</span>
                                    </div>
                                    <span class="price">From 11 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Nissan Terrano</span></a>
                                    <a class="more" href="" data-id="23">Learn More</a>
                                </div>
                            </li>
                            <li>
                                <div class="in">
                                    <span class="name">Nissan Terrano</span>
                                    <a class="img" href="" data-id="13"><img src="files/terrano.jpg" alt=""/></a>
                                    <div class="info">
                                        <span>Transmission - automatic</span>
                                        <span>Engine capacity - 2,0 l.</span>
                                        <span>Gasoline consumption - 11,0 л/100km</span>
                                    </div>
                                    <span class="price">From 11 000 tenge per day</span>
                                    <a class="button" href="">Reservation a car<span>Nissan Terrano</span></a>
                                    <a class="more" href="" data-id="13">Learn More</a>
                                </div>
                            </li>
                            -->
                        </ul>
                    </div>
                    <a class="arr-l" href=""></a>
                    <a class="arr-r" href=""></a>
                </div>
            </div><!-- .block-3 -->

        </div><!-- .catalog -->
        <div class="rent">
            <h2>Rent for <span>legal entities</span></h2>
            <div class="wrapper">
                <div class="businesman">
                    <div class="col1">
                        <div class="item">GUIDE-DRIVER</div>
                        <div class="item">BUSINESS MEETING</div>
                        <div class="item">TRANSFER</div>
                    </div>
                    <div class="col2">
                        <div class="item">OPERATIONAL LEASING</div>
                        <div class="item">OUTSOURCING</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="unow">
            <h2>SUCCESS EVERYTHING WITH<span>«IMAGE AVTO»</span></h2>
            <div class="wrapper">
                <div class="lcol item1">Are you planning to come <br />to Almaty?</div>
                <div class="rcol">Take care about a comfortable moving from the airport! Enjoy freedom, mobility, speed, renting an excellent car in Imageavto!</div>
                <div class="lcol grey item2">The car was driven<br /> out of service?</div>
                <div class="rcol grey">Do not postpone important business, being without a car! Choose a car - and meet with friends, relax, shop, finish what you started!</div>
                <div class="lcol item3">Planned important event and need a good car?</div>
                <div class="rcol">Shining new car from "Imageavto" will become a faithful companion and friend for the evening. Choose from the 18 best models!</div>
                <div class="lcol grey item4">Do you have time to finish the business before you leave town?</div>
                <div class="rcol grey">Car rent "Imageavto" will save you from a headache: on a fast new car you can easily cope with unfinished business!</div>
               <!-- <div class="lcol item5">Предстоит путешествие по бездорожью, и ваше авто его может  <br />не выдержать?</div> 
                <div class="rcol">Выберите внедорожник в «Имиджавто» - и смело отправляйтесь на природу, в горы, не боясь застрять или оставить где-то выхлопную трубу.</div>-->
               <div class="clear_fix"></div>
            </div>
        </div>
        <div class="access">
            <h2>Optional accessories</h2>
            <ul>
                <li>
                    <div class="img">
                        <a href="" data-id="1"><img src="files/access-1.png" alt=""/></a>
                    </div>
                    <span class="name">Recorders</span>
                    <span class="price">From 1500 tenge</span>
                    <a class="order" href="">Order<span>Recorders</span></a>
                    <a class="more" href="" data-id="1">Learn More</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="2"><img src="files/access-2.png" alt=""/></a>
                    </div>
                    <span class="name">Navigators</span>
                    <span class="price">From 1500 tenge</span>
                    <a class="order" href="">Order<span>Navigators</span></a>
                    <a class="more" href="" data-id="2">Learn More</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="3"><img src="files/access-3.png" alt=""/></a>
                    </div>
                    <span class="name">Child seat</span>
                    <span class="price">From 1500 tenge</span>
                    <a class="order" href="">Order<span>Child seat</span></a>
                    <a class="more" href="" data-id="3">Learn More</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="4"><img src="files/access-4.png" alt=""/></a>
                    </div>
                    <span class="name">Radar detector</span>
                    <span class="price">From 1500 tenge</span>
                    <a class="order" href="">Order<span>Radar detector</span></a>
                    <a class="more" href="" data-id="4">Learn More</a>
                </li>
                <br />
                <li>
                    <div class="img">
                        <a href="" data-id="5"><img src="files/access-5.png" alt=""/></a>
                    </div>
                    <span class="name">Car delivery service </span>
                    <span class="price">From 2000 tenge</span>
                    <a class="order" href="">Order<span>Car delivery service </span></a>
                    <a class="more" href="" data-id="5">Learn More</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="6"><img src="files/access-6.png" alt=""/></a>
                    </div>
                    <span class="name">Trunk for ski </span>
                    <span class="price">From 3000 tenge</span>
                    <a class="order" href="">Order<span>Trunk for ski </span></a>
                    <a class="more" href="" data-id="6">Learn More</a>
                </li>
                <li>
                    <div class="img">
                        <a href="" data-id="7"><img src="files/access-7.png" alt=""/></a>
                    </div>
                    <span class="name">Trunk for bicycle</span>
                    <span class="price">From 3000 tenge</span>
                    <a class="order" href="">Order<span>Trunk for bicycle </span></a>
                    <a class="more" href="" data-id="7">Learn More</a>
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
            <h2>Problems encountered when they want to rent a car</h2>
            <div class="box">
                <h3>If in another company you are afraid that</h3>
                <ul>
                    <li>You will not be refunded on time</li>
                    <li>Make a stack of documents</li>
                    <li>Registration will take a long time</li>
                    <li>The treaty was useless</li>
                    <li>You will be credited with the chronic violations of the body</li>
                </ul>
            </div>
            <div class="box solution">
                <h3>With us you can be sure that</h3>
                <ul>
                    <li>Leave a rented car, presenting only 2 document (ID card and the right)</li>
                    <li>Spend for up to 15 minutes</li>
                    <li>Sign a simple and understandable contract with a stamp</li>
                    <li>Get a clean, clean car without scratches and damage</li>
                </ul>
            </div>
            <div class="clear_fix"></div>
            <a class="button" href="">Reservation a car</a>
        </div><!-- .problems -->

        <div class="action-box">
            <div class="wrap">
                <div class="counter" data-time="Jul,30,2016,00:00:00">
                    <span class="title">To promotion end last:</span><br/>
                    <span class="item">
                        <span class="h">00</span>hours
                    </span>
                    <span class="colon">:</span>
                    <span class="item">
                        <span class="m">00</span>minutes
                    </span>
                    <span class="colon">:</span>
                    <span class="item">
                        <span class="s">00</span>seconds
                    </span>
                </div>
                <div class="form">
                    <div class="in">
                        <h4><span>Stock</span></h4>
                        <p>Leave a request for car rental<br/>MAZDA 6<br/>
                            и получите <span class="bold">Discount in 20%!</span></p>
                        <form action="action.php" class="action-form" method="post">
                            <input type="text" name="name" placeholder="Name"/>
                            <input type="text" class="mask" name="phone" placeholder="Phone"/>
                            <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                            <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                            <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                            <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                            <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                            <button type="submit">Rent a car</button>
                        </form>
                    </div>
                </div>
                <div class="clear_fix"></div>
            </div>
        </div><!-- .action-box -->

        <div class="you-get wrap" data-block="4">
            <h2>What do you get by renting a car from us</h2>
            <ul>
                <li class="wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-1"></i>
                    </div>
                    <div class="txt">
                        <h3>Cars for every taste and color</h3>
                        <p>In our fleet of 18 cars of various classes and complete sets: from a compact sedan Hyundai Accent to a powerful Lexus 470GX.</p>
                    </div>
                </li>
                <li class="wow fadeInUp">
                    <div class="icon">
                        <i class="ic-2"></i>
                    </div>
                    <div class="txt">
                        <h3>Quick registration of documents</h3>
                        <p>The registration of car rental takes no more than 15 minutes.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-3"></i>
                    </div>
                    <div class="txt">
                        <h3>Car delivery to your address</h3>
                        <p>Just tell us the exact time and place - and the car will be waiting for you there in the specified time.</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="item-4 wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-4"></i>
                    </div>
                    <div class="txt">
                        <h3>Low cost of rent</h3>
                        <p>The cost of our services is cheaper than the average market by 15% (due to the fact that we do not have cars leased). Plus, for regular customers we have discounts.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-5"></i>
                    </div>
                    <div class="txt">
                        <h3>24 Hours Service</h3>
                        <p>At any time of the day you can ask for help from one of our operators. Service in the 24/7 mode includes free technical assistance on the roads.</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="wow fadeInLeft">
                    <div class="icon">
                        <i class="ic-6"></i>
                    </div>
                    <div class="txt">
                        <h3>NO REQUIRED CONFIRMATION OF CREDIT CARD RESERVATIONS</h3>
                        <p>A unique option that works only in our company.</p>
                    </div>
                </li>
                <li class="wow fadeInUp">
                    <div class="icon">
                        <i class="ic-7"></i>
                    </div>
                    <div class="txt">
                        <h3>Any payment options</h3>
                        <p>Payment can be made by cash or by bank transfer, in tenge or in another currency.</p>
                    </div>
                </li>
                <li class="wow fadeInRight">
                    <div class="icon">
                        <i class="ic-8"></i>
                    </div>
                    <div class="txt">
                        <h3>Transparent terms of rent and fuel policy</h3>
                        <p>The price, announced by us in the beginning, will not change either by tenge towards the end of the lease. If necessary, we will clarify all the incomprehensible moments for you.</p>
                    </div>
                </li>
            </ul>
        </div><!-- .you-get -->

        <div class="documents" data-block="5">
            <h2>Our documents</h2>
            <div class="slider-doc">
                <div class="inner">
                    <ul>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/001.png"><img src="files/docs/thumbs/001.png" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/002.png"><img src="files/docs/thumbs/002.png" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/003.png"><img src="files/docs/thumbs/003.png" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/001.png"><img src="files/docs/thumbs/001.png" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/002.png"><img src="files/docs/thumbs/002.png" alt=""/></a></li>
                        <li><a class="fancybox" data-fancybox-group="photo" href="files/docs/003.png"><img src="files/docs/thumbs/003.png" alt=""/></a></li>
                    </ul>
                </div>
                <a class="arr-l" href=""></a>
                <a class="arr-r" href=""></a>
            </div>
        </div><!-- .documents -->

        <div class="reviews" data-block="6">
            <h2>Feedback from our satisfied customers</h2>
            <ul>
                <!--<li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/uh2_2i3_bUY?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">Владимир, 34 года. +7 777 543 32 23</span>
                </li>-->
                <li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/AeVOdLYMWyM?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">Kazakhstan national cycling team</span>
                </li>
                <li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/3sYMtduSSYo?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">LLP "IMAGE AVTO"</span>
                </li>
				<li>
                    <iframe width="316" height="189" src="//www.youtube.com/embed/FLCfw0P6RPc?rel=0" frameborder="0" allowfullscreen></iframe>
                    <span class="who">A satisfied foreign client</span>
                </li>
            </ul>
        </div><!-- .reviews -->


        <div class="question">
            <h2>Still have questions?</h2>
            <span class="subhead">Leave a request for consultation on any car</span>
            <form action="questions.php" class="questions-form" method="post">
                <input type="text" name="name" placeholder="Name"/>
                <input type="text" class="mask" name="phone" placeholder="Phone"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Consult</button>
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
                            <span>Address:</span>c. Almaty, str. Rozybakieva, 289/1
                        </div>
                        <div class="mail">
                            <span>E-mail:</span>Imageauto@inbox.ru
                        </div>
                        <div class="number">
                            <span>Phone:</span>8 (777) 122 00 88
                        </div>
                        <div class="number">
                            <span>Mob:</span>8 (778) 122 00 88
                        </div>
                        <!--<div class="number">
                            <span>Моб:</span>8 (771) 222 00 88
                        </div> -->
                        <div class="skype">
                            <span>Skype:</span>imageauto.kz
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
                ТОО “IMAGE AVTO” All rights reserved.<br/> Almaty 2015 y.
            </div>
            <div class="phone">
                <span>8 (778) 122 00 88</span>
                <a class="button" href="">Call me back!</a>
            </div>
            <div class="clear_fix"></div>
        </div><!-- .site-footer -->

        <div id="access" class="popup">
            <div class="title">
                Order<br/>"<span></span>"
            </div>
            <form action="access.php" class="access-form" method="post">
                <input type="text" name="name" placeholder="Your name"/>
                <input type="text" class="mask" name="phone" placeholder="YourYour namene"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Send</button>
                <input type="hidden" name="title"/>
            </form>
        </div>

        <div id="booking_car" class="popup">
            <div class="title">
                Reservation
            </div>
            <form action="booking_car.php" class="booking_car-form" method="post">
                <input type="text" name="name" placeholder="Your name"/>
                <input type="text" class="mask" name="phone" placeholder="Your phone"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Reservation</button>
            </form>
        </div>

        <div id="reserve" class="popup">
            <div class="title">
                Reservation<br/>"<span></span>"
            </div>
            <form action="reserve.php" class="reserve-form" method="post">
                <input type="text" name="name" placeholder="Your name"/>
                <input type="text" class="mask" name="phone" placeholder="Your phone"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Reservation</button>
                <input type="hidden" name="title"/>
            </form>
        </div>

        <div id="callback" class="popup">
            <div class="title">
                Request a call
            </div>
            <form action="callback.php" class="callback" method="post">
                <input type="text" name="name" placeholder="Your name"/>
                <input class="mask" type="text" name="phone" placeholder="Phone"/>
                <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>" />
                <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>" />
                <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>" />
                <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>" />
                <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>" />
                <button type="submit">Reservation</button>
            </form>
        </div>

        <div id="access_more" class="more-popup"></div>
        <div id="details" class="more-popup"></div>

        <div id="thank" class="popup">
            Thank you, we will contact you <br/> for 10 minutes.
        </div>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter31174851 = new Ya.Metrika({
                            id: 31174851,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/31174851" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

    </body>
</html>
