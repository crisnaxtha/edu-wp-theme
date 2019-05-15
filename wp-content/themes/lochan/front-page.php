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
            <img src="wp-content/themes/lochan/assets/img/banner-size.png" alt="banner size">
                <!--- Don't make it dynamic -->
        </li>
        <li class="item " style="background-image:url(wp-content/uploads/2018/01/Australia-1263x645.png);">
            <img src="wp-content/themes/lochan/assets/img/banner-size.png" alt="banner size">
                <!--- Don't make it dynamic -->
        </li>
    </ul>
</section>

<div class="clearfix"></div>
<?php if(is_front_page()): ?>
    <?php if (is_active_sidebar( 'lochan_template_section' ) ) : ?>
        <?php dynamic_sidebar( 'lochan_template_section' ); ?>
    <?php endif; ?>
<?php endif; ?>

<section class="study_abroad">
	<div class="container">
		<div class="row flex-center">
			<div class="col-sm-6">
				<div class="study_abroad_content">
					<div class="study_abroad_content_inner">
						<div class="section_content_header">
							<h2 class="section_title">About Us</h2>
						</div>
						<div class="clearfix"></div>
						<div class="section_content_desc">
							<p>Study Abroad Programs give you the opportunity to experience the world as your classroom. Rather than picking things up from books and the Internet, navigating a new landscape may open your eyes to culture, history, a new language or your heritage. Studying Abroad opens the door to personal growth and discovery too. As you learn to say ‘hello’ in a foreign language, make friends, eat exciting new foods, it is bound to boost your confidence, teach you self-reliance and stretch the parameters of your comfort zone.</p>
						</div>
						<div class="clearfix"></div>
						<a href="http://globalgecc.edu.np/study-abroad/" class="gecc_btn hidden-xs">view all countries</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="study_abroad_countries">
					<ul class="row">
						<li class="col-xs-6 col-md-4">
							<a href="http://globalgecc.edu.np/study-abroad/india/">
								<figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/indi-165x165.png)">
									<img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/indi-165x165.png" alt="">
								</figure>
								<figcaption>India</figcaption>
							</a>
						</li>
						<li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/bangladesh/">
                            <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Bangladesh-165x165.png)">
                                <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Bangladesh-165x165.png" alt="">
                            </figure>
                            <figcaption>Bangladesh</figcaption>
                            </a>
                        </li>
                        <li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/denmark/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Denmark-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Denmark-165x165.png" alt="">
                                </figure>
                                <figcaption>Denmark</figcaption>
                            </a>
                        </li>
						<li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/ireland/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/ireland-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/ireland-165x165.png" alt="">
                                </figure>
                                <figcaption>Ireland</figcaption>
                            </a>
						</li>
						<li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/newzealand/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Nz-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Nz-165x165.png" alt="">
                                </figure>
                                <figcaption>Newzealand</figcaption>
                            </a>
						</li>
						<li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/usa/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/USA-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/USA-165x165.png" alt="">
                                </figure>
                                <figcaption>USA</figcaption>
                            </a>
                        </li>
                        <li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/canada-2/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Cana-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Cana-165x165.png" alt="">
                                </figure>
                                <figcaption>Canada</figcaption>
                            </a>
                        </li>
                        <li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/australia/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Australia-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Australia-165x165.png" alt="">
                                </figure>
                                <figcaption>Australia</figcaption>
                            </a>
                        </li>
                        <li class="col-xs-6 col-md-4">
                            <a href="http://globalgecc.edu.np/study-abroad/japan/">
                                <figure style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/Japan-165x165.png)">
                                    <img src="http://globalgecc.edu.np/wp-content/uploads/2017/12/Japan-165x165.png" alt="">
                                </figure>
                                <figcaption>Japan</figcaption>
                            </a>
                        </li>
                    </ul>
                    <a href="http://globalgecc.edu.np/study-abroad/japan/" class="gecc_btn visible-xs">view all countries</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="about_us"  style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/about-us-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-push-4">
                <div class="about_us_inner">
                    <div class="about_us_header">
                        <h2 class="section_title">GLOBAL EDUCATION COUNSELLING CENTER</h2>
                    </div>
                    <div class="clearfix"></div>
                    <div class="about_us_content_desc">We welcome you to the official website of the Global Education Counselling Centre Pvt. Ltd. We want to welcome you to our organization also.GECC has been contributing to the professional and ethical development of the students through its mission. It has been conducting seminars, providing career guidance and free counseling, organizing international education fairs twice a year and participating in various international education exhibitions, since its establishment in 1996...							</div>
                    <div class="clearfix"></div>
                    <a href="http://globalgecc.edu.np/global-education-councelling-center/" class="gecc_btn_red">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
									
