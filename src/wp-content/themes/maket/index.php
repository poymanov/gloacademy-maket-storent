<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= get_template_directory_uri() ?>/img/favicon.png">
    <title>Макетная мастерская</title>
    <?php wp_head(); ?>
</head>
<body class="body">
<!-- Кнопка вызова меню -->
<a class="menu-link">
    <span></span>
</a>
<!-- Хэдер -->
<div class="header-bg">
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-sm-3 col-lg-3">
                    <a href="#" class="header-logo">
                        <!-- <div class="header-logo__img"></div> -->
                        <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-logo.png" class="header-logo__img" alt="">
                    </a>
                </div>
                <!-- /.col-3 -->
                <div class="order-last col-12 order-sm-0 col-sm-5 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="header-adress justify-content-center">
                                <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-label.png" class="header-adress__icon" alt="">
                                <!-- /.adress-icon -->
                                <div class="header-adress__text">
                                    г. Москва,<br>
                                    Авиамоторная улица, 4А
                                </div>
                                <!-- /.adress-text -->
                            </div>
                            <!-- /.header-adress -->
                        </div>
                        <!-- /.col-4 -->
                        <div class="col-12 col-lg-5">
                            <div class="header-adress header-adress_email justify-content-center">
                                <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-mail.png" class="header-adress__icon header-mail__icon" alt="">
                                <!-- /.adress-icon -->
                                <div class="header-adress__text header-mail__text">
                                    <a href="mailto:info@maketstorent.ru">info@maketstorent.ru</a>
                                </div>
                                <!-- /.adress-text -->
                            </div>
                        </div>
                        <!-- /.col-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.contacts-header -->
                <div class="col-7 col-sm-4 col-lg-3">
                    <div class="header-contacts">
                        <div class="header-contacts__phone">
                            <a href="tel:+7(495)008-55-77">+7 (495) 008-55-77</a>
                        </div>
                        <!-- /.header-contacts__phone -->
                        <div class="header-contacts__order  show-order">
                            Заказать макетные запчасти
                        </div>
                    </div>
                    <!-- /.header-contacts -->
                </div>
                <!-- /.col-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->
    <!-- Меню -->
    <nav class="nav-menu">
        <div class="container">
            <ul class="menu">
                <li class="menu-title"><a href="#materials">Материалы</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#tools">Инструменты</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#prototyping">Макетирование</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#delivery">Доставка</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#main">О Нас</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#manual">Как заказать</a></li>
                <!-- /.menu-title -->
                <li class="menu-title"><a href="#contacts">Контакты</a></li>
                <!-- /.menu-title -->
            </ul>
            <!-- /.menu -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.menu -->
    <!-- Главная секция -->
    <div class="main" id="main">
        <div class="container">
            <div class="row justify-content-md-center justify-content-xl-between align-items-lg-center">
                <div class="col-12 col-lg-7 col-xl-7">
                    <div class="advantages">
                        <div class="advantages-title">
                            <h1><?= the_title() ?></h1>
                        </div>
                        <!-- /.advantages-title -->
                        <div class="advantages-subtitle">
                            Немного о нас и наших преимуществах:
                        </div>
                        <!-- /.advantages-subtitle -->
                        <!-- Преимущства -->
                        <div class="advantages-blocks">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_1_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_1_text', 2); ?></div>
                                    </div>

                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_2_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_2_text', 2); ?></div>
                                    </div>

                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_3_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_3_text', 2); ?></div>
                                    </div>
                                </div>
                                <!-- /.col-4 -->
                                <div class="col-12 col-md-6">
                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_4_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_4_text', 2); ?></div>
                                    </div>

                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_5_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_5_text', 2); ?></div>
                                    </div>

                                    <div class="advantages-block">
                                        <div class="advantages-block__img">
                                            <img src="<?php the_field('advantage_6_image', 2); ?>" alt="">
                                        </div>
                                        <div class="advantages-block__text"><?php the_field('advantage_6_text', 2); ?></div>
                                    </div>
                                </div>
                                <!-- /.col-4 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.advantages-blocks -->
                        <!-- /.advantages -->
                    </div>
                </div>
                <!-- /.col-8 -->
                <!-- Форма на главной секции -->
                <div class="col-12 col-md-10 col-lg-5 col-xl-4">
                    <div class="form-main form">
                        <div class="form-title">
                            Закажите макетные материалы
                            прямо сейчас
                        </div>
                        <?= do_shortcode('[contact-form-7 id="168" title="main-form"]') ?>
                        <div class="form-small">
                            Нажимая на кнопку оставить заявку
                            вы соглашаетесь с <div class="show-politic">политикой обработки данных</div>
                        </div>
                        <!-- /.small -->
                    </div>
                    <!-- /.form -->
                </div>
                <!-- /.col-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main -->
