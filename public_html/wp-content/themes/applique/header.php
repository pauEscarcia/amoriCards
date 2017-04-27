<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
<?php
/**
 * `dahz_attr( 'head' )` are function to print attribute and microdata in `<head>`.
 * This function locate in `libraries/attr.php` under function named `dahz_attr_head`.
 */ ?>
<head <?php dahz_attr( 'head' ); ?>>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>

</head>

<?php
/**
 * `dahz_attr( 'body' )` are function to print attribute and microdata in `<body>`.
 * This function locate in `libraries/attr.php` under function named `dahz_attr_body`.
 */ ?>
<body <?php dahz_attr( 'body' ); ?>>

	<?php get_template_part( 'templates/headers/page-loader' ); ?>

	<div id="wrapper" class="df-wrapper">

		<?php get_template_part( 'templates/headers/main', 'header' ); ?>

		<?php if ( !is_page_template( 'template-front-page.php' ) ) : ?>
			<?php applique_title_controller(); ?>
		<?php endif; ?>

		<?php echo df_featured_area(); ?>