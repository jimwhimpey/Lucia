<?php
/**
 * @package Lucia
 */
?>

<!DOCTYPE html>
<html>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<title><?php get_template_part('utilities/title'); ?></title>
		
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
		
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
		<!--[if IE 6]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie6.css" media="screen" />
		<![endif]-->
		
		<?php
			// Only serve mobile stuff to the iPhone
			if (stristr($_SERVER['HTTP_USER_AGENT'],'iphone') && !stristr($_SERVER['HTTP_USER_AGENT'],'ipad')) {
			    echo '<meta name="viewport" content="width=device-width; initial-scale=0.75; user-scalable=no;" />';
					echo '<link rel="stylesheet" href="' . get_bloginfo('template_directory') . '/style-mobile.css" media="handheld, only screen and (max-device-width:640px)" />';
			}
		?>

		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/spin.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/date.format.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/uqcc.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class($class); ?>>
		<a href="<?php echo home_url( '/' ); ?>" id="mobile-header"><img src="<?php bloginfo('template_directory') ?>/images/header-mobile.gif" alt="UQ Cycle Club" /></a>
		<h1 class="header">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php get_template_part('nav'); ?>