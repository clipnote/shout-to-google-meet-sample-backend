<?php
require 'vendor/autoload.php';


header("Access-Control-Allow-Origin: *");

$app_id = getenv('APP_ID');
$app_key = getenv('APP_KEY');
$app_secret = getenv('APP_SECRET');
$app_cluster = getenv('APP_CLUSTER');

$result = ["meet_unique_id" => $_POST['meet_unique_id'], "message" => $_POST['message']];
try {
	$pusher = new Pusher\Pusher($app_key, $app_secret, $app_id, ['cluster' => $app_cluster]);
	$pusher->trigger('my-channel', 'comment_post', $result);
} catch (Expeption $e) {
	echo $e;
}
