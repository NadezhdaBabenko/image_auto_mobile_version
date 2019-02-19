$.ui.dialog.prototype._focusTabbable = function () {
};
$(document).ready(function () {

    new WOW().init();

    var $callback = $('#callback');
    $('.phone .button, .call-back').on('click', function () {
        $callback.dialog({
            autoOpen: true,
            modal: true,
            width: 299,
            open: function () {
                $('.ui-widget-overlay').on('click', function () {
                    $callback.dialog('close');
                });
            },
            close: function () {
                $callback.dialog('destroy');
            }
        });
        return false;
    });

    $('form.callback').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            console.log(data);
            if (data != 'ok') {
                alert(data);
            } else {
                $('form.callback').find('input[type=text], textarea').val('');
                $callback.dialog('close');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
                yaCounter31174851.reachGoal('callback');
            }
        }
    });

    $('form.action-form').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            if (data != 'ok') {
                alert(data);
            } else {
                yaCounter31174851.reachGoal('actionForm');
                $('form.action-form').find('input[type=text], textarea').val('');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
            }
        }
    });

    var $reserve = $('#reserve');
    $('.catalog .inner li .button').on('click', function () {

        var title = $(this).find('span').html();
        title = title.replace(new RegExp('"', 'g'), "");

        $reserve.dialog({
            autoOpen: true,
            modal: true,
            width: 299,
            open: function () {
                $('.ui-widget-overlay').on('click', function () {
                    $reserve.dialog('close');
                });
                $reserve.find('input[name="title"]').val(title);
                $reserve.find('.title span').html(title);
            },
            close: function () {
                $reserve.dialog('destroy');
            }
        });

        return false;
    });

    $('form.reserve-form').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            if (data != 'ok') {
                alert(data);
            } else {
                yaCounter31174851.reachGoal('reserveForm');
                $reserve.dialog('close');
                $('form.reserve-form').find('input[type=text], textarea').val('');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
            }
        }

    });

    var $access = $('#access');
    $('.access li .order').on('click', function () {

        var title = $(this).find('span').html();
        title = title.replace(new RegExp('"', 'g'), "");

        $access.dialog({
            autoOpen: true,
            modal: true,
            width: 299,
            open: function () {
                $('.ui-widget-overlay').on('click', function () {
                    $access.dialog('close');
                });
                $access.find('input[name="title"]').val(title);
                $access.find('.title span').html(title);
            },
            close: function () {
                $access.dialog('destroy');
            }
        });

        return false;
    });

    $('form.access-form').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            if (data != 'ok') {
                alert(data);
            } else {
                yaCounter31174851.reachGoal('accessForm');
                $access.dialog('close');
                $('form.access-form').find('input[type=text], textarea').val('');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
            }
        }

    });

    var $booking_car = $('#booking_car');
    $('.problems .button').on('click', function () {
        $booking_car.dialog({
            autoOpen: true,
            modal: true,
            width: 299,
            open: function () {
                $('.ui-widget-overlay').on('click', function () {
                    $booking_car.dialog('close');
                });
            },
            close: function () {
                $booking_car.dialog('destroy');
            }
        });
        return false;
    });

    $('form.booking_car-form').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            if (data != 'ok') {
                alert(data);
            } else {
                $('form.booking_car-form').find('input[type=text], textarea').val('');
                $booking_car.dialog('close');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
                yaCounter31174851.reachGoal('bookingCarForm');

            }
        }
    });

    $('form.questions-form').ajaxForm({
        beforeSubmit: function (arr, $form, options) {

            if ($form.find('input[name=phone]').fieldValue() == '') {
                alert('Вы должны заполнить поле - "Ваш телефон"!');
                return false;
            }

        },
        success: function (data) {
            if (data != 'ok') {
                alert(data);
            } else {
                $('form.questions-form').find('input[type=text], textarea').val('');
                $thank.dialog('open').html('Спасибо, мы свяжемся с вами в течении 10 мин.');
                setTimeout(function () {
                    $thank.dialog('close');
                }, 3000);
                yaCounter31174851.reachGoal('questions');

            }
        }
    });

    var $details = $('#details');
    $('.catalog .inner li .more, .catalog .inner li .img').on('click', function () {
        var this_id = $(this).data('id');
        //передача утм меток в эту форму
        var getquery = window.location.search;

        $.ajax({
            url: "catalog/" + this_id + ".php" + getquery
        }).done(function (data) {
            $details.html(data);

            $details.dialog({
                autoOpen: true,
                modal: true,
                width: 990,
                open: function () {

                    $('.slider-images ul').carouFredSel({
                        circular: true,
                        infinite: true,
                        auto: false,
                        responsive: true,
                        scroll: {
                            duration: 800,
                            items: 1
                        },
                        items: {
                            height: 'variable',
                            visible: 1
                        },
                        prev: {
                            button: '.slider-images .arr-l'
                        },
                        next: {
                            button: '.slider-images .arr-r'
                        }

                    });

                    $('form.product-form').ajaxForm({
                        beforeSubmit: function (arr, $form, options) {

                            if ($form.find('input[name=phone]').fieldValue() == '') {
                                alert('Вы должны заполнить поле - "Ваш телефон"!');
                                return false;
                            }

                        },
                        success: function (data) {
                            if (data != 'ok') {
                                alert(data);
                            } else {
                                $('form.product-form').find('input[type=text], textarea').val('');
                                $thank.dialog('open').html('<span>Спасибо за заявку!</span> Мы свяжемся с вами в рабочее время');
                                setTimeout(function () {
                                    $thank.dialog('close');
                                    $details.dialog('close');
                                }, 3000);
                                yaCounter31174851.reachGoal('productForm');

                            }
                        }
                    });

                    $('.ui-widget-overlay').on('click', function () {
                        $details.dialog('close');
                    });
                    $details.find('select, input, textarea').first().blur();
                },
                close: function () {
                    $details.dialog('destroy');
                }
            });
        });
        return false;
    });

    var $access_more = $('#access_more');
    $('.access li .more, .access li .img a').on('click', function () {
        var this_id = $(this).data('id');
        //передача утм меток в эту форму
        var getquery = window.location.search;

        $.ajax({
            url: "access/" + this_id + ".php" + getquery
        }).done(function (data) {
            $access_more.html(data);

            $access_more.dialog({
                autoOpen: true,
                modal: true,
                width: 990,
                open: function () {

                    $('.slider-acc ul').carouFredSel({
                        circular: true,
                        infinite: true,
                        auto: false,
                        responsive: true,
                        scroll: {
                            duration: 800,
                            items: 1
                        },
                        items: {
                            height: 'variable',
                            visible: 1
                        },
                        prev: {
                            button: '.slider-acc .arr-l'
                        },
                        next: {
                            button: '.slider-acc .arr-r'
                        }

                    });

                    $('form.access_more-form').ajaxForm({
                        beforeSubmit: function (arr, $form, options) {

                            if ($form.find('input[name=phone]').fieldValue() == '') {
                                alert('Вы должны заполнить поле - "Ваш телефон"!');
                                return false;
                            }

                        },
                        success: function (data) {
                            if (data != 'ok') {
                                alert(data);
                            } else {
                                yaCounter31174851.reachGoal('accessMoreForm');
                                $('form.access_more-form').find('input[type=text], textarea').val('');
                                $thank.dialog('open').html('<span>Спасибо за заявку!</span> Мы свяжемся с вами в рабочее время');
                                setTimeout(function () {
                                    $thank.dialog('close');
                                    $access_more.dialog('close');
                                }, 3000);
                            }
                        }
                    });

                    $('.ui-widget-overlay').on('click', function () {
                        $access_more.dialog('close');
                    });
                    $access_more.find('select, input, textarea').first().blur();
                },
                close: function () {
                    $access_more.dialog('destroy');
                }
            });
        });
        return false;
    });

    var pos_menu = $('.site-header').position().top;
    $(window).bind('scroll', function () {

        if ($(window).scrollTop() > pos_menu) {
            $('.site-header').addClass('fixed');
        } else {
            $('.site-header').removeClass('fixed');
        }

    }).scroll();

    var $thank = $('#thank');
    $thank.dialog({
        autoOpen: false,
        modal: true,
        width: 480,
        open: function () {
            $('.ui-widget-overlay').on('click', function () {
                $thank.dialog('close');
            });
        },
        close: function () {

        }
    });