</div>
<!-- /.header-bg -->
<!-- Секция "Материалы для макетирования" -->
<section class="section-slider materials" id="materials">
    <div class="section-title">
        <h2>
            Материалы для макетирования
        </h2>
    </div>
    <!-- /.section-title -->
    <div class="container">
        <img src="<?= get_template_directory_uri() ?>/img/materials/materials-img.png" class="materials-img lego-img" alt="">

        <!-- Слайдер в секции -->
        <div class="slider">

	        <?php
	        global $post;

	        $myposts = get_posts( [
		        'numberposts' => 10,
		        'category_name' => 'materials'
	        ]);

	        foreach( $myposts as $post ){
		        setup_postdata( $post );
		        ?>
                <div class="slider-block">
                    <div class="slider-block__img">
                        <img src="<?= the_field('material_image') ?>" alt="">
                    </div>
                    <!-- /.slider-slider__img -->
                    <div class="slider-block__name"><?= the_title() ?></div>
                    <!-- /.slider-name -->
                    <div class="slider-block__price"><?= the_field('material_price') ?></div>
                    <!-- /.slider-price -->
                    <a class="slider-block__button">
                        <div class="slider-block__button_img"></div>
                        <div class="slider-block__button_text">Купить</div>
                    </a>
                </div>
		        <?php
	        }
	        wp_reset_postdata();
	        ?>
        </div>
        <!-- /.slider -->
    </div>
    <!-- /.container -->
</section>
<!-- /.materials -->
<!-- Секция "Инструменты для макетирования" -->
<section class="section-slider tools" id="tools">
    <div class="section-title">
        <h2>
            Инструменты для макетирования
        </h2>
    </div>
    <!-- /.section-title -->
    <div class="container">
        <img src="<?= get_template_directory_uri() ?>/img/tools/tools-img.png" class="tools-img lego-img" alt="">
        <!-- Слайдер в секции -->
        <div class="slider">
	        <?php
	        global $post;

	        $myposts = get_posts( [
		        'numberposts' => 10,
		        'category_name' => 'tools'
	        ]);

	        foreach( $myposts as $post ){
		        setup_postdata( $post );
		        ?>
                <div class="slider-block">
                    <div class="slider-block__img">
                        <img src="<?= the_field('tools_image') ?>" alt="">
                    </div>
                    <!-- /.slider-slider__img -->
                    <div class="slider-block__name"><?= the_title() ?></div>
                    <!-- /.slider-name -->
                    <div class="slider-block__price"><?= the_field('tools_price') ?></div>
                    <!-- /.slider-price -->
                    <a class="slider-block__button">
                        <div class="slider-block__button_img"></div>
                        <div class="slider-block__button_text">Купить</div>
                    </a>
                </div>
		        <?php
	        }
	        wp_reset_postdata();
	        ?>
        <!-- /.slider -->
    </div>
    <!-- /.container -->
</section>
<!-- /.tools -->
<!-- Секция "Макетирование" -->
<section class="section-slider prototyping" id="prototyping">
    <div class="section-title">
        <h2>
            Макетирование
        </h2>
    </div>
    <!-- /.section-title -->
    <div class="container">
        <img src="<?= get_template_directory_uri() ?>/img/prototyping/prototyping-img.png" class="prototyping-img lego-img" alt="">
        <!-- Слайдер в секции -->
        <div class="slider">
	        <?php
	        global $post;

	        $myposts = get_posts( [
		        'numberposts' => 10,
		        'category_name' => 'prototyping'
	        ]);

	        foreach( $myposts as $post ){
		        setup_postdata( $post );
		        ?>
                <div class="slider-block">
                    <div class="slider-block__img">
                        <img src="<?= the_field('prototyping_image') ?>" alt="">
                    </div>
                    <!-- /.slider-slider__img -->
                    <div class="slider-block__name"><?= the_title() ?></div>
                    <!-- /.slider-name -->
                    <div class="slider-block__price"><?= the_field('prototyping_price') ?></div>
                    <!-- /.slider-price -->
                    <a class="slider-block__button">
                        <div class="slider-block__button_img"></div>
                        <div class="slider-block__button_text">Купить</div>
                    </a>
                </div>
		        <?php
	        }
	        wp_reset_postdata();
	        ?>
        </div>
        <!-- /.slider -->
    </div>
    <!-- /.container -->
