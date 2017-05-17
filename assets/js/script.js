$(document).ready(function(){

  var $cabecalho = $('#cabecalho');
  var $cronometro = $('#animate-cronomer');
  var $asainf = $('#animate-sainf');
  var $apoiadores = $('#animate-apoiadores');
  var $speakers = $('#animate-speakers');
  var $cronograma = $('#animate-cronograma');
  var $panel_dia1 = $('#panel-dia1');
  var $panel_dia2 = $('#panel-dia2');
  var $panel_dia3 = $('#panel-dia3');
  var $panel_dia4 = $('#panel-dia4');

  
  $cabecalho.css('opacity', '0');
  $cronometro.css('opacity', '0');
  $asainf.css('opacity', '0');
  $apoiadores.css('opacity', '0');
  $speakers.css('opacity', '0');
 
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

    $panel_dia1.waypoint(function(direction) {
    if (direction == 'down' ) {
      $panel_dia1.addClass('fadeInLeft'); 
    }else {
      $panel_dia1.removeClass('fadeInLeft');  
    }
     
  }, { offset: '50%' });

    $panel_dia2.waypoint(function(direction) {
    if (direction == 'down' ) {
      $panel_dia2.addClass('fadeInRight'); 
    }else {
      $panel_dia2.removeClass('fadeInRight');  
    }
     
  }, { offset: '50%' });


    $panel_dia3.waypoint(function(direction) {
    if (direction == 'down' ) {
      $panel_dia3.addClass('fadeInLeft'); 
    }else {
      $panel_dia3.removeClass('fadeInLeft');  
    }
     
  }, { offset: '50%' });

    $panel_dia4.waypoint(function(direction) {
    if (direction == 'down' ) {
      $panel_dia4.addClass('fadeInRight'); 
    }else {
      $panel_dia4.removeClass('fadeInRight');  
    }
     
  }, { offset: '50%' });

});

