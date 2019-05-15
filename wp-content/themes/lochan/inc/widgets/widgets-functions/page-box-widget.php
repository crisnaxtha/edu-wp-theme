<?php
/**
 * Custom template widgets register for this theme
 *
 * 
 *
 * @package DEEP
 */
class Page_Box_Widget extends WP_Widget {
    /**
	 * Register widget with WordPress.
	 */
    function __construct() {
        $widget_ops = array('classname' => 'page-box-widget', 'description' => __('Display Page Box Widget', 'lochan'));
        $control_ops = array('width' => 200, 'height' => 250);
        parent::__construct(false, $name=__('LO: Page Box Widget', 'lochan'), $widget_ops, $control_ops);
    }
    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 */
    public function form( $instance ) {
        $instance = wp_parse_args(( array ) $instance, array('title' => '', 'page' => '', 'link'=>''));
		$title    = esc_attr($instance['title']);
		$link = esc_url( $instance[ 'link' ] );
        if( isset( $instance['page_id'] ) ) {
            $page_id = $instance['page_id'];
        } else {
            $page_id = 0;
        }
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
			<label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Select Page', 'lochan' ); ?>:</label>
            <?php $args = array(
                'id' => $this->get_field_id('page_id'),
                'name' => $this->get_field_name('page_id'),
                'selected' => $page_id
            );
                wp_dropdown_pages( $args ); ?>
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
		if( isset( $new_instance['page_id'] ) ) {
            if( $new_instance == '' ) {
                $instance['page_id'] = '';
            } else if ( (int) $new_instance['page_id'] > 0 ) {
                $instance['page_id'] = (int) $new_instance['page_id'];
            }
        }
		return $instance;
    }
    
    public function widget( $args, $instance) {
        extract($args);
		extract($instance);
		$title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
		$link = isset( $instance[ 'link' ] ) ? $instance[ 'link' ] : '';
        $page_id = isset( $instance[ 'page_id' ] ) ? $instance[ 'page_id' ] : '';
        
       $post = get_post($page_id);
        // print_r($post);
        
		echo '<!-- Category Box Widget ============================================= -->' .$before_widget;
        ?>
        <section class="study_abroad">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-sm-6">
                        <div class="study_abroad_content">
                            <div class="study_abroad_content_inner">
                                <div class="section_content_header">
                                    <h2 class="section_title"><?php echo $post->post_title ?></h2>
                                </div>
                                <div class="clearfix"></div>
                                <div class="section_content_desc">
                                    <p><?php echo $post->post_content ?></p>
                                </div>
                                <div class="clearfix"></div>
                                <a href="#" class="gecc_btn hidden-xs">view all countries</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="study_abroad_countries">
                            <ul class="row">
                                <li class="col-md-12">
                                    <a href="#">
                                        <figure style="background-image:url(wp-content/uploads/2017/12/indi-165x165.png)">
                                            <img src="wp-content/uploads/2017/12/indi-165x165.png" alt="">
                                        </figure>
                                        <figcaption>India</figcaption>
                                    </a>
                                </li>
                            </ul>
                            <!-- <a href="study-abroad/japan/index.html" class="gecc_btn visible-xs">view all countries</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>

        <?php 
        echo $after_widget.'<!-- end .widget-Box-box -->';
    }
    
}