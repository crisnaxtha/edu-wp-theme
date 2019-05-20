<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lochan
 */

get_header();
?>

<div class="container">
	<hr class="mt-0 mb-5">
	<div class="row">
		<div class="col-xl-8 mb-6">
			<?php if(is_front_page()): ?>
				<?php if (is_active_sidebar( 'lochan_template_section' ) ) : ?>
					<?php dynamic_sidebar( 'lochan_template_section' ); ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="col-xl-4 mb-6">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
