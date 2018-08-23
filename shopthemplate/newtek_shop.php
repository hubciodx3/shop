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
                    
                    <?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
     
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        echo ' <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="single-item">
        <a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt=""></a>
            <a href="#" class="add_cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <div class="item_header">
                <h4>'.get_the_title().'</h4>
                <div class="price">
                    '.$product->get_price().'
                </div>
            </div>
        </div>
    </div>';
    endwhile;

    wp_reset_query();
?>
                   
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