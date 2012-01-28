<?php
/**
 * @package Lucia
 */
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php get_template_part('utility-title'); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/spin.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/date.format.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_directory'); ?>/scripts/uqcc.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<h1 class="header">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php get_template_part('nav'); ?>