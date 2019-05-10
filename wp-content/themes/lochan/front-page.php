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
<section class="banner_slider">
    <ul class="owl-carousel">
        <li class="item active" style="background-image:url(wp-content/uploads/2018/01/canada-1-1263x645.png);">
            <img src="wp-content/themes/global/img/banner-size.png" alt="banner size">
                <!--- Don't make it dynamic -->
        </li>
        <li class="item " style="background-image:url(wp-content/uploads/2018/01/Australia-1263x645.png);">
            <img src="wp-content/themes/global/img/banner-size.png" alt="banner size">
                <!--- Don't make it dynamic -->
        </li>
    </ul>
</section>

<?php
get_sidebar();
get_footer();