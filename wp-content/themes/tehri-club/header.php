<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<header>
	<!-- <div class="mobile-menu position-fixed w-screen h-screen text-center bg-white pl-0 d-none flex-column d-xl-none font-primary fz-18 leading-22 pt-14 pt-md-15 justify-content-center">
		<?php
			wp_nav_menu(array(
				'theme_location' => 'header_nav',
				'container' => 'ul',
				'menu_class' => 'list-unstyled my-0 mobile-primary-menu w-100p',
				'echo' => true,
			));
		?>
	</div> -->
	<div class="container" id="navbar-main">
		<div class="row">
			<div class="col-xs-12 company-logo">
				<p>The <span class="darker">Chemex</span> <span class="lighter">club</span></p>
				</a>
			</div>
		</div>
	</div>
</header>

<body>