//Транслитерация 
    function cyr2lat(str) {

        var cyr2latChars = new Array(
                ['а', 'a'], ['б', 'b'], ['в', 'v'], ['г', 'g'],
                ['д', 'd'], ['е', 'e'], ['ё', 'yo'], ['ж', 'zh'], ['з', 'z'],
                ['и', 'i'], ['й', 'y'], ['к', 'k'], ['л', 'l'],
                ['м', 'm'], ['н', 'n'], ['о', 'o'], ['п', 'p'], ['р', 'r'],
                ['с', 's'], ['т', 't'], ['у', 'u'], ['ф', 'f'],
                ['х', 'h'], ['ц', 'c'], ['ч', 'ch'], ['ш', 'sh'], ['щ', 'shch'],
                ['ъ', ''], ['ы', 'y'], ['ь', ''], ['э', 'e'], ['ю', 'yu'], ['я', 'ya'],
                ['А', 'A'], ['Б', 'B'], ['В', 'V'], ['Г', 'G'],
                ['Д', 'D'], ['Е', 'E'], ['Ё', 'YO'], ['Ж', 'ZH'], ['З', 'Z'],
                ['И', 'I'], ['Й', 'Y'], ['К', 'K'], ['Л', 'L'],
                ['М', 'M'], ['Н', 'N'], ['О', 'O'], ['П', 'P'], ['Р', 'R'],
                ['С', 'S'], ['Т', 'T'], ['У', 'U'], ['Ф', 'F'],
                ['Х', 'H'], ['Ц', 'C'], ['Ч', 'CH'], ['Ш', 'SH'], ['Щ', 'SHCH'],
                ['Ъ', ''], ['Ы', 'Y'],
                ['Ь', ''],
                ['Э', 'E'],
                ['Ю', 'YU'],
                ['Я', 'YA'],
                ['a', 'a'], ['b', 'b'], ['c', 'c'], ['d', 'd'], ['e', 'e'],
                ['f', 'f'], ['g', 'g'], ['h', 'h'], ['i', 'i'], ['j', 'j'],
                ['k', 'k'], ['l', 'l'], ['m', 'm'], ['n', 'n'], ['o', 'o'],
                ['p', 'p'], ['q', 'q'], ['r', 'r'], ['s', 's'], ['t', 't'],
                ['u', 'u'], ['v', 'v'], ['w', 'w'], ['x', 'x'], ['y', 'y'],
                ['z', 'z'],
                ['A', 'A'], ['B', 'B'], ['C', 'C'], ['D', 'D'], ['E', 'E'],
                ['F', 'F'], ['G', 'G'], ['H', 'H'], ['I', 'I'], ['J', 'J'], ['K', 'K'],
                ['L', 'L'], ['M', 'M'], ['N', 'N'], ['O', 'O'], ['P', 'P'],
                ['Q', 'Q'], ['R', 'R'], ['S', 'S'], ['T', 'T'], ['U', 'U'], ['V', 'V'],
                ['W', 'W'], ['X', 'X'], ['Y', 'Y'], ['Z', 'Z'],
                [' ', '-'], ['0', '0'], ['1', '1'], ['2', '2'], ['3', '3'],
                ['4', '4'], ['5', '5'], ['6', '6'], ['7', '7'], ['8', '8'], ['9', '9'],
                ['-', '-']

                );

        var newStr = new String();

        for (var i = 0; i < str.length; i++) {

            ch = str.charAt(i);
            var newCh = '';

            for (var j = 0; j < cyr2latChars.length; j++) {
                if (ch == cyr2latChars[j][0]) {
                    newCh = cyr2latChars[j][1];

                }
            }
            // Если найдено совпадение, то добавляется соответствие, если нет - пустая строка
            newStr += newCh;

        }
        // Удаляем повторяющие знаки - Именно на них заменяются пробелы.
        // Так же удаляем символы перевода строки, но это наверное уже лишнее
        return newStr.replace(/[-]{2,}/gim, '-').replace(/\n/gim, '');
    }

