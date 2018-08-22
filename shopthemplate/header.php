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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="css/rangeslider/normalize.css">
    <link rel="stylesheet" href="css/rangeslider/rangeSlider.css">
    <link rel="stylesheet" href="css/rangeslider/rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="css/jquery.tabSlideOut.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="page-header">
            <div class="page-logo">
                <a href="index.html">
			<?php the_custom_logo(); echo get_bloginfo( 'name', 'display' );?>
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
                <div class="var">0</div>
            </div>
        </div>
    </header>