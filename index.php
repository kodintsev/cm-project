<?php
session_start();
$utm_medium = 'Без utm_medium';
$utm_source = 'Без utm_source';
$utm_campaign = 'Без utm_campaign';
$utm_term = 'Без utm_term';
$utm_content = 'Без utm_content';

if(isset($_GET['utm_medium'])){
    $utm_medium = urldecode($_GET['utm_medium']);
    $_SESSION['utm_medium'] = urldecode($_GET['utm_medium']);
}elseif(isset($_SESSION['utm_medium'])) {
    $utm_medium = $_SESSION['utm_medium'];
} else{
    $utm_medium = 'Без utm_medium';
}
if(isset($_GET['utm_source'])){
    $utm_source = urldecode($_GET['utm_source']);
    $_SESSION['utm_source'] = urldecode($_GET['utm_source']);
}elseif(isset($_SESSION['utm_source'])) {
    $utm_source = $_SESSION['utm_source'];
} else{
    $utm_source = 'Без utm_source';
}
if(isset($_GET['utm_campaign'])){
    $utm_campaign = urldecode($_GET['utm_campaign']);
    $_SESSION['utm_campaign'] = urldecode($_GET['utm_campaign']);
}elseif(isset($_SESSION['utm_campaign'])) {
    $utm_campaign = $_SESSION['utm_campaign'];
} else{
    $utm_campaign = 'Без utm_campaign';
}
if(isset($_GET['utm_term'])){
    $utm_term = urldecode($_GET['utm_term']);
    $_SESSION['utm_term'] = urldecode($_GET['utm_term']);
}elseif(isset($_SESSION['utm_term'])) {
    $utm_term = $_SESSION['utm_term'];
} else{
    $utm_term = 'Без utm_term';
}
if(isset($_GET['utm_content'])){
    $utm_content = urldecode($_GET['utm_content']);
    $_SESSION['utm_content'] = urldecode($_GET['utm_content']);
}elseif(isset($_SESSION['utm_content'])) {
    $utm_content = $_SESSION['utm_content'];
} else{
    $utm_content = 'Без utm_content';
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>CM Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.min.css" >
    <meta name="Description" content="">
    <meta name="Keywords" content="">
</head>
<body>
<!-- BEGIN  container-->
<div class="container">
    <header class="wrapper header" id="block_1">
        <div class="inner clearfix">
            <div class="header_logo">
                <a href="./" class="logo_a">
                    <img class="logo_img" src="./img/logo.png" alt=""/>
                </a>
            </div>
            <p class="header_desc">Сеть стоматологических<br> клиник</p>
            <div class="header_right">
                <div class="header_right_info"><span class="big">Болят зубы?</span>
                    Звоните сейчас</div>
                <div class="header_right_contact">
                    <a class="header_phone" href="tel:+73512003682">+7 (351) 200-36-82</a><br>
                    <a class="header_callback js_btn_custom_form" data-fancybox href="#custom" data-head="Оставьте заявку" data-txt="Мы свяжемся с вами в<br> течение 5 минут" data-position="Бесплатная консультация" data-btn-txt="Заказать консультацию">Бесплатная консультация</a>
                    <p class="header_time">с 9 до 21 без выходных</p>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper banner" id="block_2">
        <div class="inner clearfix">
            <div class="banner_info">
                <h1 class="banner_head">Сеть стоматологических клиник</h1>
            </div>
            <div class="banner_form_wrap">
                <h2 class="form_wrap_head"><strong class="bold">Запишитесь на бесплатный<br> осмотр врача-стоматолога</strong><br> (0 руб вместо 2000 руб):</h2>
                <form action="./handlers/send-form-number.php" class="form_vertical" method="post">
                    <ul class="form_ul">
                        <li class="form_li">Осмотр состояния полости рта</li>
                        <li class="form_li">Консультация узких специалистов при необходимости (терапевта, ортопеда, хирурга, ортодонта, пародонтолога)</li>
                        <li class="form_li">Составление плана лечения</li>
                        <li class="form_li">Составление сметы лечения</li>
                    </ul>
                    <label class="form_label">
                        <input type="tel" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                    </label>
                    <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                    <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                    <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                    <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                    <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                    <input type="hidden" name="position" class="input_hid" value="Бесплатный осмотр" />
                    <input type="hidden" name="mail" class="input_hid" value="" />
                    <input type="submit" class="form_button btn" value="Бесплатный осмотр" />
                    <button type="submit" class="form_button btn">Бесплатный осмотр</button>
                    <p class="recall">Перезвоним через 5 секунд</p>
                </form>
            </div>
        </div>
    </div>
    <div class="wrapper triggers" id="block_3">
        <div class="inner">
            <div class="triggers_wrap clearfix">
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_1.png" alt=""/>
                    <p class="trigger_info">Прием в день<br> обращения</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_2.png" alt=""/>
                    <p class="trigger_info">Одна цена на<br> сайте и в чеке</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_3.png" alt=""/>
                    <p class="trigger_info">15 лет гарантии<br> на все изделия</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_4.png" alt=""/>
                    <p class="trigger_info">Скидка 19% всем клиентам<br> при заключении договора<br> в день обращения</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper reviews" id="block_9">
        <div class="inner">
            <div class="default_head_wrap">
                <h2 class="default_head">"Во франшизе, нравится ВСЁ..." -<br>
                    Анастасия Екимова</h2>
                <p class="default_after_head">Посмотрите на успехи наших франчайзи</p>
            </div>
            <div class="reviews_wrap">
                <div class="reviews_slider">
                    <div class="slider_item">
                        <img src="./img/reviews_img_1.jpg" alt="" class="item_img">
                        <p class="item_name">Анастасия Екимова, Калининград</p>
                        <p class="item_info">Во франшизе, нравится ВСЁ, особенно поддержка и коллектив! В Новосибирске я познакомилась
                            почти со всеми. Очень ценю, что не было ни одной нерешенной ситуации ни одного неотвеченного вопроса. Помогают во всём!</p>
                    </div>
                    <div class="slider_item">
                        <img src="./img/reviews_img_2.jpg" alt="" class="item_img">
                        <p class="item_name">Юлия Николаева, Волжский</p>
                        <p class="item_info">Мы с супругом думали над открытием своего дела. У нас не было опыта, поэтому мы решили приобрести франшизу. Я наткнулась на франшизу школы «Рождение» и поняла, что ничего подобного у нас в городе нет. Внимательно рассмотрела сайт, и информация на нем заинтересовала ещё более. Посмотрела для сравнения другие школы, но «Рождение» – школа с большим стажем работы + приятный и терпеливый менеджер. В общем, мы решили открыть филиал именно этой школы в городе.</p>
                    </div>
                    <div class="slider_item">
                        <img src="./img/reviews_img_3.jpg" alt="" class="item_img">
                        <p class="item_name">Оксана Некрасова, Чита</p>
                        <p class="item_info">С расширением нашей семьи не так давно мы рассматривали вариант открытия детской игровой комнаты. Но обратили внимание на проект школы для будущих родителей. Многое из того, что предлагает школа, отзывается в душе и удовлетворяет тем потребностям и желаниям, которые хотелось бы реализовать. Уже с открытием данной деятельности удалось оценить, насколько удобно оказаться частью большой и серьезной команды с продуманным планом развития, и в то же время есть возможность использовать личные инструменты и качества для реализации целей и увеличения собственной прибыли.</p>
                    </div>
                </div>
                <div class="slider_arrows">
                    <div class="arrow_item prev reviews_slider_prev">prev</div>
                    <div class="arrow_item next reviews_slider_next">next</div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper horizontal_form" id="block_7">
        <div class="inner">
            <div class="horizontal_form_wrap">
                <div class="head_group">
                    <h2 class="form_wrap_head">Узнайте, как установить 3 импланта по цене 2 и сэкономить 21000 рублей</h2>
                    <p class="form_wrap_after_head">Оставьте заявку и узнайте все акции и скидки на имплантацию в нашей клинике</p>
                </div>
                <form action="./handlers/send-form-number.php" class="form_horizontal" method="post">
                    <label class="form_label">
                        <input type="tel" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                    </label>
                    <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                    <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                    <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                    <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                    <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                    <input type="hidden" name="position" class="input_hid" value="Узнайте все акции и скидки на имплантацию" />
                    <input type="hidden" name="mail" class="input_hid" value="" />
                    <button type="submit" class="form_button btn md">Получить скидку</button>
                </form>
                <div class="form_wrap_stock">
                    <p class="stock_txt">До конца акции:</p>
                    <div class="countbox clearfix"></div>
                </div>
                <div class="form_wrap_bottom_info">
                    <p class="bottom_info_txt">Или звоните нам прямо сейчас и запишитесь на бесплатную консультацию!</p>
                    <a href="tel:88001234567" class="bottom_info_phone">8 (800) 123-45-67</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper contact" id="block_38">
        <div class="inner contact_inner">
            <h2 class="default_head">Не откладывайте здоровье ваших зубов на завтра!<br> <span class="yellow">Свяжитесь с нами прямо сейчас</span></h2>
            <div class="contact_wrap">
                <a class="contact_a phone" href="tel:+73512003682">+7 (351) <span class="bold">200-36-82</span></a>
                <a class="contact_a email" href="mailto:mail@site.net">mail@site.net</a>
            </div>
        </div>
        <div class="map_wrap">
            <div class="map" id="map_contact"></div>
            <div class="inner clearfix">
                <div class="form_wrap">
                    <p class="form_wrap_p">Остались вопросы по лечению зубов?<br> <span class="big">Задайте их нам и получите бесплатную консультацию специалиста!</span></p>
                    <form action="./handlers/send-form-contact.php" class="form_vertical" method="post">
                        <label class="form_label">
                            <input type="tel" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                        </label>
                        <label class="form_label">
                            <textarea name="msg" class="form_textarea" required placeholder="Чем мы можем вам помочь?"></textarea>
                        </label>
                        <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                        <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                        <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                        <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                        <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                        <input type="hidden" name="position" class="input_hid" value="Вопрос посетителя" />
                        <input type="hidden" name="mail" class="input_hid" value="" />
                        <button type="submit" class="form_button btn">Задать вопрос</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="wrapper footer" id="block_39">
        <div class="inner clearfix">
            <div class="footer_info">
                <a class="footer_a" data-fancybox href="#privacy">Политика конфиденциальности</a>
            </div>
            <div class="footer_cm">
                <div class="convert">
                    <p class="convert_p">Сделано в</p>
                    <a href="//convertmonster.ru/landing-page/?utm_source=cm-project&amp;utm_medium=footer&amp;utm_campaign=landing" class="convert_logo" title="Создано в Convert Monster" target="_blank">
                        <img class="convert_logo_img" src="./img/convert.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="hidden_form" id="custom">
    <div class="form_head_wrap">
        <h2 class="form_head js_custom_head">&nbsp;</h2>
        <p class="form_after_head js_custom_txt">&nbsp;</p>
    </div>
    <form action="./handlers/send-form.php" class="form_vertical" method="post">
        <label class="form_label">
            <input type="text" name="name" class="form_input" required value="" placeholder="Ваше имя"/>
        </label>
        <label class="form_label">
            <input type="tel" name="number" maxlength="18" class="form_input" required value="" placeholder="Ваш телефон"/>
        </label>
        <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
        <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
        <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
        <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
        <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
        <input type="hidden" name="position" class="input_hid js_custom_position" value="" />
        <input type="hidden" name="mail" class="input_hid" value="" />
        <button type="submit" class="form_button btn js_custom_btn">Оставить заявку</button>
    </form>
</div>
<div class="popup_info" id="privacy">
    <p class="info_p">Сайт уважает и соблюдает законодательство РФ. Также мы уважаем Ваше право и соблюдаем конфиденциальность при заполнении, передаче и хранении ваших конфиденциальных сведений.</p>
    <p class="info_p">Мы запрашиваем Ваши персональные данные исключительно для информирования об оказываемых услугах сайта.</p>
    <p class="info_p">Персональные данные - это информация, относящаяся к субъекту персональных данных, то есть, к потенциальному покупателю. В частности, это фамилия, имя и отчество, дата рождения, адрес, контактные реквизиты (телефон, адрес электронной почты), семейное, имущественное положение и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» (далее – «Закон») к категории персональных данных.</p>
    <p class="info_p">Если Вы разместили Ваши контактные данных на сайте, то Вы автоматически согласились на обработку данных и дальнейшую передачу Ваших контактных данных менеджерам нашего сайта.</p>
    <p class="info_p">В случае отзыва согласия на обработку своих персональных данных мы обязуемся удалить Ваши персональные данные в срок не позднее 3 рабочих дней.</p>
</div>
<link rel="stylesheet" href="./js/libs/css/libs.min.css" property="stylesheet">
<script src="//yastatic.net/browser-updater/v1/script.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="./js/all.min.js"></script>
</body>
</html>