</section>
<!-- /.prototyping -->
<!-- Секция "Оставить заявку" -->
<section class="section-slider order">
    <div class="section-title order-section-title">
        <h2>
            Не нашли то что искали?
        </h2>
    </div>
    <!-- /.section-title -->
    <div class="container">
        <div class="form form-order">
            <div class="form-main form-main_order">
                <div class="form-title form-order-title">
                    Оставьте заявку и мы подберем Вам необходимые для Вас материалы
                </div>
                <!-- /.form-title -->
                <div class="form-order_block">
	                <?= do_shortcode('[contact-form-7 id="172" title="main-form"]') ?>
                </div>
                <!-- /.form-block -->
                <div class="form-small form-order-small">
                    Нажимая на кнопку оставить заявку
                    вы соглашаетесь с <div class="show-politic">политикой обработки данных</div>
                </div>
                <!-- /.form-small -->
            </div>
            <!-- /.form-main form-order -->
        </div>
        <!-- /.form -->
    </div>
    <!-- /.container -->
</section>
<!-- /.order -->
<!-- Секция "как заказать?" -->
<div class="manual-bg">
    <section class="section-slider manual" id="manual">
        <div class="section-title manual-section-title">
            <h2>
                Как заказать?
            </h2>
        </div>
        <!-- /.section-title -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="manual-block">
                        <div class="manual-block__img">
                            <img src="<?php the_field('order_step_1_image', 2); ?>" alt="">
                        </div>
                        <!-- /.manual-img -->
                        <div class="manual-block__text">
	                        <?php the_field('order_step_1_text', 2); ?>
                            <div class="manual-block__text_order  show-order">
                                Заполнить форму заказа
                            </div>
                        </div>
                        <!-- /.manual-text -->
                    </div>
                    <!-- /.manual-block -->
                    <img src="<?= get_template_directory_uri() ?>/img/manual/manual-arrow.png" alt="" class="manual-arrow manual-arrow_1">
                </div>
                <div class="col-12 col-lg-3">
                    <div class="manual-block">
                        <div class="manual-block__img">
                            <img src="<?php the_field('order_step_2_image', 2); ?>" alt="">
                        </div>
                        <!-- /.manual-img -->
                        <div class="manual-block__text"><?php the_field('order_step_2_text', 2); ?></div>
                        <!-- /.manual-text -->
                    </div>
                    <!-- /.manual-block -->
                    <img src="<?= get_template_directory_uri() ?>/img/manual/manual-arrow.png" alt="" class="manual-arrow manual-arrow_2">
                </div>
                <div class="col-12 col-lg-3">
                    <div class="manual-block">
                        <div class="manual-block__img">
                            <img src="<?= get_template_directory_uri() ?>/img/manual/manual-img-3.png" alt="">
                        </div>
                        <!-- /.manual-img -->
                        <div class="manual-block__text">
                            Согласовать доставку
                            или самовывоз
                            <div class="manual-block__text_order  show-order">
                                Подробнее о доставке
                            </div>
                        </div>
                        <!-- /.manual-text -->
                    </div>
                    <!-- /.manual-block -->
                    <img src="<?= get_template_directory_uri() ?>/img/manual/manual-arrow.png" alt="" class="manual-arrow manual-arrow_3">
                </div>
                <div class="col-12 col-lg-3">
                    <div class="manual-block manual-block_last">
                        <div class="manual-block__img">
                            <img src="<?= get_template_directory_uri() ?>/img/manual/manual-img-4.png" alt="">
                        </div>
                        <!-- /.manual-img -->
                        <div class="manual-block__text">
                            Получить товар
                            и приятные эмоции
                        </div>
                        <!-- /.manual-text -->
                    </div>
                    <!-- /.manual-block -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.conaiter -->
    </section>
    <!-- /.manual -->