//генерация ссылок меню
    var menu = $('.menu li');
    $.each(menu, function (index, value) {

        $(value).find('a').attr('href', cyr2lat($(value).find('a').text()).toLowerCase());
        if (window.location.pathname == '/' + cyr2lat($(value).find('a').text()).toLowerCase()) {
            var hash = $(value).find('a').data('id');
            var product = $('[data-block=' + hash + ']');
            if (product.length) {

                var to_pos = Number(product.offset().top);
                window.scrollTo(0, to_pos - 70);/*здесь добавлено 88 пикселей. возможно потом нужно убрать*/
            }
        }
    });
//		
    $('.menu a').click(function () {
        var url = $(this).attr('href');
        if (url != window.location) {
            window.history.pushState(null, null, url);
        }
        var hash = $(this).data('id');
        var product = $('[data-block=' + hash + ']');

        if (product.length) {

            var to_pos = Number(product.offset().top);

            $('html, body').animate({scrollTop: to_pos}, 1000, function () {
            });

            return false;
        }
    });

    $('.fancybox').fancybox();
    $('.counter').upTime();
    $(".mask").mask("+7 (999) 999 99 99");
    $('input[placeholder], textarea[placeholder]').placeholder();

});

$(window).load(function () {

    $('.slider-doc ul').carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        responsive: true,
        scroll: {
            duration: 800,
            items: 1
        },
        items: {
            height: 'variable',
            visible: 4
        },
        prev: {
            button: '.slider-doc .arr-l'
        },
        next: {
            button: '.slider-doc .arr-r'
        }

    });

    $('.slider-fleet ul').carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        responsive: true,
        scroll: {
            duration: 800,
            items: 1
        },
        items: {
            height: 'variable',
            visible: 4
        },
        prev: {
            button: '.slider-fleet .arr-l'
        },
        next: {
            button: '.slider-fleet .arr-r'
        }

    });

    $('.slider-fleet-2 ul').carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        responsive: true,
        scroll: {
            duration: 800,
            items: 1
        },
        items: {
            height: 'variable',
            visible: 4
        },
        prev: {
            button: '.slider-fleet-2 .arr-l'
        },
        next: {
            button: '.slider-fleet-2 .arr-r'
        }


    });



    $('.slider-fleet-3 ul').carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        responsive: true,
        scroll: {
            duration: 800,
            items: 1
        },
        items: {
            height: 'variable',
            visible: 4
        },
        prev: {
            button: '.slider-fleet-3 .arr-l'
        },
        next: {
            button: '.slider-fleet-3 .arr-r'
        }

    });


    $('.slider-fleet-4 ul').carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        responsive: true,
        scroll: {
            duration: 800,
            items: 1
        },
        items: {
            height: 'variable',
            visible: 4
        },
        prev: {
            button: '.slider-fleet-4 .arr-l'
        },
        next: {
            button: '.slider-fleet-4 .arr-r'
        }


    });
    

    function fix_width() {
        $(".caroufredsel_wrapper").each(function () {
            var items = $(this).find("ul > li");
            var width = items.length * items.outerWidth();
            $(this).find("ul").css({width: width});
        });
    }

    $(window).resize(fix_width);

    fix_width();




});

