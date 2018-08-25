<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShopThemplate
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-container">
        <div class="page-header">
            <div class="page-logo">
                <a href="index.html">
                
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
            <img src="<?php echo $image[0]; ?>" alt=""> <span><?php echo get_bloginfo( 'name', 'display' );?> </span>
                </a>
            </div>
            <nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
                <button type="button" title="Open menu" class="hamburger">
                    <span class="hamburger-icon">
                        <i class="fas fa-bars" id="hamburger-icon"></i>
                    </span>
                </button>
            </nav>
            <div class="cart">
                <i class="fas fa-shopping-cart"></i>
                <div class="var"> <?php echo WC()->cart->get_cart_contents_count(); ?></div>
            </div>
        </div>
    </header>