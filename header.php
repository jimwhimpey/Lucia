<?php
/**
 * @package Lucia
 */
?>

<!DOCTYPE html>
<html>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width; initial-scale=0.75; user-scalable=no;" />
		
		<title><?php get_template_part('utility-title'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-mobile.css" media="screen" />

		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/spin.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/date.format.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/uqcc.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<a href="<?php echo home_url( '/' ); ?>" id="mobile-header"><img src="<?php bloginfo('template_directory') ?>/images/header-mobile.gif" alt="UQ Cycle Club" /></a>
		<h1 class="header">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php get_template_part('nav'); ?>