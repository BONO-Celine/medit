<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php oceanwp_theme_strings( 'owp-string-header-skip-link', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>



<!-- ********************************************************** -->
    <!-- Appel du code de la popup déplacé dans le sous template "popup" -->
	<?php get_template_part( 'parts/popup' ); ?>
<!-- ********************************************************** -->

<!-- ********************************************************** -->
<!-- Script pour fermer la popup déplacé dans fichier script.js -->
<!-- ********************************************************** -->

<!-- Ajout d'un bouton contact au menu -->
<?php
/**
 * Shortcode pour ajouter un bouton
 */
/*
function contact_btn() {

	// Code du bouton
	$string .= '<a href="/contact" class="contact-btn">Nous contacter</a>';

	// On retourne le code
	return $string;

}
// On publie le shortcode
add_shortcode('contact', 'contact_btn');
*/
?>
