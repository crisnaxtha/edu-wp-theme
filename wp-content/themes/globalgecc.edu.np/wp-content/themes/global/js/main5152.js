
$(function() {
	$('.equal_height').matchHeight();
	$('.inner_equal_height').matchHeight();
	$('.equal_height_heading').matchHeight();
	$('.equal_height_desc').matchHeight();
	
	// Css Menu
	$("#cssmenu li ul").parent().addClass("has-sub");

	//PHOTO GALLERY Slider
	$('.photo_gallery_slider .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:false,
		    margin:30,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        800:{
		            items:4
		        },
		        900:{
		            items:5
		        },
		        1000:{
		            items:6
		        }
		    }
		})
		$('.youtube_video_player .owl-carousel, .banner_slider .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:false,
		    margin:0,
				items:1,
		    responsiveClass:true
		})
		$('.success_stories_slider .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:false,
		    margin:0,
				items:1,
				nav:true,
		    responsiveClass:true

		})

		$(".about_us, .test_preparation, .success_stories").addClass("wow fadeIn");
		$(".about_us_inner, .our_services_content li, .youtube_video_player, .photo_gallery_slider li").addClass("wow zoomIn");
		$(".subscribe").addClass("wow jackInTheBox");
		$(".test_preparation_list li:nth-of-type(even), .study_abroad_countries li:nth-of-type(odd), .youtube_video_heading, .latest_blogs_list li:nth-of-type(even)").addClass("wow slideInRight");
		$(".study_abroad_content, .test_preparation_list li:nth-of-type(odd), .study_abroad_countries li:nth-of-type(even), .latest_blogs_list li:nth-of-type(odd)").addClass("wow slideInLeft");
		$(".our_services_header, .test_preparation_heading, .latest_blogs_header, .photo_gallery_header, .success_stories_header").addClass("wow slideInDown");
		$(".main_footer").addClass("wow slideInUp");
		//wow.js
		wow = new WOW({
		    boxClass: 'wow', // default
		    animateClass: 'animated', // default
		    offset: 300, // default
		    mobile: false, // default
		    live: true // default
		})
		wow.init();
	});
