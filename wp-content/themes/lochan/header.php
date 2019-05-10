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
		<div class="container-fluid">
			<div class="topbar_content">
				<div class="left_top_content">
					<i class="fa fa-phone-square" aria-hidden="true"></i> 01-4215762/4246007, 
					<i class="fa fa-map-marker" aria-hidden="true"></i> Bagbazar, Kathmandu  |  Registration No: 301637277
						
				</div>
				<div class="clearfix"></div>
				<div class="right_top_social_content">
					<ul>
						<li>
							<a href="https://www.facebook.com/globaleducation96/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
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
		<div class="container-fluid">
			<div class="navigation_bar">
				<aside class="logo">
					<h1>
						<a href="index.html">
							<img src="wp-content/themes/global/img/logo.png" alt="">
							</a>
					</h1>
				</aside>
				<nav>
					<div id='cssmenu' class="clearfix">
						<ul>
							<li id="menu-item-56" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-56">
								<a href="index.html">Home</a>
							</li>
							<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-39">
								<a href="about/index.html">About Us</a>
								<ul class="sub-menu">
									<li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
										<a href="message-from-chairman/index.html">Message from Managing Director</a>
									</li>
									<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80">
										<a href="mr-sagir-ahmad-khan-chairman/index.html">Message from Chairman</a>
									</li>
								</ul>
							</li>
							<li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-40">
								<a href="study-abroad/index.html">Study Abroad</a>
								<ul class="sub-menu">
									<li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-105">
										<a href="study-abroad/australia/index.html">Australia</a>
									</li>
									<li id="menu-item-104" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-104">
										<a href="study-abroad/canada-2/index.html">Canada</a>
									</li>
									<li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-103">
										<a href="study-abroad/usa/index.html">USA</a>
									</li>
									<li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-106">
										<a href="study-abroad/japan/index.html">Japan</a>
									</li>
									<li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-102">
										<a href="study-abroad/newzealand/index.html">Newzealand</a>
									</li>
									<li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-101">
										<a href="study-abroad/ireland/index.html">Ireland</a>
									</li>
									<li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-100">
										<a href="study-abroad/denmark/index.html">Denmark</a>
									</li>
									<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-99">
										<a href="study-abroad/bangladesh/index.html">Bangladesh</a>
									</li>
									<li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-study-abroad menu-item-98">
										<a href="study-abroad/india/index.html">India</a>
									</li>
								</ul>
							</li>
							<li id="menu-item-124" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-124">
								<a href="test-preparation/index.html">Test Preparation</a>
								<ul class="sub-menu">
									<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-122">
										<a href="test-preparation/toefl/index.html">TOEFL</a>
									</li>
									<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-121">
										<a href="test-preparation/ielts/index.html">IELTS</a>
									</li>
									<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-120">
										<a href="test-preparation/gre/index.html">GRE</a>
									</li>
									<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-119">
										<a href="test-preparation/gmat-2/index.html">GMAT</a>
									</li>
									<li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-118">
										<a href="test-preparation/sat/index.html">SAT</a>
									</li>
									<li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-test-preparation menu-item-117">
										<a href="test-preparation/pte/index.html">PTE</a>
									</li>
								</ul>
							</li>
							<li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41">
								<a href="service/index.html">Our Services</a>
								<ul class="sub-menu">
									<li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-110">
										<a href="service/our-free-services/index.html">Our Free Services</a>
									</li>
									<li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-109">
										<a href="service/financial-assistance/index.html">Financial Assistance</a>
									</li>
									<li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-108">
										<a href="service/application-process/index.html">Application Process</a>
									</li>
									<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-107">
										<a href="service/we-represent/index.html">We Represent</a>
									</li>
								</ul>
							</li>
							<li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
								<a href="faq/index.html">FAQ</a>
							</li>
							<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51">
								<a href="contact-us/index.html">Contact Us</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<div class="clearifx"></div>


