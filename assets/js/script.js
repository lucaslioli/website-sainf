$(document).ready(function(){

  var $cabecalho = $('#cabecalho');
  var $cronometro = $('#animate-cronomer');
  var $asainf = $('#animate-sainf');
  var $apoiadores = $('#animate-apoiadores');
  var $realizacao = $('#animate-realizacao');
  var $speakers = $('#animate-speakers');
  var $cronograma = $('#accordion');
  var $gallery = $('#galeria');
  
  $cabecalho.css('opacity', '0');
  $cronometro.css('opacity', '0');
  $asainf.css('opacity', '0');
  $apoiadores.css('opacity', '0');
  $realizacao.css('opacity', '0');
  $speakers.css('opacity', '0');
  $cronograma.css('opacity', '0');
  $gallery.css('opacity', '0');
 
  $cabecalho.waypoint(function(direction) {
  	if (direction == 'down' ) {
  		$cabecalho.addClass('fadeInDownBig bounceOut');	
  	}else {
  		$cabecalho.removeClass('fadeInDownBig bounceOut');	
  	}
     
  }, { offset: '75%' });

  $cronometro.waypoint(function(direction) {
  	if (direction == 'down' ) {
  		$cronometro.addClass('fadeInRight');	
  	}else {
  		$cronometro.removeClass('fadeInRight');	
  	}
     
  }, { offset: '75%' });

   $asainf.waypoint(function(direction) {
  	if (direction == 'down' ) {
  		$asainf.addClass('fadeInLeft');	
  	}else {
  		$asainf.removeClass('fadeInLeft');	
  	}
     
  }, { offset: '50%' });

  $apoiadores.waypoint(function(direction) {
  	if (direction == 'down' ) {
  		$apoiadores.addClass('fadeInRight');	
  	}else {
  		$apoiadores.removeClass('fadeInRight');	
  	}
     
  }, { offset: '50%' });

  $speakers.waypoint(function(direction) {
  	if (direction == 'down' ) {
  		$speakers.addClass('fadeInLeft');	
  	}else {
  		$speakers.removeClass('fadeInLeft');	
  	}
     
  }, { offset: '50%' });

  $cronograma.waypoint(function(direction) {
    if (direction == 'down' ) {
      $cronograma.addClass('fadeInLeft'); 
    }else {
      $cronograma.removeClass('fadeInLeft');  
    }
     
  }, { offset: '50%' });

  $gallery.waypoint(function(direction) {
    if (direction == 'down' ) {
      $gallery.addClass('fadeInRight'); 
    }else {
      $gallery.removeClass('fadeInRight');  
    }
     
  }, { offset: '75%' });

});

