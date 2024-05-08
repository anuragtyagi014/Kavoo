<?php
/**
 * The header.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="search-popup">
	<div class="close-box">
		<span></span>
		<span></span>
	</div>
	<div class="container">
		<?php echo get_search_form(); ?>
	</div>
</div>

<header class="header-sec">
	<div class="container">
		<div class="row-box">
			<div class="menu-btn">
				<div class="btn-box">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="logo-box">
				<a href="/">
					<img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/logo.png">
				</a>
			</div>
			<div class="menu-box">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Made To Measure</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Custom Outfits</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="items-box">
				<div class="search-icon">
					<span><img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/search-icon.png"></span>
				</div>
				<div class="cart-icon">
					<a href="#"><img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/cart-icon.png"></a>
				</div>
				<div class="account-icon">
					<a href="#"><img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/user-icon.png"></a>
				</div>
			</div>
		</div>
	</div>
</header>