<?php 

if(isset($_POST["txt"])){
	$txt = $_POST["txt"];
	$hashs = array(
		"sha1" 	 => sha1($txt),
		"sha256" => hash("sha256", $txt),
		"md5" 	 => md5($txt),
		"origin" => $txt
	);
	
	$ans = json_encode($hashs);
	echo $ans;
}
else
	include_once($views["crypto"]);