$.fn.upTime = function () {

    return this.each(function () {

        var $this = $(this);
        var end_time = new Date($this.attr('data-time'));

        refresh();

        window.setInterval(function () {
            refresh();
        }, 1000);

        function refresh() {

            var time = new Date();
            var totalRemains = (end_time.getTime() - time.getTime());

            if (totalRemains > 1) {

                var RemainsSec = (parseInt(totalRemains / 1000));
                var RemainsFullDays = (parseInt(RemainsSec / (24 * 60 * 60)));
                if (RemainsFullDays < 10) {
                    RemainsFullDays = '0' + RemainsFullDays;
                }
                var secInLastDay = RemainsSec - RemainsFullDays * 24 * 3600;
                var RemainsFullHours = (parseInt(secInLastDay / 3600));
                if (RemainsFullHours < 10) {
                    RemainsFullHours = '0' + RemainsFullHours;
                }
                var secInLastHour = secInLastDay - RemainsFullHours * 3600;
                var RemainsMinutes = (parseInt(secInLastHour / 60));
                if (RemainsMinutes < 10) {
                    RemainsMinutes = '0' + RemainsMinutes;
                }
                var lastSec = secInLastHour - RemainsMinutes * 60;
                if (lastSec < 10) {
                    lastSec = '0' + lastSec
                }
                ;

                if ($('.d', $this).length) {
                    $('.d', $this).html(RemainsFullDays);
                }
                $('.h', $this).html(RemainsFullHours);
                $('.m', $this).html(RemainsMinutes);
                $('.s', $this).html(lastSec);

            } else {
                if ($('.d', $this).length) {
                    $('.d', $this).html('00');
                }
                $('.h', $this).html('00');
                $('.m', $this).html('00');
                $('.s', $this).html('00');
            }
        }

    });
};
