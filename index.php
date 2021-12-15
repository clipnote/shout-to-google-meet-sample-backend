<?php
require 'vendor/autoload.php';


header("Access-Control-Allow-Origin: *");

$app_id = '';
$app_key = '';
$app_secret = '';
$app_cluster = '';

$result = ["meet_unique_id" => $_POST['meet_unique_id'], "message" => $_POST['message']];
try {
	$pusher = new Pusher\Pusher($app_key, $app_secret, $app_id, ['cluster' => $app_cluster]);
	$pusher->trigger('my-channel', 'comment_post', $result);
} catch (Expeption $e) {
	return $e;
}

echo $result;