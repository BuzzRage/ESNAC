<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href=<?php echo $src_links["bootstrap"] ?> />
		<link rel="stylesheet" href=<?php echo $src_links["css"] ?> />
		<title>BuzzRage - Convertissor</title>
		<style>
			body {
				padding-top: 10px;
			}
			[class*="col-"], footer {
				background-color: black;
				border: 1px solid white;
				border-radius: 12px;
				line-height: 40px;
				text-align: center;
			}
		</style>  
	</head>
	<body class="container">
		<header class="row">
			<div class="col-lg-12">
				<?php include_once("header.php"); ?>
				<h1 class="col-lg-offset-4 col-lg-6 col-lg-pull-2">Convertion numérique</h1>
			</div>
		</header>
		
		<section class="row" id="convertissor">
			<form name="convform">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10">Texte ASCII
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8"><textarea name="txt" rows="3" cols="60" tabindex="1" class="input" placeholder="Lorem ipsum ..." oninput="convertASCII()" ></textarea></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10">Hexadécimal
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8"><textarea name="hex" rows="3" cols="60" class="input" tabindex="2" placeholder="77 68 79 ..." oninput="convertHex()"></textarea></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10">Binaire
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8"><textarea name="bin" rows="3" cols="60" class="input" tabindex="3" placeholder="01110111 01101000 01111001 ..." oninput="convertBinary()"></textarea></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10">Décimale
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8"><textarea name="dec" rows="3" cols="60" class="input" tabindex="4" placeholder="119 104 121 ..." oninput="convertDecimal()"></textarea></div>
						</div>
					</div>
				</div>
				
	<!--  Base64
				<textarea name="base64" rows="3" cols="60" class="input" tabindex="5" placeholder="d2h5 ..." oninput="convertBase64()"></textarea>
				Length
				<input name="len" class="outtext" readonly="" type="text"> chars/bytes
				Checksum
				
					<select id="csbits" name="csbits" onchange="updateChecksum()">
						<option>8-bit</option>
						<option>16-bit</option>
						<option>32-bit</option>
					</select>
					<select id="cstype" name="cstype" onchange="updateChecksum()">
						<option>Sum</option>
						<option>2's complement</option>
						<option>Xor</option>
					</select>
					<input id="sum" name="sum" class="outtext" readonly="" type="text">-->
			</form>
		</section>
		
		<footer class="row">
			<?php include_once("footer.php"); ?>
		</footer>
		
		<script src="<?php echo $src_links["conv"]; ?>"></script>
	</body>
</html>