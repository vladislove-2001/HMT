@extends('layouts.extention')

@section('title', 'Контакты - HMT Co.')
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

@section('include')
    <!-- Home -->
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/home_slider_3.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/">Главная</a></li>
                                        <li>Контакты</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-8 contact_col">
                    <div class="get_in_touch">
                        <div class="section_title">Остались вопросы?</div>
                        <div class="section_subtitle">Задайте их в поле ниже</div>
                        <div class="contact_form_container">
                            <form action="#" id="contact_form" class="contact_form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Name -->
                                        <label for="contact_name">Имя</label>
                                        <input type="text" id="contact_name" class="contact_input" required="required">
                                    </div>
                                    <div class="col-xl-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="contact_last_name">Фамилия</label>
                                        <input type="text" id="contact_last_name" class="contact_input" required="required">
                                    </div>
                                </div>
                                <div>
                                    <!-- Subject -->
                                    <label for="contact_company">Тема</label>
                                    <input type="text" id="contact_company" class="contact_input">
                                </div>
                                <div>
                                    <label for="contact_textarea">Сообщение</label>
                                    <textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                                </div>
                                <button class="button contact_button"><span>Отправить</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 offset-xl-1 contact_col">
                    <div class="contact_info">
                        <div class="contact_info_section">
                            <div class="contact_info_title">Отдел маркетинга</div>
                            <ul>
                                <li>Телефон: <span>+7 961 250 6641</span></li>
                                <li>Email: <span>marketing@hmt.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Продажа и возврат</div>
                            <ul>
                                <li>Телефон: <span>+7 961 250 6641</span></li>
                                <li>Email: <span>sale@hmt.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Информация</div>
                            <ul>
                                <li>Телефон: <span>+7 961 250 6641</span></li>
                                <li>Email: <span>info@hmt.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row map_row">
                <div class="col">
                    <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <div id="map">
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac2e566fd9949a91d1a9fac9cfa64791bc49fb0bcdfad3f162048e2ddb86c82e3&amp;width=1200&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/contact.js"></script>
@endsection
