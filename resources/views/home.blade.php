{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('layouts.extention')
@section('title', 'Главная - HMT Corporation')
@section('include')
<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Начните новую жизнь с новым домом</div>
                                    <div class="home_slider_subtitle">Право на жилье - право каждого человека. Реализуй грамотно свое право с помощью домов купольного типа нашего производства.</div>
                                    <div class="button button_light home_button"><a href="#">Купить сейчас</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Ветер - спутник свободы</div>
                                    <div class="home_slider_subtitle">Почуствуйте себя по-настоящему независимым с нашими новыми ВЭУ роторного типа WEG и MAWEG доступных в 7 комплектациях для самых разных потребителей.</div>
                                    <div class="button button_light home_button"><a href="#">Купить сейчас</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider_3.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Наше имя - ваше производство</div>
                                    <div class="home_slider_subtitle">Вы - начинающий производитель, но боитесь выходить на рынок?
                                        Мы поможем вам стать частью нашего бизнесса с помощью лояльной программы франчайзинга и нашего имени.</div>
                                    <div class="button button_light home_button"><a href="#">Подробнее</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Ads -->

<div class="avds">
    <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
        <div class="avds_small">
            <div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
            <div class="avds_small_inner">
                <div class="avds_small_content">
                    <div class="avds_title">Ветрогенераторы</div>
                    <div class="avds_link"><a href="categories.html">Дополнительно</a></div>
                </div>
            </div>
        </div>
        <div class="avds_large">
            <div class="avds_background" style="background-image:url(images/avds_large.png)"></div>
            <div class="avds_large_container">
                <div class="avds_large_content">
                    <div class="avds_title">Купольное строительство</div>
                    <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                    <div class="avds_link avds_link_large"><a href="categories.html">Дополнительно</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="product_grid">

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_extra"><a href="/categories"></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="/product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_extra"><a href="categories.html"></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_extra"><a href="categories.html"></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_extra"><a href="categories.html"></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$670</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Ad -->

<div class="avds_xl">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="avds_xl_container clearfix">
                    <div class="avds_xl_background" style="background-image:url(images/es.jpg)"></div>
                    <div class="avds_xl_content">
                        <div class="avds_title">EnergyStore</div>
                        <div class="avds_text">30 лет мы не только строительная компания. Опираясь на прошлое, создаем будущее.</div>
                        <div class="avds_link avds_xl_link"><a href="categories.html">Читать далее</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Icon Boxes -->

<div class="icon_boxes">
    <div class="container">
        <div class="row icon_box_row">

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
                    <div class="icon_box_title">Доставка по России</div>
                    <div class="icon_box_text">
                        <p>Доступная каждому доставка комплектующих по всей России</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
                    <div class="icon_box_title">Бесплатный возврат</div>
                    <div class="icon_box_text">
                        <p>Если вам не понравился наш товар, мы вернем вам за него деньги в полном объеме.</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
                    <div class="icon_box_title">Быстрая круглосуточная поддержка</div>
                    <div class="icon_box_text">
                        <p>Наша компания готова решить вашу проблему в любое время суток.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter_content text-center">
                    <div class="newsletter_title">Подпишитесь на наши новости</div>
                    <div class="newsletter_text"><p>Чтобы быть в курсе самых новых поступлений нашем магазине подпишитесь на нашу новостную рассылку</p></div>
                    <div class="newsletter_form_container">
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required">
                            <button class="newsletter_button trans_200"><span>Подписаться</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
