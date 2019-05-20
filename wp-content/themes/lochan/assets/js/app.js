/* ---- particles.js config ---- */
if($('#particles-banner').length > 0){
	loadParticlesBackground();
}

function loadParticlesBackground() {
	particlesJS("particles-banner", {
		"particles": {
			"number": {
				"value": 100,
				"density": {
					"enable": true,
					"value_area":1000
				}
			},
			"color": {
				"value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
			},

			"shape": {
				"type": "circle",
				"stroke": {
					"width": 0,
					"color": "#fff"
				},
				"polygon": {
					"nb_sides": 2
				},
				"image": {
					"src": "img/github.svg",
					"width": 100,
					"height": 100
				}
			},
			"opacity": {
				"value": 0.6,
				"random": false,
				"anim": {
					"enable": false,
					"speed": 1,
					"opacity_min": 0.1,
					"sync": false
				}
			},
			"size": {
				"value": 2,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 40,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 120,
				"color": "#ffffff",
				"opacity": 0.4,
				"width": 1
			},
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "grab"
				},
				"onclick": {
					"enable": false
				},
				"resize": true
			},
			"modes": {
				"grab": {
					"distance": 140,
					"line_linked": {
						"opacity": 1
					}
				},
				"bubble": {
					"distance": 400,
					"size": 40,
					"duration": 2,
					"opacity": 8,
					"speed": 3
				},
				"repulse": {
					"distance": 200,
					"duration": 0.4
				},
				"push": {
					"particles_nb": 4
				},
				"remove": {
					"particles_nb": 2
				}
			}
		},
		"retina_detect": true
	});
}

(function($){


    $(document).ready(function(){
        $('button#author_info_image').on("click",function( e ){

            e.preventDefault();




            var imageUploader = wp.media({

                'title' : 'Upload Author Image',
                'button'    : {
                    'text' : 'Set The Image'
                },
                'multiple' : false

            });


            imageUploader.open();


            imageUploader.on("select", function(){
                var image = imageUploader.state().get("selection").first().toJSON();

                var link = image.url;

                $("input.image_link").val( link );

                $(".image_show img").attr('src', link);

            });


        });
    });




}(jQuery))