<div class="clearfix"></div>

<section class="our_services">
    <div class="container">
        <div class="our_services_header">
            <h2 class="section_title">Our Services</h2>
        </div>
        <div class="clearfix"></div>
        <div class="our_services_content">
            <ul class="row">
                <li class="col-sm-4 equal_height">
                    <a href="http://globalgecc.edu.np/service/we-represent/" class="inner_equal_height">
                        <h3>We Represent</h3>
                        <div class="clearfix"></div>
                        <div class="our_services_list_desc">Here is a list of universities we represent:The Names, University, Affiliation and Recognition o..</div>
                    </a>
                </li>
                <li class="col-sm-4 equal_height">
                    <a href="http://globalgecc.edu.np/service/application-process/" class="inner_equal_height">
                        <h3>Application Process</h3>
                        <div class="clearfix"></div>
                        <div class="our_services_list_desc">Application process varies depending on country your university of interest is in. Student must be e..								</div>
                    </a>
                </li>
                <li class="col-sm-4 equal_height">
                    <a href="http://globalgecc.edu.np/service/financial-assistance/" class="inner_equal_height">
                        <h3>Financial Assistance</h3>
                        <div class="clearfix"></div>
                        <div class="our_services_list_desc">If you are not financially sound, we can arrange your contact with related parties and you can make ..								</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="test_preparation" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/test-preparation.jpg);">
    <div class="container">
        <div class="test_preparation_heading">
            <h2 class="section_title">Test Preparation Classes</h2>
            <div class="clearfix"></div>
            <h4 class="section_title_desc">Enroll in Global Education for test preparation course.</h4>
        </div>
        <div class="clearfix"></div>
        <div class="test_preparation_list">
            <ul>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/ielts.png" alt="">
                            </figure>
                        </span>
                </li>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/toefl.png" alt="">
                        </figure>
                    </span>
                </li>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/sat.png" alt="">
                        </figure>
                    </span>
                </li>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/pte.png" alt="">
                        </figure>
                    </span>
                </li>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/gre.png" alt="">
                        </figure>
                    </span>
                </li>
                <li>
                    <span>
                        <figure>
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/gmat.png" alt="">
                        </figure>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</section>
															
<div class="clearfix"></div>
															
