$(document).ready(function() {

//ARROW KEY NAV
	 $("section.sectionnav").keyboardScroll(
      {
        downKeyCode     : 40,   // 40 == down arrow
        upKeyCode       : 38,   // 38 == up arrow
        scrollDuration  : 500
      });

//CAROUSEL ARROW NAV
	$(document).bind('keyup', function(e) {

	  if(e.keyCode==39){
		  jQuery('a.carousel-control.right').trigger('click');
		}   
	  else if(e.keyCode==37){
		  jQuery('a.carousel-control.left').trigger('click');
		}

	});

//YOUTUBE VIDEO
	$('#youtube1').mediaelementplayer({
        features: ['playpause','progress','current','tracks','volume'],
        startLanguage: 'es',
        translations:['es','kr','jp','en'],
        translationSelector: true
	});

//MOUSEOVER KEY NAV
	$('#txt_key').delay(5000).fadeOut();

	$('#key').mouseover(function(){
		$('#txt_key').fadeIn();
	}).mouseleave(function(){
		$('#txt_key').fadeOut();
	});
	$(window).scroll(function(){
		$('#txt_key').css('display','inline').delay(1000).fadeOut();
	});

	//RESPONSIVE MENU
	$('#simple-menu').sidr({
		side: 'right'
	});
	$('.close').sidr('close', 'sidr-name');


//MENU SITE
	$('#qui_href, #qui_href2').click(function(){
		$.scrollTo('#quienes',1500,{easing:'easeOutQuad'});
	});

	$('#ded_href, #ded_href2').click(function(){
		$.scrollTo('#dedonde',1500,{easing:'easeOutQuad'});
	});

	$('#don_href, #don_href2').click(function(){
		$.scrollTo('#donde',1500,{easing:'easeOutQuad'});
	});

	$('#don_href2').click(function(){
		$.scrollTo('#donde2',1500,{easing:'easeOutQuad'});
	});


//OPENMAP
	/*$('#open_map').click(function(){
		$('.cont_map').toggle('fast', function(){
			var $anima = $('.cont_map');
			$(this).is(':visible') ? $anima.animate({bottom:'0'},500) : $anima.animate({bottom:'-500px'},500);
		});
	});*/

	/*$('.btn_open_map').click(function(){
		$('.dash_map').toggle(300, function(){
			var $anima = $('.cont_leyenda');
			$(this).is(':visible') ? $anima.delay(1000).animate({right:'0'},{duration:500, easing:'easeOutCubic'}) : $anima.delay(1000).animate({right:'-400px'},{duration:1500, easing:'easeInElastic'});
		});
	});*/


	$('.btn_open_map').click(function(){
		$('.cont_leyenda').animate({
			right:'-440px'
		});
		$('.btn_open_map').css('display','none');
		$('.btn_open_map2').css('display','block');
	});
	$('.btn_open_map2').click(function(){
		$('.cont_leyenda').animate({
			right:'0'
		});
		$('.btn_open_map2').css('display','none');
		$('.btn_open_map').css('display','block');

	});

	$('#eur').click(function(){
		$('#map_normal,#map_afr,#map_asi,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_eur').fadeIn(1000);
	});
	$('#afr').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_afr').fadeIn(1000);
	});
	$('#usa').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_sud,#map_afr').fadeOut();
		$('#map_usa').fadeIn(1000);
	});
	$('#asi').click(function(){
		$('#map_normal,#map_eur,#map_afr,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_asi').fadeIn(1000);
	});
	$('#mex').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_afr,#map_sud,#map_usa').fadeOut();
		$('#map_mex').fadeIn(1000);
	});
	$('#sud').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_afr,#map_usa').fadeOut();
		$('#map_sud').fadeIn(1000);
	});

});
/*loading*/
$(window).load(function(){

	$('.load').delay(1000).fadeOut(2000, function(){

		$('#wrap, footer').fadeIn(200, function(){
			$('#youtube1').fadeIn();
		});
	
	});
});