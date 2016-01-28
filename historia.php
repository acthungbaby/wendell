<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Wendell</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/ut-responsive-grid.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


	<!-- Load jQuery
  	================================================== -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/device.min.js"></script>

</head>
<body class="bodyHistoria">
	<?php include_once 'includes/inc.header.php';?>
	
	<section id="contenedorMain">
		<div class="grid-100 tablet-grid-100 mobile-grid-100 background-historia">
			<div class="textoHeader">
				<img class="logoGrid" src="images/logobn.png" alt="logo">
				<p>
					HISTORIA
				</p>
			</div>	
		</div>
		<section id="contenido">
			<article class="evento first">
				<span class="rojo" style="padding:50px 30px;">1888</span>
				<div class="cuadrado rojo">
					<p>El Señor Dumont instala una destilería de alcoholes en una colonia de suizos, franceses y alemanes, llamada Monte Sociedad (actualmente Benjamín Aceval).</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:68px 30px;">1907</span>
				<div class="cuadrado verde">
					<p>Los Señores Quinto Censi y José Pirotta transforman a la destilería en una azucarera, convirtiéndose así en la primera empresa azucarera del país bajo el nombre de Azucarera Villa Hayes.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:68px 30px;">1907</span>
				<div class="cuadrado rojo">
					<p>Las primeras maquinarias llegan de Europa junto con los técnicos especialistas. Como no se contaba aún con el puente sobre el Río Paraguay, los equipos son transportados en varias canoas y carretas.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:50px 30px;">1933</span>
				<div class="cuadrado verde">
					<p>La azucarera pasa a llamarse Censi & Pirotta S.A. y se produce también azúcar cruda para exportación al mercado de Estados Unidos.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:68px 30px;">1950</span>
				<div class="cuadrado rojo">
					<p>En la década de los 50, Quinto Censi adquiere las acciones de su socio José Pirotta, pasando a ser único propietario. Su hija mayor, Lily Censi de Del Mónico, asume como Directora, convirtiéndose así en la primera mujer industrial de nuestro país.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:106px 30px;">1996</span>
				<div class="cuadrado verde">
					<p>Censi & Pirotta S.A. encara un proyecto ambicioso y se constituye como pionera en la producción de azúcar y melaza orgánica. Este es un negocio compartido con la firma americana Cascadian Farm. Logran introducir estos productos orgánicos a Estados Unidos, Europa y Japón, constituyéndose como la principal exportadora de estos productos en el mundo en ese momento.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:49px 30px;">1997</span>
				<div class="cuadrado rojo">
					<p>Se firma un contrato de exclusividad por tres años con la Empresa Wholesome Foods de Estados Unidos.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:49px 28px;">2003</span>
				<div class="cuadrado verde">
					<p>Censi & Pirotta S.A. es arrendada a Wendell Trading Inc., empresa del mismo grupo familiar, convirtiéndose en procesadora de azúcar y melaza convencional y orgánica.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:30px 28px;">2003</span>
				<div class="cuadrado rojo">
					<p>Se inicia una asociación estratégica con la Cooperativa Multiactiva Manduvirá Ltda.</p>
				</div>
			</article>
			<article class="evento last">
				<span class="verde" style="padding:68px 30px;">2011</span>
				<div class="cuadrado verde">
					<p>Se incorpora dentro de la programación de producción orgánica y del Fair Trade de la procesadora otra organización: la ASOCANABA (Asociación de Productores de Caña de Azúcar de Benjamín Aceval).</p>
				</div>
			</article>
		</section>
	</section>
	<?php include_once 'includes/inc.footer.php';?>
	<script>
		$(document).ready(function() {
		  var maxHeight = 0;
		  $("#cat_product_list #cat_list").each(function() {
		    if ($(this).outerHeight() > maxHeight) {
		      maxHeight = $(this).outerHeight();
		    }
		  }).height(maxHeight);
		});
	</script>
</body>
</html>