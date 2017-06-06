<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>SAINF</title>
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">
	</head>
	<body>
		<?php 
		date_default_timezone_set('America/Sao_Paulo');
		$prazo_evento   = strtotime('06/02/2017 14:30');
		$prazo_maratona = strtotime('06/06/2017 12:30');
		$inicio_evento  = strtotime('06/06/2017 00:00');
		$agora = strtotime(date('m/d/Y H:i'));

		// Menu
		include_once('pages/menu.php');

		// Cabeçalho
		include_once('pages/head.php');

	    // A SAINF
		include_once('pages/asainf.php');

	    // Cronograma
		include_once('pages/cronograma.php');

	    // Speakers
		include_once('pages/speakers.php');

		// Inscrições
		include_once('pages/inscricoes.php');

		// Maratona
		include_once('pages/maratona.php');

		// Apoio
		include_once('pages/apoio.php');

		// Galeria
		include_once('pages/gallery.php');

		// Contato
		include_once('pages/contato.php');

		// RODAPE
		include_once('pages/footer.php'); 

		?>	
	<script src="assets/js/countDown.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/lightbox_plus_jquery.min.js">
	    /**
	     * Copyright (c) 2015 Lokesh Dhakar 
	     * Lightbox2 - The original lightbox script.
	     * by [Lokesh Dhakar](http://www.lokeshdhakar.com)
	     */
	</script>
	<script src="assets/js/countDown.js" type="text/javascript"></script>
	<!-- <script src="assets/js/jquery.min.js" type="text/javascript"></script> -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="assets/js/script.js" type="text/javascript"></script>
	</body>
</html>
