<?php 

include("lib/Pusher.php");

$pusher = new Pusher('0f12f4175f151876a520', '889319b2023b436cdecf', '84616');

$context = $_REQUEST['_context'];
$src = $_REQUEST['_src'];
$groupId = $_REQUEST['_groupId'];
$members = $_REQUEST['_members'];

$payload = array( 
	"members" => json_decode($members)
	);

$pusher->trigger($channel , $event , $payload);

echo '{ "status" : "send-m" }';