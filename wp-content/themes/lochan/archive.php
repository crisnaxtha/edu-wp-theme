<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lochan
 */

get_header();
?>
  <section class="latest_blogs">
    <div class="container">
<!--         <div class="latest_blogs_header">
            <h2 class="section_title"><?php echo the_archive_title('', false); ?></h2>   
            <div class="clearfix"></div>
            <h4 class="section_title_desc"><?php echo the_archive_description(); ?></h4>
        </div> -->
        <div class="clearfix"></div>
        <div class="latest_blogs_list">
            <ul class="row">
                <?php
                while ( have_posts() ) :
                    the_post(); 
                ?>
                <li class="col-sm-4 equal_height">
                    <div class="latest_blogs_list_inner inner_equal_height">
                        <figure>
                            <a href="<?php the_permalink(); ?>" style="background-image:url(<?php the_post_thumbnail_url();?>);">
                                <?php if( has_post_thumbnail() ){?>
                                    <img src="<?php the_post_thumbnail_url();?>" alt=""/>
                                <?php } ?>
                            </a>
                        </figure>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_header equal_height_heading">
                            
                        </div>
                        <div class="clearfix"></div>
                        <h4 class="latest_blogs_list_desc equal_height_desc"><?php the_title(); ?></h4>
                        <div class="latest_blogs_list_desc equal_height_desc"><?php echo wp_trim_words( get_the_excerpt() , 20, ' ...' ); ?></div>
						 <a href="<?php the_permalink(); ?>"  class="gecc_btn">Read More</a>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </ul>
<!--             <div class="text-center">
                <a href="<?php echo get_category_link($category_term->term_id); ?>"  class="gecc_btn">View All</a>
            </div> -->
        </div>
    </div>
</section> 														
<div class="clearfix"></div>		
<?php

get_footer();
