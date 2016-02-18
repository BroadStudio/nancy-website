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
	<!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->
	<title>[Page Title] | [Site Title]</title>
	<?php wp_head(); ?>
</head>
<body>

<header>
    <nav>[Main Navigation]</nav>
    <div id="site_logo">[Logo with alt of site title]</div>
    <div id="page_intro">[Welcome Message]</div>
</header>