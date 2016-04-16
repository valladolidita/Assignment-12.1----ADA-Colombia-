jQuery(document).ready(function( $ ) {
  
 // $ Works! You can test it with next line if you like
 // console.log($);

 $("body").on("click","#thumbnail-gallery li a", function() {
 	//console.log("CLICK!");
 	//console.log($(this).attr("data-img"));
 	galleryEngine($(this).attr("data-img"));
 });

 $("#selected-image li:first-of-type a").removeClass("galleryHide").addClass("galleryShow");

 function galleryEngine(imgClicked) {

 	//console.log("galleryEngine()");
 	//console.log("Image Clicked = " + imgClicked);

 	$("#selected-image li a").each(function() {
 	//console.log("TEST!");
 	if($(this).data("img") == imgClicked) {
 	//console.log("MATCH!");

 	if (!$(this).is(".galleryShow")) {
 	$(".galleryShow").addClass("galleryHide").removeClass("galleryShow");
 	$(this).removeClass("galleryHide").addClass("galleryShow");
 	} 

 	}
 	});

 }
  
});


