<?php 

//	phpinfo();
		
	define("HTTP_DIR", "./");
	
	$src_links   = array(
									"conv"  	=> HTTP_DIR."resources/js/convertissor.js",
						  			"css" 		=> HTTP_DIR."resources/css/style.css",
						  			"bootstrap"	=> HTTP_DIR."resources/css/bootstrap/css/bootstrap.min.css"
// 						  			"css"		=> HTTP_DIR."resources/css/bootstrap/css/bootstrap-theme.min.css"
						  	 );
						  	 
	$musics			 = array(
										HTTP_DIR."resources/media/music/2-indoor.mp3",
										HTTP_DIR."resources/media/music/3-forest.mp3",
										HTTP_DIR."resources/media/music/test.mp3",
										HTTP_DIR."resources/media/music/futur.mp3",
										HTTP_DIR."resources/media/music/tentative hardcore.mp3",
								 );
	$imgs = array("lenna" => HTTP_DIR."resources/media/img/lenna-example.png");

              
	$views 		   = array(
						  			"conv"  => HTTP_DIR."View/convertissor.php",
						  			"crypto"=> HTTP_DIR."View/cryptographie.php",
						  			"home"  => HTTP_DIR."View/home.php",
									"publi" => HTTP_DIR."View/publications.php",
						  			"rss"   => HTTP_DIR."View/loremipsum.php",
						  			"sdl"   => HTTP_DIR."View/filtrageSDL.php",
						  			"wikay" => HTTP_DIR."View/wikay.php"
						  	 );
							 
	$controllers = array(
										"tools" => HTTP_DIR."Controller/Tools/tools.php"
								 );

	$ht_links    =  array(
							  		"conv"  => HTTP_DIR."tools.php",
									"publi" => HTTP_DIR."publications.php",
							  		"crypto"=> HTTP_DIR."tools.php",
							  		"home"	=> HTTP_DIR."index.php",
							  		"rss"   => HTTP_DIR."loremipsum.php",
							  		"sdl"   => HTTP_DIR."tools.php",
							  		"wikay" => HTTP_DIR."tools.php"
							    );
