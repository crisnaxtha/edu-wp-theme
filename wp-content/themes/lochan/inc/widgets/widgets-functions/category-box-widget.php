<?php
/**
 * Custom template widgets register for this theme
 *
 * 
 *
 * @package DEEP
 */

class Category_Box_Widget extends WP_Widget {
    /**
	 * Register widget with WordPress.
	 */

    function __construct() {
        $widget_ops = array('classname' => 'category-box-widget', 'description' => __('Display Category Box Widget', 'lochan'));
        $control_ops = array('width' => 200, 'height' => 250);
        parent::__construct(false, $name=__('LO: Category Box Widget', 'lochan'), $widget_ops, $control_ops);
    }

    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 */

    public function form( $instance ) {
        $instance = wp_parse_args(( array ) $instance, array('title' => '','number' => '5','category' => '', 'link'=>''));
		$title    = esc_attr($instance['title']);
		$number = absint( $instance[ 'number' ] );
		$link = esc_url( $instance[ 'link' ] );
		$category = $instance[ 'category' ];
       ?>
        <p>
			<label for="<?php echo $this->get_field_id('title');?>">
				<?php _e('Title:', 'lochan');?>
			</label>
			<input id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('link');?>">
				<?php _e('Custom Link:', 'lochan');?>
			</label>
			<input id="<?php echo $this->get_field_id('link');?>" name="<?php echo $this->get_field_name('link');?>" type="text" value="<?php echo esc_url($link);?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>">
			<?php _e( 'Number of Post:', 'lochan' ); ?>
			</label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo absint($number); ?>" size="3" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'lochan' ); ?>:</label>
			<?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category'), 'value_field' => 'slug' , 'selected' => $category ) ); ?>
		</p>
       
        <?php 
    }

    /**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
        $instance  = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['link'] = esc_url_raw($new_instance['link']);
		$instance['number' ] = absint( $new_instance[ 'number' ] );
		$instance['category' ] = sanitize_text_field($new_instance[ 'category' ]);
		return $instance;
	}

    public function widget( $args, $instance) {
        extract($args);
		extract($instance);
		$title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
		$link = isset( $instance[ 'link' ] ) ? $instance[ 'link' ] : '';
		$number = empty( $instance[ 'number' ] ) ? 3 : $instance[ 'number' ];
        $category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';
        
        if($category !='-1'){ 
			$get_category_posts = new WP_Query( 
			array( 
				'category_name' => esc_attr($category), 
				'post_status' => 'publish', 
				'ignore_sticky_posts'=> 'true', 
                'order'=>'DESC', 
                'orderby'=>'date', 
				'posts_per_page'=> absint($number), 
				) );
		} else { 
				$get_category_posts = new WP_Query( 
					array( 'post_status' => 'publish',
					'ignore_sticky_posts'=> 'true',
					'order'=>'DESC',
					'orderby'=>'date',
					'posts_per_page'=> absint($number), 
					) );
		} 

		echo '<!-- Category Box Widget ============================================= -->' .$before_widget;
        ?>
        <?php
            $category_term = get_category_by_slug($category);
            $category_id = $category_term->term_id;
        ?>
            <section class="our_services">
                <div class="container">
                    <div class="our_services_header">
                    <?php if($title != '' ) { ?>
                        <h2 class="section_title"><?php echo $title ?></h2>
                    <?php } else {?>
                        <h2 class="section_title"><?php echo $category_term->name; ?></h2>
                    <?php } ?>                    
                    </div>
                    <div class="clearfix"></div>
                    <div class="our_services_content">
                        <ul class="row">
                            <?php
                            while ( $get_category_posts->have_posts() ) :
                                $get_category_posts->the_post(); 
                            ?>
                            <li class="col-sm-4 equal_height">
                                <a href="<?php the_permalink(); ?>" class="inner_equal_height">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="clearfix"></div>
                                    <div class="our_services_list_desc"><?php echo wp_trim_words( get_the_excerpt(), 20 , ' ...' ); ?></div>
                                </a>
                            </li>
                            <?php endwhile;
                                wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>

        <?php 
        echo $after_widget.'<!-- end .widget-Box-box -->';
    }
}