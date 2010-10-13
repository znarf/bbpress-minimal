<?php
function h6e_minimal_css()
{
	if (method_exists('Ld_Ui', 'getCssUrl')) {
		echo Ld_Ui::getCssUrl('/h6e-minimal/h6e-minimal.css', 'css-h6e-minimal');
	} else if (file_exists(dirname(__FILE__) . '/h6e-minimal')) {
		echo get_bloginfo('stylesheet_directory') . '/h6e-minimal/h6e-minimal.css';
	} else if (defined('H6E_CSS')) {
		echo H6E_CSS . '/h6e-minimal/h6e-minimal.css';
	} else {
		echo 'http://h6e.net/css/h6e-minimal/h6e-minimal.css';
	}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php bb_language_attributes( '1.1' ); ?>>
<?php if (is_bb_profile()) : global $self; ?>
<?php if (!$self) : ?>
<head profile="http://www.w3.org/2006/03/hcard">
<?php else : ?>
<head>
<?php endif; ?>
<?php else : ?>
<head>
<?php endif; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bb_title() ?></title>
	<?php bb_feed_head(); ?>
	<link rel="stylesheet" href="<?php h6e_minimal_css() ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
	<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?>

<?php bb_head(); ?>

<?php if (class_exists('Ld_Ui')) : ?>
	<style type="text/css">
	<?php
	$colors = Ld_Ui::getApplicationColors();
	echo ".infobox, #topic-tags { border-color:#" . $colors['ld-colors-border'] . "; }". "\n";
	echo ".threadpost, .postform, #latest, #forumlist, #favorites {
		color:#" . $colors['ld-colors-text-3'] . "; border-color:#" . $colors['ld-colors-border-3'] . "; background-color:#" . $colors['ld-colors-background-3'] . "; }". "\n";
	echo ".threadpost a, .postform a, #latest a, #forumlist a, #favorites a { color:#" . $colors['ld-colors-text-3'] . "; }". "\n";
	echo "#latest th, #forumlist th, #favorites th { background-color:rgba(0, 0, 0, 0.1) }"
	?>
	</style>
<?php endif ?>

</head>

<body id="<?php bb_location(); ?>" class="h6e-layout">
	<div id="wrapper">

		<?php
		if (bb_get_option('topbar') == 'never') {
			$top_bar = false;
		} else if (bb_get_option('topbar') == 'connected' && !bb_is_user_logged_in()) {
			$top_bar = false;
		} else {
			$top_bar = true;
		}
		?>

		<?php if (class_exists('Ld_Ui') && method_exists('Ld_Ui', 'top_bar') && $top_bar) { Ld_Ui::topBar(); } else { ?>

			<div class="h6e-simple-header">
				<?php if ( !in_array( bb_get_location(), array( 'login-page', 'register-page' ) ) ) login_form(); ?>
			</div>

		<?php } ?>

		<div id="main" class="h6e-main-content">

		<h1 class="h6e-page-title"><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>

<?php if ( is_bb_profile() ) profile_menu(); ?>
