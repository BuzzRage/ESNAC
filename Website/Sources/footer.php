<!-- TODO: 
						- "About"
						- 
-->

<div class="container">
	<div id="player">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
<!-- 				<button onclick="prevSong()">&#8810; Précedente</button> -->
				<a href="#" class="btn btn-sm btn-danger" onclick="prevSong()"><span class="glyphicon glyphicon-chevron-left"></span> Précédent</a>
				<audio controls>
					<source src="<?php echo $musics[0]; ?>" type="audio/mpeg">
					Le lecteur musical ne fonctionne pas sur votre navigateur.
				</audio>
				
				<audio >
					<source src="<?php echo $musics[1]; ?>" type="audio/mpeg">
					Le lecteur musical ne fonctionne pas sur votre navigateur.
				</audio>

				<audio >
					<source src="<?php echo $musics[2]; ?>" type="audio/mpeg">
					Le lecteur musical ne fonctionne pas sur votre navigateur.
				</audio>
				
				<audio >
					<source src="<?php echo $musics[3]; ?>" type="audio/mpeg">
					Le lecteur musical ne fonctionne pas sur votre navigateur.
				</audio>
				
				<audio >
					<source src="<?php echo $musics[4]; ?>" type="audio/mpeg">
					Le lecteur musical ne fonctionne pas sur votre navigateur.
				</audio>			
<!-- 				<button onclick="nextSong()"> Suivante &#8811;</button> -->
				<a href="#" class="btn btn-sm btn-danger" onclick="nextSong()"><span class="glyphicon glyphicon-chevron-right"></span> Suivant</a>
			</div>
		</div>
	</div>
</div>	
	<script>
		function nextSong(){
			var musics = Array.from(document.getElementsByTagName("audio"));
			var ind = 0;
			musics.forEach(function(e,i){
				if(e.controls){
					e.controls = false;
					e.muted = true;
					if(i<4)
						ind = i+1;
					else
						ind = 0;
				}
			});
			musics[ind].controls = true;
			musics[ind].muted    = false;
			musics[ind].autoplay = true;
		}
		
		function prevSong(){
			var musics = Array.from(document.getElementsByTagName("audio"));
			var ind = 0;
			musics.forEach(function(e,i){
				if(e.controls){
					e.controls = false;
					e.muted = true;
					if(i>0)
						ind = i-1;
					else
						ind = 4;
				}
			});
			musics[ind].controls = true;
			musics[ind].muted    = false;
			musics[ind].autoplay = true;
		}
		
		Array.from(document.getElementsByTagName("audio")).forEach(function(e){
			e.style.background = "#111";
		});
	</script>
