<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lochan
 */

?>

<section class="page_banner_top" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/about-us.png);">
	<div class="page_banner_top_overlay">
		<div class="container">
			<h4><?php the_title(); ?></h4>
			<div class="clearfix"></div>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active"><?php the_title(); ?></li>
			</ol>
		</div>
	</div>
</section>
	
<div class="clearfix"></div>
	
<div class="content_page">
	<div class="container">
		<div class="content_page_inner">
			<?php the_content(); ?>
		</div>

	</div>
</div>

<div class="clearfix"></div>

