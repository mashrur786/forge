<!DOCTYPE html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="Content-Language" content="en">

	<title></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="body-overlay"></div>

<div class="nav-container">

    <?php wp_nav_menu(array(
            'theme_location'   => 'header-menu',
            'menu_class'       => 'nav',
            'container'        => '',
            'walker'           => new Theme_Walker_Nav_Menu()
    )); ?>

    <div class="copyright"><?php echo date('Y'); ?>. Forge UK. Developer Test.</div>
    <div class="exit"></div>
    <ul class="social">
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
    </ul>

</div>

<div id="wrapper" class="container-fluid smooth-transition">
    <header>
        <div class="container">
            <a href="/" class="brand"> <img alt="" src="https://www.forge.uk/wp-content/uploads/2018/03/forge-logo-small.svg" class="dark-brand"><img alt="" src="https://www.forge.uk/wp-content/uploads/2018/03/forge-logo-small.svg" class="light-brand"></a>

            <div class="menu"></div>
        </div>
    </header>