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

<!-- <section class="banner_slider">
    <div class="" id="particles-banner-wrapper" >
        <div id="particles-banner" style="background-image:url(http://localhost/edu/wp-content/uploads/2018/01/japan.jpg);background-size: cover;"></div>
    </div>
</section>
<div class="clearfix"></div><br> -->

<section class="banner_slider">
			<ul class="owl-carousel">
									<li class="item active" style="background-image:url(http://edu.sricnepal.org.np/wp-content/uploads/2019/05/architecture-building-castle-402028.jpg);">
					  <img src="http://globalgecc.edu.np/wp-content/themes/global/img/banner-size.png" alt="banner size">
										<h1 style="align-self: center !important;margin: 0px auto;color: #fff;">
											Study in Japan
										</h1><!--- Don't make it dynamic -->
					</li>
									<li class="item " style="background-image:url(http://edu.sricnepal.org.np/wp-content/uploads/2019/05/ancient-architecture-asia-301614.jpg);">
					  <img src="http://globalgecc.edu.np/wp-content/themes/global/img/banner-size.png" alt="banner size"> <!--- Don't make it dynamic -->
					</li>
							</ul>
	</section>
	


<?php if(is_front_page()): ?>
    <?php if (is_active_sidebar( 'lochan_template_section' ) ) : ?>
        <?php dynamic_sidebar( 'lochan_template_section' ); ?>
    <?php endif; ?>
<?php endif; ?>

<!-- <section class="test_preparation" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/test-preparation.jpg);">
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
</section> -->
															
<!-- <div class="clearfix"></div> -->
															


<!-- <section class="youtube_video" style="background-image:url(http://globalgecc.edu.np/wp-content/themes/global/img/youtube-bg.png);">
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
                Button visible in mobile device only
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div> -->
															
<!-- <section class="photo_gallery">
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
</section> -->

<!-- <div class="clearfix"></div> -->

<section class="success_stories" style="background-image:url(http://edu.sricnepal.org.np/wp-content/uploads/2019/05/depth-of-field-desk-essay-210661.jpg);">
<div class="container">
<div class="success_stories_header">
    <h2 class="section_title">Testimonials</h2>
</div>
<div class="success_stories_slider">
    <ul class="owl-carousel">
        <li>
            <div class="success_stories_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Dignissim convallis aenean et tortor at. </p>
            </div>
            <div class="clearfix"></div>
            <div class="success_stories_fig_details">
                <figure class="flex-center">
                    <div style="background-image:url(http://edu.sricnepal.org.np/wp-content/uploads/2019/05/team_2.png)">
                        <img src="http://globalgecc.edu.np/wp-content/themes/global/img/student-pic-size.png" alt="">
                        </div>
                        <figcaption>
                           <h4>Robin Soma
                                    <span>Japan Edu</span>
                                </h4>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li>
                <div class="success_stories_content">
                    <div class="innerWrap">
                        <div class="innerContent">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Dignissim convallis aenean et tortor at. </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="success_stories_fig_details">
                    <figure class="flex-center">
                        <div style="background-image:url(http://edu.sricnepal.org.np/wp-content/uploads/2019/05/team_2.png)">
                            <img src="http://globalgecc.edu.np/wp-content/themes/global/img/student-pic-size.png" alt="">
                            </div>
                            <figcaption>
                                <h4>Robin Soma
                                    <span>Japan Edu</span>
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



<?php

get_footer();