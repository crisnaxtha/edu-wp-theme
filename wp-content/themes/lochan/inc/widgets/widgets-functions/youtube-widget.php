<?php 
/**
 * Adds Foo_Widget widget.
 */
class Youtube_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
        $widget_ops = array('classname' => 'youtube-box-widget', 'description' => __('Display Youtube Widget', 'lochan'));
        $control_ops = array('width' => 200, 'height' => 250);
        parent::__construct(false, $name=__('LO: Youtube Widget', 'lochan'), $widget_ops, $control_ops);
    }
    

    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'lochan' );
		$videoUrl = ! empty( $instance['video_url'] ) ? $instance['video_url'] : esc_html__( '', 'lochan' );
		$description = ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( '', 'lochan' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Video title  :', 'lochan' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'video_url' ) ); ?>"><?php esc_attr_e( 'Youtube video url:', 'lochan' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'video_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'video_url' ) ); ?>" type="text" value="<?php echo esc_attr( $videoUrl ); ?>">
		</p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Description:', 'lochan' ); ?></label> 
		<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" value="<?php echo esc_attr( $description ); ?>"></textarea>
		</p>
		<?php 
    }
    
    /**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['video_url'] = ( ! empty( $new_instance['video_url'] ) ) ? sanitize_text_field( $new_instance['video_url'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_text_field( $new_instance['description'] ) : '';
		return $instance;
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
    ?>
    <section class="youtube_video" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/youtube-bg.png);">
        <div class="container">
            <div class="row flex-center">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="youtube_video_heading">
                        <h2 class="section_title">
                        <?php 
                            if ( ! empty( $instance['title'] ) ) {
                                echo apply_filters( 'widget_title', $instance['title'] ) ;
                            }
                        ?>
                        </h2>
                        <div class="clearfix"></div>
                        <h4 class="section_title_desc">
                            <span>
                            <?php if ( ! empty( $instance['description'] ) ) {
                                echo apply_filters( 'widget_title', $instance['description'] ) ;
                            }?>
                            </span>
                        </h4>
                        <!-- <div class="clearfix"></div> -->
                        <!-- <a href="http://globalgecc.edu.np/youtube" class="gecc_btn_red hidden-xs">Watch Them All</a> -->
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="youtube_video_player">
                        <ul class="owl-carousel">
                            <li>
                                <!-- <a data-fancybox href="https://www.youtube.com/watch?v=9yZtbGNW_EM" style="background-image:url(https://img.youtube.com/vi/9yZtbGNW_EM/mqdefault.jpg)">
                                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/video-img-size.png" alt="">
                                </a> -->
                                <?php 
                                	global $wp_embed;
                                    if ( ! empty( $instance['video_url'] ) ) {
                                        echo $wp_embed->run_shortcode('[embed]'.apply_filters( 'widget_title', $instance['video_url'] ).'[/embed]');
                                        // echo ;
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                     <!-- <a href="#" class="gecc_btn_red visible-xs">Watch Them All</a> -->
                    <!--Button visible in mobile device only-->
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
	<?php 

	}

	


}


