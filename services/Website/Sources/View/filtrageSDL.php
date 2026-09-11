<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href=<?php echo $src_links["bootstrap"] ?> />
		<link rel="stylesheet" href=<?php echo $src_links["css"] ?> />
		<title>BuzzRage - Filtrage d'image</title>
	</head>
	<body class="container">
		<header class="row">
			<div class="col-lg-12">
				<?php include_once("header.php"); ?>
				<h1>Filtrage d'image</h1>
			</div>
		</header>
			
		<section id="filtragesdl" class="row">
			<h2>Filtrage d'image en C en utilisant la Simple DirectMedia Layer</h2>
			
			<div class="col-lg-5">
				Ce programme utilise la SDL 2.0. Il a été réalisé sous linux et nécessite d'installer les paquets complémentaires suivants:

				<ul>
					<li>libsdl2-image-dev</li>
					<li>libsdl2-dev</li>
				</ul>
				Il permet de réaliser des opérations simples de filtrage et de traitement d'image.
			</div>
			<div class="col-lg-offset-2 col-lg-5">
				Il permet de:
<!--				<ul>
					<li>Inverser les couleurs (touche 'i')</li>
					<li>Changer la luminosité (touche 'l' + fleche haut/bas)</li>
					<li>Changer le contraste (touche 'c' + fleche haut/bas)</li>
					<li>Filtre moyenneur (floutage gaussien) (touche 'm')</li>
					<li>Détourage primaire (touche 'd')</li>
					<li>Passer en noir & blanc (touche 'n')</li>
					<li>Binariser l'image (setup des deux couleurs + touche 'b' + fleche haut/bas)</li>
					<li>Quantification n-bits (setup du nb de bits + touche 'q' + fleche haut/bas)</li>
					<li>Exporter le résultat dans un fichier nommé "save.bmp" (touche 's')</li>
				</ul>-->
				
				<dl class="dl-horizontal">
					<dt>Touche 'i'</dt>
					<dd>Inverser les couleurs</dd>
					<dt>Touche 'l' + flèches haut/bas</dt>
					<dd>Changer la luminosité</dd>
					<dt>Touche 'c' + flèches haut/bas</dt>
					<dd>Changer le contraste</dd>
					<dt>Touche 'm'</dt>
					<dd>Filtre moyenneur (floutage gaussien)</dd>
					<dt>Touche 'd'</dt>
					<dd>Détourage primaire</dd>
					<dt>Touche 'n'</dt>
					<dd>Passer en noir & blanc</dd>
					<dt>Touche 'b' + flèches haut/bas</dt>
					<dd>Binariser l'image (setup des deux couleurs)</dd>
					<dt>Touche 'q' + flèches haut/bas</dt>
					<dd>Quantification n-bits (setup du nb de bits)</dd>
					<dt>Touche 's'</dt>
					<dd>Exporter le résultat dans un fichier nommé "save.bmp"</dd>
				</dl>
			</div>
	<!--		Aperçu GitHub:<br>                                                                                                                          -->
	<!--		 <iframe src="https://www.github.com/BuzzRage/Filtrage_Image_SDL" align="middle" width="1500" height="500"  frameborder="1"> Wait ?</iframe>-->
			<div><img src=<?php echo $imgs["lenna"] ?> /></div>
			<div class="row">
				<small class="pull-right">Lien <a href="https://www.github.com/BuzzRage/Filtrage_Image_SDL"> GitHub</a></small>
			</div>
		</section>
		
		<footer>
			<?php include_once("footer.php"); ?>
		</footer>
	</body>
</html>
