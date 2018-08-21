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


<?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        echo '';

    wp_reset_query();
?>
<?php
get_footer();
?>