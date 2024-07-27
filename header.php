
<!doctype html>
<html lang="fr">
<head>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	
</head>
<header>
<div class="container-header">
	<div class="logos">
    <?php the_custom_logo(); ?>
    </div>
	<nav>
	<?php wp_nav_menu(array(
			'theme-location'=>'principal'
		));?>
	</nav>
    <a href="http://localhost/boissons/commander-2/"><button id="button1">Commander</button></a>
</div>
</header>