<section class="latest_blogs">
    <div class="container">
        <div class="latest_blogs_header">
            <h2 class="section_title">Our News and events</h2>
            <div class="clearfix"></div>
            <h4 class="section_title_desc">Upcoming Educational Events for your future career.</h4>
        </div>
        <div class="clearfix"></div>
        <div class="latest_blogs_list">
            <ul class="row">
                <li class="col-sm-4 equal_height">
                    <div class="latest_blogs_list_inner inner_equal_height">
                        <figure>
                            <a href="https://www.facebook.com/337125683061756_2205863652854607" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-9/q92/s720x720/59342988_2205863659521273_562006220257361920_o.jpg?_nc_cat=108&_nc_ht=scontent.xx&oh=f6da689dcb1d190654791018aec5a10a&oe=5D623348);" target="_blank">
                                <img src="http://globalgecc.edu.np/wp-content/themes/global/img/news_events.png" alt=""/>
                            </a>
                        </figure>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_header equal_height_heading">
                            
                        </div>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_desc equal_height_desc">GECC is a pioneer and leading educational consultancy service provider with its head office in Bagbazar, since 1996 and ..								</div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="col-sm-4 equal_height">
                    <div class="latest_blogs_list_inner inner_equal_height">
                        <figure>
                            <a href="https://www.facebook.com/337125683061756_2205861742854798" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-9/q92/s720x720/59177962_2205861749521464_6859174956257771520_o.jpg?_nc_cat=102&_nc_ht=scontent.xx&oh=31098c6d26f7b4c6b79178862311cfa8&oe=5D608139);" target="_blank">
                                <img src="http://globalgecc.edu.np/wp-content/themes/global/img/news_events.png" alt=""/>
                            </a>
                        </figure>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_header equal_height_heading">
                        </div>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_desc equal_height_desc">GECC is a pioneer and leading educational consultancy service provider with its head office in Bagbazar, since 1996 and ..								</div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="col-sm-4 equal_height">
                    <div class="latest_blogs_list_inner inner_equal_height">
                        <figure>
                            <a href="https://www.facebook.com/337125683061756_2205858812855091" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/59444788_2205858626188443_7301442908551380992_o.png?_nc_cat=105&_nc_ht=scontent.xx&oh=fbe07075f2472fc18a9529bc9ccd13b9&oe=5D566695);" target="_blank">
                                <img src="http://globalgecc.edu.np/wp-content/themes/global/img/news_events.png" alt=""/>
                            </a>
                        </figure>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_header equal_height_heading">
                        </div>
                        <div class="clearfix"></div>
                        <div class="latest_blogs_list_desc equal_height_desc">GECC is a pioneer and leading educational consultancy service provider with its head office in Bagbazar, since 1996 and ..								</div>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <a href="http://globalgecc.edu.np/news"  class="gecc_btn">View All</a>
            </div>
        </div>
    </div>
</section> 
															
<div class="clearfix"></div>

<section class="youtube_video" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/youtube-bg.png);">
    <div class="container">
        <div class="row flex-center">
            <div class="col-sm-6 col-sm-push-6">
                <div class="youtube_video_heading">
                    <h2 class="section_title">Youtube Videos</h2>
                    <div class="clearfix"></div>
                    <h4 class="section_title_desc">
                        <span>YouTube’s most useful channel</span> for TOEFL, IELTS, SAT 1, GRE, GMAT and STUDY ABROAD!
                    </h4>
                    <div class="clearfix"></div>
                    <a href="http://globalgecc.edu.np/youtube" class="gecc_btn_red hidden-xs">Watch Them All</a>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="youtube_video_player">
                    <ul class="owl-carousel">
                        <li>
                            <a data-fancybox href="https://www.youtube.com/watch?v=9yZtbGNW_EM" style="background-image:url(https://img.youtube.com/vi/9yZtbGNW_EM/mqdefault.jpg)">
                                <img src="http://globalgecc.edu.np/wp-content/themes/global/img/video-img-size.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <a href="http://globalgecc.edu.np/youtube" class="gecc_btn_red visible-xs">Watch Them All</a>
                <!--Button visible in mobile device only-->
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
															
