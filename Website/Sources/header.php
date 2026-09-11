<div class="col-lg-1 col-lg-push-11">
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
		<?php 
			echo '	<a href="'.$ht_links["home"].'?section=home">Home</a>
				<a href="'.$ht_links["publi"].'?section=publi">Publications</a>
				<a href="'.$ht_links["rss"].'?section=rss">Flux RSS</a>
				<a href="'.$ht_links["sdl"].'?section=sdl">Filtrage SDL</a>
				<a href="'.$ht_links["conv"].'?section=conv">Convertissor</a>
				<a href="'.$ht_links["crypto"].'?section=crypto">Hashs</a>
				<a href="'.$ht_links["wikay"].'?section=wikay">Wikay</a>';
		?>
	</div>

	<div style="display:block;" align=right >
		<span id="menuButton" style="cursor:pointer" onclick="openNav()">&#9776; </span>
	</div>

	<!--<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#">Project name</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div> <!-- /.nav-collapse -->
	<!--	</div>
	</nav>-->
</div>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "25%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
