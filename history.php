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
	<?php include_once 'includes/inc.headeren.php';?>
	
	<section id="contenedorMain">
		<div class="grid-100 tablet-grid-100 mobile-grid-100 background-historia">
			<div class="textoHeader">
				<img class="logoGrid" src="images/logobn.png" alt="logo">
				<p>
					HISTORY
				</p>
			</div>	
		</div>
		<section id="contenido">
			<article class="evento first">
				<span class="rojo" style="padding:50px 30px;">1888</span>
				<div class="cuadrado rojo">
					<p>Mr. Dumont establishes al alcohol distillery in a colony founded by Swiss, French and German immigrants, named Monte Sociedad (currently Benjamin Aceval).</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:50px 30px;">1907</span>
				<div class="cuadrado verde">
					<p>Mr. Quinto Censi and Mr. José Pirotta, transform the distillery into a sugar mill, thus becoming the first sugar mill in the country, with the name: Villa Hayes Sugar Mill.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:68px 30px;">1907</span>
				<div class="cuadrado rojo">
					<p>The first machines arrive from Europe, along with their technicians. Since the bridge over the Paraguay River was yet to be built, the machinery was transported in canoes and wagons.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:50px 30px;">1933</span>
				<div class="cuadrado verde">
					<p>The sugar mill is renamed Censi y Pirotta S.A. and expands its production to include raw sugar for export to the United States.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:68px 30px;">1950</span>
				<div class="cuadrado rojo">
					<p>In the 1950’s, Quinto Censi acquires his partner’s, José Pirotta, stocks, becoming the sole owner of the company. His eldest daughter, Lily Censi de Del Mónico, assumes the position of Director, becoming the first female industrial leader in Paraguay.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:106px 30px;">1996</span>
				<div class="cuadrado verde">
					<p>Censi & Pirotta S.A. embarks on an ambitious project to become the pioneer organic sugar and molasses producer in the country. The business venture is shared with the American company Cascadian Farm. They manage to introduce these organic products in the US, Europe and Japan, thus turning into the main exporter of such products in the world at the time.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:49px 30px;">1997</span>
				<div class="cuadrado rojo">
					<p>A three-year exclusivity contract is signed with the American company Wholesome Foods.</p>
				</div>
			</article>
			<article class="evento">
				<span class="verde" style="padding:68px 28px;">2003</span>
				<div class="cuadrado verde">
					<p>Censi y Pirotta S.A. is leased to Wendell Trading Inc., a company within the same family group, and completes the process to become a conventional and organic sugar and molasses producer.</p>
				</div>
			</article>
			<article class="evento">
				<span class="rojo" style="padding:30px 28px;">2003</span>
				<div class="cuadrado rojo">
					<p>A strategic association is signed with Cooperativa Multiactiva Manduvirá Ltda. </p>
				</div>
			</article>
			<article class="evento last">
				<span class="verde" style="padding:50px 30px;">2011</span>
				<div class="cuadrado verde">
					<p> Another association, ASOCANABA (Benjamin Aceval Sugar Cane Producers’ Association) is incorporated into the organic and Fair Trade production program.</p>
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