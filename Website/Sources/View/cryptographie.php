<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href=<?php echo $src_links["bootstrap"] ?> />
		<link rel="stylesheet" href=<?php echo $src_links["css"] ?> />
		<title>BuzzRage - Cryptographie</title>
	</head>
	<body class="container">
		<header class="row">
			<div class="col-lg-12">
				<?php include_once("header.php"); ?>
				<h1 class="col-lg-offset-4 col-lg-6 col-lg-pull-2">Cryptographie - Fonctions de hash</h1>
			</div>
		</header>

		<div class="row"><p class="col-md-offset-3 col-md-6">Cette page permet de hasher une suite de caractère 
		au travers de divers algorithmes connus.</p></div>
		
		<section class="row" id="crypto">
			<form name="cryptoform">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-2">Texte ASCII</div>
					<div class="col-lg-8"><input name="txt" size="20" placeholder="Lorem Ipsum ..." /><input type="button" onclick="hash()" value="Let's Hash !" /></div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-2">SHA-1</div>
					<div class="col-lg-8"><input name="sha1" size="20" disabled readOnly placeholder="0646164d30b3bd0023a1e6878712eb1b9b15a1da ..." /></div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-2">SHA-256</div>
					<div class="col-lg-8"><input name="sha2" size="20" disabled readOnly placeholder="030dc1f936c3415aff3f3357163515190d347a28e758e1f717d17bae453541c9 ..." /></div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-2">MD5</div>
					<div class="col-lg-8"><input name="md5" size="20" disabled readOnly placeholder="6dbd01b4309de2c22b027eb35a3ce18b ..." /></div>
				</div>
			</form>
		</section>
		
		<footer class="row">
			<?php include_once("footer.php"); ?>
		</footer>
		
		<script>
			function hash(){
				var content = document.getElementsByTagName("input")[0].value;
				var rep = "";
				var req = new XMLHttpRequest();
				
				console.log(content);			
				req.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						rep = JSON.parse(this.responseText);
						cryptoform.sha1.value = rep.sha1;
						cryptoform.sha2.value = rep.sha256;
						cryptoform.md5.value = rep.md5;
					}
				};
				req.open("POST", "tools.php?section=crypto", true);
				req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				req.send("txt="+content);
			}
		</script>
	</body>
</html>