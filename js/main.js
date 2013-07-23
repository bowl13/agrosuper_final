$(document).ready(function() {
//LANG
	$('.cont_lang li').click(function(){
		$('.cont_lang li#eng').slideToggle();
	});
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

//UI MAPS
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

	$('#eur, #eur2').click(function(){
		$('#map_normal,#map_afr,#map_asi,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_eur').fadeIn(1000);
		
		$('#mar_cri, #mar_and').css('background-position','center bottom');
		$('#mar_cha, #mar_san, #mar_kin, #mar_sop, #mar_ssa, #mar_spo, #mar_sce').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_cri2, #mar_and2').css('background-position','center bottom');
		$('#mar_cha2, #mar_san2, #mar_kin2, #mar_sop2, #mar_ssa2, #mar_spo2, #mar_sce2').css('background-position','center top');
	});
	$('#afr, #afr2').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_afr').fadeIn(1000);
		
		$('#mar_san').css('background-position','center bottom');
		$('#mar_cri, #mar_and, #mar_cha, #mar_kin, #mar_sop, #mar_ssa, #mar_spo, #mar_sce').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_san2').css('background-position','center bottom');
		$('#mar_cri2, #mar_and2, #mar_cha2, #mar_kin2, #mar_sop2, #mar_ssa2, #mar_spo2, #mar_sce2').css('background-position','center top');
	});
	$('#usa, #usa2').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_sud,#map_afr').fadeOut();
		$('#map_usa').fadeIn(1000);
		
		$('#mar_sop, #mar_ssa').css('background-position','center bottom');
		$('#mar_cri, #mar_and, #mar_cha, #mar_san, #mar_kin, #mar_ssa, #mar_spo, #mar_sce').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_sop2, #mar_ssa2').css('background-position','center bottom');
		$('#mar_cri2, #mar_and2, #mar_cha2, #mar_san2, #mar_kin2, #mar_ssa2, #mar_spo2, #mar_sce2').css('background-position','center top');
	});
	$('#asi, #asi2').click(function(){
		$('#map_normal,#map_eur,#map_afr,#map_mex,#map_sud,#map_usa').fadeOut();
		$('#map_asi').fadeIn(1000);
		$('#mar_spo, #mar_sce').css('background-position','center bottom');
		$('#mar_cri, #mar_and, #mar_cha, #mar_san, #mar_kin, #mar_sop, #mar_ssa').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_spo2, #mar_sce2').css('background-position','center bottom');
		$('#mar_cri2, #mar_and2, #mar_cha2, #mar_san2, #mar_kin2, #mar_sop2, #mar_ssa2').css('background-position','center top');
	});
	$('#mex, #mex2').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_afr,#map_sud,#map_usa').fadeOut();
		$('#map_mex').fadeIn(1000);

		$('#mar_cha, #mar_san, #mar_kin, #mar_sop').css('background-position','center bottom');
		$('#mar_cri, #mar_and, #mar_ssa, #mar_spo, #mar_sce').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_cha2, #mar_san2, #mar_kin2, #mar_sop2').css('background-position','center bottom');
		$('#mar_cri2, #mar_and2, #mar_ssa2, #mar_spo2, #mar_sce2').css('background-position','center top');
	});
	$('#sud, #sud2').click(function(){
		$('#map_normal,#map_eur,#map_asi,#map_mex,#map_afr,#map_usa').fadeOut();
		$('#map_sud').fadeIn(1000);
		
		$('#mar_cri, #mar_and, #mar_cha, #mar_ssa, #mar_spo').css('background-position','center bottom');
		$('#mar_san, #mar_kin, #mar_sop, #mar_sce').css('background-position','center top');
//RESPONSIVE SCRIPT
		$('#mar_cri2, #mar_and2, #mar_cha2, #mar_ssa2, #mar_spo2').css('background-position','center bottom');
		$('#mar_san2, #mar_kin2, #mar_sop2, #mar_sce2').css('background-position','center top');
	});

});
//LOADING
$(window).load(function(){

	$('.load').delay(1000).fadeOut(2000, function(){

		$('#wrap, footer').fadeIn(200, function(){
			$('#youtube1').fadeIn('slow');
		});
	
	});
});