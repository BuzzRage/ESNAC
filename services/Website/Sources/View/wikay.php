<?php
	$clientInfos[] = "User agent: ".$_SERVER["HTTP_USER_AGENT"];
	$clientInfos[] = "Adresse IP: ".$_SERVER["REMOTE_ADDR"];
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href=<?php echo $src_links["bootstrap"] ?> />
		<link rel="stylesheet" href=<?php echo $src_links["css"] ?> />
		<title>BuzzRage - Wikay</title>
	</head>
	<body class="container">
		<header class="row">
			<?php include_once("header.php"); ?>
			<h1>What I know about you</h1>
		</header>
		
		<section class="row" id="wikay">
			<p></p>
			<?php echo '<pre>';print_r($clientInfos); echo '</pre>'; ?>
			<p></p>
		</section>
		
		<footer class="row">
			<?php include_once("footer.php"); ?>
		</footer>
		
		<script>
			var date = new Date();
			var heure= "00h00";
			if(date.getHours() < 10){heure="0"+date.getHours();} else heure = date.getHours();
			heure += "h";
			if(date.getMinutes() < 10){heure+="0"+date.getMinutes();} else heure += date.getMinutes();
			
			document.getElementById("wikay").getElementsByTagName("p")[0].innerHTML = "Il est "+heure;
			function print_data(){
				var p2 = document.getElementById("wikay").getElementsByTagName("p")[1];
				
				var info={
					timeOpened:new Date(),
					timezone:(new Date()).getTimezoneOffset()/60,

					pageon(){return window.location.pathname},
					referrer(){return document.referrer},
					previousSites(){return history.length},

					browserName(){return navigator.appName},
					browserEngine(){return navigator.product},
					browserVersion1a(){return navigator.appVersion},
					browserVersion1b(){return navigator.userAgent},
					browserLanguage(){return navigator.language},
					browserOnline(){return navigator.onLine},
					browserPlatform(){return navigator.platform},
					javaEnabled(){return navigator.javaEnabled()},
					dataCookiesEnabled(){return navigator.cookieEnabled},
					dataCookies1(){return document.cookie},
					dataCookies2(){return decodeURIComponent(document.cookie.split(";"))},
					dataStorage(){return localStorage},

					sizeScreenW(){return screen.width},
					sizeScreenH(){return screen.height},
					sizeDocW(){return document.width},
					sizeDocH(){return document.height},
					sizeInW(){return innerWidth},
					sizeInH(){return innerHeight},
					sizeAvailW(){return screen.availWidth},
					sizeAvailH(){return screen.availHeight},
					scrColorDepth(){return screen.colorDepth},
					scrPixelDepth(){return screen.pixelDepth},


// 					latitude(){return position.coords.latitude},
// 					longitude(){return position.coords.longitude},
// 					accuracy(){return position.coords.accuracy},
// 					altitude(){return position.coords.altitude},
// 					altitudeAccuracy(){return position.coords.altitudeAccuracy},
// 					heading(){return position.coords.heading},
// 					speed(){return position.coords.speed},
// 					timestamp(){return position.timestamp},

				};
				
//  				p2.innerHTML = "Latitude: "+ info.latitude() +"<br>Longitude: "+ info.longitude();
				p2.innerHTML = "Largeur écran: " + info.sizeScreenW() + "<br>"
										 + "Hauteur écran: " + info.sizeScreenH() + "<br>"
										 + "Vous êtes sur la page " + info.pageon() + " via " + info.referrer() + "<br>"
										 + "Navigateur: " + info.browserVersion1b() + "<br>";
										 
				return info;
			}
		</script>

	</body>
</html>