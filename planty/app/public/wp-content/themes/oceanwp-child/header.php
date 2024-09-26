<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le site de planty !</title>
    <?php wp_head(); ?> 
    <!-- WP reconnait notre entête et l'allouera automatiquement à nos pages en fonction du paramétrage
         de notre thème enfant. -->
</head>

<body <?php body_class(); ?>>
<!-- génère automatiquement plusieurs classes CSS spécifiques à la page actuellemet affichée :
    * Le template utilisé (single.php ici)
    * Le type de Post (single-post et pas single-page ou single-custom-post)
    * L'identifiant (si vous voulez être vraiment spécifique)
    * Le format du Post -->

<?php wp_body_open(); ?>
<!-- Permet d'inserer du code html juste après l'ouverture de la balise body -->

<!-- Notre header contient une nav-bar contenant un logo à gauche et un menu à droite. -->
    <header>
        <nav id="nav-bar">
            <div id="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="/wp-content/themes/oceanwp-child/img/logo_planty.svg" alt="Planty boisson énergisante !">
                </a>
            </div>

<!-- On affiche notre menu correspondant à la localisation cochée avec wp_nav_menu. Il a été créé depuis l'administration WP 
Ce menu varie en fonction du hook wp_nav_menu_items créé dans function.php de notre thème enfant. Si l'internaute est connecté
à WP, on ajoute un lien vers l'administration. -->

            <div id="menu" role="navigation">

                <?php 
                wp_nav_menu(array('theme_location' => 'topbar_menu'));             
                ?>

            </div>
        </nav>     
    </header> 

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

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>





				