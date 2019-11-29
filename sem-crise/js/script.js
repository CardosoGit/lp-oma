// Autor: João Carlos
// Empresa: OMA Informática
// Data: 04/07/2015

$(document).ready(function(){
	$( window ).scroll(function() {

	  if($(document).scrollTop() > 30){
	    $("#menuTopo").css("position","fixed");
	    $("#index,#fale-conosco,#quem-somos").css("margin-top","50px");
	  }else{
	  	$("#menuTopo").css("position","relative");
	  	$("#index,#fale-conosco,#quem-somos").css("margin-top","-20px");
	  }
	});
	
	$("#btn-login").click(function(){
		$("#form-login").slideDown("slow");
	});
	$("#btn-cadastre").click(function(){
		$("#form-cadastre").slideDown("slow");
	});

	//SCROLL MAGIC 
	// init controller
	var controller = new ScrollMagic.Controller();
	var blockTween = new TweenMax.to('#t', 1.0, {
	    left:"0", 
	    opacity:1,
	    ease:Linear.easeNone,

	});
	// create a scene
	new ScrollMagic.Scene({

	        triggerElement: '#t', // starting scene, when reaching this element
				
	    })
	    .setTween(blockTween)
	    .addTo(controller); // assign the scene to the controller
	// FINAL SCROLL MAGIC
	// $("#unlock").click(function(){
	// 	if($("#block-map").css("height") == "10px"){
	// 		$("#block-map").animate({
	// 			"height": "100%",
	// 			"opacity": "0.4"

	// 		});
	// 		$("#unlock-map").animate({
	// 			"height": "100%",

	// 		});
	// 	}
	// 	else{
	// 		$("#block-map").animate({
	// 			"height": "10px"

	// 		});
	// 		$("#unlock-map").animate({
	// 			"height": "10px"

	// 		});
	// 	}
	// });
	
	
});

// INICIALIZA TOOLTIP

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});



