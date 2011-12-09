<?php
/**
 * @package Lucia
 */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php
				global $page, $paged;
				wp_title( '|', true, 'right' );
				bloginfo( 'name' );
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
			?>
		</title>
		
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php wp_head(); ?>
	</head>

	<body>
		<div id="header">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
