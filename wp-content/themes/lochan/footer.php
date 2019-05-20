<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lochan
 */

?>
<section class="subscribe">
    <div class="container">
        <div class="subscribe_inner">
            <div class="subscribe_header">
                <h2 class="section_title">Subscribe
                    <span>to Our Newsletter</span>
                </h2>
            </div>
            <div class="subscribe_form">
                <div class="tnp tnp-subscription">
                    <form method="post" action="#" onsubmit="return newsletter_check(this)">
                        <input type="hidden" name="nr" value="page">
                            <div class="tnp-field tnp-field-email">
                                <label>Email</label>
                                <input class="tnp-email" type="email" name="ne" required>
                            </div>
                            <div class="tnp-field tnp-field-button">
                                <input class="tnp-submit" type="submit" value="Subscribe">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<footer class="main_footer">
	<div class="container">
		<div class="footer_logo">
			<h1>
				<figure>
				  <a href="#">
<!-- 					<img src="../wp-content/themes/lochan" alt=""> -->
				  </a>
				</figure>
			</h1>
		</div>
		<div class="clearfix"></div>
		<div class="contact_details">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 footer_widget equal_height">
					<?php if (is_active_sidebar( 'lochan_footer_section_1' ) ) : ?>
						<?php dynamic_sidebar( 'lochan_footer_section_1' ); ?>
					<?php endif; ?>
					<!-- <h3 class="footer_title">Call Us</h3>
					<div class="clearfix"></div>
					<ul>
						<li><a href="tel:+97714215762">+977-1-4215762</a></li>
						<li><a href="tel:+97714246007">+977-1-4246007</a></li>
						<li><a href="tel:+97714246007">+977-9841744701</a></li>
						<li>FAX : <a href="fax:+977.1.4268195">+977-1-4268195</a></li>
					</ul> -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 footer_widget equal_height">
					<?php if (is_active_sidebar( 'lochan_footer_section_2' ) ) : ?>
						<?php dynamic_sidebar( 'lochan_footer_section_2' ); ?>
					<?php endif; ?>
			
					<!-- <h3 class="footer_title">Address</h3>
					<div class="clearfix"></div>
					<p>Bagbazar (Opp. To HOTEL HARDIK)</br>Kathmandu, Nepal</p>
					<div class="clearfix"></div>
					<ul class="social_icons">
						<li><a href="https://www.facebook.com/globaleducation96/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 footer_widget equal_height">
					<?php if (is_active_sidebar( 'lochan_footer_section_2' ) ) : ?>
						<?php dynamic_sidebar( 'lochan_footer_section_2' ); ?>
					<?php endif; ?>
				
					<!-- <h3 class="footer_title">Email</h3>
					<div class="clearfix"></div>
					<ul>
						<li><a href="mailto:globaleducationcc@gmail.com">globaleducationcc@gmail.com</a></li>
						<li><a href="mailto:globalgecc@wlink.com.np">globalgecc@wlink.com.np</a></li>
					</ul> -->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="designed_copyright">
			<p>© <?php echo date('Y') ?> GEN. All Rights Reserved.
			Developed by LOCHAN</p>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
