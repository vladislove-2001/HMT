@extends('layouts.extention')

@section('title', 'Товар - HMT Co.')
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
@section('include')
<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large"><img src="images/product.jpg" alt=""><div class="product_extra"><a href="categories.html"></a></div></div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img src="images/product.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_2.jpg"><img src="images/product.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_3.jpg"><img src="images/product.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_4.jpg"><img src="images/product.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name">Купольный дом 32м2</div>
                    <div class="details_discount">$890</div>
                    <div class="details_price">$670</div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Характеристики:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <div class="product_quantity clearfix">
                            <span>Qty</span>
                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            <div class="quantity_buttons">
                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="button cart_button"><a href="#">В корзину</a></div>
                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Поделиться:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row description_row">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Описание</div>
                    <div class="reviews_title"><a href="#">Отзывы <span>(1)</span></a></div>
                </div>
                <div class="description_text">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Последние поступления</div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">

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
                        <div class="product_extra"><a href="categories.html"></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$520</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$710</div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img src="images/product.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html">Купольный дом 32м2</a></div>
                            <div class="product_price">$330</div>
                        </div>
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
<script src="js/product.js"></script>
@endsection
