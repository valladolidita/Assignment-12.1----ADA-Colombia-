<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adacolombia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script>
	$(function () {
		$('nav li ul').hide().removeClass('fallback');
		$('nav li').hover(function () {
			$('ul', this).stop().slideToggle(200);
		});
	});
	</script>

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript"
  src="<?php bloginfo("template_url"); ?>/js/script.js"></script>

</head>

<body <?php body_class(); ?>>
	<header>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
			<nav>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</ul>
			</nav>
	</header>

