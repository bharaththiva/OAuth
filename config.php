<?php
	session_start();

	require_once "Facebook/autoload.php";

	//Replace the app_id,app_secret with yours.
	$FB = new \Facebook\Facebook([
		'app_id' => '781002472288573',
		'app_secret' => 'babe16d8566cf9c68a6fa9fa6bb1d56b',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
