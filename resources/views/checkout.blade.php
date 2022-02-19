@extends('layouts.extention')

@section('title', 'Категории - HMT Co.')
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
@section('include')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/">Главная</a></li>
                                        <li>Оформление заказа</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout -->

    <div class="checkout">
        <div class="container">
            <div class="row">

                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">Адрес доставки</div>
                        <div class="section_subtitle">Введите необходимую информацию в поле ниже</div>
                        <div class="checkout_form_container">
                            <form action="#" id="checkout_form" class="checkout_form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Name -->
                                        <label for="checkout_name">Имя*</label>
                                        <input type="text" id="checkout_name" class="checkout_input" required="required">
                                    </div>
                                    <div class="col-xl-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="checkout_last_name">Фамилия*</label>
                                        <input type="text" id="checkout_last_name" class="checkout_input" required="required">
                                    </div>
                                </div>
                                <div>
                                    <!-- Company -->
                                    <label for="checkout_company">Компания (если вы заказываете как физ.лицо оставьте это поле пустым)</label>
                                    <input type="text" id="checkout_company" class="checkout_input">
                                </div>
                                <div>
                                    <!-- Country -->
                                    <label for="checkout_country">Страна*</label>
                                    <select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
                                        <option></option>
                                        <option>Россия</option>
                                        <option>Белоруссия</option>
                                        <option>Казахстан</option>
                                        <option>Украина</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- Address -->
                                    <label for="checkout_address">Адрес*</label>
                                    <input type="text" id="checkout_address" class="checkout_input" required="required">
                                    <input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" required="required">
                                </div>
                                <div>
                                    <!-- Zipcode -->
                                    <label for="checkout_zipcode">Индекс*</label>
                                    <input type="text" id="checkout_zipcode" class="checkout_input" required="required">
                                </div>
                                <div>
                                    <!-- City / Town -->
                                    <label for="checkout_city">Город*</label>
                                    <select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
                                        <option></option>
                                        <option>Москва</option>
                                        <option>Минск</option>
                                        <option>Нур-Султан</option>
                                        <option>Киев</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- Province -->
                                    <label for="checkout_province">Область*</label>
                                    <select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
                                        <option></option>
                                        <option>Московская</option>
                                        <option>Минская</option>
                                        <option>Акмолинская</option>
                                        <option>Киевская</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- Phone no -->
                                    <label for="checkout_phone">Номер телефона*</label>
                                    <input type="phone" id="checkout_phone" class="checkout_input" required="required">
                                </div>
                                <div>
                                    <!-- Email -->
                                    <label for="checkout_email">Электронная почта*</label>
                                    <input type="phone" id="checkout_email" class="checkout_input" required="required">
                                </div>
                                <div class="checkout_extra">
                                    <div>
                                        <input type="checkbox" id="checkbox_terms" name="regular_checkbox" class="regular_checkbox" checked="checked">
                                        <label for="checkbox_terms"><img src="images/check.png" alt=""></label>
                                        <span class="checkbox_title">Я принимаю условия пользовательского соглашения</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="checkbox_account" name="regular_checkbox" class="regular_checkbox">
                                        <label for="checkbox_account"><img src="images/check.png" alt=""></label>
                                        <span class="checkbox_title">Создать аккаунт</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="checkbox_newsletter" name="regular_checkbox" class="regular_checkbox">
                                        <label for="checkbox_newsletter"><img src="images/check.png" alt=""></label>
                                        <span class="checkbox_title">Подписаться на новости</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Info -->

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Ваш заказ</div>
                        <div class="section_subtitle">Детали заказа</div>

                        <!-- Order details -->
                        <div class="order_list_container">
                            <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Товар</div>
                                <div class="order_list_value ml-auto">Итог</div>
                            </div>
                            <ul class="order_list">
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Купольный дом 32м2</div>
                                    <div class="order_list_value ml-auto">$59.90</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">WEG 3</div>
                                    <div class="order_list_value ml-auto">$59.90</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Доставка</div>
                                    <div class="order_list_value ml-auto">Бесплатно</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Итого</div>
                                    <div class="order_list_value ml-auto">$119.80</div>
                                </li>
                            </ul>
                        </div>

                        <!-- Payment Options -->
                        <div class="payment">
                            <div class="payment_options">
                                <label class="payment_option clearfix">Paypal
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Наложенный платеж
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Банковская или кредитная катра
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Прямой банковский перевод
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Order Text -->
                        <div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>
                        <div class="button order_button"><a href="#">Завершить покупку</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/checkout.js"></script>
@endsection
