/* Custom codes */

// Mobile dropdown menu
$(function() {
$("<select />").appendTo(".nav-hover-box"); 

$("<option />", 
{ 
   "selected": "selected", 
   "value"   : "", 
   "text"    : "Site Menu" // default <option> to display in dropdown 

}).appendTo("nav select"); 

$("nav a").each(function()
{ 
 var el = $(this); 
 $("<option />", { 
	 "value"   : el.attr("href"), 
	 "text"    : el.text() 
 }).appendTo("nav select"); 
});

$("nav select").change(function() 
{ 
  window.location = $(this).find("option:selected").val(); 
}); });




	
// Tooltip
	  jQuery(document).ready(function () {
	    $("[rel=tooltip]").tooltip();
	  });

	
// Popover
	  jQuery(document).ready(function () {
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
			bottom: 800
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





// Tour
  $(window).load(function() {
	   $(this).featureTour({
	  'cookieMonster': true,           // true/false for whether cookies are used
	  'cookieName': 'myHomepageTour',  // choose your own cookie name
	  'cookieDomain': false,           // set to false or yoursite.com
	  'tipContent': '#tour_content',    // The ID of the <ol> used for content
	  'postRideCallback': $.noop,      // A method to call once the tour closes
	  'postStepCallback': $.noop,      // A method to call after each step
	  'nextOnClose': false,            // If cookies are enabled, increment the current step on close
	  'debug': false
	  });
  });

