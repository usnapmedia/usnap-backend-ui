<?php
require 'flight/Flight.php';

Flight::route('/', function(){
   Flight::render('main.php', array('name' => 'Bob'));
});
Flight::route('/@page', function($page){
	$api_key = "joey1234";
	if ($page == "settings"){
		$settings = getSettings($api_key);
		$data =	$settings->response[0];
	} else if ($page == 'users'){
		$users = getUsers($api_key);
		$data =	$users->response;
	} else if ($page == 'analytics'){
		$analytics = getAnalytics($api_key);
		$data =	$analytics->counts;
	} else if ($page == 'feed'){
		$data =	getFeed($api_key);
	} else if ($page == 'campaigns'){
		$campaigns = getCampaigns($api_key);
		$data =	$campaigns->response;
	} else if ($page == 'moderate'){
		$moderate = getModeration($api_key);
		$data =	$moderate;
	} else {
		$data = '';
	}
	
   Flight::render($page.'.php', array('data' => $data));
});


Flight::start();

function getSettings($api_key){
	$json = file_get_contents('http://d.tanios.ca/usnap/api/v1/admin/settings/'.$api_key);
	$obj = json_decode($json);
	return $obj;
}

function getUsers($api_key){
	$json = file_get_contents('http://d.tanios.ca/usnap/api/v1/users');
	$obj = json_decode($json);
	return $obj;
}
function getFeed($api_key){
	$jsonLive = file_get_contents('http://d.tanios.ca/usnap/api/v1/feed/live');
	$live = json_decode($jsonLive);
	$jsonTop = file_get_contents('http://d.tanios.ca/usnap/api/v1/feed/top');
	$top = json_decode($jsonTop);
	$all = array('live'=>$live,'top'=>$top);
	return $all;
}
function getCampaigns($api_key){
	$json = file_get_contents('http://d.tanios.ca/usnap/api/v1/campaigns');
	$obj = json_decode($json);
	return $obj;
}
function getAnalytics($api_key){
	$json = file_get_contents('http://d.tanios.ca/usnap/api/v1/admin/analytics');
	$obj = json_decode($json);
	return $obj;
}
function getModeration($api_key){
	$json = file_get_contents('http://api.usnap.com/v1/admin/moderate/feed/');
	$obj = json_decode($json);
	return $obj;
}
?>


