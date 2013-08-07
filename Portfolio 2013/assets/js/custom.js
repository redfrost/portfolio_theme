/* Custom codes */

// Preloader - Hide content until the page is fully loaded
jQuery(document).ready(function() {
    $(window).load(function() {
      // When the page has loaded
        $("#preloader").fadeOut(); // fade out preloader   
        $("#master-frame").fadeTo("slow", 1); // fade in content
	});
});


	
// Tooltip & Popover
	  jQuery(document).ready(function () {
	    $("[rel=tooltip]").tooltip();
	    $("[rel=popover]").popover();
	  });



// Carousel	
		jQuery(document).ready(function() {
			 $('#myCarousel-auto').carousel({
				   interval: 5000,
					  cycle: true
			 });
		});
		var $ = jQuery.noConflict();


//Fixed Submenu
		$(function(){
		$('.subnav').affix({
			offset: {
			top: 45, 
			bottom: 900
				}
			})
		});




// Javascript to enable link to tab
    var url = document.location.toString();
    if (url.match('#')) {
        $('.portfolio_menu a[href=#'+url.split('#')[1]+']').tab('show') ;
    } 


// Change hash for page-reload
    $('.portfolio_menu a').on('shown', function (e) {
        window.location.hash = e.target.hash;
    })