</div>
<!-- /.manual-bg -->
<!-- Секция "Доставка" -->
<section class="section-slider delivery" id="delivery">
    <div class="section-title delivery-section-title">
        <h2>
            Доставка
        </h2>
    </div>
    <!-- /.section-title -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="delivery-block">
                    <div class="delivery-block__img">
                        <img src="<?php the_field('delivery_info_1_image', 2); ?>" alt="">
                    </div>
                    <!-- /.delivery-block__img -->
                    <div class="delivery-block__text"><?php the_field('delivery_info_1_text', 2); ?></div>
                    <!-- /.delivery-block__text -->
                </div>
                <!-- /.delivery-block -->
            </div>
            <!-- /.col-3 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="delivery-block">
                    <div class="delivery-block__img">
                        <img src="<?php the_field('delivery_info_2_image', 2); ?>" alt="">
                    </div>
                    <!-- /.delivery-block__img -->
                    <div class="delivery-block__text"><?php the_field('delivery_info_2_text', 2); ?></div>
                    <!-- /.delivery-block__text -->
                </div>
                <!-- /.delivery-block -->
            </div>
            <!-- /.col-3 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="delivery-block delivery-block_last1">
                    <div class="delivery-block__img">
                        <img src="<?php the_field('delivery_info_3_image', 2); ?>" alt="">
                    </div>
                    <!-- /.delivery-block__img -->
                    <div class="delivery-block__text"><?php the_field('delivery_info_3_text', 2); ?></div>
                    <!-- /.delivery-block__text -->
                </div>
                <!-- /.delivery-block -->
            </div>
            <!-- /.col-3 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="delivery-block delivery-block_last2">
                    <div class="delivery-block__img">
                        <img src="<?php the_field('delivery_info_4_image', 2); ?>" alt="">
                    </div>
                    <!-- /.delivery-block__img -->
                    <div class="delivery-block__text"><?php the_field('delivery_info_4_text', 2); ?></div>
                    <!-- /.delivery-block__text -->
                </div>
                <!-- /.delivery-block -->
            </div>
            <!-- /.col-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.delivery -->
<!-- Секция "Контакты" -->
<div class="contacts-bg">
    <div class="section-slider contacts" id="contacts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    <div class="contacts-block">
                        <div class="contacts-block__img">
                            <img src="<?php the_field('contacts_email_image', 2); ?>" alt="">
                        </div>
                        <!-- /.contacts-block__img -->
                        <div class="contacts-block__text">
                            <a href="mailto:<?php the_field('contacts_email_text', 2); ?>"><?php the_field('contacts_email_text', 2); ?></a>
                        </div>
                        <!-- /.contacts-block__text -->
                    </div>
                    <!-- /.contacts-block -->
                </div>
                <!-- /.col-4 -->
                <div class="col-12 col-md-3">
                    <div class="contacts-block">
                        <div class="contacts-block__img">
                            <img src="<?php the_field('contacts_phone_image', 2); ?>" alt="">
                        </div>
                        <!-- /.contacts-block__img -->
                        <div class="contacts-block__text">
                            <a href="tel:<?php the_field('contacts_phone_text', 2); ?>"><?php the_field('contacts_phone_text', 2); ?></a>
                        </div>
                        <!-- /.contacts-block__text -->
                    </div>
                    <!-- /.contacts-block -->
                </div>
                <!-- /.col-4 -->
                <div class="col-12 col-md-3">
                    <div class="contacts-block contacts-block_last">
                        <div class="contacts-block__img">
                            <img src="<?php the_field('contacts_hours_image', 2); ?>" alt="">
                        </div>
                        <!-- /.contacts-block__img -->
                        <div class="contacts-block__text"><?php the_field('contacts_hours_text', 2); ?></div>
                        <!-- /.contacts-block__text -->
                    </div>
                    <!-- /.contacts-block -->
                </div>
                <!-- /.col-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.contacts  -->
    <div class="map">
	    <?php the_field('yandex_map_code', 2); ?>
    </div>
</div>
<!-- /.contacts-bg -->
<!-- Секция "Остались вопросы? Задайте их нам" -->
<div class="feedback">
    <div class="feedback-text">
        Остались вопросы?&nbsp;&nbsp;&nbsp;&nbsp;<div class="feedback-text__click  show-order"> Задайте их нам</div>
    </div>
