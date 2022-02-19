@extends('layouts.extention')

@section('title', 'Категории - HMT Co.')
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
@section('include')
    <link rel="stylesheet" type="text/css" href="styles/categories.css">
    <link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Категории<span></span></div>
                                <div class="home_text"><p>На этой странице вы можете ознакомиться со всеми типами продукции нашей компании</p></div>
                            </div>
                        </div>
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

                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Купольные дома</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product.jpg" alt=""></div>

                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Роторные ВЭУ</a></div>
                                <div class="product_price">$520</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Магнитно-роторные ВЭУ</a></div>
                                <div class="product_price">$710</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Комплектующие для ВЭУ</a></div>
                                <div class="product_price">$330</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">EnergyStore</a></div>
                                <div class="product_price">$170</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product.jpg" alt=""></div>

                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Franchising</a></div>
                                <div class="product_price">$240</div>
                            </div>
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
    <script src="js/categories.js"></script>
@endsection
