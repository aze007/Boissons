
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<style>
        body {
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 ;
    }
        
	</style>
</head>
<header>
<?php the_custom_logo(); ?>
    <div class="container-header">
	
	<nav class="menu">
		<div>
	
	</div>
	<?php wp_nav_menu(array(
			'theme-location'=>'principal'
		));?>
		
	</nav>
    </div>

	<a href="http://localhost/boissons/commander-2/"><button id="button1">Commander</button></a>
	
</header>