</div>
<!-- Футер -->
<div class="footer-bg">
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-sm-3 col-lg-3">
                    <a href="#" class="footer-logo">
                        <!-- <div class="footer-logo__img"></div> -->
                        <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-logo.png" class="header-logo__img" alt="">
                    </a>
                </div>
                <!-- /.col-3 -->
                <div class="order-last col-12 order-sm-0 col-sm-4 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="footer-adress">
                                <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-label.png" class="header-adress__icon" alt="">
                                <!-- /.adress-icon -->
                                <div class="footer-adress__text">
                                    г. Москва,<br>
                                    Авиамоторная улица, 4А
                                </div>
                                <!-- /.adress-text -->
                            </div>
                            <!-- /.footer-adress -->
                        </div>
                        <!-- /.col-4 -->
                        <div class="col-12 col-lg-5">
                            <div class="footer-adress footer-adress_email ">
                                <img src="<?= get_template_directory_uri() ?>/img/header-footer/header-mail.png" class="footer-adress__icon footer-mail__icon" alt="">
                                <!-- /.adress-icon -->
                                <div class="footer-adress__text footer-mail__text">
                                    <a href="mailto:info@maketstorent.ru">info@maketstorent.ru</a>
                                </div>
                                <!-- /.adress-text -->
                            </div>
                        </div>
                        <!-- /.col-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.contacts-footer -->
                <div class="col-7 col-sm-5 col-lg-3">
                    <div class="footer-contacts">
                        <div class="footer-contacts__phone">
                            <a href="tel:+7(495)008-55-77">+7 (495) 008-55-77</a>
                        </div>
                        <!-- /.footer-contacts__phone -->
                        <div class="footer-contacts__order show-order">
                            Заказать макетные запчасти
                        </div>
                    </div>
                    <!-- /.footer-contacts -->
                </div>
                <!-- /.col-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->
</div>
<!-- /.footer-bg -->
<div class="overlay animated fadeIn">
    <div class="popup">
        <div class="form form-popup">
            <div class="popup_close">&#10005;</div>
            <div class="form-main ">
                <div class="form-title">
                    Закажите макетные материалы
                    прямо сейчас
                </div>
                <!-- /.form-title -->
                <?= do_shortcode('[contact-form-7 id="168" title="main-form"]') ?>
                <div class="form-small">
                    Нажимая на кнопку оставить заявку
                    вы соглашаетесь с <div class="show-politic">политикой обработки данных</div>
                </div>
                <!-- /.small -->
            </div>
        </div>
        <!-- /.form -->
    </div>
</div>
<!-- /.overlay -->
<div class="overlay-politic animated fadeIn">
    <div class="politic-popup">
        <div class="popup_close-politic">&#10005;</div>
        <div class="politic-popup__text">
            <div class="politic-popup__title">
                Политика конфиденциальности
            </div>
            <p>
                Политика в отношении персональных данных определяет основные принципы и правила по обработке персональных данных, которыми мы руководствуемся в нашей работе, также в общении с клиентами, поставщиками и сотрудниками. Политика в отношении обработки персональных данных распространяется на всех наших сотрудников.
            </p>
            <p>
                При обработке персональных данных мы стремимся соблюдать требования законодательства Российской Федерации, в частности Федеральный зкаон № 152-ФЗ "О персональных данных, а также нормы и правила, установленные в нашей компании".
            </p>
            <div class="politic-popup__title">
                Политика в отношении обработки персональных данных
                <p>
                    <a href="policy/policy.pdf" download="policy/policy.pdf">policy.pdf,</a> 203 КБ
                </p>
            </div>
            <p>
                По всем вопросам вы можете связаться по email: <a href="mailto:info@maketstorent.ru" class="politic-popup__mail">info@maketstorent.ru</a>
            </p>
        </div>
    </div>
</div>
<!-- /.overlay-politic -->
<div class="overlay-message animated fadeIn">
    <div class="message-popup">
        <div class="message-popup__title">
            <p>
                Сообщение успешно отправлено
            </p>
        </div>
    </div>
</div>
<!-- /.overlay-message -->

<?php wp_footer(); ?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84746048-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-84746048-3');
</script>
<!-- Яндекс метрика -->
<script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48955211 = new Ya.Metrika({ id:48955211, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48955211" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>
