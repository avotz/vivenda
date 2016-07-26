(function($){
	var header = $('.header'),
		projectDetails = $('.page-projectDetails'),
	 	menu = $('.menu'),
        footerMenu = $('.footer-menu');
   
     $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            header.addClass("scrolling");
        } else {
            header.removeClass("scrolling");
        }
    });
      
     $('.projects').mixItUp();

     $('.btn-filter').on('click',function (e) {
    
        var filters = '';
        
        if($('#category').val())
            filters += '.'+ $('#category').val();
        if($('#province').val())
            filters += '.'+ $('#province').val();
        if($('#price').val())
            filters += '.'+ $('#price').val();


         if(filters)
            $('.projects').mixItUp('filter', filters);
         else
             $('.projects').mixItUp('filter', 'all');


         e.preventDefault();
     })

	  menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });
      footerMenu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });

	 projectDetails.find('dd').addClass('hidden');
	 projectDetails.find('dd:first').slideDown(200);

	 projectDetails.on('click','dt', function (e) {
		$(this)
			.next()
				.slideDown(200)
				.siblings('dd')
					.slideUp(200);
		
	});
	 /*$('.plan-item').colorbox({
	 	maxHeight: '768px'
	 });*/

	  $('#btn-menu').on('click', function(){
            $('.menu').toggle();
           
        });

	// gallery projects
	// 
	$('.plan-master a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below

        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function (openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
    $('.photos .gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

            zoom: {
                enabled: false, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function (openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });
    });
 

   $('.menu-item-47 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
   $('.adv').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

     
    
   $('.btn-video').magnificPopup({
        type: 'iframe',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

    // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function(e) {
        var href = $.attr(this, 'href');

        if (typeof($(href)) != 'undefined' && $(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                console.log($(anchor).offset().top);
                console.log(anchor);


                $root.animate({
                    scrollTop: $(anchor).offset().top-80
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion projects se va al home
           window.location.replace('/' + href);
        }
    });

})(jQuery);

