<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lochan
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="main_header">
	<section class="topbar_wrap">
		<div class="container">
			<div class="topbar_content">
				<div class="left_top_content">
					<?php if(is_front_page()): ?>
						<?php if (is_active_sidebar( 'lochan_header_info' ) ) : ?>
							<?php dynamic_sidebar( 'lochan_header_info' ); ?>
						<?php endif; ?>
					<?php endif; ?>
					<!-- <i class="fa fa-phone-square" aria-hidden="true"></i> 01-4215762/4246007, 
					<i class="fa fa-map-marker" aria-hidden="true"></i> Bagbazar, Kathmandu  |  Registration No: 301637277 -->
						
				</div>
				<div class="clearfix"></div>
				<div class="right_top_social_content">
					<ul>
						<li>
							<a href="" target="_blank">
								<i class="fa fa-facebook" aria-hidden="false"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa fa-skype" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<div class="top_header logo_navigation">
		<div class="container">
			<div class="navigation_bar">
				<aside class="logo">
					<?php
					the_custom_logo();
					?>
				</aside>
				<nav>
					
					<?php 
						   wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'container_id' => 'cssmenu',
							'container_class' => 'clearfix'
						) );
					?> 
					
				</nav>
			</div>
		</div>
	</div>
</header>
<div class="clearifx"></div>


