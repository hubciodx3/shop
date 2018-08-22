<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Newtek_Shop
 *
 */

get_header(); ?>
<main>
        <article class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <div class="item-wrapper">
                            <div class="image">
                                <img src="assets/1.png" alt="">
                            </div>
                            <div class="text">
                                <h1>Niebieskie Poszycie</h1>
                                <p>
                                    <a href="">Kup Teraz</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-wrapper">
                            <div class="image">
                                <img src="assets/1.png" alt="">
                            </div>
                            <div class="text">
                                <h1>Niebieskie Poszycie</h1>
                                <p>
                                    <a href="">Kup Teraz</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-wrapper">
                            <div class="image">
                                <img src="assets/1.png" alt="">
                            </div>
                            <div class="text">
                                <h1>Niebieskie Poszycie</h1>
                                <p>
                                    <a href="">Kup Teraz</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </article>
        <article>

        </article>
        <article class="products">
            <div class="container">
                <section class="slide-bar">
                    <div class="category">
                        <h4 class="category_button">
                            <i class="fa fa-th"></i> Kategorie
                            <i class="fas fa-caret-down"></i>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">Wszystko</a>
                            </li>
                            <li>
                                <a href="#">Bawełny</a>
                            </li>
                            <li>
                                <a href="#">Pokrowce</a>
                            </li>
                            <li>
                                <a href="#">Koszulki</a>
                            </li>
                            <li>
                                <a href="#">Buty</a>
                            </li>
                            <li>
                                <a href="#">Skarpetki</a>
                            </li>
                            <li>
                                <a href="#">Czapki</a>
                            </li>
                        </ul>
                    </div>
                    <div class="filter">
                        <form>
                            <h4 class="filter_button">
                                <i class="fas fa-filter"></i>Filtrowanie
                                <i class="fas fa-caret-down"></i>
                            </h4>
                            <div class="filter-container">
                                <h5>Cena</h5>
                                <input type="text" id="rangeSlider" name="rangeSlider" value="" />
                                <h5>Kolory</h5>
                                <div class="colors-container">
                                    <div class="single-color" id="_1"></div>
                                    <div class="single-color" id="_2"></div>
                                    <div class="single-color" id="_3"></div>
                                    <div class="single-color" id="_4"></div>
                                    <div class="single-color" id="_5"></div>
                                    <div class="single-color" id="_6"></div>
                                    <div class="single-color" id="_7"></div>
                                    <div class="single-color" id="_8"></div>
                                </div>
                                <button class="btn-newtek" type="submit">
                                    <i class="fas fa-filter"></i> Filtruj </button>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="items row">
                    <div class="col-sm-12">
                        <form action="/action_page.php" class="search">
                            <div class="group ">
                                <input type="text" required>

                                <label>
                                    <i class="fa fa-search"></i> Wyszukiwanie ..</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-item">
                            <img src="assets/item/1.png" alt="">
                            <a href="#" class="add_cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="item_header">
                                <h4>Bottle Humidifier</h4>
                                <div class="price">
                                    69.00 PLN
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <div class="container">
            <ul class="pager-custom">
                <li>
                    <a href="#">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </li>
                <li>
                    <a href="#">01</a>
                </li>
                <li>
                    <a href="#">02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li>
                <li>
                    <a href="#">04</a>
                </li>
                <li>
                    <a href="#">05</a>
                </li>
            </ul>
        </div>

<?php
get_footer();
?>