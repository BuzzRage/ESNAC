<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href=<?php echo $src_links["bootstrap"] ?> />
		<link rel="stylesheet" href=<?php echo $src_links["css"] ?> />
		<title>BuzzRage - Flux RSS</title>
	</head>
	
	<body class="container-fluid">
		<header class="row">
			<div class="col-lg-12">
				<?php include_once("header.php"); ?>
				<h1>Flux RSS</h1>
			</div>
		</header>
			
		<section class="row">
			<div class="col-lg-offset-3 col-lg-6" id="RssFeed"><?php echo $lorem_ipsum ?></div>
		</section>
		
		<section class="row">
			<div class="col-lg-offset-4 col-lg-4"><iframe width="560" height="315" src="https://www.laquadrature.net/feed/"></iframe></div>
		</section>		
		
		<footer class="row">
			<?php include_once("footer.php"); ?>
		</footer>
		
		<script>
			function getRSS(){
				var rep = "";
				var req = new XMLHttpRequest();
				
				req.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						rep = this.responseText;
						document.getElementById("RssFeed").innerHTML = rep;
					}
				};
				req.open("GET", "https://www.laquadrature.net/feed/", true);
// 				req.setRequestHeader("Content-Type", "application/rss+xml; charset=UTF-8");
				req.setRequestHeader("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8");
				req.send();
			}
		</script>
		
	</body>
</html>