<section class="photo_gallery">
    <div class="container">
        <div class="photo_gallery_header">
            <h2 class="section_title">Gallery</h2>
            <div class="clearfix"></div>
            <h4 class="section_title_desc">Some of our memorable moments captured check them out</h4>
        </div>
    </div>

    <div class="clearfix"></div>

        <div class="photo_gallery_slider">
            <ul class="owl-carousel">
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-9/52991378_2114488238658816_1731886227138805760_n.jpg?_nc_cat=110&_nc_ht=scontent.xx&oh=e8e9a7489164cf19f1545d6b5175c7e8&oe=5D624F85" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-9/52991378_2114488238658816_1731886227138805760_n.jpg?_nc_cat=110&_nc_ht=scontent.xx&oh=e8e9a7489164cf19f1545d6b5175c7e8&oe=5D624F85)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/52991378_2114488238658816_1731886227138805760_n.jpg?_nc_cat=110&_nc_ht=scontent.xx&oh=6aee3ceaf9881d4bdfca77f58587c856&oe=5D7838D9"  alt="Lord shiva may bless all of us.!!Happy MAHA SHIVA RATRI">
                        </a>
                        <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-9/37735019_1799439466830363_6811010759208730624_o.jpg?_nc_cat=106&_nc_ht=scontent.xx&oh=8c59714cefb50472effad8007cb8dff4&oe=5D66C931" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-9/37735019_1799439466830363_6811010759208730624_o.jpg?_nc_cat=106&_nc_ht=scontent.xx&oh=8c59714cefb50472effad8007cb8dff4&oe=5D66C931)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/37820322_1799439463497030_7624804004060463104_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=8927883e4dd07266f44183c608bd21d5&oe=5D63A127"  alt="">
                        </a>
                        <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/35284222_1737900322984278_1427535717738741760_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=5354142a231846a8585bb74b2cc46439&oe=5D5742EA" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/35284222_1737900322984278_1427535717738741760_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=5354142a231846a8585bb74b2cc46439&oe=5D5742EA)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/35284222_1737900322984278_1427535717738741760_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=e5fc66fd56d64a72f7eb9482d31d510c&oe=5D543B84"  alt="Eid Mubarak">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32462587_1706217962819181_2590259656270020608_n.jpg?_nc_cat=100&_nc_ht=scontent.xx&oh=8aab342fc1e68a71d6bee4cab01b895f&oe=5D7797B7" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32462587_1706217962819181_2590259656270020608_n.jpg?_nc_cat=100&_nc_ht=scontent.xx&oh=8aab342fc1e68a71d6bee4cab01b895f&oe=5D7797B7)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32462587_1706217962819181_2590259656270020608_n.jpg?_nc_cat=100&_nc_ht=scontent.xx&oh=fb75c7881332c466c976b05528127f6d&oe=5D6B75D9"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32684937_1706217949485849_6844341131354832896_n.jpg?_nc_cat=102&_nc_ht=scontent.xx&oh=b0208cf5e081cd942006539c0b24ffc6&oe=5D69F899" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32684937_1706217949485849_6844341131354832896_n.jpg?_nc_cat=102&_nc_ht=scontent.xx&oh=b0208cf5e081cd942006539c0b24ffc6&oe=5D69F899)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32684937_1706217949485849_6844341131354832896_n.jpg?_nc_cat=102&_nc_ht=scontent.xx&oh=0556065297e68623d58bffab7508d7ba&oe=5D6CCCF7"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32738533_1706217926152518_9185939880746680320_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=afa8991fe323c8c887e8cb77bf5f5bcc&oe=5D69E0C1" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32738533_1706217926152518_9185939880746680320_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=afa8991fe323c8c887e8cb77bf5f5bcc&oe=5D69E0C1)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32738533_1706217926152518_9185939880746680320_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=797cde60474b5ecc250ce4c25e736e66&oe=5D7063AF"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32365359_1706217912819186_3047719753998139392_n.jpg?_nc_cat=105&_nc_ht=scontent.xx&oh=261bb4d2c60e62b1b09131b95636cd95&oe=5D52619C" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32365359_1706217912819186_3047719753998139392_n.jpg?_nc_cat=105&_nc_ht=scontent.xx&oh=261bb4d2c60e62b1b09131b95636cd95&oe=5D52619C)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32365359_1706217912819186_3047719753998139392_n.jpg?_nc_cat=105&_nc_ht=scontent.xx&oh=23df6e2331d7b65195dc21514b3ae88d&oe=5D6977F2"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32678982_1706217846152526_7208576494317076480_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=a4bc10a88e0df6066a1aa87e518ec63a&oe=5D6AE453" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32678982_1706217846152526_7208576494317076480_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=a4bc10a88e0df6066a1aa87e518ec63a&oe=5D6AE453)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32678982_1706217846152526_7208576494317076480_n.jpg?_nc_cat=111&_nc_ht=scontent.xx&oh=f1c76f74ae03942844317bad18ab1583&oe=5D74D13D"  alt="">
                        </a>
                        <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32559401_1706217822819195_1867300889509756928_n.jpg?_nc_cat=106&_nc_ht=scontent.xx&oh=6455de7c2c81741bbc163725359e9649&oe=5D6C6180" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32559401_1706217822819195_1867300889509756928_n.jpg?_nc_cat=106&_nc_ht=scontent.xx&oh=6455de7c2c81741bbc163725359e9649&oe=5D6C6180)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32559401_1706217822819195_1867300889509756928_n.jpg?_nc_cat=106&_nc_ht=scontent.xx&oh=1568d1a77d77cf9853be3a5c4ac12d32&oe=5D5822EE"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
                <li>
                    <figure>
                        <a  data-fancybox="gallery" href="https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32392150_1706217786152532_3944184122796146688_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=68f7d9b7c86446b328a44738ee350052&oe=5D6ABD1C" style="background-image:url(https://scontent.xx.fbcdn.net/v/t1.0-0/p600x600/32392150_1706217786152532_3944184122796146688_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=68f7d9b7c86446b328a44738ee350052&oe=5D6ABD1C)">
                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-0/p320x320/32392150_1706217786152532_3944184122796146688_n.jpg?_nc_cat=101&_nc_ht=scontent.xx&oh=08cca51205cf0feb456a3ffe4d6c192a&oe=5D59A472"  alt="">
                        </a>
                    <img src="http://globalgecc.edu.np/wp-content/themes/global/img/photo-gallery-size.png" alt="">
                    </figure>
                </li>
            </ul>

        <div class="clearfix"></div>

        <div class="text-center">
            <a href="http://globalgecc.edu.np/album" class="gecc_btn">View All</a>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="success_stories" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/success_stories.png);">
