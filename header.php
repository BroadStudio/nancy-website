<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<title>
	    <?php if (!is_front_page()) {
	        wp_title('');
	        echo " | " ;
	    }
	    echo bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body>

<header>
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    
    <h1 class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <?php if ( get_theme_mod( 'modtherapy_logo' ) ) : ?>
        <img src="<?php echo get_theme_mod( 'modtherapy_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    <?php else : ?>
        <?php bloginfo( 'name' ); ?>
    <?php endif; ?>
    </a>
    </h1>
    <div id="page_intro">[Welcome Message]</div>
</header>