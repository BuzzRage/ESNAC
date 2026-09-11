<?php 

include_once("./Controller/constantes.php");

$lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget ultricies eros. Nam ut odio ut nisl maximus vestibulum. Maecenas non nibh a tellus iaculis luctus vulputate ac dolor. Sed vel risus blandit, euismod est in, dictum nisl. Praesent pretium efficitur tortor sit amet porttitor. Integer feugiat laoreet ullamcorper. Vivamus luctus pulvinar magna, in feugiat est euismod sed. Sed aliquam lectus a diam mattis, nec blandit lectus elementum. Curabitur et maximus sem. Donec ac rutrum est, sit amet egestas erat. Nunc ultrices felis sed risus pretium ullamcorper. Nulla eget leo nisl. Nulla feugiat ligula vel sapien tincidunt vestibulum. Phasellus sodales ullamcorper blandit. <br>
								<br>
								Suspendisse hendrerit suscipit lorem interdum porta. Cras tempus ante quis ipsum eleifend ornare. Sed mattis interdum augue, a aliquam mi blandit quis. Proin et pellentesque massa. Quisque faucibus erat ut risus gravida, eu posuere sem porta. Fusce ut dapibus sapien, et imperdiet ipsum. Curabitur nec mauris non ante ullamcorper aliquam commodo in augue. Nulla consectetur sed ligula sed commodo. Vestibulum lacus tellus, hendrerit sit amet massa a, molestie porta mauris. Curabitur tempor, quam id convallis commodo, diam ligula tempor turpis, a egestas lectus quam a augue. Nulla dolor erat, fringilla nec vulputate et, scelerisque id sapien. <br>
								<br>
								Aliquam mollis urna at laoreet consectetur. Nulla sit amet dapibus neque, sit amet feugiat turpis. Quisque euismod justo libero, ac ornare nibh tincidunt ac. Proin vel nisl lorem. Nam condimentum lectus quis leo porttitor, quis porttitor neque congue. Nullam cursus porta nulla ultricies vestibulum. Donec dictum ac ante sit amet dapibus. Mauris leo mauris, hendrerit at quam vel, dapibus pharetra ipsum. Sed aliquet lectus sit amet odio lacinia iaculis. Fusce convallis eleifend tristique. Donec ut eleifend est. Nunc turpis eros, sagittis id leo id, efficitur pulvinar nibh. Suspendisse aliquet pulvinar risus vel dapibus. Sed mollis aliquet neque, quis pellentesque urna. Praesent eget auctor enim.<br>
								<br>
								Etiam et elit laoreet, porttitor eros id, suscipit nunc. Sed ullamcorper gravida augue consectetur tempus. Phasellus id interdum odio. Aliquam vitae tristique leo, nec consectetur nisi. Curabitur eget eleifend massa. Pellentesque ornare, ipsum quis accumsan pellentesque, metus sapien convallis mi, eu egestas sem justo eget dolor. Maecenas et volutpat lacus, et feugiat orci.<br>
								<br>
								Nullam ultricies fringilla purus. Suspendisse auctor mi diam, eu faucibus ante luctus vitae. In congue nulla eget urna lacinia sollicitudin. Pellentesque ut efficitur lectus, vel maximus ante. Sed ac nunc condimentum, pellentesque lorem eget, molestie ipsum. Praesent imperdiet feugiat faucibus. Vestibulum neque dui, feugiat id erat scelerisque, rutrum bibendum nunc. Nam ex justo, ornare sed fringilla id, suscipit eu nibh. Proin mollis pulvinar lorem, ut auctor velit vehicula quis. Vestibulum et nisl ante. Nulla dapibus ex diam, at tincidunt mauris pharetra vitae. Nam tincidunt maximus neque, quis fermentum turpis dignissim sed. Nam aliquam tempor aliquet. Sed et quam quam. Proin pellentesque aliquet lacus quis tempus. Ut accumsan ex enim, sed condimentum nibh vestibulum non.<br>";
  
if(isset($_GET['section'])){
	switch($_GET['section']){		
		case 'rss':
			include_once($views["rss"]);
			break;	
		default:
			header('Location: '.$ht_links["home"]);
			break;
	}
}
else
		header('Location: '.$ht_links["home"]);

?>