<div class="container">
<div class="success_stories_header">
    <h2 class="section_title">Success Stories</h2>
</div>
<div class="success_stories_slider">
    <ul class="owl-carousel">
        <li>
            <div class="success_stories_content">
                <p>The serene ambiance for learning and sharing in Global has let me culture my asset to the fullest as well as helped to minimize the odds. The guidance provided by outmost sincere faculty members and staffs has proven to be highly beneficial in course of my mission to achieve my goal in abroad study. I have been able to experience excellence during my course period due to dedication shown by Global for my progress and satisfaction.</p>
            </div>
            <div class="clearfix"></div>
            <div class="success_stories_fig_details">
                <figure class="flex-center">
                    <div style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/ruku-edited-65x65.png)">
                        <img src="http://globalgecc.edu.np/wp-content/themes/global/img/student-pic-size.png" alt="">
                        </div>
                        <figcaption>
                            <h4>Ruku Shrestha
                                <span>Scoring 7 in IELTS</span>
                            </h4>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li>
                <div class="success_stories_content">
                    <div class="innerWrap">
                        <div class="innerContent">
                            <p>During 1st class I was pretty confused and was unfamiliar about the IELTS contents. But as our teacher was helpful and gave proper guidance, I easily coped up it. I believe, practice and confidence are the key for securing better IELTS score.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="success_stories_fig_details">
                    <figure class="flex-center">
                        <div style="background-image:url(http://globalgecc.edu.np/wp-content/uploads/2017/12/student-pic-65x65.png)">
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/student-pic-size.png" alt="">
                            </div>
                            <figcaption>
                                <h4>Sabina Rai
                                    <span>Scoring 7 in IELTS</span>
                                </h4>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="clearfix"></div>

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
                    <form method="post" action="http://globalgecc.edu.np/?na=s" onsubmit="return newsletter_check(this)">
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

<?php

get_footer();